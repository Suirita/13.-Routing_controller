@extends('layouts.app')

@section('title', 'Modifier l\'Article')

@section('content')
    <div class="content-fluid py-4 d-flex justify-content-center">
        <div class="col-md-8 col-lg-6 ">
            <h1 class="text-bold text-center">Modifier l'Article #{{$article['id']}}</h1>
            <form action="/articles/{{$article['id']}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Titre :</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$article['title']}}" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Contenu :</label>
                    <textarea name="content" id="content" class="form-control" rows="5" required>{{$article['content']}}</textarea>
                </div>
                <button type="submit" class="btn btn-info w-100">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection
