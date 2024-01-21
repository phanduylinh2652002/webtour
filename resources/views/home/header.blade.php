<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            <a href="index.html" class="logo m-0">Thanh Tung Tour <span class="text-primary">.</span></a>

            <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
                <li class="active"><a href="index.html">Trang chủ</a></li>
                <li class="has-children">
                    <a href="#">Địa điểm</a>
                    <ul class="dropdown">
                        @foreach($categories as $c)
                            <li><a href="">{{$c->category_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="services.html">Dịch vụ</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
                @if(auth()->check())
                    <li class="has-children">
                        <a href="#">{{auth()->user()->name}}</a>
                        <ul class="dropdown">
                            <li><a href="{{url('/logout')}}">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{url('/login')}}">Đăng nhập</a></li>
                @endif
            </ul>

            <a href="#"
                class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>

        </div>
    </div>
</nav>