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
                                {{-- <nav class="more-navigation header-item bb-toggle pos-">
                                    <a class="more-menu-toggle element-toggle bb-header-icon" role="button" href="#" data-toggle=".more-menu"> 
                                        <i class="bb-icon bb-ui-icon-dots"></i> 
                                    </a>
                                    <div id="more-menu" class="more-menu bb-header-dropdown toggle-content">
                                        <div class="more-menu-header">
                                            <nav class="bb-trending-navigation">
                                                <ul id="menu-side-navigation" class="">
                                                    <li id="menu-item-90" class="active-menu menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-90 menu-item-icon"><a href="https://boombox.px-lab.com/another-gag/hot-list/"><i class="bb-icon bb-icon-hot"></i>Hot</a><span class="dropdown-toggle"></span></li>
                                                    <li id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89 menu-item-icon"><a href="https://boombox.px-lab.com/another-gag/trending-list/"><i class="bb-icon bb-icon-trending5"></i>Trending</a></li>
                                                    <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-33 menu-item-icon"><a href="https://boombox.px-lab.com/another-gag/fresh/"><i class="bb-icon bb-icon-clock"></i>Fresh</a><span class="dropdown-toggle"></span></li>
                                                    <li id="menu-item-511" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-511 menu-item-icon"><a href="https://boombox.px-lab.com/another-gag/random/"><i class="bb-icon bb-icon-cube"></i>Random</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="more-menu-body"> <span class="sections-header">sections</span>
                                            <nav class="section-navigation">
                                                <ul id="menu-burger-bottom-menu-1" class="">
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-296"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Anime</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-297"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Entertainment</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-298"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Politics</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-299"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Travel</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-300"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Audio</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-301"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Geeky</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-302"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Puzzles</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-303"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Weddings</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-304"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Big Stories</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-305"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Health Ideas</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-306"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Rewind</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-307"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Weekend</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-308"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Books</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-309"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Life</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-310"><a href="https://boombox.px-lab.com/another-gag/category/gif/">Science</a></li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-311"><a href="https://boombox.px-lab.com/another-gag/category/gif/">World</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="more-menu-footer">
                                            <div class="bb-community community"><span class="logo"> <img src="https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2017/12/gag_logo_2.png?x46754" alt="BoomBox: Another GAG"/> </span> <span class="text">BoomBox Community</span> <a class="h-icon create-post bb-btn bb-btn-default zf-create-popup" href="#"><span class="bb-icon bb-ui-icon-plus"></span> <span>Upload</span></a></div>
                                            <div class="social circle">
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/" class="bb-icon bb-ui-icon-facebook " title="Facebook" rel="nofollow" target="_blank"></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://plus.google.com/" class="bb-icon bb-ui-icon-google-plus " title="Google+" rel="nofollow" target="_blank"></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/" class="bb-icon bb-ui-icon-instagram " title="Instagram" rel="nofollow" target="_blank"></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/?lang=en" class="bb-icon bb-ui-icon-twitter " title="Twitter" rel="nofollow" target="_blank"></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://youtube.com/" class="bb-icon bb-ui-icon-youtube " title="Youtube" rel="nofollow" target="_blank"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </nav> --}}
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

                            <a class="h-icon header-item create-post pos-right" href="/login"><span>Login</span></a>
                            <a class="h-icon header-item create-post pos-right" href="/register"><span>Register</span></a>
                            <div class="header-item bb-header-user-box bb-toggle pos-right">
                            <div class="dropdown">
                                <a class="bb-header-icon dropdown-toggle" data-toggle="dropdown"> <i class="bb-icon bb-ui-icon-user"></i> </a>
                                <div class="dropdown-menu dropdown-menu-center">
                                  <a class="dropdown-item mt-2">Manage Accounts</a>
                                  <a class="dropdown-item mt-2">Manage Accounts</a>
                                  <a class="dropdown-item mt-2">Manage Accounts</a>
                                  <a class="dropdown-item mt-2">Manage Accounts</a>
                                </div>
                            </div>
                               




                            </div> 
                          

                        </div>
                    </div>
                </div>
            </div>
        </header>