@extends('layouts/main')

@section('title')
Main page
@endsection

@section('body')
<h1>Laravel RESTful demo</h1>
<h2>Lawful Links</h2>
<form method='post' action='/lawful/update'>
    @method('put')
    @csrf
    <p><a href='/lawful/create'>"Create" route via the GET method</a></p>
    <p>"Update" route via the PUT method</p><input type='submit'>
</form>

<h2>Chaotic Links</h2>
<form method='post' action='/lawful/create'>
    @method('put')
    @csrf
    <p><a href='/chaotic/update'>"Update" route via the GET method</a></p>
    <p>"Create" Route via the PUT method</p><input type='submit'>
</form>
@endsection
