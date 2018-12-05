@extends('layouts.main')


@section('content')
<div class="container main-container bb-stream">
    <div class="bb-row">
        <div class="bb-col col-content">
            <div class="bb-row">
                <div class="bb-col col-site-main">
                    <div class="site-main" role="main">
                        @yield('postcontent')
                    </div>
                </div>
                @include('layouts.left-sidebar')
            </div>
        </div>
        @include('layouts.right-sidebar')
    </div>
</div>

@endsection