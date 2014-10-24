@extends('_master')

@section('link_to_home')
	<a href="/">Home...</a><br>
@stop

@section('page_title')
	Welcome to the Random User Generator!
@stop

@section('content')

	<form method="GET" accept-charset="UTF-8">
		<label for="num_users">Number of Ramdom Users</label>
		<input name="num_users" type="number" id="num_users" min="1" max="99">
		(max99)
		<br>
		<input type="checkbox" name="address" value="address">Add address?<br>
		<input type="checkbox" name="profile" value="profile">Add profile?<br>
		<br>
		<input type="submit" value="Generate Users">
		<br><br>
	</form>

@stop

@section('app_output')
	<?php
		for ($i=0; $i<$num_users; $i++) {
			echo "<B>". $faker->name ."</b>" ."<br>";
			if($address){
				echo $faker->address. "<br>";
			}
			if($profile){
				echo $faker->text. "<br>";
			}
			echo "<br><br>";
		}
	?>
@stop