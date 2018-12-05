@extends('layouts.main')
@section('css')

<style>
#main {
  background-color:  #dae0e6 !important;
  border-color: #dae0e6 !important;
overflow: hidden !important;
}
.page-wrapper{
  background-color:  #dae0e6 !important;
}
.tab-wrap {
transition: 0.3s box-shadow ease;
border-radius: 6px;
max-width: 100%;
display: flex;
flex-wrap: wrap;
position: relative;
list-style: none;
background-color: #fff;
margin: 40px 0;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}
.tab {
display: none;
}
.tab:checked:nth-of-type(1) ~ .tab__content:nth-of-type(1) {
opacity: 1;
transition: 0.5s opacity ease-in, 0.8s transform ease;
position: relative;
top: 0;
z-index: 100;
transform: translateY(0px);
text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(2) ~ .tab__content:nth-of-type(2) {
opacity: 1;
transition: 0.5s opacity ease-in, 0.8s transform ease;
position: relative;
top: 0;
z-index: 100;
transform: translateY(0px);
text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(3) ~ .tab__content:nth-of-type(3) {
opacity: 1;
transition: 0.5s opacity ease-in, 0.8s transform ease;
position: relative;
top: 0;
z-index: 100;
transform: translateY(0px);
text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(4) ~ .tab__content:nth-of-type(4) {
opacity: 1;
transition: 0.5s opacity ease-in, 0.8s transform ease;
position: relative;
top: 0;
z-index: 100;
transform: translateY(0px);
text-shadow: 0 0 0;
}
.tab:checked:nth-of-type(5) ~ .tab__content:nth-of-type(5) {
opacity: 1;
transition: 0.5s opacity ease-in, 0.8s transform ease;
position: relative;
top: 0;
z-index: 100;
transform: translateY(0px);
text-shadow: 0 0 0;
}
.tab:first-of-type:not(:last-of-type) + label {
border-top-right-radius: 0;
border-bottom-right-radius: 0;
}
.tab:not(:first-of-type):not(:last-of-type) + label {
border-radius: 0;
}
.tab:last-of-type:not(:first-of-type) + label {
border-top-left-radius: 0;
border-bottom-left-radius: 0;
}
.tab:checked + label {
background-color: #fff;
box-shadow: 0 -1px 0 #fff inset;
cursor: default;
border-bottom:2px solid blue;
color:blue;
}
.tab:checked + label:hover {
box-shadow: 0 -1px 0 #fff inset;
background-color: #fff;
}
.tab + label {
box-shadow: 0 -1px 0 #eee inset;
border-radius: 6px 6px 0 0;
cursor: pointer;
display: block;
text-decoration: none;
color: #333;
flex-grow: 3;
text-align: center;
background-color: #f2f2f2;
user-select: none;
text-align: center;
transition: 0.3s background-color ease, 0.3s box-shadow ease;
height: 50px;
box-sizing: border-box;
padding: 15px;
}
.tab + label:hover {
background-color: #eee;
box-shadow: 0 1px 0 #f4f4f4 inset;
}
.tab__content {
padding: 10px 25px;
background-color: transparent;
position: absolute;
width: 100%;
z-index: -1;
opacity: 0;
left: 0;
transform: translateY(-3px);
border-radius: 6px;
}
/* boring stuff */
h1, h2 {
margin: 0;
color: #444;
text-align: center;
font-weight: 400;
}
h2 {
font-size: 1em;
margin-bottom: 30px;
}
h3 {
font-weight: 400;
}
p {
line-height: 1.6;
margin-bottom: 20px;
}
input.form-control:focus{
  border:1px solid black;
  box-shadow: none !important;
}
.reddish{
background-color: rgb(186, 77, 89); background-image: linear-gradient(135deg, rgb(186, 77, 89) 0%, rgb(236, 28, 36) 100%);
}
.error{
margin: 25px;
line-height: 55px;
color: #ff0000;
display:none;
}
#uploader {position:relative; overflow:hidden; width:100%; height:350px; background:transparent; border:2px dashed #e8e8e8;cursor:pointer;padding:5px;color:#555;font-family:'Segoe UI';font-weight:bold;}
#uploader > label{
position: absolute;
z-index: 5;
opacity: 0.8;
cursor: pointer;
background-color: #bdc3c7;
width: 300px;
height: 50px;
font-size: 16px;
line-height: 50px;
text-transform: uppercase;
top: 0;
left: 0;
right: 0;
bottom: 0;
margin: auto;
text-align: center;
}
#uploader:hover{color:#999;}
#filePhoto{
display:none;
}
#preview-img{
position:relative;
width:100%;
height: 350px;
top:-1px;
left:-1px;
z-index:-1;
border:none;
}
</style>
@endsection
@section('content')
<div class="container">
  
  <form method="POST" action="{{action('PostController@store')}}">
    @csrf
    <div class="tab-wrap">
      <!-- active tab on page load gets checked attribute -->
      <input type="radio" id="tab1" name="post" class="tab" checked>
      <label for="tab1">Post</label>
      <input type="radio" id="tab2" name="post" class="tab" >
      <label for="tab2">Image/Gif</label>
      

      <div class="tab__content" style="display: inline-block;">
        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{old('title')}}">
        <span class="error title-error"></span>
        <br>
        <textarea name="description" id="description">{{old('description')}}</textarea>
        <span class="error desc-error"></span>
        <hr>
        <div class="container">
          
          <div class="row">
            <div class="col-4 col-xs-12 offset-md-8">
              <button type="submit" class="btn" id="post-btn">Post</button>
            </div>
          </div>
        </div>
      </div>

      <div class="tab__content">
        <input type="text" name="title" id="gifTitle" class="form-control" placeholder="Title" value="{{old('title')}}">
        <span class="error title-error"></span>
        <br>
        
        <div id="uploader" onclick="$('#filePhoto').click()">
          <label>Drag and Drop Or Choose File</label>
          <div id="preview-img"></div>
        </div>
        <input type="file" name="userprofile_picture"  id="filePhoto" />
        <hr>
        <div class="container">
          
          <div class="row">
            <div class="col-4 col-xs-12 offset-md-8">
              <button type="submit" class="btn">Post</button>
            </div>
          </div>
        </div>
      </div>

      

    </div>
  </div>
  @endsection
  @section('footer')
  <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('meme/spectrum.js')}}"></script>
  <script type="text/javascript" src="{{asset('meme/jquery.memegenerator.min.js')}}"></script>
  <script>
  $(function(){

  var imageLoader = document.getElementById('filePhoto');

  imageLoader.addEventListener('change', handleImage, false);

  function handleImage(e) {

    var reader = new FileReader();
    reader.onload = function (event) {
      $('#preview-img').css('background-image','url("'+event.target.result+'")');
      $("#preview-img").css({
      "background-size":"cover" ,
      "background-position":"center center"
      });
    }
    reader.readAsDataURL(e.target.files[0]);
  }

  var dropbox;
  dropbox = document.getElementById("uploader");
  dropbox.addEventListener("dragenter", dragenter, false);
  dropbox.addEventListener("dragover", dragover, false);
  dropbox.addEventListener("drop", drop, false);
  function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
  }
  function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
  }
  function drop(e) {
  e.stopPropagation();
  e.preventDefault();
  var dt = e.dataTransfer;
  var files = dt.files;
  
  //this code line fires your 'handleImage' function (imageLoader change event)
  imageLoader.files = files;
  }


  $("#example-save").memeGenerator({
  
  });
  
  $("#save").click(function(e){
  e.preventDefault();
  
  var imageDataUrl = $("#example-save").memeGenerator("save");
  
  $.ajax({
  url: "http://127.0.0.1:8000/save-img",
  type: "POST",
  data: {image: imageDataUrl},
  dataType: "json",
  success: function(response){
  $("#preview").html(
  $("<img>").attr("src", response.filename)
  );
  },
  error: function(){
  alert('This demo uses communication with the server which is not implemented here.');
  }
  });
  });
  
  $("#download").click(function(e){
  e.preventDefault();
  
  $("#example-save").memeGenerator("download");
  });
  $("#serialize").click(function(e){
  $("#preview").html($("#example-save").memeGenerator("serialize"));
  });
  $.ajaxSetup({
  headers: {
  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
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




  
  $("#post-btn").click(function(e){
  e.preventDefault();
  var description = CKEDITOR.instances.description.getData();
  var title = $("#title").val();
  $.ajax({
  type:'POST',
  url:'/post/store',
  data:{ title: title, description : description, postType: '1' },
  context: this,
  success:function(data){
  alert("success");
  } ,
  error: function(xhr, status, data){
  var descError = xhr.responseJSON.errors.description;
  var titleError = xhr.responseJSON.errors.title;
  
  if (typeof titleError !== "undefined") {
  $(".title-error").html(titleError).show();
  }
  if (typeof descError !== "undefined") {
  $(".desc-error").html(descError).show();
  }
  }
  });
  });
  
  });
  </script>
  @endsection