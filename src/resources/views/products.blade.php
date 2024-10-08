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
                    <div class="form__input">
                        <div class="form__input--text">
                        <input type="text" name="name" placeholder="商品名で検索" />
                        </div>
                    </div>
                    <div class="form__button-2">
                    <button class="form__button-search" type="submit">検索</button>
                    </div>
                <div class="form__group-price">
                    <div class="group-price--text">
                        <h3>価格順で表示</h3>
                    </div>
                    <div class="group-price--select">
                        <select name="price" placeholder="価格で並び替え">  <!--価格で並べ替えの表示ができていない-->
                        <option>高い順に表示</option>                       <!--プルダウン図形は未編集-->
                        <option>低い順に表示</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
            <div class="products-img">
                <div class="products-img__container">
                    <div class="img__container--top">
                        <div class="products__card">
                            <div class="card__img"><img src="{{ asset('storage/fruits-img/kiwi.png') }}" alt="kiwi"></div>
                            <div class="card__content">
                                <div class="card__name">キウイ</div>
                                <div class="card__price">¥800</div>
                            </div>
                        </div>
                        <div class="products__card">
                            <div class="card__img"><img src="{{ asset('storage/fruits-img/strawberry.png') }}" alt="strawberry"></div>
                            <div class="card__content">
                                <div class="card__name">ストロベリー</div>
                                <div class="card__price">¥1200</div>
                            </div>
                        </div>
                        <div class="products__card">
                            <div class="card__img"><img src="{{ asset('storage/fruits-img/orange.png') }}" alt="orange"></div>
                            <div class="card__content">
                                <div class="card__name">オレンジ</div>
                                <div class="card__price">¥850</div>
                            </div>
                        </div>
                    </div>
                    <div class="img__container--bottom">
                        <div class="products__card">
                            <div class="card__img"><img src="{{ asset('storage/fruits-img/watermelon.png') }}" alt="watermelon"></div>
                            <div class="card__content">
                                <div class="card__name">スイカ</div>
                                <div class="card__price">¥700</div>
                            </div>
                        </div>
                        <div class="products__card">
                            <div class="card__img"><img src="{{ asset('storage/fruits-img/peach.png') }}" alt="peach"></div>
                            <div class="card__content">
                                <div class="card__name">ピーチ</div>
                                <div class="card__price">¥1000</div>
                            </div>
                        </div>
                        <div class="products__card">
                            <div class="card__img"><img src="{{ asset('storage/fruits-img/muscat.png') }}" alt="muscat"></div>
                            <div class="card__content">
                                <div class="card__name">シャインマスカット</div>
                                <div class="card__price">¥1400</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                                        <!--ページネーションの追加-->

</main>
</body>

</html>