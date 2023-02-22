<header>
    <div class="dropdown">
        <i alt="ユーザーアイコン" class="fas fa-user-circle" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false" role="button"> </i>
        <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ route('home.index') }}">ホーム画面</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <button form="logout-button" class="dropdown-item" type="submit">
                    ログアウト
                </button>
            </li>
            <form id="logout-button" method="POST" action="{{ route('logout') }}">@csrf</form>
        </ul>
    </div>
</header>