<!DOCTYPE html>
<html lang="ja">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>

<body>
    <header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            mogitate
        </a>
    </div>
    </header>

    <main>
        <div class="products__content">
            <div class="products-form__heading">
                <div class="products-form__heading-text">
                    <h2>商品一覧</h2>
                </div>
                <div class="form__button-add">
                    <button class="button-add" type="submit">+商品を追加</button>
                </div>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form__input--text">
                        <input type="text" name="name" placeholder="商品名で検索" />
                        </div>
                        <div class="form__button-2">
                        <button class="form__button-search" type="submit">検索</button>
                        </div>
                    <div class="form__group-price">
                    <h3>価格順で表示</h3>
                    <select name="price" placeholder="価格で並び替え">  <!--価格で並べ替えの表示ができていない-->
                    <option>高い順に表示</option>
                    <option>低い順に表示</option>
                    </select>
                    </div>
                </div>
            </form>
            <div class="products-img">
                <div class="products-img__container">
                    <div><img src="{{ asset('storage/fruits-img/kiwi.png') }}" alt="kiwi"></div>
                    <div><img src="{{ asset('storage/fruits-img/strawberry.png') }}" alt="strawberry"></div>
                    <div><img src="{{ asset('storage/fruits-img/orange.png') }}" alt="orange"></div>
                    <div><img src="{{ asset('storage/fruits-img/watermelon.png') }}" alt="watermelon"></div>
                    <div><img src="{{ asset('storage/fruits-img/peach.png') }}" alt="peach"></div>
                    <div><img src="{{ asset('storage/fruits-img/muscat.png') }}" alt="muscat"></div>
                </div>
            </div>
        </div>

                                        <!--ページネーションの追加-->

    </main>
</body>

</html>