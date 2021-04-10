@extends('layouts.main')

@section('content')    
   <div class="home">
      <div class="home__top">
         <div class="top">
            <p class="top__title">Learn programming languages <br>Online, Anytime, Anywhere.</p>
            <p class="top__endtitle">Learn on your own and get peer support.</p>
            <a class="btn btn-outline-success btn-style" href="/learn">Start Learning Now!</a>
         </div>         
         <img class="home__img" src="{{ asset('img/home/title.png') }}" alt="code">
      </div>            
   </div>
@endsection

@section('title', 'INcod')
