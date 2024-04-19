@extends('layouts.app')

@section('content')
<main>
<div id="project">

    <div class="container p-5">

        <h2 class="fw-bold mb-3">
            I miei progetti
        </h2>

        <a href="{{ route('admin.projects.create')}}" class="btn btn-primary mb-5">Aggiungi progetto</a>

    
        <ul id="project-list" class="d-flex gap-3 flex-wrap p-0">

            @foreach ($projects as $project)

            <li class="card" style="width: 18rem;">
                <img src="{{ $project['src'] }}" class="card-img-top" alt="{{ $project->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $project->name }}</h5>
                  <p class="card-text">{{ $project->description }}</p>
                  <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-secondary">Scopri</a>
                </div>
            </li>
      
            @endforeach
        </ul>

    </div>

</div>

</main>

@endsection