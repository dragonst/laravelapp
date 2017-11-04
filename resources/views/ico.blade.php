@extends('layouts.master')

@section('content')
<section id="ico" class="py-5 pt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-auto text-center mb-5 mb-lg-0">
              <svg width="105.47798719178425" id="spinner" height="133" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">

<g>
<title>Layer 1</title>
<g fill="#ffffff" id="SvgjsG1075">
 <path id="svg_1"/>
</g>
<g transform="translate(-34.46172332763672,-28.183271408081055) scale(34.88028335571289) " fill="#ffffff" id="SvgjsG1076">
 <g id="svg_2" xmlns="http://www.w3.org/2000/svg">
  <g id="svg_3">
   <polygon id="svg_4" points="2.623,4.191 2.404,3.812 3.574,3.136 3.574,1.906 3.213,1.688 2.156,2.3 2.156,2.642 1.719,2.642     1.719,2.048 3.219,1.18 4.012,1.661 4.012,3.388   " fill="#2b2b2b"/>
  </g>
  <g id="svg_5">
   <polygon id="svg_6" points="1.781,3.818 0.99,3.338 0.988,1.609 2.379,0.808 2.598,1.186 1.426,1.862 1.428,3.092     1.787,3.311 2.846,2.698 2.846,2.356 3.283,2.356 3.283,2.951   " fill="#2b2b2b"/>
  </g>
 </g>
</g>
</g>
</svg>
              <!--  <p>
                    <a href="#get-jot"
                      class="btn btn-primary open-popup-link">GET JOT</a>
                </p>-->
            </div>

            <div class="col-12 col-lg ml-0 ml-lg-4">
                <h3 class="text-center text-lg-left">CHL token distribution</h3>

                <p class="text-lg-left text-center">Total distributed</p>

                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar"
                         style="width: 0;" aria-valuenow="0"
                         aria-valuemin="0"
                         aria-valuemax="100"
                         data-toggle="tooltip" data-placement="top"
                         title="0 CHL"></div>
                    <div class="progress-bar bg-delimiter"
                         role="progressbar"
                         style="width: 20%" aria-valuenow="20"
                         aria-valuemin="0" aria-valuemax="100"
                         data-toggle="tooltip" data-placement="top"
                         title="Pre-ICO distribution">4 200 000
                    </div>
                    <div class="progress-bar bg-default"
                         role="progressbar"
                         style="width: 80%" aria-valuenow="80"
                         aria-valuemin="0" aria-valuemax="100"
                         data-toggle="tooltip" data-placement="top"
                         title="ICO distribution">16 800 000
                    </div>
                </div>

                <p class="mb-4">
                    0
                    <span class="float-right">21 000 000</span>
                </p>

                <!--<div class="row no-gutters lead mb-2 mb-lg-5 text-center">
                    <div class="col my-auto my-lg-0 text-lg-left">Pre-ICO distribution</div>
                    <div class="col my-auto my-lg-0 ">4 200 000 JOT</div>
                    <div class="col my-auto">0
                        <div class="text-secondary">
                            <small class="font-xlight">ETH Received</small>
                        </div>
                    </div>
                    <div class="col my-auto">23 October 14:00<br>UTC</div>
                </div>

                <div class="row no-gutters lead mb-5 text-center">
                    <div class="col my-auto my-lg-0 text-lg-left">ICO distribution</div>
                    <div class="col my-auto my-lg-0 ">16 800 000 JOT</div>
                    <div class="col my-auto">
                        0
                        <div class="text-secondary">
                            <small class="font-xlight">ETH Received</small>
                        </div>
                    </div>
                    <div class="col my-auto">13 November 14:00<br>UTC</div>
                </div>
            </div>
        </div>-->

  </div>
  <div class="container">
          <div class="row justify-content-center mb-5">
              <div class="col-12 col-md-6 col-lg-4 text-center">
                  <h3 class="mb-4">PRE-ICO STARTS IN</h3>


  <div class="d-none">
      <span id="days">Days</span>
      <span id="hours">Hours</span>
      <span id="minutes">Minutes</span>
      <span id="seconds">Seconds</span>
  </div>

  <div id="countdown"></div>

              </div>
          </div>

          <p class="text-primary text-center">
              Depending on the Ethereum network traffic, figures may be delayed.
          </p>
      </div>
</section>

<div class="bg-primary mb-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>ICO will have the following stages</h3>

                <p class="mb-5 text-center">Maximum of
                    <strong class="font-bold">30 000 000 CHLs</strong>
                    will be issued during ICO
                </p>

                <h4 class="mb-4 mb-lg-4 bg-jot p-3 border-radius">
                    Presale
                    <small>(23 October 14:00 UTC - 3 November 2017 14:00 UTC)</small>
                </h4>
                <div class="row mb-5 justify-content-center">
                    <div class="col col-lg-4 text-center">
                        <h3 class="font-xlight mb-3">
                            1 ETH = 300 CHL<br>(1 CHL ≈ 0.0033 ETH)<br>
                        </h3>
                        <h4 class="mb-3">30% discount</h4>
                        <p>
                            Minimal amount:
                            <strong class="font-bold">500 CHL</strong>
                            (1.66 ETH)
                        </p>
                    </div>

                    <div class="col col-lg-6 ml-0 ml-lg-5">
                        <p>
                            Up to the
                            <strong class="font-bold">20%</strong>
                            of all tokens available to public will be allocated with a
                            <strong class="font-bold">30%</strong>
                            discount during an
                            <strong class="font-bold">11-day</strong>
                            presale
                        </p>
                        <p>
                            Presale limit:
                            <strong class="font-bold">20%</strong>
                            of all tokens for sale =
                            <strong class="font-bold">4 200 000 CHL</strong>
                            up to
                            <strong class="font-bold">14 000 ETH</strong>
                        </p>
                    </div>
                </div>

                <h4 class="mb-4 mb-lg-4 bg-jot p-3 border-radius">Sale
                    <small>(13 November 14:00 UTC - 13 December 14:00 UTC)</small>
                </h4>

                <div class="row justify-content-center">
                    <div class="col col-lg-4 text-center">
                        <h3 class="font-xlight mb-3">
                            1 ETH = 210 CHL<br>(1 CHL ≈ 0.0048 ETH)<br>
                        </h3>
                        <h4 class="mb-3">
                            Starts from 20% discount
                        </h4><p>
                            Minimal amount:
                            <strong class="font-bold">5 CHL</strong>
                        </p>
                    </div>

                    <div class="col col-lg-6 ml-0 ml-lg-5">
                        <p>
                            Time bonuses for early contributors will start from
                            <strong class="font-bold">20%</strong>
                            discount on the first day with linear daily decrease by
                            <strong class="font-bold">2⁄3%</strong>
                            (2 percent for 3 days)
                        </p>
                        <p>
                            Sale limit:
                            <strong class="font-bold">16 800 000 CHL</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container mb-5">
        <h4 class="mb-4 mb-lg-5">Tokens will be distributed as follows</h4>

        <div class="row align-items-center">
            <div class="col-12 col-lg mb-4 mb-lg-0">
                <p>
                    <strong class="font-bold">70%</strong>
                    Will be available for sale
                </p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-jot" role="progressbar"
                         style="width: 70%;" aria-valuenow="0"
                         aria-valuemin="70" aria-valuemax="70"></div>
                </div>

                <p>
                    <strong class="font-bold">20%</strong>
                    Go to the jury.online team and will be blocked for a period of 6 months. After that period
                    <strong class="font-bold">10%</strong>
                    of the total amount blocked will be unblocked every month, with the whole sum therefore unblocked in 16 months after the ICO end
                </p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar"
                         style="width: 20%;" aria-valuenow="0"
                         aria-valuemin="20" aria-valuemax="20"></div>
                </div>

                <p>
                    <strong class="font-bold">7%</strong>
                    go to advisers and for bounty programmes
                </p>

                <div class="progress mb-3">
                    <div class="progress-bar bg-info" role="progressbar"
                         style="width: 7%;" aria-valuenow="0"
                         aria-valuemin="7" aria-valuemax="7"></div>
                </div>

                <p>
                    <strong class="font-bold">3%</strong>
                    remain as a stock of liquidity to ensure flawless and independent operation of jury.online before token enters cryptocurrency exchanges and the market stabilizes, as well as for compensations in exceptional cases
                </p>

                <div class="progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar"
                         style="width: 3%;" aria-valuenow="0"
                         aria-valuemin="3" aria-valuemax="3"></div>
                </div>
            </div>

            <div class="col">
                <p>
                    For every
                    <strong class="font-bold">7 CHLs</strong>
                    sold through ICO jury.online issues
                    <strong class="font-bold">3 CHLs</strong>
                    for itself. So up to
                    <strong class="font-bold">21 000 000 CHL</strong>
                    will be available for public and up to
                    <strong class="font-bold">9 000 000 CHL</strong>
                    will be reserved by Chain Lancers
                </p>
                <p>
                    ICO minimum cap:
                    <strong class="font-bold">3 000 000 CHL</strong><br>
                    (10 000 ETH ≈ $3
                    mln during presale,
                    14 285 ETH ≈ $4.29
                    mln during sale,
                    with 1 ETH ≈ $300)
                </p>
                <p>
                    Tokens can be bought for
                    <strong class="font-bold">ETH</strong>
                    and
                    <strong class="font-bold">BTC</strong>,
                    as well as for fiat money
                </p>
                <p>
                    Token transfer would be available only after the end of ICO
                </p>
                <p>
                    The start and the end of each stage will be linked to specific Ethereum block numbers and will later be published at the website
                </p>
            </div>
        </div>
      <!--  <div class="text-center mt-5">
            <a href="#get-jot" class="btn btn-primary open-popup-link">GET JOT</a>
        </div>-->
    </div>
@endsection
