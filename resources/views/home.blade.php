{{-- 
  .1 rappresenta un'estensione della classe layout 
  .2 ci possono essere piu section
--}}

@extends('layouts.app')

@section('content')

  <div class="jumbotron">
    <div class="top-jumbo">
      <button class="blue-btn">CURRENT SERIES</button>
    </div>
    <div class="bottom-jumbo">
      <div class="container">
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
          <h6>fumetto</h6>
        </div>
      </div>
      <button class="blue-btn">LOAD MORE</button>
    </div>
  </div>

  <div class="information">
    <div class="container">
      <ul>
        <li>
          <div class="img-info">
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""> 
          </div>
          <a href="">DIGITAL COMICS</a>
        </li>
        <li>
          <div class="img-info">
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt=""> 
          </div>
          <a href="">dc merchandise</a>
        </li>
        <li>
          <div class="img-info">
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt=""> 
          </div>
          <a href="">subscription</a>
        </li>
        <li>
          <div class="img-info">
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt=""> 
          </div>
          <a href="">comic shop locator</a>
        </li>
        <li>
          <div class="img-info">
            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt=""> 
          </div>
          <a href="">dc power visa</a>
        </li>
      </ul>
    </div>
  </div>

@endsection
  
  

 