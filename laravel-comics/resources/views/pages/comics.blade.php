@extends('layouts.main-layout')

	@section('content')

    	<main>

          <div class="currentSeries">
               <span>CURRENT SERIES</span>
          </div>

          <ul class="movies-list">
               @foreach ($data as $comic)
               <li>
                    <a href="{{ route('singleComic', $loop -> index) }}">
                         <img src="{{ $comic['thumb']}}" alt="">
                         <h3>{{ $comic['series']}}</h3>
                    </a>
               </li>
               @endforeach
          </ul>

          <button>LOAD MORE</button>

          <ul class="blue-section">
               <li>
                    <img src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt=''>
                    <span> DIGITAL COMICS</span>
               </li>

               <li>
                    <img src="{{ asset('/storage/assets/buy-comics-merchandise.png') }}" alt=''>
                    <span> DC MERCHANDISE</span>
               </li>

               <li>
                    <img src="{{ asset('/storage/assets/buy-comics-subscriptions.png') }}" alt=''>
                    <span> SUBSCRIPTION</span>
               </li>

               <li>
                    <img src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt=''>
                    <span> COMIC SHOP LOCATOR</span>
               </li>

               <li>
                    <img src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt=''>
                    <span> DC POWER VISA</span>
               </li>
          </ul>
     </main>
	@endsection