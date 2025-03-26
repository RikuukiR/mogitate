@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')

<div class="register-form__heading">
    <h2>商品登録</h2>
</div>
<form class="form" action="/products" method="POST">
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">商品名</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">値段</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}" />
            </div>
            <div class="form__error">
                @error('price')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">商品画像</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <label for="img" class="custom-file-label">ファイルを選択</label>
                <input class="form__input--text-img" type="file" name="img" id="img" />
            </div>
            <div class="form__error">
                @error('img')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">季節</span>
            <span class="form__label--required">必須</span>
            <span class="form__label--select">複数選択可</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <label><input type="checkbox" name="season[]" value="spring"> 春</label>
                <label><input type="checkbox" name="season[]" value="summer"> 夏</label>
                <label><input type="checkbox" name="season[]" value="autumn"> 秋</label>
                <label><input type="checkbox" name="season[]" value="winter"> 冬</label>
            </div>
            <div class="form__error">
                @error('season')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
            <span class="form__label--required">必須</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <textarea name="content" cols="95" rows="10" id="" placeholder="商品の説明を入力" value="{{ old('description') }}"></textarea>
            </div>
            <div class="form__error">
                @error('description')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-back" type="submit">戻る</button>
        <button class="form__button-submit" type="submit">登録</button>
    </div>
</form>

@endsection