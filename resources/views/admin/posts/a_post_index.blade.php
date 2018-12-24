@extends('admin.layouts.a_main')

@section('css')

@endsection

@section('content')
  <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <!-- .breadcrumb -->
                <nav aria-label="breadcrumb">
                  
                </nav><!-- /.breadcrumb -->
                <!-- floating action -->
                <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
                <!-- title and toolbar -->
                <div class="d-md-flex align-items-md-start">
                  <h1 class="page-title mr-sm-auto"> All Posts </h1><!-- .btn-toolbar -->

                   <div class="btn-toolbar">
                    <a href="{{url('/post/create')}}" target="_blank">
                      <button type="button" class="btn btn-light"><i class="oi oi-graph"></i> 
                        <span class="ml-1">Create Post</span>
                      </button>
                    </a>
                   
                  </div><!-- /.btn-toolbar -->
                 
                </div><!-- /title and toolbar -->


                  @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{session('success')}}
                    </div>
                  @endif

              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .card -->
                <section class="card card-fluid">
                  <!-- .card-header -->
                  <header class="card-header">
                    <!-- .nav-tabs -->
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#tab1">All</a>
                      </li>
                     
                    </ul><!-- /.nav-tabs -->
                  </header><!-- /.card-header -->
                  <!-- .card-body -->
                  <div class="card-body">
                    
                    <!-- .table-responsive -->
                    <div class="text-muted"> Showing {{$posts->firstItem()}} to {{$posts->lastItem()}} of Total Posts {{ $posts->total() }}</div>
                    <div class="table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                          
                            <th>Title</th>
                            <th>Posted By</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Genuine Post</th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->
                        <tbody>

                          @foreach($posts as $post)
                            <!-- tr -->
                            <tr>
                              
                              <td class="align-middle"> <a href="{{$post->link}}">{{$post->title}} </a></td>
                              <td class="align-middle">{{ucwords($post->user->name)}}</td>
                              <td class="align-middle"><a href="{{$post->category->link}}">{{$post->category->name}}</a></td>
                              <td class="align-middle">{{$post->created_at->diffForHumans()}}</td>
                              <td class="align-middle">{!! is_null($post->source) ? "Yes" : "<b>No</b>". "<br>". $post->website !!}</td>
                              <td class="align-middle text-right">

                                <a href="/post/edit/{{$post->id}}" class="btn btn-sm btn-icon btn-secondary">
                                  <i class="fa fa-pencil-alt"></i> 
                                  <span class="sr-only">Edit</span>
                                </a> 
                                <a href="/post/delete/{{$post->id}}" class="btn btn-sm btn-icon btn-secondary">
                                  <i class="far fa-trash-alt"></i> 
                                  <span class="sr-only">Remove</span>
                                </a>

                              </td>
                            </tr>
                            <!-- /tr -->
                          @endforeach
                      
                        </tbody><!-- /tbody -->
                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                    <!-- .pagination -->
                      <div class="pagination justify-content-center mt-4">
                        {{$posts->links()}}
                      </div>
                    <!-- /.pagination -->
                  </div><!-- /.card-body -->
                </section><!-- /.card -->
              
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->


@endsection


@section('footer')
<!-- BEGIN PAGE LEVEL JS -->
   <script src="/admin/javascript/pages/table-demo.js"></script>
<!-- END PAGE LEVEL JS -->
@endsection