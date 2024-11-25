@extends('layouts.app')

@section('title', 'Liste des Articles')

@section('content')
    <div class="content-header pt-4">
        <h2 class="mb-4 text-bold text-center">Liste des Articles</h2>
    </div>

    <div class="content-fluid">
        <div class="row mx-4">
            @if($articles->count() > 0)
                @foreach ($articles as $article)
                    <div class="col-lg-3 ms-2 my-2">
                        <x-article-card :article="$article" />
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <p class="text-muted text-center">Aucun article disponible pour le moment.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
