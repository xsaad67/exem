@extends('layouts.main')
@section('title','Edit post '.$post->title)
@section('css')
<style>
  #page-wrapper {
  background: #9CECFB;
  background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
  background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
}

#main{
    background: #9CECFB;
    background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
    background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
}

.card-post {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-post .card-body {
  padding: 2rem;
}

input.form-control{
  border: 1px solid #ccc !important;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #ccc !important;
  box-shadow: none;
}

</style>

<link rel="stylesheet" type="text/css" href="{{asset('css/tagsinput.css')}}">
@endsection 

@section('content')

<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-post my-5">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Edit Post # {{$post->title}}</h5>

            <form  id="postForm" method="POST" action="{{action('PostController@update',$post->id)}}" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <input type="text" id="title" name="title" value="{{old('title',$post->title)}}" class="form-control" placeholder="Post Title" autofocus>

                    @if($errors->has('title'))
                      <div class="text-danger mt-2 ml-2">
                        <strong class="">{{$errors->first('title')}}</strong>
                      </div>
                    @endif

                </div>
                <div class="row">

                  <div class="col-sm-6 col-lg-6 col-md-6">

                      <div class="form-group">

                          <select class="form-control" name="category">
                              <option value="">Please select a category</option>
                              @foreach(App\Category::all() as $cat)
                                <option value="{{$cat->id}}" {{ (old("category",$post->category_id) == $cat->id ? "selected":"") }}>{{$cat->name}}</option>
                              @endforeach
                          </select>

                          @if($errors->has('category'))
                            <div class="text-danger mt-2 ml-2">
                              <strong class="">{{$errors->first('category')}}</strong>
                            </div>
                          @endif
                      </div>
                      
                  </div>

                  <div class="col-sm-6 col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" value="{{old('tags',$post->tags)}}" name="tags" class="form-control" data-role="tagsinput" />
                          
                        @if($errors->has('tags'))
                          <div class="text-danger mt-2 ml-2">
                            <strong class="">{{$errors->first('tags')}}</strong>
                          </div>
                        @endif

                    </div>
                  </div>

                </div>
               

                <div class="form-group">
                    <textarea name="description" class="form-control" id="description">{!! old('description',$post->description) !!}</textarea>

                    @if($errors->has('description'))
                      <div class="text-danger mt-2 ml-2">
                        <strong class="">{{$errors->first('description')}}</strong>
                      </div>
                    @endif
                </div>

                <hr>

                <div class="row">
                  <div class="col-12">
                    <div class="float-right">
                      <button type="submit" class="form-control">Update</button>
                    </div>
                  </div>
                </div>
            
            </form>

          </div>
        </div>
      </div>
    </div>
</div>

@endsection

 @section('footer')

<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tagsinput.js')}}"></script>
<script type="text/javascript">
$(function(){ 

  $('#postForm').on('keyup keypress', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      return false;
    }
  });

    CKEDITOR.replace('description', {
    customConfig : 'config.js' ,
    filebrowserUploadUrl: '{{ route('upload-image',['_token' => csrf_token() ]) }}',
    removePlugins : 'elementspath',
        on: {
              instanceReady: function() {
                  this.dataProcessor.htmlFilter.addRules( {
                      elements: {
                          img: function( el ) {
                              // Add an attribute.
                              if ( !el.attributes.alt )
                                  el.attributes.alt = 'An image';
                              // Add some class.
                              el.addClass( 'newsleft' );
                          }
                      }
                  } );            
              }
          }
      });

});
</script>

@endsection