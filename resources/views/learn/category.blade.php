@extends('layouts.main')

@section('content') 
   <div class="categorytop">
      <div class="categorytop__name">
         <h1 class="title text-center">{{ $category->name }}</h1>
         <p>{{ $category->description }}</p>
      </div>
      <figure class="categorytop__img">
         <img src="/img/category/{{ $category->slug }}/{{ $category->img }}" alt="{{ $category->slug }}"> 
      </figure>       
   </div>  

   <section  class="contents">
      <div class="contents__h2">
         <h2>Contents</h2> 
      </div>     
      <div class="contents__points">
         <article class="point">
            <h4 class="point__title">01 - Оnline tutorials <i class="fas fa-angle-down"></i></h4>
            <div class="point__text">
               <ul>
                  @foreach ( $tutorials as $tutorial )
                     <li><a href="{{ $tutorial->url }}"  target="_blank">{{$loop->iteration}}. {{ $tutorial->name }}</a></li>                  
                  @endforeach
               </ul>
            </div>
         </article>
         <article class="point">
            <h4 class="point__title">02 - Books <i class="fas fa-angle-down"></i></h4>
            <div class="point__text">
               <ul>
                  @foreach ( $books as $book )
                     <li><a href="{{ $book->url }}"  target="_blank">{{$loop->iteration}}. {{ $book->name }}. - {{ $book->author }}</a></li>                  
                  @endforeach
               </ul>
            </div>
         </article>
      </div> 
   </section>     

   <div class="expression">  
      <div>
         <p>Practice greatly increases the likelihood that students will permanently remember new information.</p> 
      </div>                     
   </div> 

@endsection

@section('title', $title)