<div class="bb-col col-sidebar-secondary" xmlns="http://www.w3.org/1999/html">
    <aside id="secondary-small" class="sidebar-secondary widget-area">
        <section class="sticky-sidebar"></section>
        <section id="boombox-side-navigation-4" class="widget widget_bb-side-navigation">
            <nav>
                <ul>
                    @foreach(App\Category::all() as $category)
                        <li class="menu-item menu-item-icon">
                            
                            <a href="{{$category->link}}" {{request()->url() == $category->link ? 'class=cat-active' : ''}}>
                                @if(!is_null($category->image))
                                <img src="{{asset('/img/categories/'.$category->image)}}" width="25" height="25">
                                @endif
                                {{ucfirst(strtolower($category->name))}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </section>
    </aside>
</div>