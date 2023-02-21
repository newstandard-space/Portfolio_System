<header>
    <div class="dropdown">
        <i alt="ユーザーアイコン" class="fas fa-user-circle" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false" role="button"> </i>
        <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">プロフィール</a></li>
            <li><a class="dropdown-item" href="#">パスワード変更</a></li>
            <li><a class="dropdown-item" href="{{ route('home.index') }}">ポートフォリオ</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">ログアウト</a></li>
        </ul>
    </div>
</header>