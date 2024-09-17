<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>ログイン</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-logo">
                <h1>FashionablyLate</h1>
            </div>
            <div class="header__inner-button">
                <a href="/register" class="button">register</a>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="register">
            <div class="register__logo">
                <h1>login</h1>
            </div>
            <div class="register__inner">
                <form action="/login" class="register__form" method="post">
                    @csrf
                    <div class="register__form-item">
                        <div class="register__form-title">メールアドレス</div>
                        <input class="register__form-text" type="text" name="email" placeholder="    例:test@exmple.com" value="{{ old('email') }}">
                    </div>

                    <div class="register__form-item">
                        <div class="register__form-title">パスワード</div>
                        <input class="register__form-text" type="text" name="pasuword" placeholder="    例:coachtech1234" id="">
                    </div>

                    <div class="register__form-button">
                        <button class="register__form-button-submit" type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </div>

    </main>

</body>

</html>