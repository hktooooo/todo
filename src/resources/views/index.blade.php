<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    
<body>
    <h1>Hello World</h1>
</body>
</html>



<!--
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="contact-form__content">
  <form class="form" action="/contacts/confirm" method="post">
  @csrf
    <div class="form__group">
      <input type="text" name="name" value="{{ old('name') }}" />
      <div class="form__button">
        <button class="form__button-submit" type="submit">作成</button>
      </div>
    </div>
  </form>

  <div>
    <div class="Todo__heading">
      <h2>Todo</h2>
    </div>
    @foreach
    <div>
      <p></p>
      <button class="form__button-submit" type="submit">更新</button>
      <button class="form__button-submit" type="submit">削除</button>    
    <div>
  </div>
</div>
-->