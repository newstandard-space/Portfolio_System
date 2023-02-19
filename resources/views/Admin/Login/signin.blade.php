<!DOCTYPE html>
<html>

<head>
    <title>サインインページ</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>サインイン</h1>
        <form>
            <div class="form-group">
                <label for="username">ユーザー名</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">ログイン</button>
        </form>
        <div class="forgot-password">
            <a href="#">パスワードをお忘れですか？</a>
        </div>
    </div>
</body>

</html>