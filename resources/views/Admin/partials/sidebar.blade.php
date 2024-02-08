<div class="side-bar">
    @if(auth()->check())
        <h2>{{ auth()->user()->name }}</h2>
    @else
        <h2>Admin.</h2>
    @endif
    <nav>
        <ul>
            <a href="{{ route('admin.dashboard') }}">
                <li>
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </li>
            </a>
            <a href="{{route('settings')}}">
                <li>
                    <i class="fa-solid fa-gear"></i>
                    <span>Setting</span>
                </li>
            </a>
            <li class="pages">
                <a href="#">
                    <i class="fa-solid fa-file-alt"></i>
                    <span>Pages</span>
                </a>
                <ul class="sub-nav">
                    <a href="{{route('categories')}}">
                        <li>
                            <i class="fa-solid fa-bars"></i>
                            <span>Categories</span>
                        </li>
                    </a>
                    <a href="{{route('blogs')}}">
                        <li>
                            <i class="fa-solid fa-newspaper"></i>
                            <span>Blogs</span>
                        </li>
                    </a>
                    <a href="{{route('quotes')}}">
                        <li>
                            <i class="fa-solid fa-quote-right"></i>
                            <span>Quotes</span>
                        </li>
                    </a>
                    <a href="{{route('teams')}}">
                        <li>
                            <i class="fa-solid fa-people-group"></i>
                            <span>Team</span>
                        </li>
                    </a>
                    <a href="{{route('dr-images')}}">
                        <li>
                            <i class="fa-solid fa-image-portrait"></i>
                            <span>Doctor images</span>
                        </li>
                    </a>
                    <a href="{{route('main-doctor')}}">
                        <li>
                            <i class="fa-solid fa-user-doctor"></i>
                            <span>Main Doctor</span>
                        </li>
                    </a>
                    <a href="{{route('slider')}}">
                        <li>
                            <i class="fa-regular fa-images"></i>
                            <span>Slider</span>
                        </li>
                    </a>
                    <a href="{{route('youtube')}}">
                        <li>
                            <i class="fa-brands fa-youtube"></i>
                            <span>Youtube</span>
                        </li>
                    </a>
                    <a href="{{route('tv-programs')}}">
                        <li>
                            <i class="fa-solid fa-tv"></i>
                            <span>TV Programs</span>
                        </li>
                    </a>
                    <a href="{{route('sponsors')}}">
                        <li>
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                            <span>Sponsors</span>
                        </li>
                    </a>
                    <a href="{{route('social-networks')}}">
                        <li>
                            <i class="fa-solid fa-share-nodes"></i>
                            <span>Social Networks</span>
                        </li>
                    </a>
                    <a href="{{route('about-us')}}">
                        <li>
                            <i class="fa-regular fa-address-card"></i>
                            <span>About Us</span>
                        </li>
                    </a>
                    <a href="{{route('aboutmenu')}}">
                        <li>
                            <i class="fa-regular fa-square-caret-down"></i>
                            <span>About Menu</span>
                        </li>
                    </a>
                    <a href="{{route('show-message')}}">
                        <li>
                            <i class="fa-solid fa-message"></i>
                            <span>Contact messages</span>
                        </li>
                    </a>
                </ul>
            </li>
            <a href="{{ route('admin.logout') }}">
                <li>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Log out</span>
                </li>
            </a>
        </ul>
    </nav>
</div>




{{--<div class="side-bar">--}}
{{--    <h2>Admin.</h2>--}}
{{--    <nav>--}}
{{--        <ul class="main-ul">--}}
{{--            <a href="">--}}
{{--                <li>--}}
{{--                    <i class="fa-solid fa-house"></i>--}}
{{--                    <span>Dashboard</span>--}}
{{--                </li>--}}
{{--            </a>--}}
{{--            <li class="pages">--}}
{{--                <a href="#">--}}
{{--                    <i class="fa-solid fa-file-alt"></i>--}}
{{--                    <span>Pages</span>--}}
{{--                </a>--}}
{{--                <ul class="sub-nav">--}}
{{--                    <a href="{{route('categories')}}">--}}
{{--                        <li>--}}
{{--                            <i class="fa-solid fa-house"></i>--}}
{{--                            <span>Categories</span>--}}
{{--                        </li>--}}
{{--                    </a>--}}
{{--                </ul>--}}
{{--                    <a href="{{route('blogs')}}"><li>Blogs</li></a>--}}
{{--                    <a href="{{route('slider')}}"><li>Slider</li></a>--}}
{{--                    <a href="{{route('quotes')}}"><li>Quotes</li></a>--}}
{{--                    <a href="{{route('sponsors')}}"><li>Sponsors</li></a>--}}
{{--                    <a href="{{route('teams')}}"><li>Team</li></a>--}}

{{--            </li>--}}


{{--            <a href="{{route('categories')}}">--}}
{{--                <li>--}}
{{--                    <i class="fa-solid fa-bars"></i>--}}
{{--                    <span>Categories</span>--}}
{{--                </li>--}}
{{--            </a>--}}

{{--        </ul>--}}
{{--    </nav>--}}
{{--</div>--}}
