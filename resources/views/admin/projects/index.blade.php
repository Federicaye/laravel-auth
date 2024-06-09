@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between">
    <p>Projects</p>
    <div>
        <form action="{{route('admin.projects.index')}}" method="GET" id="search-form">
            <select name="search" id="search" class="form-select">
                <option value="fullstack">Fullstack</option>
                <option value="frontend">Frontend</option>
                <option value="backend">Backend</option>
            </select>

        </form>
    </div>

    <div>
        <form action="{{route('admin.projects.index')}}" method="GET" id="search-form-technologies">
            <select name="search-technologies" id="search-technologies" class="form-select">
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="javascript">Javascript</option>
            </select>

        </form>
    </div>

</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>name</th>
            <th>link</th>
            <th>category</th>
            <th>technology</th>
            <th>description</th>
            <th>creation data</th>
            <th>actions</th>
        </tr>
    </thead>
    @foreach ($projects as $project)
        <tr>
            <td>{{$project->name}}</td>
            <td>{{$project->link}}</td>
            <td>{{$project->category->name}}</td>
            <td>
                @foreach ($technologies as $technology)
            <span>{{$technology->name}}</span>
            @endforeach</td>
            <td>{{$project->description}}</td>
            <td>{{$project->date_creation}}</td>
            <td>
                <a href=""> <i class="fa-solid fa-pencil"></i></a>
                <a href=""><i class="fa-solid fa-trash"></i></a>
                <a href=""><i class="fa-solid fa-eye"></i></a>
            </td>
        </tr>

    @endforeach
</table>
@endsection