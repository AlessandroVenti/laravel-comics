@extends('layouts.main-layout')

	@section('content')

    	<main>
          
          <div class="blueDiv">
          </div>

          <ul class="movies-list">
               <li>              
                    <img src="{{ $elem['thumb']}}" alt="">
                    <h3>{{ $elem['series']}}</h3> 
               </li>
          </ul>

     </main>
	@endsection