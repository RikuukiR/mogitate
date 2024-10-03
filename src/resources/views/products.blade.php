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
                <h2>商品一覧</h2>
            </div>
            <div class="form__button">
                <button class="form__button-add" type="submit">+商品を追加</button>
            </div>
        </div>
        <div class="form">
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
                    <select name="price" placeholder="価格で並び替え">
                        <option>高い順に表示</option>
                        <option>低い順に表示</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="products-img">
            <div class="products-img__flex">
                <div class="box">
                    <img src="storage/app/public/fruits-img/banana.png" alt="" />
                </div>
            </div>

        </div>





    </main>
</body>

</html>