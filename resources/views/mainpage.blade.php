@extends('layouts.layout')

@section('title', 'Main Page')

@section('content')
<head>

    <!-- My own CSS -->
    <link href="{{ asset('css/mainpage.css') }}" rel="stylesheet" type="text/css" >

</head>

<section id="hero">
<div class="jumbotron jumbotron-fluid custom-jumbotron img-fluid">
    <div class="container">
        <h1 class="text-center align-middle">Jeroen Arne Wichers</h1>
        <a href="#about" class="btn custom-button">Leer me kennen</a>
    </div>
</div>
</section>

<div class="container">
    <div class="row">
        <div class="card col-md-12 p-3 spacer200top" >
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100" src="{{asset('img/profielfoto2.jpg')}}">
                </div>
                <div class="col-md-8">
                    <div class="card-block">
                        <h2 class="card-title">Persoonlijk profiel</h2>
                        <p class="card-text text-justify">Ik ben een behulpzaam en collegiaal persoon die altijd nieuwsgierig is om nieuwe 
                            ervaringen op te doen. Ik ben een vaardige, allround medewerker met een hart voor de zaak met hbo werk- en denkniveau. 
                            <br><br>
                            Ik heb kennis en ervaring op het gebied van web development, bestuurskunde, overheidsmanagement, onderzoek en 
                            integriteit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="container">
    <div class="row spacer200top spacer200bottom">
        <div class="card col-md-4" data-aos="zoom-out-right" data-aos-duration="1500">
            <img src="{{asset('img/saxionlogo.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">OPLEIDING</h4>
                <ul>HBO Bestuurskunde en Overheidsmanagement Saxion, Enschede</ul>
            </div>
        </div>
        <div class="card col-md-4">
            <img src="{{asset('img/juniorwebdeveloper.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">VAARDIGHEDEN</h4>
                <p class="card-text">Kennis en ervaring op het gebied van bestuurskunde, overheidsmanagement,
                    onderzoek en integriteit. <br><br>Ook bezit ik de nodige skills voor de 21ste eeuw.</p>
            </div>
        </div>
        <div class="card col-md-4">
            <img src="{{asset('img/codegorillalogo.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title">WERKERVARING</h4>
                <ul>- Junior webdeveloper<br>- Onderzoeker<br>- vrijwilliger</ul>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="cta-title">"As we know. All roads lead to..."</h1>
        </div>
        </div>
    </div>
</section>

</div>
  
@endsection