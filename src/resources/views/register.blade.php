<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>登録ページ</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-logo">
                <h1>FashionablyLate</h1>
            </div>
            <div class="header__inner-button">
                <a href="/login" class="button">login</a>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="register">
            <div class="register__logo">
                <h1>Register</h1>
            </div>
            <div class="register__inner">
                <form action="/login" class="register__form">
                    @csrf
                    <div class="register__form-item">
                        <div class="register__form-title">お名前</div>
                        <input class="register__form-text" type="text" name="name" placeholder="    例:山田　太郎" value="">
                    </div>
                    <div class="register__form-item">
                        <div class="register__form-title">メールアドレス</div>
                        <input class="register__form-text" type="text" name="email" placeholder="    例:test@exmple.com" value="">
                    </div>

                    <div class="register__form-item">
                        <div class="register__form-title">パスワード</div>
                        <input class="register__form-text" type="text" name="password" placeholder="    例:coachtech1234" value="">
                    </div>

                    <div class="register__form-button">
                        <button class="register__form-button-submit" type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>

    </main>

</body>

</html>