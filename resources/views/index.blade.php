@extends('layouts.master')

@section('content')
<div class="container mt-0 mt-lg-0 position-relative">
    <div class="row no-gutters justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="row jo-main mb-5 pb-lg-5 align-items-center">
                <div class="col-12 col-lg-6 text-center">
                    <img src="{{ URL::to('img/logo.png') }}"
                         class="mb-4 img-fluid" alt="Jury.online logo"/>

                    <h1 style="font-size: 22px;">
                        ZERO COMISSION FREELANCE PLATFORM
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
    <a href="http://financemagnates.com/cryptocurrency/news/jury-online-plans-ico-modernize-dispute-resolution-using-smart-contracts/">
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
    Краудсейл
</h2>

<div class="row no-gutters justify-content-center">
    <div class="col-12 col-lg-4 text-center mb-5" id="pre-ico">
        <h3 class="font-xlight mb-3">
            PRE-ICO начнется через
        </h3>

        <div class="row no-gutters">
            <div class="col-12">

<div class="d-none">
<span id="days">Дней</span>
<span id="hours">Часов</span>
<span id="minutes">Минут</span>
<span id="seconds">Секунд</span>
</div>

<div id="countdown"></div>

            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4 text-center mb-5">
        <h3 class="font-xlight">
            1 ETH = 300 JOT<br>
            <small>30% скидка</small>
        </h3>

        <p>Минимальное количество: 500 JOT</p>

        <p class="mb-3 mb-lg-0">
            Даты:
            23 октября 14:00 UTC -<br>
            3 ноября 2017 14:00 UTC
        </p>
    </div>

    <div class="col-12 col-lg-4 text-center mb-5">
        <svg xmlns="http://www.w3.org/2000/svg" id="spinner" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" height="133" width="105.47798719178425"><g id="SvgjsG1075" rel="mainfill" name="main_text" xmlns:name="mainText_mainfill" fill="#ffffff" transform="translate(52.738993595892126,133)"><path d=""></path></g><defs id="SvgjsDefs1074"></defs><g id="SvgjsG1076" rel="mainfill" name="symbol" xmlns:name="symbol_mainfill" fill="#ffffff" transform="translate(-34.46172264652383,-28.183271126966538) scale(34.880284833744795)"><g xmlns="http://www.w3.org/2000/svg"><g><polygon fill="" points="2.623,4.191 2.404,3.812 3.574,3.136 3.574,1.906 3.213,1.688 2.156,2.3 2.156,2.642 1.719,2.642     1.719,2.048 3.219,1.18 4.012,1.661 4.012,3.388   "></polygon></g><g><polygon fill="" points="1.781,3.818 0.99,3.338 0.988,1.609 2.379,0.808 2.598,1.186 1.426,1.862 1.428,3.092     1.787,3.311 2.846,2.698 2.846,2.356 3.283,2.356 3.283,2.951   "></polygon></g></g></g></svg>
    </div>
</div>



<div class="text-center">


    <a href="ico.html" class="btn btn-primary">ICO page</a>
</div>
</div>
</section>

<section id="applications" class="pt-5 py-lg-5">
<div class="container">
<h2 class="mb-5">
    ПРИМЕНЕНИЕ
</h2>

<div class="row text-center items-aligin-staer">
    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Безопасная сделка
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/escrow.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            Деньги хранятся на балансе смарт-контракта сделки.
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Защита клиентов
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/customer-protection.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            Защищенный залог в криптовалюте гарантирует вашим клиентам надежную безопасность.
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Поэтапные платежи
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/milestone-payments.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            Совершайте сделки, в которых оплата разбита на несколько этапов.
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Разрешение споров
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/dispute-resolution.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            Воспользуйтесь экспертной оценкой, чтобы узнать кто прав, а кто виноват.
        </p>
    </div>

    <div class="col-12 col-lg">
        <h4 class="mb-4">
            Безграничные сделки
        </h4>

        <p class="d-lg-none mb-5">
            <img src="/img/applications/overseas-deals.svg"
                 alt="jury.online applications" class="mb-4 d-block mx-auto">

            Расстояния иллюзорны. Проводите сделки со всем миром.
        </p>
    </div>
</div>

<div class="row text-center d-none d-lg-flex">
    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/escrow.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Деньги хранятся на балансе смарт-контракта сделки.
        </p>
    </div>

    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/customer-protection.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Защищенный залог в криптовалюте гарантирует вашим клиентам надежную безопасность.
        </p>
    </div>

    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/milestone-payments.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Совершайте сделки, в которых оплата разбита на несколько этапов.
        </p>
    </div>

    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/dispute-resolution.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Воспользуйтесь экспертной оценкой, чтобы узнать кто прав, а кто виноват.
        </p>
    </div>
    <div class="col-12 col-lg mb-5 mb-lg-0">
        <img src="/img/applications/overseas-deals.svg"
             alt="jury.online applications" class="mb-4">
        <p>
            Расстояния иллюзорны. Проводите сделки со всем миром.
        </p>
    </div>
</div>
</div>
</section>

<section id="how-it-works" class="bg-primary py-5">
<div class="container text-center">
<h2 class="mb-5">
    КАК ЭТО РАБОТАЕТ
</h2>

<div class="row justify-content-center mb-4">
    <div class="col-12 col-lg-8">
        <iframe src="http://youtube.com/embed/ofFKvgUVxEE" class="w-100 mb-5" height="400"
                style="border: 0;" allowfullscreen></iframe>

        <img src="/img/how-it-works/schemec619.png?v=1.0"
             alt="jury.online schema" class="img-fluid">
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-12 col-lg-8 text-justify">
        Стороны соглашаются с условиями сделки, затем сделка помещается в блокчейн в форме смарт-контракта, который хранит средства в криптовалюте. После успешного выполнения сделки, деньги отправляются получателю. Если между сторонами сделки возникает спор, их сделка рассматривается группой специализированных независимых судей-экспертов, которые оглашают итоговый вердикт по сделке большинством голосов.

        <div class="d-flex justify-content-between mt-5">
            <a href="static/jury.online.whitepaper.2.00eb3.pdf?v2.0"
               class="btn btn-primary">Whitepaper</a>
               <a href="static/jury.online.lightpaper0eb3.pdf?v2.0"
               class="btn btn-secondary">Lightpaper</a>
        </div>
    </div>
</div>
</div>
</section>

<section id="features" class="pt-5 py-lg-5">
<div class="container">
<h2 class="mb-5">
    ФУНКЦИИ
</h2>

<div class="row text-center">
    <div class="col-12 col-lg-4 mb-5">
        <h4 class="mb-4">
            Независимый от блокчейна протокол
        </h4>

        <img src="/img/features/protocol.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Свободный протокол с ясной спецификацией и возможностью реализации на базе любого блокчейна со смарт-контрактами.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5">
        <h4 class="mb-4">
            Честный судебный процесс
        </h4>

        <img src="/img/features/fair-trial.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Jury.online включает в себя ряд антикоррупционных систем. Судьи не будут знать вердикт других судей с целью избежания принятия решения по принципу проголосовавшего большинства. Экономическая и рейтинговая мотивация заставляет судей расследовать и разрешать споры справедливо и правильно, а не случайным образом выносить свои приговоры.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5">
        <h4 class="mb-4">
            Рынок<br>судейства
        </h4>

        <img src="/img/features/jury-market.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Jury.online создает рынок независимых судей. Судьи заранее предоставляют цену, за которую готовы рассматривать споры, позволяя контрагентам наперед знать сколько будет стоить возможный спор и точно оценивать риски.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h4 class="mb-4">
            Безопасность
        </h4>

        <img src="/img/features/security.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Децентрализованная безопасная работа на основе технологии блокчейна.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h4 class="mb-4">
            Кастомизация судейства
        </h4>

        <img src="/img/features/customization.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Контрагенты выбирают пулы судей, специализирующиеся на конкретной сфере сделки.
        </p>
    </div>

    <div class="col-12 col-lg-4 mb-5 mb-lg-0">
        <h4 class="mb-4">
            Интеграция
        </h4>

        <img src="/img/features/integration.svg"
             alt="jury.online features" class="mb-4">

        <p>
            Простое подключение платформы к сторонним сервисам: онлайн-магазинам, биржам фрилансеров.
        </p>
    </div>
</div>
</div>
</section>

<section id="team" class="pt-5 py-lg-5 bg-primary">
<div class="container">
<h2 class="mb-5">
    Команда jury.online
</h2>

<div class="row justify-content-center mb-5">
    <div class="col-12 col-lg-8 col-xl-6">
        <iframe src="http://youtube.com/embed/gsjSwsodVsY" allowfullscreen
                class="w-100" height="300" style="border: 0;"></iframe>
    </div>
</div>

<h2 class="mb-5">
    РАЗРАБОТЧИКИ
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

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/maf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online АНДРЕЙ МУХАМЕТВАЛЕЕВ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">АНДРЕЙ МУХАМЕТВАЛЕЕВ</h5>

<p class="text-uppercase">
    <small>WEB - РАЗРАБОТЧИК</small>
</p>










    <a href="http://linkedin.com/in/mukhametvaleev" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

</div>

<h2 class="mb-5">
    Команда
</h2>

<div class="row mb-5 justify-content-center" id="popup-trigger">

        <div class="col-12 col-sm-6 col-lg-4 px-2 px-sm-0 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/apf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online АРТ ПИРОЖКОВ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">АРТ ПИРОЖКОВ</h5>

<p class="text-uppercase">
    <small>ГЛАВНЫЙ ОПЕРАЦИОННЫЙ ДИРЕКТОР</small>
</p>










    <a href="http://linkedin.com/in/art-pirozhkov-2a87b912a" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-sm-6 col-lg-4 px-2 px-sm-0 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/abf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online АНАСТАСИЯ БОРМОТОВА">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">АНАСТАСИЯ БОРМОТОВА</h5>

<p class="text-uppercase">
    <small>PR</small>
</p>










    <a href="http://linkedin.com/in/anastasia-bormotova/" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-sm-6 col-lg-4 px-2 px-sm-0 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/mkf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online МАРИНА КОБЯКОВА">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">МАРИНА КОБЯКОВА</h5>

<p class="text-uppercase">
    <small>МЕНЕДЖЕР ПО РАЗВИТИЮ БИЗНЕСА</small>
</p>










    <a href="http://linkedin.com/in/marina-kobyakova-32a00710" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-sm-6 col-lg-4 px-2 px-sm-0 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/ssf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online САРТАК САХАИ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">САРТАК САХАИ</h5>

<p class="text-uppercase">
    <small>ДИРЕКТОР СООБЩЕСТВ</small>
</p>










    <a href="http://linkedin.com/in/sarthaksahai" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-sm-6 col-lg-4 px-2 px-sm-0 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/ezf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online ЭРИК ЗИМКИНД">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">ЭРИК ЗИМКИНД</h5>

<p class="text-uppercase">
    <small>МАРКЕТИНГ</small>
</p>










    <a href="http://linkedin.com/in/eric-zimkind-8ba72568" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-sm-6 col-lg-4 px-2 px-sm-0 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/vuf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online Владислав Усов">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">Владислав Усов</h5>

<p class="text-uppercase">
    <small>МЕНЕДЖЕР СООБЩЕСТВ</small>
</p>










    <a href="http://linkedin.com/in/vladislav-usov-67273914b" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-sm-6 col-lg-4 px-2 px-sm-0 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/avf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online АНДРЕЙ ВЕРЕССОВ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">АНДРЕЙ ВЕРЕССОВ</h5>

<p class="text-uppercase">
    <small>Юридическая регистрация</small>
</p>




    <a href="http://brightlaw.ee/en/about" target="_blank">
        <img src="/img/social/wechat.png"
            alt="website" class="mr-2"></a>







    <a href="http://linkedin.com/in/andrei-veressov-b535ba21" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

</div>

<h2 class="mb-5 mt-5">
    КОНСУЛЬТАНТЫ
</h2>

<div class="row justify-content-center">

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/mgf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online МИХАЭЛЬ ГРИНБЕРГ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">МИХАЭЛЬ ГРИНБЕРГ</h5>

<p class="text-uppercase">
    <small>МЕДИА-КОНСУЛЬТАНТ, ОСНОВАТЕЛЬ И ГЕНЕРАЛЬНЫЙ ДИРЕКТОР FINANCE MAGNATES</small>
</p>










    <a href="http://linkedin.com/in/greenbergmichael" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/dmf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online ДЭВИД МАЛИЦ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">ДЭВИД МАЛИЦ</h5>

<p class="text-uppercase">
    <small>PR КОНСУЛЬТАНТ, ОСНОВАТЕЛЬ И ГЕНЕРАЛЬНЫЙ ДИРЕКТОР DAVID MALITS PR</small>
</p>










    <a href="http://linkedin.com/in/david-malits-59823531" target="_blank">
        <img src="/img/social/linkedin.png"
            class="mr-2 social"></a>

</div>
</div>

        </div>

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/adbf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online ДЭВИД БАРЭЛ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">ДЭВИД БАРЭЛ</h5>

<p class="text-uppercase">
    <small>ЮРИДИЧЕСКИЙ КОНСУЛЬТАНТ</small>
</p>


    <a href="mailto:Law.barel@gmail.com">
        <img src="/img/social/wechat.png"
            class="mr-2"></a>









</div>
</div>

        </div>

        <div class="col-12 col-lg-4 px-2 px-lg-3 mb-4 mb-lg-0">

<div class="media p-0 p-sm-3 h-100">
<img src="/img/team/igf195.png?v=2.1"
 class="d-flex mr-3 avatar" alt="Jury.online ИЛЬЯ ЕГОРОВ">

<div class="media-body">
<h5 class="text-left" style="word-spacing: 100vw;">ИЛЬЯ ЕГОРОВ</h5>

<p class="text-uppercase">
    <small>КОНСУЛЬТАНТ ПО МАРКЕТИНГУ, ПАРТНЕР В RUSMARKETING DIGITAL AGENCY</small>
</p>








    <a href="http://facebook.com/ilya.golotin" target="_blank">
        <img src="/img/social/facebook.png"
             class="mr-2"></a>



</div>
</div>

        </div>

</div>
</div>
</section>

<section id="roadmap" class="pt-5 mb-5">
<div class="container position-relative">
<h2 class="mb-5">
    ДОРОЖНАЯ КАРТА
</h2>

<div class="position-absolute d-none mx-2 d-lg-block mt-1 pt-1">
    <div class="row mb-0 pb-3 text-center">
        <div class="col"></div>

        <div class="col" style="height: 180px;">
            <div class="font-bold">2017</div>
            <div class="mb-4 pb-3">
                Сентябрь
            </div>
            ICO и разработка проектов
        </div>

        <div class="col">
            <div class="font-bold">2017</div>
            <div class="mb-4 pb-3">
                Июль - Август
            </div>
            Анализ рынка
        </div>

        <div class="col">
            <div class="font-bold">2017</div>
            <div class="mb-4 pb-3">
                Июнь
            </div>
            Оценка идей
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
                Октябрь -
                Декабрь
            </div>
            ICO
        </div>

        <div class="col mt-0 mt-4">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                Январь
            </div>
            Технический WP
        </div>

        <div class="col mt-4">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                Март
            </div>
            Релиз web-версии
        </div>

        <div class="col mt-4" style="height: 180px;">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                Апрель
            </div>
            Релиз приложения для Android
        </div>

        <div class="col mt-4">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                Май
            </div>
            Релиз приложения для iOS
        </div>

        <div class="col"></div>
    </div>

    <div class="row mb-1 pt-1 pb-3 text-center">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>

        <div class="col mt-4">
            <div class="font-bold">2018/19</div>
            <div class="mb-4 pb-3">
                Зима
            </div>
            Интеграция со сторонними сервисами
        </div>

        <div class="col mt-4">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                Осень
            </div>
            Интеграция инфраструктуры
        </div>

        <div class="col">
            <div class="font-bold">2018</div>
            <div class="mb-4 pb-3">
                Лето -<br>
                Осень
            </div>
            Открытие сторонних пулов
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
        <div>Июнь</div>
        <div>Оценка идей</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-blue"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2017</div>
        <div>Июль - Август</div>
        <div>Анализ рынка</div>
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
        <div>Октябрь - Декабрь</div>
        <div>Краудсейл: ICO</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-black"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>Январь</div>
        <div>Релиз: Технический WP</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-orange-1"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>Март</div>
        <div>Релиз: web-версия</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-orange-1"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>Апрель</div>
        <div>Релиз: Android приложение</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-orange-1"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>Май</div>
        <div>Релиз: iOS приложение</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-black"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>Лето - Осень</div>
        <div>Открытие сторонних пулов</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-black"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018</div>
        <div>Осень</div>
        <div>Интеграция инфраструктуры</div>
    </div>

    <div class="col-3 col-sm-2 bg-roadmap-orange-dot"></div>
    <div class="col-9 mb-4">
        <div class="font-bold">2018/19</div>
        <div>Зима</div>
        <div>Интеграция со сторонними сервисами</div>
    </div>
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
