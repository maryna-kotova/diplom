@extends('layouts.main')

@section('content') 

   <figure class="article__img">
      <img src="/img/articles/{{ $article->img }}" alt="{{ $article->slug }}">
   </figure>

   <h1 class="article__title">{{ $article->name}}</h1>  
   
   <p>{{ $article->description }}</p>
      
   <div class="article__content">      
      {{ $article->content }}
   </div>

   <hr>
      
   <h2>Comments</h2>
   @include('messages.errors')
   @if(session('success'))
   <div class="alert alert-success">
      {{session('success')}}
   </div>        
   @endif 
   
   @auth
      <form action="/reviews" method="POST">
         @csrf
         <div class="form-group">            
         <input type="text"  
               id="nameReviews" 
               class="form-control @error('name') is-invalid @enderror" 
               name="nameReviews"       
               placeholder="Name"
               value="{{old('nameReviews')}}">
         @error('nameReviews') 
               <div class="invalid-feedback">{{$message}}</div>
         @enderror
         </div>
         <div class="form-group">            
            <textarea  id="review" 
                        class="form-control @error('reviews') is-invalid @enderror" name="review"                        
                        placeholder="Your text">{{old('review')}}</textarea>
            @error('review') 
                  <div class="invalid-feedback">{{$message}}</div>
            @enderror
         </div>
         <input type="hidden" name="article_id" value="{{$article->id}}">
         <button class="btn btn-outline-success btn-style">post</button>
      </form>    
   @else 
      <p>Only registered users can leave feedback</p>
      <a href="/login">Login</a> / <a href="/register">Register</a>
   @endauth
   
   <hr>
            
   @forelse ($reviews as $review)
      <div class="border p-3 m-3">
         {{$review->name}} | {{ $review->created_at->format('d.m.Y') }} 
         <hr>
         <bloquote>{{$review->review}}</bloquote>
      </div>
      @empty
         <p>No reviews yet</p>
   @endforelse      

@endsection

@section('title', 'Blog')