<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Goutte;
use Image;


ini_set('max_execution_time', 480);

class CrawlController extends Controller
{



    public function randomUsers(){

        //Get User Info first and put them into session array
    	$array  = [];
    	$html = "https://randomuser.me/api/?results=40&inc=name,gender,nat,picture,email&nat=us,gb";
    	$json = json_decode(file_get_contents($html));

    	foreach($json->results as $key=>$row){

    		$array[] = [
    					"name" => $row->name->first . " " .$row->name->last,
    					"email" => $row->email,
    					"avatar" => $row->picture->medium
        			];
    	}

        //Putting data into session array
    	session()->put("users",$array);


        //Save stored session into user table
    	foreach(session()->get('users') as $key=>$row){

            
            $user = new User();
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->avatar = $fileName;
            $user->password = bcrypt("secret");
            $fileName = FileFromExternalUrl($row['avatar'],'avatar');
    	 	$folderName = "img/avatars/";
    	 	$image = file_get_contents($row['avatar']);

			file_put_contents(public_path($folderName.$fileName), $image);
    	    $user->save();
    	 }
    
    }



    public function randomBio(){
        $url = "https://shortstatusquotes.com/facebook-bio-status-quotes-about-me/";
        $crawler = Goutte::request('GET', $url);
        $crawler->filter('p.sq')->each(function ($node) {
            dump($node->text());
        });
    }


    public function reddit(){

        $topUrl = "http://reddit.com/r/creepy.json?limit=50";
        $new = "https://www.reddit.com/r/creepy/new.json?sort=new";
        $newSortLimit = "https://www.reddit.com/r/creepy/new.json?sort=new&limit=60";


        $link = "https://www.reddit.com/r/story.json?limit=5";
        $json = json_decode(file_get_contents($link));
        

        foreach ($json->data->children as $child) {
            echo $child->data->title;
            echo "<br>";
            echo $child->data->selftext_html;
            echo "<br>";
            echo $child->data->url;
            echo "<br>";
        }

    
}
   

/**
* The "fml" method of crawl controller return scrapped data of fmylife.com.
*
* Category param will scraped the data with desired category
* Page param used for pagination
* direct_url used for scraping direct data
* 
* If no category provided this script will scrape all data and attesed them to random category ids
* 
* @return void
*/

public function fml(){

    $requestedCategory = request('category');
    $pageProceed = is_null(request('page')) ? 1 :  request('page');


    $randFlag = is_null($requestedCategory) ? TRUE : FALSE;
    $construct_url ="";
    $category_id="";

    if(!$randFlag){

        $construct_url = is_null($requestedCategory) ? "" : "search/".$requestedCategory;
        $category = Category::where('name','LIKE',"%".$requestedCategory."%")->first();
      
        if(is_null($category)){
            return "Category doesn't exist ".$requestedCategory;
        }else{
           
            $category_id = $category->id;
            echo $category_id;
        }

    }

    
    $url = is_null(request('direct_url')) ? "https://www.fmylife.com/".$construct_url."?page=".$pageProceed : request('direct_url');

    echo $url;

    // dd($randFlag);

    $crawler = Goutte::request('GET', $url);

    $crawler->filter('div.panel-content > p.block > a')->each(function ($node) use ($randFlag,$category_id){

        $description = str_replace("\n","",$node->text());
        if(!str_contains($description,'...') && strlen($description)>40){

            $post = Post::firstOrNew( ['source'=>"https://www.fmylife.com".$node->attr('href')] );
            $post->title=truncateString($description,50);
            $post->category_id= ($randFlag == TRUE) ? rand(1,Category::count()) : $category_id;
            $post->description=$description;
            $post->website = 'fmylife.com';
            $post->user_id = rand(1,8);
            $post->visitors = rand(100,300);
            $post->fakeUpVotes = rand(20,50);
            $post->fakeDownVotes = rand(0,10);
            $post->save();
        }

    });
}



public function crawl_9gag(Request $request)
{


    $requestedCategory = $request->category;

    $randFlag = is_null($requestedCategory) ? TRUE : FALSE;
    $construct_url ="";
    $category_id="";

    if(!$randFlag){

        $construct_url = is_null($requestedCategory) ? "" : "search-posts?query=".$requestedCategory;
        $category = Category::where('name','LIKE',"%".strtolower(trim($requestedCategory))."%")->first();
      
        if(is_null($category)){
            return "Category doesn't exist ".$requestedCategory;
        }else{
            $category_id = $category->id;
        }

    }


    $url = ($randFlag == true) ? "https://9gag.com/v1/group-posts/group/default/type/hot?after=&c=30" : "https://9gag.com/v1/search-posts?query=".$requestedCategory."&c=20";
    
    dump($url);
    $json = json_decode(file_get_contents($url));
 

    foreach($json->data->posts as $data){

        if(strtolower($data->type) == strtolower("photo")){

            $post = Post::firstOrNew(['source'=>$data->url] );

            $post->title = str_limit($data->title, $limit = 180, $end="...");
            $post->link = $data->url;
            $post->category_id= ($randFlag == TRUE) ? rand(1,Category::count()) : $category_id;

            $url = $data->images->image700->url;

            $fileName = FileFromExternalUrl($url,'img');
            $folderName = "images/";
            $image = file_get_contents($url);
            file_put_contents(public_path($folderName.$fileName), $image);
            $fileName = asset('images/'.$fileName);
            $post->description = "<img src='".$fileName."' class='newsleft'>";

            $post->website = '9gag.com';
            $post->user_id = rand(1,8);
            $post->visitors = rand(100,300);
            $post->fakeUpVotes = rand(20,50);
            $post->fakeDownVotes = rand(0,10);
            $post->save();
        }

    }

}

public function short_stories(){
    $url = "https://www.short-story.me/stories/general-stories";
    
    $crawler = Goutte::request('GET', $url);
    $urls = array();
    $crawler->filter('td[headers="categorylist_header_title"] > a')->each(function($node) use (&$urls){
        $urls[] = "https://www.short-story.me".$node->attr("href");
    });

    foreach($urls as $url){
        $crawler = Goutte::request('GET',$url);
        $title = trim(preg_replace('/(\v|\s)+/', ' ', $crawler->filter('h1')->first()->text()));
        $description = $crawler->filter('div[itemprop="articleBody"]')->first()->text();

        $post = Post::firstOrNew( ['source'=>$url] );
        $post->title=$title;
        $post->category_id= rand(1,Category::count());
        $post->description=$description;
        $post->website = 'short-story.me';
        $post->user_id = rand(9,20);
        $post->visitors = rand(100,300);
        $post->fakeUpVotes = rand(20,50);
        $post->fakeDownVotes = rand(0,10);
        $post->save();

    }
}




// public function american(){
//     $url = "https://americanliterature.com/100-great-poems";
//     $crawler = Goutte:::request('GET',$url);
    
// }


}
