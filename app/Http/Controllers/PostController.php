<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Input;
use Avatar;
use App\Custom\CustomHtmlParser;
use Image;
class PostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    public function index()
    {  
        $posts = Post::with('upvoters','downvoters','user')->latest()->paginate(20);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create(Request $request)
    {     
        return view('posts.create');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
   
    public function store(Request $request)
    {

        
        $minDesc = 5;
        $validator = $this->validate($request,[
            'title' => 'required|min:2|bail', 
            'description' =>  function($attribute, $value, $fail) use ($minDesc) {
                               if(strlen(strip_tags($value)) < $minDesc){
                                    return $fail('Post content must be greater than '.$minDesc);
                                }
                            },  
            'category' => 'required|exists:categories,id',
            'tags' => 'required'      
                                   
        ]);

         $post = new Post();
         $post->title= $request->title;
         $post->user_id = auth()->id();
         $post->category_id = $request->category;
         $post->description =$request->description;
         $post->tags = $request->tags;
         
         $isSave = $post->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $post=Post::with("comments")->where('slug', $post)->firstOrFail();
        $post->increment('visitors',1);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('update', $post);
        
    }

    public function refreshDB()
    {
       
        \DB::table('posts')->delete();
        $max = \DB::table('posts')->max('id') + 1; 
        \DB::statement("ALTER TABLE users AUTO_INCREMENT =  $max");
    }


    /**
     * Upload Images on wysiwyg
     * @param  \Illuminate\Http\Request  $request
     * @return String Response for ckeditor
    */
   
    public function uploadImage(Request $request){
        
        ini_set('memory_limit','256M');

        $CKEditor = $request->input('CKEditor');
        $funcNum  = $request->input('CKEditorFuncNum');
        $message  = $url = '';
        if (Input::hasFile('upload')) {
            $file = Input::file('upload');
            if ($file->isValid()) {
                $filename =rand(1000,9999).$file->getClientOriginalName();
                Image::make(Input::file('upload'))->resize(300, 200)->save(public_path().'/wysiwyg/'.$filename);

                $url = url('wysiwyg/' . $filename);
            } else {
                $message = 'An error occurred while uploading the file.';
            
            }
        } else {
            $message = 'No file uploaded.';
        }
        return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
    }
}
