@extends('layouts.admin')
@section('content')

<p>Projects</p>
<table class="table table-hover">
<thead>
    <tr>
        <th>name</th>
        <th>link</th>
        <th>category</th>
        <th>technology</th>
        <th>description</th>
        <th>creation data</th>
        <th>img</th>
    </tr>
</thead>
@foreach ($projects as $project)
<tr>
    <td>{{$project->name}}</td>
    <td>{{$project->link}}</td>
    <td>{{$project->category}}</td>
    <td>{{$project->technology}}</td>
    <td>{{$project->description}}</td>
    <td>{{$project->date_creation}}</td>
    <td>{{$project->img}}</td>
</tr>

@endforeach
</table>
@endsection