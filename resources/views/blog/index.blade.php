@extends('layouts.main')

@section('content') 
   
   <h1 class="title text-center">{{ $title }}</h1>

   <section class="posts">
      @foreach ( $articles as $article )
         <a class="posts__button" type="button" href="/blog/{{$article->slug}}">
            <div class="posts__icon">
               <img src="/img/articles/{{ $article->img }}" alt="{{ $article->slug }}">
            </div>
            <div class="posts__info">
               <p class="posts__text">{{ $article->name }}</p>
            </div>
         </a>
      @endforeach
   </section> 

@endsection

@section('title', 'Blog')