@extends('_master')

@section('link_to_home')
	<a href="/">Home...</a><br>
@stop

@section('page_title')
	Welcome to the Lorem Ipsum Generator!
@stop

@section('content')
	How many paragraphs of text would you like?
	<br><br>
	<form method="GET" accept-charset="UTF-8">
		<label for="num_paragraphs">Number of Paragraphs</label>
		<input name="num_paragraphs" type="number" id="num_paragraphs" min="1" max="99">
		(max99)
		<input type="submit" value="Generate Text">
		<br><br>
	</form>

@stop

@section('app_output')
	{{implode('<p>', $paragraphs);}}
@stop