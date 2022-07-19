@extends('layouts.default')

<style>

</style>
@section('content')
	<h1 class="title">お問い合わせ</h1>
	<div class="contact">
		<form method='POST' action="/contact/confirm">
			@csrf
			<div class="wrap">
				<div>
					<p>お名前</p>
					<input type="text" name="name" required="required">
					<input type="text" name="surname" required="required">
				</div>
					<p>例）山田</p>
					<p>例）太郎</p>
			<div>
				<p>性別</p>
				<input type="radio" name="gender" id="" checked="checked" required="required">男性			
				<input type="radio" name="gender" required="required">女性			<!--nameを指定すると選択を選べる-->
			</div>
			<div>
				<p>メールアドレス</p>
				<input type="email" name="email" required="required">
			</div>
				<p>例）test@example.com</p>
			<div>
				<p>郵便番号</p>
				<input type="text" name="postcode" required="required">
			</div>
				<p>例）123-4567</p>
			<div>
				<p>住所</p>
				<input type="text" name="address" required="required">
			</div>
				<p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
			<div>
				<p>建物名</p>
				<input type="text" name="building_name">
			</div>
				<p>例）千駄ヶ谷マンション101</p>	
			<div>
				<p>ご意見</p>
				<textarea name="opinion" cols="30" rows="10" required="required"></textarea>
			</div>
			<div>
				<input type="submit" value="確認">
			</div>	
		</form>
	</div>
@endsection