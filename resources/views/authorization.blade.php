	@extends('Template.layout')
	
	@section('title')
		<title>Тестовое задание на PHP. Авторизация.</title>
		@stop
	@section('header')
		<h1>Авторизация</h1>
	@stop
		
	@section('content')
		<div class="login-block col-sm-12 col-md-6 col-lg-4">
			
			<form action="#">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Ваш логин">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Ваш пароль">
				</div>
 
				<button class="btn btn-primary btn-block" type="submit">ВХОД</button>
			</form>
		</div>
		<div class="login-links">
			<p class="text-center">Нет аккаунта? <a class="txt-brand" href="/registration"><font color=#29aafe>Перейти к регистрации</font></a></p>
		</div>
	@stop
