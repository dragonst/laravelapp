@extends('layouts.master')

@section('content')
<div class="container mt-0 mt-lg-0 position-relative">
    <div class="row no-gutters justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row jo-main mb-5 pb-lg-5 align-items-center">
                <div class="col-12 col-lg-6 text-center">
                    <img src="{{ URL::to('img/logo.png') }}"
                         class="mb-4 img-fluid" alt="Jury.online logo"/>

                    <h1 style="font-size: 21px;">
                        ZERO COMMISSION FREELANCE PLATFORM
                    </h1>
                </div>

                <div class="col-12 col-lg-5 ml-auto">
                    <p class="mb-4 text-center">
                        Register now and get 30% bonus of each token purchase! Limited time offer!
                    </p>

                    <form method="post" action="{{ route('register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">

<input class="form-control text-center text-lg-left" id="email" name="email" placeholder="E-mail" required type="email" value="">

                        </div>

                        <div class="form-group">


<input class="form-control text-center text-lg-left" id="password" name="password" placeholder="Password" required type="password" value="">

                        </div>

                        <div class="form-group m-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                Sign Up
                            </button>
                        </div>
                        @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  {{ Session::get('message') }}
</div>

@endif
@if(Session::has('error-message'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
{{ Session::get('error-message') }}
</div>
@endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="particles"></div>
</section>




<div class="container">
<div class="row text-center align-items-center p-4">
<div class="col-12 col-lg-auto mx-auto mb-4 mb-lg-0">
    <a href="">
        <img src="/img/header/fm_logo.svg"
             alt="FM logo" class="w-100px">
    </a>
</div>

<div class="col-12 col-lg-auto mx-auto mb-4 mb-lg-0">
    <a href="http://cryptocoinsnews.com/">
        <img src="/img/header/cc_logo.png"
             alt="CC logo" class="w-200px">
    </a>
</div>

<div class="col-12 col-lg-auto mx-auto mb-4 mb-lg-0">
    <a href="http://cryptovest.com/">
        <img src="/img/header/cv_logo.svg"
             alt="CV logo" class="w-200px">
    </a>
</div>

<div class="col-12 col-lg-auto mx-auto mb-4 mb-lg-0">
    <a href="http://cointelegraph.com/">
        <img src="/img/header/ct_logo.png"
             alt="CT logo" class="w-200px">
    </a>
</div>

<div class="col-12 col-lg-auto mx-auto">
    <a href="http://businessinsider.com/">
        <img src="/img/header/bi_logo.jpg"
             alt="BI logo" class="w-100px">
    </a>
</div>
</div>
</div>

<section id="crowdsale" class="py-5 bg-primary">
<div class="container">
<h2 class="mb-5">
    CROWDSALE
</h2>

<div class="row no-gutters justify-content-center">
    <div class="col-12 col-lg-4 text-center mb-5" id="pre-ico">
        <h3 class="font-xlight mb-3">
            PRESALE BEGINS IN
        </h3>

        <div class="row no-gutters">
            <div class="col-12">

<div class="d-none">
<span id="days">Days</span>
<span id="hours">Hours</span>
<span id="minutes">Minutes</span>
<span id="seconds">Seconds</span>
</div>

<div id="countdown"></div>

            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4 text-center mb-5">
        <h3 class="font-xlight">
            1 ETH = 300 CHL<br>
            <small>30% bonus</small>
        </h3>

        <p>Minimum quantity: 500 CHL</p>

        <p class="mb-3 mb-lg-0">
            Date:
            23 october 14:00 UTC -<br>
            3 november 2017 14:00 UTC
        </p>
    </div>

    <div class="col-12 col-lg-4 text-center mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" id="spinner" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" height="133" width="105.47798719178425"><g id="SvgjsG1075" rel="mainfill" name="main_text" xmlns:name="mainText_mainfill" fill="#ffffff" transform="translate(52.738993595892126,133)"><path d=""></path></g><defs id="SvgjsDefs1074"></defs><g id="SvgjsG1076" rel="mainfill" name="symbol" xmlns:name="symbol_mainfill" fill="#ffffff" transform="translate(-34.46172264652383,-28.183271126966538) scale(34.880284833744795)"><g xmlns="http://www.w3.org/2000/svg"><g><polygon fill="" points="2.623,4.191 2.404,3.812 3.574,3.136 3.574,1.906 3.213,1.688 2.156,2.3 2.156,2.642 1.719,2.642     1.719,2.048 3.219,1.18 4.012,1.661 4.012,3.388   "></polygon></g><g><polygon fill="" points="1.781,3.818 0.99,3.338 0.988,1.609 2.379,0.808 2.598,1.186 1.426,1.862 1.428,3.092     1.787,3.311 2.846,2.698 2.846,2.356 3.283,2.356 3.283,2.951   "></polygon></g></g></g></svg>
    </div>
</div>



<div class="text-center">


    <a href="/ico" class="btn btn-primary">ICO page</a>
</div>
</div>
</section>

<section id="applications" class="pt-5 py-lg-5">
<div class="container">
<h2 class="mb-5">
    APPLICATIONS
</h2>

<div class="row text-center items-aligin-staer">
    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Zero Fees
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/percentage.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">
            ChainLancers fees are only 0% per job, several times lower than existing freelancing platforms. Freelancing will finally be a lucrative AND reliable way of earning money!
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            No Censorship
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/customer-protection.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">
            Due to ChainLancers being built on the Ethereum blockchain, your job offers cannot be deleted under any circumstances. Political correctness and personal feelings do not play a role on Chain Lancers because the blockchain is incorruptible.
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Secure Payment
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/milestone-payments.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            On ChainLancers, you only have to pay if you are 100% satisfied with the work performance or when certain project milestones are reached. In case of a dispute, the Token holders will decide the outcome. You will never again encounter an unfair money loss due to unilateral decisions made by a biased centralized authority.
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Fair Dispute Settlement
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/dispute-resolution.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            Never depend on a single, centralized authority to settle your disputes again. With our Tokenholder Tribunal, the decision lies in the hands of thousands for Tokenholders, guaranteeing a fair decision.
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Smart Contracts
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/handshake2.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            Customizable Well-Executed Contracts and Events
        </p>
    </div>
</div>

<div class="row text-center d-none d-lg-flex">
    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/percentage.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            ChainLancers fees are only 0% per job, several times lower than existing freelancing platforms. Freelancing will finally be a lucrative AND reliable way of earning money!
        </p>
    </div>

    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/customer-protection.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Due to ChainLancers being built on the Ethereum blockchain, your job offers cannot be deleted under any circumstances. Political correctness and personal feelings do not play a role on Chain Lancers because the blockchain is incorruptible.
        </p>
    </div>

    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/milestone-payments.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            On ChainLancers, you only have to pay if you are 100% satisfied with the work performance or when certain project milestones are reached. In case of a dispute, the Tokenholders will decide the outcome. Never again will you encounter an unfair money loss due to unilateral decisions made by a biased centralized authority.
        </p>
    </div>

    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/dispute-resolution.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Never depend on a single, centralized authority to settle your disputes again. With our Tokenholder Tribunal, the decision lies in the hands of thousands for Tokenholders, guaranteeing a fair decision.
        </p>
    </div>
    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/handshake2.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Customizable Well-Executed Contracts and Events.
        </p>
    </div>
</div>
</div>
</section>

<section id="how-it-works" class="bg-primary py-5">
<div class="container text-center">
<h2 class="mb-5">
    HOW IT WORKS
</h2>

<div class="row justify-content-center mb-4">
    <div class="col-12 col-lg-8">

<iframe src="https://www.youtube.com/embed/OdgOzvtx0mI?vq=hd720" class="w-100 mb-5" height="400"
        style="border: 0;" allowfullscreen></iframe>

        <!--<img src="/img/how-it-works/schemec619.png?v=1.0"
             alt="jury.online schema" class="img-fluid">-->
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-12 col-lg-8 text-justify">
         Our Ethereum based platform uses the escrow payment system which holds the contract fees until the set obligations of the contract are met. On project completion, the funds are released, securing the interests of both the parties involved.

        <div class="d-flex justify-content-between mt-5 whitepaper-btn">
            <a href="static/WhitePaper.pdf"
               class="btn btn-primary" target="_blank">Whitepaper</a>

        </div>
    </div>
</div>
</div>
</section>

<section id="features" class="pt-5 py-lg-5">
<div class="container">
<h2 class="mb-5">
    FEATURES
</h2>

<div class="row text-center">
    <div class="col-12 col-lg-4 mb-5">
        <h4 class="mb-4">
            Security
        </h4>

        <img src="/img/features/protocol.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Уour payments will be protected through smart contracts based on Ethereum.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5">
        <h4 class="mb-4">
            Easy to start
        </h4>

        <img src="/img/features/power.svg"
             alt="jury.online features" class="mb-4">

        <p>
            You can start right now, using your network to find a client. You can connect your ChainLancers profile with every social network which you are registered.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5">
        <h4 class="mb-4">
            High demand for help
        </h4>

        <img src="/img/features/loudspeaker-with-two-sound-waves.svg"
             alt="jury.online features" class="mb-4">

        <p>
            While the marketplace of freelancers is competitive, the need for quality, reliable freelancers is growing. Many businesses don't have suitable employees and ChainLancers is there solution for them.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h4 class="mb-4">
            0% Commission
        </h4>

        <img src="/img/applications/percentage.svg"
             alt="jury.online features" class="mb-4">

        <p>
            The payments will be without any fees between participants.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h4 class="mb-4">
            Tribunal
        </h4>

        <img src="/img/features/auction.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Neutral settlement of disputes - Freelancers Tribunal
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h4 class="mb-4">
            Quick Results
        </h4>

        <img src="/img/features/checked.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Every client will be able to receive all offers from freelancers within minutes. Easy & secure payments for the completed work. Only release payment when you are 100% satisfied with the work provided. Both sides can feel in good hands because of the ChainLancers Tribunal!
        </p>
    </div>
</div>
</div>
</section>

<section id="team" class="pt-5 py-lg-5 bg-primary">
<div class="container">
<h2 class="mb-5">
    TEAM
</h2>

<div class="row justify-content-center mb-5">
    <div class="col-12 col-lg-8 col-xl-6">

<iframe src="https://www.youtube.com/embed/pw5g5cpd10U?vq=hd720" allowfullscreen
        class="w-100" height="300" style="border: 0;"></iframe>

    </div>
</div>

<h2 class="mb-5">
    DEVELOPERS
</h2>

<div class="row mb-5 justify-content-center">

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/asf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online АЛЕКСАНДР ШЕВЦОВ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">АЛЕКСАНДР ШЕВЦОВ</h5>

<p class="text-uppercase">
    <small>ОСНОВАТЕЛЬ & ГЛАВНЫЙ РАЗРАБОТЧИК</small>
</p>










    <a href="http://linkedin.com/in/alexander-shevtsov-bb55aa150" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/kkf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online КОНСТАНТИН КУДРЯВЦЕВ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">КОНСТАНТИН КУДРЯВЦЕВ</h5>

<p class="text-uppercase">
    <small>ТЕХНИЧЕСКИЙ ДИРЕКТОР</small>
</p>










    <a href="http://linkedin.com/in/kostyak" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/smf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online СЕРГЕЙ МИШИН">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">СЕРГЕЙ МИШИН</h5>

<p class="text-uppercase">
    <small>DEVOPS - СПЕЦИАЛИСТ</small>
</p>










</div>
</div>

        </div>

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/naf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online Никита Алексеев">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">Никита Алексеев</h5>

<p class="text-uppercase">
    <small>Арт-директор</small>
</p>

</div>
</div>

        </div>
</div>
        </div>
</div>
        </div>
</div>
</div>
</section>

<section id="roadmap" class="pt-5 mb-5">
<div class="container position-relative">
<h2 class="mb-5">
    ROADMAP
</h2>

<div class="position-absolute d-none mx-2 d-lg-block mt-1 pt-1">
    <div class="row mb-0 pb-3 text-center">
        <div class="col"></div>

        <div class="col" style="height: 180px;">
            <div class="font-bold">2017</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div>
            Beginning of CHL Token sale
        </div>

        <div class="col">
            <div class="font-bold">2017</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div>
            ChainLancers Platform Launch
        </div>

        <div class="col">
            <div class="font-bold">2017</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div>
            Distribution of CHL Tokens
        </div>

        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>

    <div class="row mb-3 pb-2 text-center">
        <div class="col"></div>

        <div class="col">
            <div class="font-bold">2017</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div></br>
            ChainLancers App Launch

        </div>

        <div class="col mt-0 mt-4">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div>
            UX/UI Upgrades Solution Reviews & Platform Upgrades
        </div>

        <div class="col mt-4">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div>
            Market Opportunities
App & Platform Outreach
3rd Party Integrations
        </div>

        <div class="col mt-4" style="height: 180px;">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div>
            Upgrades in functionality
Platform Console Upgrades
        </div>

        <div class="col mt-4">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                xx.xx
            </div>
            ChainLancers App Stability & Support
        </div>

        <div class="col"></div>
    </div>


</div>

<img src="/img/roadmap/roadmapc619.jpg?v=1.0"
     class="img-fluid d-none pt-3 d-lg-block mx-auto">

<div class="row no-gutters d-lg-none">
    <div class="col-3 col-sm-2 bg-roadmap-blue"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2017</div>
        <div>xx.xx</div>
        <div>Beginning of
CHL Token sale</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-blue"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2017</div>
        <div>xx.xx</div>
        <div>ChainLancers Platform Launch</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-blue"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2017</div>
        <div>Сентябрь</div>
        <div>ICO и разработка проектов</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-black-1"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2017</div>
        <div>xx.xx</div>
        <div>Distribution of CHL Tokens</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-black"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>xx.xx</div>
        <div>Coinlancer App Launch
Third party integrations
Cloud Support</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-orange-1"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>xx.xx</div>
        <div>UX/UI Upgrades
Solution Reviews & Platform Upgrades
</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-orange-1"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>xx.xx</div>
        <div>Market Analysis
Market Opportunities
App & Platform Outreach
3rd Party Integrations</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-orange-1"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>xx.xx</div>
        <div>Enhancements
Upgrades in functionality
Platform Console Upgrades</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-black"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>xx.xx</div>
        <div>Coinlancer App Stability & Support</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-black"></div>


    <div class="col-3 col-sm-2 bg-roadmap-orange-dot"></div>

</div>
</div>
</section>


<div class="white-popup-block telegram-popup mfp-hide mfp-fade text-center p-3 p-md-5" id="follow-telegram">
<img src="/img/social/telegram_logo.png"
 class="w-100px" alt="telegram logo">

<h4 class="my-3 my-md-5">
Jury.online - мы всегда онлайн в нашем телеграм чате!
</h4>

<a href="http://t.me/juryonline_community" class="btn btn-primary"
style="padding-left: 50px; padding-right: 50px;">Присоединиться</a>
</div>
@endsection
