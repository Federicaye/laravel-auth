@extends('layouts.admin')
@section('content')

<div class="container">
<form action="{{route('admin.project.store')}}" method="POST" enctype="multipart/form-data" >
@csrf
<div>
<label for="name">Name</label>
<input type="text" name="name">
</div>

<div>
<label for="link">Link</label>
<input type="text" name="link">
</div>

<div>
<label for="technology">Technology</label>
<input type="text" name="technology">
</div>

<div>
<label for="description">Description</label>
<input type="text" name="description">
</div>

<div>
<label for="date_creation">Date of creation</label>
<input type="date" name="date_creation">
</div>

<div>
<label for="img">Image</label>
<input type="file"  name="img">
</div>

<input type="submit">
</form>
</div>
@endsection