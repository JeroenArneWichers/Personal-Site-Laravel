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
        <a href="#persoonlijk-profiel" class="btn custom-button">Leer mij kennen</a>
    </div>
</div>
<div class="jumbotron custom-jumbotron-border">
</div>
</section>

<div class="container">
    <div class="row" id="persoonlijk-profiel">
        <div class="card col-md-12 p-3 spacer100top spacer200bottom border-0" data-aos="zoom-in-up" data-aos-duration="3000">
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
                    </div>
                </div>
            </div>
            <div class="row spacer100top">
                <div class="card col-md-4 border-0" data-aos="zoom-in-right" data-aos-duration="3000">
                        <i class="fa fa-briefcase custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center">WERKERVARING</p>
                    <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Junior webdeveloper<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Onderzoeker<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Vrijwilliger</p>
                </div>
                <div class="card col-md-4 border-0" data-aos="zoom-in-down" data-aos-duration="3000">
                        <i class="fa fa-chart-bar custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> VAARDIGHEDEN</p>
                    <p class="card-text text-justify">&nbsp &nbsp &nbsp &nbsp - Web development<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Bestuurskunde & overheidsmanagement<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Onderzoek<br>
                                                        &nbsp &nbsp &nbsp &nbsp - Integriteit</p>
                </div>
                <div class="card col-md-4 border-0" data-aos="zoom-in-left" data-aos-duration="3000">
                        <i class="fa fa-graduation-cap custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> OPLEIDING</p>
                    <p class="card-text text-justify"> - HBO Bestuurskunde en Overheidsmanagement</p>
                </div>
            </div>
            <div class="row spacer100top">
                <div class="card col-md-12 border-0">
                    <h1 class="text-center">EIGENSCHAPPEN</h1>
                    <p class="text-center">Een overzicht van mijn eigenschappen in vogelvlucht</p>
                </div>
            </div>
            <div class="row justify-content-center spacer25top">
                <div class="card col-md-3 custom-card-border pb-4 pt-4" data-aos="zoom-in-right" data-aos-duration="3000" id="custom-eigenschappen-talen">
                        <i class="fa fa-comments custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center">TALEN</p>
                    <table>
                        <tr>
                            <td>Nederlands</td>
                            <td>&emsp;*****</td>
                        </tr>
                        <tr>
                            <td>Engels</td>
                            <td>&emsp;****</td>
                        </tr>
                        <tr>
                            <td>Duits</td>
                            <td>&emsp;**</td>
                        </tr>
                    </table>
                </div>
                <div class="card col-md-3 ml-4 mr-4 custom-card-border pb-4 pt-4" data-aos="zoom-in-down" data-aos-duration="3000" id="custom-eigenschappen-ict">
                        <i class="fa fa-desktop custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> ICT SKILLS</p>
                    <table>
                        <tr>
                            <td>Laravel</td>
                            <td>&emsp;****</td>
                        </tr>
                        <tr>
                            <td>PHP</td>
                            <td>&emsp;***</td>
                        </tr>
                        <tr>
                            <td>JavaScript</td>
                            <td>&emsp;**</td>
                        </tr>
                        <tr>
                            <td>MySQL</td>
                            <td>&emsp;***</td>
                        </tr>
                        <tr>
                            <td>Git</td>
                            <td>&emsp;***</td>
                        </tr>
                        <tr>
                            <td>Scrum</td>
                            <td>&emsp;***</td>
                        </tr>
                        <tr>
                            <td>Linux</td>
                            <td>&emsp;***</td>
                        </tr>
                        <tr>
                            <td>Bootstrap</td>
                            <td>&emsp;****</td>
                        </tr>
                        <tr>
                            <td>CSS</td>
                            <td>&emsp;***</td>
                        </tr>
                        <tr>
                            <td>HTML</td>
                            <td>&emsp;****</td>
                        </tr>
                    </table>
                </div>
                <div class="card col-md-3 custom-card-border pb-4 pt-4" data-aos="zoom-in-left" data-aos-duration="3000" id="custom-eigenschappen-kwaliteiten">
                        <i class="fa fa-certificate custom-profile-icon text-center"></i>
                    <p class="card-text text-justify text-center"> KWALITEITEN</p>
                    <table>
                        <tr>
                            <td>Integriteit </td>
                            <td>&emsp;*****</td>
                        </tr>
                        <tr>
                            <td>Analytische vaardigheden</td>
                            <td>&emsp;*****</td>
                        </tr>
                        <tr>
                            <td>Betrokken</td>
                            <td>&emsp;****</td>
                        </tr>
                        <tr>
                            <td>Plannen </td>
                            <td>&emsp;****</td>
                        </tr>
                        <tr>
                            <td>Onafhankelijk</td>
                            <td>&emsp;*****</td>
                        </tr>
                        <tr>
                            <td>Samenwerken</td>
                            <td>&emsp;****</td>
                        </tr>
                    </table>
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

<div class="container">
    <div class="row" id="ICT-vaardigheden">
        <div class="card col-md-12 p-3 spacer200top spacer200bottom border-0" >
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="card-block" data-aos="zoom-in-right" data-aos-duration="3000">
                        <h2 class="card-title">ICT VAARDIGHEDEN</h2>
                        <p>Ik ben enkele zeer belangrijke ICT vaardigheden machting.<br><br>
                            Zo heb ik:<br>
                            &emsp;- Front-end development skills zoals HTML/CSS/Bootstrap/JavaScript<br>
                            &emsp;- Back-end development skills zoals PHP/Laravel/MySQL/Linux<br>
                            &emsp;- General development skills zoals Scrum/IDE/Version control/Cloud deployment<br>
                            &emsp;- Soft skills zoals Self improvement/Communication/Problem solving/Time management</p>
                        <p>Ook ben ik in staat om zeer zelfstandig te werken met computers. Ik heb een goede beheersing 
                            van het officepakket (tekstverwerker, presentatiesoftware etc.) Ook ben ik in staat om veilig 
                            en probleemoplossend digitaal te werken.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in-left" data-aos-duration="3000">
                    <img class="w-100 rounded" src="{{asset('img/welcome/ictvaardigheden.jpeg')}}">
                </div>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"Succes starts with a first step..."</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row" id="beleids-vaardigheden">
        <div class="card col-md-12 p-3 spacer200top spacer200bottom border-0">
            <div class="row align-items-center">
                <div class="col-md-4" data-aos="zoom-in-right" data-aos-duration="3000">
                    <img class="w-100 rounded" src="{{asset('img/welcome/politiek.jpg')}}">
                </div>
                <div class="col-md-8">
                    <div class="card-block" data-aos="zoom-in-left" data-aos-duration="3000">
                        <h2 class="card-title">BELEIDS VAARDIGHEDEN</h2>
                        <p>Tijdens mijn opleiding heb ik ervaring opgedaan op vele 
                                facetten van bestuurskunde en overheidsmanagement.</p>
                                <p>Competenties die eruit springen zijn:</p>
                                <p>- Het gehele traject van de totstandkoming van beleid. Hieronder valt het 
                                doen van onderzoek, wettelijke mogelijkheden inventariseren en het doen van 
                                beleidsvoorstellen.</p>
                                <p>- Het gehele proces van vergunningverlening. Activiteiten die hier bij horen 
                                zijn het doen van onderzoek naar de betreffende wetgeving en procedures. Processen 
                                rondom goedkeuring, afwijzing en/of beroep zijn ook onderdeel van mijn studie 
                                geweest.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"Succes is being a better version of yourself every day..."</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row" id="taal-vaardigheden">
        <div class="card col-md-12 p-3 spacer200top spacer200bottom border-0" >
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="card-block" data-aos="zoom-in-right" data-aos-duration="3000">
                        <h2 class="card-title">TAAL VAARDIGHEDEN</h2>
                        <p>- Nederlands is mijn moedertaal.</p>
                        <p>- Op het gebied van Engels ben ik zeer vaardig. Qua spreken en schrijven 
                            heb ik het niveau van een 'near native' spreker en schrijver. Dit heeft 
                            zich geuit in mijn specifieke geval dat ik ervaring heb met freelance vertalingen 
                            van Engels naar Nederlands voor Hexxatex subs. Ook vul ik mijn vrije uren met 
                            zelfstudie en zelf ontplooiing op het gebied van maatschappij en de menselijke geest. 
                            Ik heb onder andere de lezingen van Dr. Jordan Peterson, klinisch psycholoog verbonden 
                            aan de universiteit van Toronto, bestudeerd. Ook heb ik aandachtig de werken van 
                            Christopher Hitchens, Sam Harris en Maajid Nawaz gelezen. Deze werken en lezingen 
                            zijn allemaal in het Engels.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in-left" data-aos-duration="3000">
                    <img class="w-100 rounded" src="{{asset('img/welcome/debating.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"Every step of the way, a better version of yourself..."</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row" id="management-vaardigheden">
        <div class="card col-md-12 p-3 spacer200top spacer200bottom border-0" >
            <div class="row align-items-center">
                <div class="col-md-4" data-aos="zoom-in-right" data-aos-duration="3000">
                    <img class="w-100 rounded" src="{{asset('img/welcome/presenteren.jpeg')}}">
                </div>
                <div class="col-md-8">
                    <div class="card-block" data-aos="zoom-in-left" data-aos-duration="3000">
                        <h2 class="card-title">MANAGEMENT VAARDIGHEDEN</h2>
                        <p>Ik heb uitgebreide organisatorische- managementvaardigheden opgedaan tijdens mijn 
                            studies. Tijdens projecten waar samenwerking belangrijk is, had ik vaak een 
                            projectleidende rol. Daarbij was ik vaak de planner van het project met betrekking 
                            tot de deadlines en werkindeling.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"There will be setbacks, strife and struggles..."</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row" id="junior-webdeveloper">
        <div class="card col-md-12 p-3 spacer200top spacer200bottom border-0" >
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="card-block" data-aos="zoom-in-right" data-aos-duration="3000">
                        <h1 class="card-title">WERKERVARING</h1>
                        <h2 class="card-title">Junior webdeveloper<br>
                                CodeGorilla, Enschede<br>
                                nov 2018 - heden</h2>
                        <p>Intensieve bootcamp tot junior webdeveloper. Kennis opgedaan en leren werken met 
                            de vaardigheden van een front-end en back-end developer.</p>

                        </p>Individueel, en in teamverband, gewerkt aan verscheidene projecten:</p>
                                
                        <p>&emsp;- Webshop: in Laravel, PHP, MySQL, Bootstrap, HTML, CSS en Stripe API.<br>
                            &emsp;- Sociaal klusplatform: in Laravel, PHP, MySQL, Bootstrap, HTML en CSS.<br>
                            &emsp;- Pong: in JavaScript, Bootstrap, HTML en CSS.<br>
                            &emsp;- Romeins Museum: Laravel, Bootstrap, HTML en CSS.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in-left" data-aos-duration="3000">
                    <img class="w-100 rounded" src="{{asset('img/welcome/codegorillalogo.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"But to perservere is important, noble and just..."</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row" id="Onderzoeker">
        <div class="card col-md-12 p-3 spacer200top spacer200bottom border-0" >
            <div class="row align-items-center">
                    <div class="col-md-4" data-aos="zoom-in-right" data-aos-duration="3000">
                        <img class="w-100 rounded" src="{{asset('img/welcome/saxionlogo.jpg')}}">
                    </div>
                <div class="col-md-8" data-aos="zoom-in-left" data-aos-duration="3000">
                    <div class="card-block">
                        <h1 class="card-title">WERKERVARING</h1>
                        <h2 class="card-title">Onderzoeker<br>
                            Kenniscentrum Leefomgeving (KCL), Enschede<br>
                            jan 2012 - dec 2014</h2>
                        <p>De doelstelling van het onderzoek tijdens mijn stage was het in kaart brengen van lokale 
                            kwetsbaarheden met betrekking tot de integriteitsborging en het vergelijken van de lokale 
                            systemen met het Nationale Integriteitsysteem. Dat onderzoek gebeurde middels een enquête 
                            onder de lokale bevolking. Tijdens mijn afstuderen heeft mijn onderzoek zich gericht op het 
                            in kaart brengen van waarborgen die integriteit zouden moeten bevorderen. In mijn onderzoek 
                            zijn de verschillen in kaart gebracht tussen de theoretische/wettelijke voorschriften en de 
                            situatie in de praktijk. Ook zijn de wensen en aanbevelingen van de betrokken partijen in kaart 
                            gebracht. Dat onderzoek gebeurde middels interviews onder de betreffende actoren.</p>

                        </p>Voornaamste activiteiten van het werk waren gefocust op:<br>
                        &emsp;- contacten met de relevante actoren.<br>
                        &emsp;- kwantitatief onderzoek.<br>
                        &emsp;- kwalitatief onderzoek.<br>
                        &emsp;- het doen van beleidsvoorstellen op basis van gedaan onderzoek.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"And trough that perserverance you will grow and improve..."</h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row" id="Vrijwilliger">
        <div class="card col-md-12 p-3 spacer200top spacer200bottom border-0" >
            <div class="row align-items-center">
                <div class="col-md-8" data-aos="zoom-in-right" data-aos-duration="3000">
                    <div class="card-block">
                        <h1 class="card-title">WERKERVARING</h1>
                        <h2 class="card-title">Vrijwilliger<br>
                            Sportvereniging SDVV, Almelo<br>
                            jan 2004 - dec 2017</h2>
                        <p>Als vrijwilliger voor mijn sportvereniging SDVV heb ik meerdere taken vervuld. Ik werkte onder 
                            andere bij de horeca afdeling. Hierbij was ik verantwoordelijk voor de gehele bedrijfsvoering 
                            op één enkele dag in de week. Zo was ik verantwoordelijk voor de opening van de gelegenheid, 
                            afhandeling van bestellingen, bijhouden van inventaris, schoonmaak en afsluiting. Ik was ook 
                            gedurende één dag in de week assistent-baancommandant. Ik was mede verantwoordelijk voor de gehele 
                            bedrijfsvoering van de vereniging. Ik moest het verenigingsgebouw openen, de banen controleren, 
                            verkoop afhandelen, de registratie bijhouden en de administratie verzorgen. Tenslotte moest ik 
                            de eindcontrole doen en de afsluiting van het gebouw regelen. Tegelijkertijd was ik ook vaak het 
                            aanspreekpunt voor nieuwe leden. Ik sprak vaak met (potentieel) nieuwe leden en gaf inlichtingen 
                            over de mogelijkheden, rechten maar ook plichten van het deelnemen aan de sportvereniging</p>

                        </p>Voornaamste activiteiten van het werk waren gefocust op:<br>
                        &emsp;- afhandelen van bestellingen.<br>
                        &emsp;- bijhouden van administratie.<br>
                        &emsp;- controle en toezicht op veiligheid en naleving van wetten en regels.<br>
                        &emsp;- contacten met de klanten en (potentieel) nieuwe leden.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in-left" data-aos-duration="3000">
                    <img class="w-100 rounded" src="{{asset('img/welcome/sdvvlogo.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"And you will better yourself... 
                        walking that road..."</h1>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row spacer200top" id="portfolio">
        <div class="card col-md-12 border-0" data-aos="zoom-in-down" data-aos-duration="3000">
            <h1 class="text-center">PORTFOLIO</h1>
            <p>Dit is mijn portfolio pagina. Je kunt hier een kort inzicht krijgen op het 
                werk dat ik tot nu toe gedaan heb. Elke button linkt door naar de Github locatie.</p>
            <p>Of de live Heroku versie, mits deze beschikbaar is. De Heroku versie, wanneer deze een tijdje
                niet meer bezocht is, moet enkele momenten hebben om weer uit de slaap stand te komen.
            </p>
        </div>
    </div>
    <div class="row spacer25top">
        <div class="card col-md-3 border-0" data-aos="zoom-in-up" data-aos-duration="3000">
            <img src="{{asset('img/welcome/persoonlijke-site-voorpagina.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Deze site</h5>
                <p class="card-text">Deze pagina. Gemaakt met Laravel.</p>
                <a href="https://github.com/JeroenArneWichers/Personal-Site-Laravel" target="_blank" class="btn btn-block custom-btn">Github</a>
                <a href="#" target="_blank" class="btn btn-block custom-btn">Live</a>
            </div>
        </div>
        <div class="card col-md-3 border-0" data-aos="zoom-in-up" data-aos-duration="1500">
            <img src="{{asset('img/welcome/calculator-voorblad.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Rekenmachine</h5>
                <p class="card-text">Digitale rekenmachine gemaakt met JavaScript.</p>
                <a href="https://github.com/JeroenArneWichers/calculator" target="_blank" class="btn btn-block custom-btn">Github</a>
            </div>
        </div>
        <div class="card col-md-3 border-0" data-aos="zoom-in-up" data-aos-duration="3000">
            <img src="{{asset('img/welcome/contactlist-codegorilla-frontpage.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Adresboek</h5>
                <p class="card-text">Een simpele website gemaakt met JavaScript.</p>
                <a href="https://github.com/JeroenArneWichers/contactlist-codegorilla" target="_blank" class="btn btn-block custom-btn">Github</a>
            </div>
        </div>
        <div class="card col-md-3 border-0" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="{{asset('img/welcome/pong-screenshot.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pong</h5>
                <p class="card-text">Klassiek spel uit de jaren '70 gemaakt met JavaScript.</p>
                <a href="https://github.com/JeroenArneWichers/pong" target="_blank" class="btn btn-block custom-btn">Github</a>
                <a href="https://jw-pong.herokuapp.com/" target="_blank" class="btn btn-block custom-btn">Live</a>
            </div>
        </div>
    </div>
    <div class="row spacer25top spacer200bottom">
        <div class="card col-md-3 border-0" data-aos="zoom-in-up" data-aos-duration="1500">
            <img src="{{asset('img/welcome/webshop-laravel.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body ">
                <h5 class="card-title">Webshop</h5>
                <p class="card-text">Een webshop met Romeins thema. Gemaakt in Laravel.</p>
                <a href="https://github.com/JeroenArneWichers/webshop-laravel" target="_blank" class="btn custom-btn btn-block"> Github</a>
                <a href="https://roman-webshop-laravel.herokuapp.com/" target="_blank" class="btn btn-block custom-btn"> Live</a>
            </div>
        </div>
    </div>
</div>

<section id="quotes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="cta-title">"That road to succes..."</h1>
            </div>
        </div>
    </div>
</section> 

<div class="container">
    <div class="row spacer200top" id="contact">
        {{-- <div class="card col-md-12 border-0" data-aos="zoom-in-up" data-aos-duration="3000"> --}}
        <div class="card col-md-12 border-0">
            <h1 id="form-anchor" class="text-center">CONTACT</h1>
            <p>Dit is mijn contact pagina. Stuur me een @mail om contact met met op te nemen. Je kunt hier 
            ook mijn Linekdin checken. Ik zou het ook gaaf vinden als je mijn Github bijdragen wilt bekijken. 
            Al mijn werk staat daar op. Van het allereerste begin tot de meest flitsende codes die ik kan maken.</p>
            <p class="text-center"><i class="fa fa-envelope text-center"></i>&emsp;jwichers@hotmail.com</p>
            <div class="text-center custom-contact-icon mt-4">
            <a href="https://www.linkedin.com/in/jeroen-wichers-35a55051/" target="_blank" class="fab fa-linkedin mr-2"></a>
            <a href="https://github.com/JeroenArneWichers" target="_blank" class="fab fa-github ml-2"></a>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger spacer25top">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block spacer25top">
                <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
            </div>
            @endif
            <form class="spacer25top" method="post" action="{{url('sendemail/send#form-anchor')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="font-weight-bold">Plaats hier uw naam</label>
                    <input type="text" name="name" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Plaats hier uw @mail</label>
                    <input type="text" name="email" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Plaats uw bericht hier</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="send" class="btn custom-btn btn-block" value="Send" />
                </div>
            </form>
        </div>
    </div>
</div>

@endsection