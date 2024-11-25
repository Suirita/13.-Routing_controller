@extends('layouts.app')

@section('title', 'Voir l\'Article')

@section('content')
    <div class="content-header pt-4">
        <h1 class="mb-4 text-bold text-center">L'Article #{{$article['id']}}</h1>
    </div>
    <div class="content-fluid mx-4">
        <h1 class="mb-3">{{$article['title']}}</h1>
        <p class="mb-4">{{$article['content']}}</p>
        @auth
            <div class="d-flex justify-content-between">
                <a href="/articles/{{$article['id']}}/edit" class="btn btn-info">Modifier</a>
                <form action="/articles/{{$article['id']}}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        @endauth
    </div>
@endsection
