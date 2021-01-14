<?php

  // Page Configuration
  $title = 'Redd | The social currency.';

  // Page Configuration
  $navigations = [
    []
  ];

  $css [] = 'https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css';

  $js[] = 'https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js';
  $js[] = '/js/charts.js';

  $bodyClasses = 'stack loadFundsData';

?>
<?php include(COMPONENT_DIR . '/header.php'); ?>
<?php include(COMPONENT_DIR . '/svg.php'); ?>
<?php include(COMPONENT_DIR . '/sidebar.php'); ?>

  <!-- Slide 1 (#65) -->
  <section class="slide fade-6 kenBurns">
    <div class="content">
      <div class="container">
        <div class="wrap">

          <div class="fix-10-12">
            <h1 class="margin-bottom-2 ae-1">Project Funding</h1>
            <p class="larger light ae-2"><span class="opacity-8">Redd prides itself on being fully transparent with our
                community. As a result, this page shows the real time status of the projects funding along with the list
                of our top donors.</span></p>
          </div>

          <div class="fix-10-12">
            <ul class="flex flex-47 left margin-top-4">
              <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                <span id="DynamicDevWalletOneUSD" class="weight-5"
                  style="font-size:32pt;font-family: 'Rubik', sans-serif;">$---.--</span>&nbsp;&nbsp;<span
                  id="DynamicDevWalletOneRDD" class="weight-4 opacity-6"
                  style="font-size:15pt;font-family: 'Rubik', sans-serif;">(--- RDD)</span>
                <a href="https://rdd.tokenview.com/en/address/Rmhzj2GptZxkKBMqbUL6VjFcX8npDneAXR" target="_blank" rel="noreferrer">
                  <h4 class="small margin-bottom-1">POSV v2 Dev Wallet</h4>
                </a>
                <p class="opacity-8 fix-5-12 toLeft">All developer funds are generated here before being transfered to
                  the main project wallet.</p>

                <span id="DynamicDevWalletTwoUSD" class="weight-5"
                  style="font-size:32pt;font-family: 'Rubik', sans-serif;">$---.--</span>&nbsp;&nbsp;<span
                  id="DynamicDevWalletTwoRDD" class="weight-4 opacity-6"
                  style="font-size:15pt;font-family: 'Rubik', sans-serif;">(--- RDD)</span>
                <a href="https://rdd.tokenview.com/en/address/Ru6sDVdn4MhxXJauQ2GAJP4ozpPpmcDKdc" target="_blank" rel="noreferrer">
                  <h4 class="small margin-bottom-1">Main Dev Wallet</h4>
                </a>
                <p class="opacity-8 fix-4-12 toLeft">This is the main project wallet where the majority of funds are
                  stored for the project.</p>

                <span id="DynamicDevWalletThreeUSD" class="weight-5"
                  style="font-size:32pt;font-family: 'Rubik', sans-serif;">$---.--</span>&nbsp;&nbsp;<span
                  id="DynamicDevWalletThreeRDD" class="weight-4 opacity-6"
                  style="font-size:15pt;font-family: 'Rubik', sans-serif;">(--- RDD)</span>
                <a href="https://rdd.tokenview.com/en/address/Recrcq8moZjbEHVoJx6JiQ2mfZkQnktvnf" target="_blank" rel="noreferrer">
                  <h4 class="small margin-bottom-1">The Redd Charity Fund</h4>
                </a>
                <p class="opacity-8 fix-4-12 toLeft">For charitable events/efforts, as noted in the PoSV
                  v2 spec. (See the <a href="assets/doc/Redd-Paper.pdf">Redd Paper</a> for details)</p>
                  
                <small class="opacity-6">Last Updated: <span id="lastUpdatedCaption"></span></small>
              </li>
              <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                <h3 class="margin-bottom-1">Major Donors</h3>
                <p id="loadingDonorsCaption">Loading ...</p>
                <div class="hidden">
                  <div id="donorsContent"></div>
                  <p class="light italic margin-bottom-1 opacity-8">* Click on <svg class="opacity-6" style="width:18px;height:18px;margin-bottom:-2px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg> to see how much has been paid back.</p>
                  <p class="margin-bottom-0 opacity-8"><svg style="fill:#8dc63f;width:21px;height:21px;margin-bottom:-4px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg> – Fully Repaid</p>
                  <p class="margin-bottom-0 opacity-8"><svg style="fill:orange;width:21px;height:21px;margin-bottom:-4px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg> – Partially Repaid</p>
                </div>
              </li>
            </ul>
          </div>


        </div>
      </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/img-65.jpg)"></div>
  </section>

<!-- Chartist Colors -->
<style>
  .ct-series-a .ct-slice-donut {
    stroke: #F44336;
  }
  .ct-series-b .ct-slice-donut {
    stroke: #e7e7e7;
  }
</style>

<!-- Slide 2 -->
<section class="slide whiteSlide chartist">
  <div class="content">
    <div class="container">
      <div class="wrap left">

        <div class="fix-12-12">
          <ul class="flex">
            <li class="col-5-12">
              <div class="ct-chart" style="height: 400px"></div>
            </li>
            <li class="col-7-12">
              <h1>ReddCoin (RDD) Exchange Crowdfund</h1>
              <p>As mentioned in a recent blog post, Redd is exploring listing ReddCoin (RDD) on either BitMart, Liquid.com, Bitrue, CoinTiger or ProBit. As various members of our community has long requested more access to RDD, being a voluntary-based project we don’t exactly have the funds necessary to meet most requirements outlined by exchanges. As a result, we are looking to the community to help crowdfund this process. If you would like to donate ReddCoin to these efforts, please send it to the below address.</p>
              <h4>So far <span id="FundingExchanges2021Amount" style="color:red;">--- RDD</span> have been raised!</h4>
              <p><strong>ReddCoin (RDD) Donation Address:</strong> RqQ4qnJCAcqxPqsvMtyJx73eyVyWtpjN73</p>
              <a href="https://medium.com/projectredd/reddhead-community-outreach-reddcoin-rdd-exchange-crowdfund-2020-cc65c0f7c55b" target="_blank" class="button red small cropLeft">See details<i class="material-icons right">open_in_new</i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Popup KBS10000 -->
<div id="donorPopups"></div>
<div class="donorPopupDefault popup">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
        <h1>Repayment Status</h1>
        <p><span class="opacity-8">Status of <span class="donor-name"></span> donation.</span></p>
        <div class="form-55 fix-5-12 popupContent">
          <div class="pad padding-top-3 shadow left selected">
            <p class="padding-top-2 cropBottom"><span class="donor-paid"></span> – REPAID</p>
            <p class="cropTop cropBottom">-------------</p>
            <p class="bold"><span class="donor-rest"></span> – Remaining Balance</p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php include(COMPONENT_DIR . '/footer.php'); ?>
