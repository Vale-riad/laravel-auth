@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->slug }}</td>
                <td>
                  <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success">Dettaglio</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection