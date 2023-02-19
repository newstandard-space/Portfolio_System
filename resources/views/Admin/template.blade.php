<!DOCTYPE html>
<html>

<head>
    <title>ポートフォリオ管理画面</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/backend/css/default.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</head>

<body>
    <div class="wrapper">
        <!-- サイドバー -->
        <div class="sidebar">
            <div class="sidebar-title">ポートフォリオ<br>管理画面</div>
            <div class="sidebar-menu-dev">
                <ul class="sidebar-menu">
                    <li class="active"><a href="#">Aboutページ</a></li>
                    <li><a href="#">Worksページ</a></li>
                </ul>
            </div>
        </div>
        <!-- ヘッダー -->
        <header>
            <div class="dropdown">
                <i alt="ユーザーアイコン" class="fas fa-user-circle" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false" role="button"> </i>
                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">プロフィール</a></li>
                    <li><a class="dropdown-item" href="#">パスワード変更</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">ログアウト</a></li>
                </ul>
            </div>
        </header>
        <!-- コンテンツエリア -->
        <main>

            <div class="page-content">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-10">
                            <h1>Aboutページ</h1>
                        </div>
                        <div class="col-sm-2 text-right mt-1">
                            <button type="button" class="btn btn-primary">新規登録</button>
                        </div>
                    </div>

                    <form method="POST" action="{{route('admin.about.store')}}">
                        <div class="mb-3">
                            <label for="ShortDescriptionInputText" class="form-label">概要</label>
                            <input type="Text" class="form-control" id="ShortDescriptionInputText">
                        </div>
                        <div class="mb-3">
                            <label for="DescriptionFormControlTextarea1" class="form-label">詳細</label>
                            <textarea class="form-control" id="DescriptionFormControlTextarea1" rows="3"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">登録</button>
                    </form>

                </div>

            </div>

        </main>
        <!-- フッター -->
        <footer>
            <p>&copy; 2023 ポートフォリオ管理画面</p>
        </footer>
    </div>

    <script src="{{asset('/backend/js/default.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>