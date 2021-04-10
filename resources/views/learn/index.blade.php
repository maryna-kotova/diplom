@extends('layouts.main')

@section('content') 
   
   <h2 class="title text-center">{{ $title }}</h2>
   <section class="onboarding">
      @foreach ( $categories as $category )
         <a class="onboarding__button" type="button" href="/learn/{{$category->slug}}">
            <div class="onboarding__icon">
               <img src="/img/category/{{ $category->slug }}/{{ $category->img }}" alt="{{ $category->slug }}">
            </div>
            <div class="onboarding__info">
               <p class="onboarding__text">{{ $category->name }}</p>
            </div>
         </a>
      @endforeach
   </section>  

@endsection

@section('title', 'Learn')