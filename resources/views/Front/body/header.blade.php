<header>
    <nav>
        <div class="nav-container">
            <div class="nav-logo">
                <a href="{{ route('home.index') }}">My Portfolio</a>
            </div>
            <ul class="nav-menu">
                @auth
                <li><a href="{{ route('admin.index') }}">管理画面</a></li>
                <li>
                    <button form="logout-button" type="submit" style="background-color: #333; border:1px solid #333; color: #FFF;">
                        ログアウト
                    </button>
                </li>
                <form id="logout-button" method="POST" action="{{ route('logout') }}">@csrf</form>
                @else
                <li><a href="{{ route('login') }}">ログイン</a></li>
                @endauth
                <li><a href="{{ route('front.about.index') }}">About</a></li>
                <li><a href="{{ route('front.work.index') }}">Works</a></li>
            </ul>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</header>