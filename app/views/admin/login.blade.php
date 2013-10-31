@extends('templates.main')
@section('header')
<style type="text/css">
	.login {
		width: 500px;
		margin: auto;
	}
</style>
<div class="login">
	<form class="form-horizontal" method="post">
		<div class="control-group">
			<label class="control-label" for="inputUsername">Username</label>
			<div class="controls">
				<input name="username" type="text" id="inputUsername" placeholder="Username">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input name="password" type="password" id="inputPassword" placeholder="Password">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox">
					Remember me </label>
				<button type="submit" class="btn">
					Sign in
				</button>
			</div>
		</div>
	</form>
</div>
@stop