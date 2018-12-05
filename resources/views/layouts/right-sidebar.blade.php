<div class="bb-col col-sidebar">
    <aside id="secondary" class="sidebar widget-area">
        <section id="text-10" class="widget widget_text">
            <div class="textwidget">
                <img src="https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2016/10/gag-ad-300-250.jpg?x46754" alt="" class="aligncenter ">
            </div>
        </section>
        <section id="boombox-trending-posts-5" class="widget widget_trending_entries">
            <h2 class="widget-title"><span><i class="bb-icon bb-ui-icon-trending5"></i>Trending</span></h2>
            <ul>
                @php $i = 1; @endphp
                @foreach(\App\Post::popular()->take(5)->get() as $post)
                    <li>
                        <article class="post bb-post ">
                            <h6 class="entry-title">
                                <a href="{{$post->link}}" rel="bookmark">{{$post->title}}</a>
                            </h6>
                            <div class="post-thumbnail">

                                <div class="post-number">{{$i}}</div>
                                <a href="{{$post->link}}" title="{{$post->title}}" >
                                    
                                    <div class="postBody" style="font-size:15px !important;">
                                        {!! truncate_html($post->description,60) !!}
                                    </div>
                                </a>
                            </div>
                           
                        </article>
                    </li>
                @php $i++; @endphp
                @endforeach
                
            </ul>
        </section>
       
        <section class="sticky-sidebar"></section>
        <section id="text-5" class="widget widget_text">
            <div class="textwidget"><img src="https://boombox.px-lab.com/another-gag/wp-content/uploads/sites/3/2016/10/gag-ad-300-250.jpg?x46754" alt="" class="aligncenter "></div>
        </section>
        <section id="boombox-sidebar-footer-3" class="widget widget_sidebar_footer">
            <div class="footer-nav">
                <nav class="menu-sidebar-footer-container">
                    <ul id="menu-sidebar-footer" class="">
                        <li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a href="https://boombox.px-lab.com/another-gag/community/">About</a></li>
                        <li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a href="https://boombox.px-lab.com/another-gag/contact/">Contact</a></li>
                        <li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a href="https://boombox.px-lab.com/another-gag/terms/">Terms</a></li>
                        <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a href="https://boombox.px-lab.com/another-gag/privacy/">Privacy</a></li>
                        <li id="menu-item-504" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-504"><a href="https://boombox.px-lab.com/another-gag/contact/">Report</a></li>
                    </ul>
                </nav>
            </div>
            <div class="text">&copy; 2018 All Rights Reserved.</div>
        </section>
    </aside>
</div>