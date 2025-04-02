@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')

<div class="product-form__heading">
    <div class="form__heading-title">
        <h2>商品一覧</h2>
    </div>
    <div class="form__heading-button">
        <form action="/products/register" method="get">
            @csrf
            <button class="form__button-add" type="submit">+ 商品を追加</button>
        </form>
    </div>
</div>
<form class="form" action="" method="">
    <div class="form__group">
        <div class="form__group-search">
            <input type="text" name="search" placeholder="商品名で検索">
            <button class="form__group-button" type="submit">検索</button>
        </div>
        <div class="form__group-sort">
            <label for="sort-select">価格順で表示</label>
            <select name="sort" id="sort-select">
                <option value="">高い順に表示</option>
                <option value="">低い順に表示</option>
            </select>
        </div>
        <div class="form__group-content">
            <div class="product__card">
                <div class="card__img">
                    <img src="{{ asset('storage/fruits-img/kiwi.png') }}" alt="Kiwi">
                </div>
                <div class="card__content">
                    <div class="card__name">キウイ</div>
                    <div class="card__price">￥800</div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection