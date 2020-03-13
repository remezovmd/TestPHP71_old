	@extends('Template.layout')
	
	@section('title')
		<title>Тестовое задание на PHP. Регистрация нового пользователя.</title>
	@stop
	
	@section('header')
		<h1>Регистрация нового пользователя</h1>
	@stop
		
	@section('content')
		<div class="login-block col-sm-12 col-md-6 col-lg-4">
			<form action="#">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Введите логин">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Введите пароль">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Повторите пароль">
				</div>
				<button class="btn btn-primary btn-block" type="submit">РЕГИСТРАЦИЯ</button>
			</form>
		</div>
	@stop
