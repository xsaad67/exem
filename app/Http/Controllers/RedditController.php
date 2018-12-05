<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedditController extends Controller
{
    public function index(){
    	$soruceUrl = "https://www.reddit.com/r/reactiongifs/top.json";
    	$JSON = file_get_contents($soruceUrl);

    	$data = json_decode($JSON);
    	  // dd($data);
    	foreach($data->data->children as $k=>$d){
    		echo $d->data->thumbnail. ' -'. $k;
    		echo "<br>";
    	}
    }
}
