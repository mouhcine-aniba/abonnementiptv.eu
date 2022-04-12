@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endsection
@section('content')

    <section class="jumbtronHome">
        <div class="splide">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                    <div class="jumbElement d-flex row justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1529629468183-b9cddd7be13b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')">
                        <div class="col">
                            <button>Click here</button>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">            
                    <div class="jumbElement d-flex row justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1560169897-fc0cdbdfa4d5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80')">
                        <div class="col">
                        <button>Click there</button>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">            
                    <div class="jumbElement d-flex row justify-content-center" style="background-image: url('https://images.unsplash.com/photo-1555041469-6b4032059d29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')">
                        <div class="col">
                        <button>Click Mere</button>
                        </div>
                    </div>
                </li>
              </ul>
            </div>
            
            <!-- Add the progress bar element -->
            <div class="my-slider-progress">
              <div class="my-slider-progress-bar"></div>
            </div>
        </div>
    </section>

    @include('layouts.about')
    @include('layouts.card')
    @include('layouts.avantage')
    @include('layouts.contact')

    <script src="{{ asset('js/indexEngine.js') }}"></script>
@endsection 