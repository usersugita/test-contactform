<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>管理画面</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-logo">
                <h1>FashionablyLate</h1>
            </div>
            <div class="header__inner-button">
                <a href="/login" class="button">logout</a>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="admin__content">
            <div class="admin__content-title">
                <h1>Admin</h1>
            </div>


            <div class="content">

                <form class="content_form" action="/search" method="GET">
                    <input class="content_text" type="text" name="" placeholder=" 名前やメールアドレスを入力してください">

                    <select class="content_select-gender" name="gender" id="">
                        <option value="" selected hidden>性別</option>
                        <option value="man">男性</option>
                        <option value="woman">女性</option>
                        <option value="others">その他</option>
                    </select>

                    <select class="content_select-content" name="content" id="">
                        <option value="" selected hidden>お問い合わせの種類</option>
                        <option value="">商品の交換について</option>


                    </select>
                    <input class="content_select-date" type="date" name="calendar" max="9999-12-31">

                    <input class="content_select-submit" type="submit" value="検索">

                    <input class="content_select-reset" type="reset" value="リセット">
                </form>

                </select>

            </div>

            <div class="inquiry">
                <div class="inquiry_item">
                    <div class="inquiry_item-export">
                        <a href=""></a>

                    </div>
                    <div class="inquiry_item-pagination">
                        {{ $contacts->links('pagination::semantic-ui') }}
                    </div>

                </div>
                <div class="inquiry_inner">

                    <table class="inquiry_inner-table">
                        <tr class="inquiry-tr">
                            <th>お名前</th>
                            <th>性別</th>
                            <th>メールアドレス</th>
                            <th>お問い合わせの種類</th>
                            <th></th>
                        </tr>


                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->last_name}}
                                {{$contact->first_name}}
                            </td>
                            <td>{{$contact->gender}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->detail}}</td>
                            <td>詳細</td>
                        </tr>
                        @endforeach

                    </table>
                </div>

            </div>
        </div>


        </div>


    </main>


</body>

</html>