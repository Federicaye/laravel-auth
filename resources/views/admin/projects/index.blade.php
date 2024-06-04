@extends('layouts.app')
@section('content')

<p>elenco progetti</p>

@foreach ($projects as $project)
<p>{{$project->name}}</p>


@endforeach
@endsection