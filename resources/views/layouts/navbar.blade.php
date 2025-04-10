<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="hamburger-menu" id="hamburger-menu"><i class="fa fa-bars"></i></div>
            <div class="logo ms-3">
                <a href="">House</a>
            </div>

            <ul class="navbar-nav ms-auto">
                <div class="close-menu d-lg-none"><i class="fa fa-times"></i></div>
                @foreach ($menus as $menu)
                <li class="nav-item">
                    <a class="nav-link @if ($loop->first)
                      active
                    @endif " aria-current="page" href="{{$menu->link}}">{{$menu->title}}</a>
                </li>
                @endforeach
            </ul>


        </div>
    </nav>
    <div class="overlay-menu">

    </div>
</header>
