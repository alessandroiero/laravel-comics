@extends('layouts.app');
@section('page.title')
   Homepage 
@endsection
@section("page.content")
    {{-- cards --}}
    <div class="container">
        <button class="btn">CURRENT SERIES</button>
        <div class="cards">
                @foreach ($comics as $comic)
                <div class="card" >
                    <img src="{{$comic['thumb']}}" alt="">
                    <h3>{{$comic['series']}}</h3>
                </div>
                @endforeach
        </div>
        <div class="button-container">
            <button class="btn-load-more">LOAD MORE</button>
        </div>
    </div>
    {{-- /cards --}}

    {{-- description --}}
    <section class="description">
        <div class="container blue">
        <ul>
            <li>
                <img src="{{Vite::asset("resources/img/buy-comics-digital-comics.png")}}">
                <span>DIGITAL COMICS</span>
            </li>
            <li>
            <img src="{{Vite::asset("resources/img/buy-comics-merchandise.png")}}"/>
            <span>DC MERCHANDISE</span>
            </li>
            <li>
            <img src="{{Vite::asset("resources/img/buy-comics-shop-locator.png")}}" />
            <span>SUBSCRIPTION</span>
            </li>
            <li>
            <img src="{{Vite::asset("resources/img/buy-comics-subscriptions.png")}}" />
            <span>COMIC SHOP LOCATOR</span>
            </li>
            <li>
            <img src="{{Vite::asset("resources/img/buy-dc-power-visa.svg")}}" />
            <span> DC POWER VISA</span>
            </li>
        </ul>
     </section>
     {{-- /description --}}

     {{-- faq --}}
    <section class="faq">
        <div class="container footer-list">
            <nav class="lista">
                <div class="list-left">
                    <h3>DC COMICS</h3>
                    <ul>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                    <h3>SHOP</h3>
                    <ul>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>
                    </ul>
                </div>
                <div class="list-center">
                    <h3>DC</h3>
                    <ul>
                        <li>Terms Of Use</li>
                        <li>Privacy policy (New)</li>
                        <li>ad Choices</li>
                        <li>Advertising</li>
                        <li>Jobs</li>
                        <li>Subscriptions</li>
                        <li>Talent Workshops</li>
                        <li>CPSC Certificates</li>
                        <li>Rating</li>
                        <li>Shop Help</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="list-right">
                    <h3>SITE</h3>
                    <ul>
                        <li>DC</li>
                        <li>MAD Magazine</li>
                        <li>DC Kids</li>
                        <li>DC universe</li>
                        <li>DC Power Visa</li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    {{-- /faq --}}

@endsection