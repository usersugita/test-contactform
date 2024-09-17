<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>お問い合わせ入力</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-logo">
                <h1>FashionablyLate</h1>
            </div>

        </div>
    </header>
    <main class="main">

        <div class="form__contact">
            <div class="form__contact-title">
                <h1>Contant</h1>
            </div>
            <div class="create__form">
                <form action="/confirm" method="post">
                    @csrf
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お名前</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="form__group--content-name">
                                <input type="text" class="input--text-first" name="last_name" value="{{ old('last_name') }}" placeholder="　例：山田">
                                <input type="text" class="input--text-last" name="first_name" value="{{ old('first_name' )}}" placeholder="　例：太郎">
                            </div>
                        </div>

                    </div>
                    <div class="form__error">

                        @error('first_name')
                        {{ $message }}
                        @enderror
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">性別</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="input--text-radios">
                                <div class="text-radio">
                                    <input type="radio" name="gender" id="" value="男性" checked>男性
                                </div>
                                <div class="text-radio">
                                    <input type="radio" name="gender" id="" value="女性">女性
                                </div>
                                <div class="text-radio">
                                    <input type="radio" name="gender" id="" value="その他">その他
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form__error">

                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">メールアドレス</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">

                            <input class="input--text-email" type="email" name="email" value="{{old('email')}}" placeholder="　例：text@exmple">

                        </div>
                    </div>
                    <div class="form__error">

                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">電話番号</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">
                            <div class="group-content-tel">
                                <input class="form__input--text-tel" type="tell" name="tell" value="{{old('tell')}}" placeholder="08012345678">

                            </div>

                        </div>
                    </div>
                    <div class="form__error">

                        @error('tell')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">住所</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">

                            <input class="input--text-address" type="text" name="address" value="{{old('address')}}" placeholder="　例：東京都渋谷区千駄ヶ谷1-2-3">

                        </div>
                    </div>
                    <div class="form__error">

                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">建物名</span>
                            <span class="form__label--required"></span>
                        </div>
                        <div class="form__group-content">

                            <input class="input--text-building" type="text" name="building" value="{{old('building')}}" placeholder="　例：千駄ヶ谷マンション101">

                        </div>
                    </div>
                    <div class="form__error">


                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お問い合わせの種類</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">

                            <select class="input--text-select" name="content" id="">
                                @foreach($categories as $category)
                                <option value="" selected hidden>選択してください</option>
                                <option value="{{$category->content}}">{{$category->content}}</option>


                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form__error">
                        @error('content')
                        {{ $message }}
                        @enderror

                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <span class="form__label--item">お問い合わせ内容</span>
                            <span class="form__label--required">※</span>
                        </div>
                        <div class="form__group-content">

                            <input class="input--text-detail" type="textarea" name="detail" value="{{old('detail')}}" placeholder="　お問い合わせ内容をご記載ください">

                        </div>
                    </div>
                    <div class="form__error">

                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="form__button">
                        <input class="form__button-submid" type="button" class="form__button-submit" value="確認画面" onClick="submit();">
                    </div>

                </form>
            </div>
        </div>


    </main>

</body>

</html>


