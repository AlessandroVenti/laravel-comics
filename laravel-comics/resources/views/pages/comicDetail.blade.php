@extends('layouts.main-layout')

	@section('content')

    	<main>
          
          <div class="blueDiv">
               <img src="{{ $elem['thumb']}}" alt="">
          </div>

          <div class="detail-section1">

               <div>
                    <h3>{{ $elem['title']}}</h3> 

                    <div class="green-box">

                         <div>
                              <span>U.S PRICE: </span>
                              
                         </div>

                         <div>
                              <span>AVAILABLE</span>
                              <span><a href="">Check availability</a></span>
                         </div>

                    </div>

                    <p> {{$elem['description']}} </p>
               </div>

               <div>
                    <h4>ADVERTISEMENT</h4>
                    <img src="{{ asset('/storage/assets/adv.jpg') }}" alt=''>
               </div>

          </div>

          <div class="detail-section2">

               <div class="talent">

                    <div>
                         <h2>Talent</h2>
                    </div>

                    <div>
                         <h4>Art by</h4>

                         <a href="">
                              @foreach ($elem['artists'] as $artist)
                                   @if($loop->last)
                                        {{ $artist }}
                                   @else
                                   {{ $artist }}, 
                                   @endif
                              @endforeach
                         </a>
                    </div>

                    <div>
                         <h4>Written by</h4>
                         <a href="">
                              @foreach ($elem['writers'] as $writer)
                                   @if($loop->last)
                                        {{ $writer }}
                                   @else
                                   {{ $writer }}, 
                                   @endif
                              @endforeach
                         </a>
                    </div>

               </div>

               <div class="specs">

                    <div>
                         <h2>Specs</h2>
                    </div>

                    <div>
                         <h4>Series:</h4>

                         <h5> {{ $elem['series'] }}</h5>
                    </div>

                    <div>
                         <h4>U.S Price:</h4>

                         <h5> {{ $elem['price'] }}</h5>
                    </div>

                    <div>
                         <h4>On Sale Date:</h4>

                         <h5> {{ $elem['sale_date'] }}</h5>
                    </div>

               </div>

          </div>

          <div class="detail-section3">

               <div>

                    <h4>DIGITAL COMICS</h4>

                    <img src="{{ asset('/storage/assets/icons-1.png') }}" alt=''>

               </div>

               <div>

                    <h4>SHOP DC</h4>

                    <img src="{{ asset('/storage/assets/icons-2.png') }}" alt=''>

               </div>

               <div>

                    <h4>COMIC SHOP LOCATOR</h4>

                    <img src="{{ asset('/storage/assets/icons-3.png') }}" alt=''>

               </div>

               <div>

                    <h4>SUBSCRIPTIONS</h4>

                    <img src="{{ asset('/storage/assets/icons-4.png') }}" alt=''>

               </div>

          </div>


          {{-- <ul class="movies-list">
               <li>              
                    <img src="{{ $elem['thumb']}}" alt="">
                    <h3>{{ $elem['series']}}</h3> 
               </li>
          </ul> --}}

     </main>
	@endsection