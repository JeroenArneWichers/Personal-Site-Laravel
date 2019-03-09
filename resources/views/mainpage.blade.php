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
        <div class="card col-md-12 p-3 spacer200top border-0" >
            <div class="row">
                <div class="col-md-4">
                    <img class="w-100 rounded" src="{{asset('img/profielfoto2.jpg')}}">
                </div>
                <div class="col-md-8">
                    <div class="card-block">
                        <h2 class="card-title">Persoonlijk profiel</h2>
                        <p class="card-text text-justify">Ik ben een behulpzaam en collegiaal persoon die altijd nieuwsgierig is om nieuwe 
                            ervaringen op te doen. Ik ben een vaardige, allround medewerker met een hart voor de zaak met hbo werk- en denkniveau. 
                            <br><br>
                            Ik heb kennis en ervaring op het gebied van web development, bestuurskunde, overheidsmanagement, onderzoek en 
                            integriteit.</p>
                        {{-- <p class="card-text text-justify"><i class="fa fa-briefcase custom-profile-icon"></i> WERKERVARING:</p>
                        <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Junior webdeveloper<br>
                                                          &nbsp &nbsp &nbsp &nbsp - Onderzoeker<br>
                                                          &nbsp &nbsp &nbsp &nbsp - Vrijwilliger</p>
                        <p class="card-text text-justify"><i class="fa fa-chart-bar"></i> VAARDIGHEDEN:</p>
                        <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Web development<br>
                                                          &nbsp &nbsp &nbsp &nbsp - Bestuurskunde & overheidsmanagement<br>
                                                          &nbsp &nbsp &nbsp &nbsp - Onderzoek<br>
                                                          &nbsp &nbsp &nbsp &nbsp - Integriteit</p>
                        <p class="card-text text-justify"><i class="fa fa-graduation-cap"></i> OPLEIDING:</p>
                        <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - HBO Bestuurskunde en Overheidsmanagement Saxion, Enschede</p> --}}
                    </div>
                </div>
            </div>
            <div class="row spacer100top">
                <div class="card col-md-4 border-0" data-aos="zoom-out-right" data-aos-duration="1500">
                        <i class="fa fa-briefcase custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center">WERKERVARING</p>
                    <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Junior webdeveloper<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Onderzoeker<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Vrijwilliger</p>
                </div>
                <div class="card col-md-4 border-0" data-aos="zoom-out-right" data-aos-duration="1500">
                        <i class="fa fa-chart-bar custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> VAARDIGHEDEN</p>
                    <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Web development<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Bestuurskunde & overheidsmanagement<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Onderzoek<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Integriteit</p>
                </div>
                <div class="card col-md-4 border-0" data-aos="zoom-out-right" data-aos-duration="1500">
                        <i class="fa fa-graduation-cap custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> OPLEIDING</p>
                    <p class="card-text text-justify"> - HBO Bestuurskunde en Overheidsmanagement</p>
                </div>
            </div>
            <div class="row spacer100top">
                <div class="card col-md-12 border-0">
                    <h1 class="text-center">EIGENSCHAPPEN</h1>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-3" data-aos="zoom-out-right" data-aos-duration="1500">
                        <i class="fa fa-briefcase custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center">WERKERVARING</p>
                    <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Junior webdeveloper<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Onderzoeker<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Vrijwilliger</p>
                </div>
                <div class="card col-md-3 ml-4 mr-4" data-aos="zoom-out-right" data-aos-duration="1500">
                        <i class="fa fa-chart-bar custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> VAARDIGHEDEN</p>
                    <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Web development<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Bestuurskunde & overheidsmanagement<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Onderzoek<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Integriteit</p>
                </div>
                <div class="card col-md-3" data-aos="zoom-out-right" data-aos-duration="1500">
                        <i class="fa fa-graduation-cap custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> OPLEIDING</p>
                    <p class="card-text text-justify"> - HBO Bestuurskunde en Overheidsmanagement</p>
                </div>
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