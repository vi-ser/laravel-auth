@extends('layouts.app')

@section('content')

<div id="projects">

    <div class="container">

        <h2 class="text-white fw-bold">
            Modifica progetto
        </h2>

        <form action="{{route('admin.projects.update', $project->id)}}" method="POST" class="p-5">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $project->name}}" required>
              @error('name')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"> {{ old('description') ?? $project->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="src" class="form-label">Url copertina</label>
                <input type="text" class="form-control @error('src') is-invalid @enderror" id="src" name="src" value="{{ old('src') ?? $project->src}}">
                 @error('src')
                 <div class="invalid-feedback">
                    {{$message}}
                </div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="technnology" class="form-label">Tecnologie utilizzate</label>
                <input type="text" class="form-control @error('technnology') is-invalid @enderror" id="technnology" name="technnology" value="{{ old('technology') ?? $project->technology}}">
                @error('technnology')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="github_link" class="form-label">Link Github</label>
                <input type="text" class="form-control @error('github_link') is-invalid @enderror" id="github_link" name="github_link" value="{{ old('github_link') ?? $project->github_link}}" required>
                 @error('github_link')
                 <div class="invalid-feedback">
                    {{$message}}
                </div>
                 @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Data progetto</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" required>
                @error('date')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            

            <button type="submit" class="btn btn-primary mt-3">Modifica</button>
        </form>
       
    </div>

</div>
@endsection
