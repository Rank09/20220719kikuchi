@extends('layouts.default')

<style>

</style>

@section('content')	
<h1 class="title">内容確認</h1>
<form method='POST' action="/contact/thanks">
  @csrf
  <label>お名前</label>
    <p>{{ $input['name'] }}</p>
    <p>{{ $input['surname'] }}</p>
    <input type="hidden" name="fullname" value="{{ $input['name']}}">
    <input type="hidden" name="fullname" value="{{ $input['surname']}}">
  <label>性別</label>
    <p>{{ $input['gender'] }}</p>
    <input type="hidden" name="gender" value="{{ $input['gender']}}">
  <label>住所</label>
    <p>{{ $input['address'] }}</p>
    <input type="hidden" name="address" value="{{ $input['address']}}">
  <label>郵便番号</label>
    <p>{{ $input['postcode'] }}</p>
    <input type="hidden" name="postcode" value="{{ $input['postcode']}}">
  <label>建物名</label>
    <p>{{ $input['building_name'] }}</p>
    <input type="hidden" name="building_name" value="{{ $input['building_name']}}">
  <label>ご意見</label>
    <p>{{ $input['opinion'] }}</p>
    <input type="hidden" name="opinion" value="{{ $input['opinion']}}">
  <label>メールアドレス</label>
    <p>{{ $input['email'] }}</p>
    <input type="hidden" name="email" value="{{ $input['email']}}">
  <input type="submit" value="送信" action="">
  <a href="{{ url('/contact')}}">修正する</a>
</form>
@endsection