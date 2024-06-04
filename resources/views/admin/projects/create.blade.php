@extends('layouts.app')
@section('content')
<p>ciao</p>
<form action="{{route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label for="name">Name</label>
<input type="text" name="name">

<label for="link">Link</label>
<input type="text" name="link">

<label for="technology">Technology</label>
<input type="text" name="technology">

<label for="description">Description</label>
<input type="text" name="description">

<label for="date_creation">Date of creation</label>
<input type="date" name="date_creation">

<label for="img">Image</label>
<input type="file" name="img">

<input type="submit">
</form>
@endsection