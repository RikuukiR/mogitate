@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product.css') }}" />
@endsection

@section('content')

<div class="detail-content">
    <div class="card mb-3">
        <img src="../../storage/app/fruits-img/kiwi.png" class="card-img-top" alt="">
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">商品名</label>
                <input type="text" class="form-control" id="name" placeholder="キウイ">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">値段</label>
                <input type="text" class="form-control" id="price" placeholder="800">
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="spring" value="spring">
                <label class="form-check-label" for="spring">春</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="summer" value="summer">
                <label class="form-check-label" for="summer">夏</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="fall" value="fall">
                <label class="form-check-label" for="fall">秋</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="winter" value="winter">
                <label class="form-check-label" for="winter">冬</label>
            </div>
        </div>
    </div>
</div>
<div class="detail-description">
</div>
<div class="mb-3">
    <label for="price" class="form-label">商品説明</label>
    <input type="textarea" class="form-control" id="description">
</div>
</div>
<div class="button-group">
    <button type="button" class="btn btn-secondary">戻る</button>
    <button type="button" class="btn btn-warning">変更を保存</button>
</div>

@endsection