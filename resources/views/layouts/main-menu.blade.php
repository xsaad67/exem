<header class="bb-show-desktop-header bb-header header-desktop no-bottom top-shadow">
            <div class="bb-sticky bb-sticky-nav sticky-classic">
                <div class="top-header medium menu-left bb-sticky-el">
                    <div class="container">
                        <div class="h-component m-1 logo">
                            <div class="branding">
                                <p class="site-title">
                                    <a href="{{url('/')}}"> 
                                        <img src="{{env('APP_LOGO')}}" alt="{{env('APP_NAME')}}" width="38" height="33" srcset="https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2017/12/gag_logo-68x66.png 2x,https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2017/12/gag_logo-68x66.png 1x" /> 
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="h-component m-2">
                            <div class="bb-header-navigation header-item">
                                <nav class="main-navigation">
                                    <ul id="menu-top-navigation-1" class="">
                                        @php $navCategories = App\Category::all(); @endphp
                                        @foreach($navCategories as $navcategory)
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-486">
                                                <a href="{{$navcategory->link}}">{{$navcategory->name}}</a>
                                            </li>
                                            @if($loop->iteration ==5) @php break; @endphp @endif
                                        @endforeach
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="h-component r-1 has-search has-authentication has-button-compose">
                            <div class="bb-header-search header-item bb-toggle bb-focus pos-right">
                                <a class="form-toggle element-toggle element-focus bb-header-icon" href="javascript: void(0)" role="button" 
                                data-toggle=".search-dropdown" data-focus=".search-form input"> 
                                    <i class="bb-icon bb-ui-icon-search"></i> 
                                </a>
                                <div class="search-dropdown bb-header-dropdown toggle-content">
                                    <form role="search" method="GET" class="search-form form" action="{{action('SearchController@index')}}">
                                        <input type="search" class="pull-left" name="s" value="">
                                        <button class="search-submit pull-right" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            @guest
                            <a class="h-icon header-item create-post pos-right" href="/login"><span>Login</span></a>
                            <a class="h-icon header-item create-post pos-right" href="/register"><span>Register</span></a>
                            @endguest


                            @auth

                            <div class="header-item bb-header-user-box bb-toggle pos-right">
                                <div class="dropdown">
                                    <a class="bb-header-icon dropdown-toggle" data-toggle="dropdown"> <i class="bb-icon bb-ui-icon-user"></i> </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <a class="dropdown-item mt-2">Create Post</a>
                                      <a class="dropdown-item mt-2">Edit Profile</a>
                                      <a class="dropdown-item mt-2">My Posts</a>
                                      <a class="dropdown-item mt-2">My Votes</a>
                                      <a class="dropdown-item mt-2">My Comments</a>
                                    </div>
                                </div>
                            </div> 

                            @endauth
                           
                               




                          

                        </div>
                    </div>
                </div>
            </div>
        </header>