<?php

  // Page Configuration
  $title = 'Redd | The social currency.';

?>
<?php include(COMPONENT_DIR . '/header.php'); ?>

<body class="slides scroll animated noPreload">

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
                <a href="https://rdd.tokenview.com/en/address/Rmhzj2GptZxkKBMqbUL6VjFcX8npDneAXR" target="_blank">
                  <h4 class="small margin-bottom-1">POSV v2 Dev Wallet</h4>
                </a>
                <p class="opacity-8 fix-5-12 toLeft">All developer funds are generated here before being transfered to
                  the main project wallet.</p>

                <span id="DynamicDevWalletTwoUSD" class="weight-5"
                  style="font-size:32pt;font-family: 'Rubik', sans-serif;">$---.--</span>&nbsp;&nbsp;<span
                  id="DynamicDevWalletTwoRDD" class="weight-4 opacity-6"
                  style="font-size:15pt;font-family: 'Rubik', sans-serif;">(--- RDD)</span>
                <a href="https://rdd.tokenview.com/en/address/Ru6sDVdn4MhxXJauQ2GAJP4ozpPpmcDKdc" target="_blank">
                  <h4 class="small margin-bottom-1">Main Dev Wallet</h4>
                </a>
                <p class="opacity-8 fix-4-12 toLeft">This is the main project wallet where the majority of funds are
                  stored for the project.</p>

                <span id="DynamicDevWalletThreeUSD" class="weight-5"
                  style="font-size:32pt;font-family: 'Rubik', sans-serif;">$---.--</span>&nbsp;&nbsp;<span
                  id="DynamicDevWalletThreeRDD" class="weight-4 opacity-6"
                  style="font-size:15pt;font-family: 'Rubik', sans-serif;">(--- RDD)</span>
                <a href="https://rdd.tokenview.com/en/address/Recrcq8moZjbEHVoJx6JiQ2mfZkQnktvnf" target="_blank">
                  <h4 class="small margin-bottom-1">The Redd Charity Fund</h4>
                </a>
                <p class="opacity-8 fix-4-12 toLeft">For charitable events/efforts, as noted in the PoSV
                  v2 spec. (See the <a href="assets/doc/Redd-Paper.pdf">Redd Paper</a> for details)</p>
              </li>
              <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
                <h3 class="margin-bottom-1">Major Donors</h3>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">10,000,000.00 RDD</span> – Anonymous (AH)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">5,075,577.10 RDD</span> – Reddhead JK (@ReddheadJK)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">4,862,429.00 RDD</span> – Patrick Seegers (@patrickseegers)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">4,101,508.25 RDD</span> – Tom (@MinasUngol)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">3,031,364.00 RDD</span> – ioDoug (@ioClub)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">2,942,113.00 RDD</span> – RoniToni (@teeroni)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">2,940,769.43 RDD</span> – rtong (@rebible)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">2,110,659.00 RDD</span> – Christopher (@Krestofa)</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">2,110,559.85 RDD</span> – 소풍같은삶 (@kbs10000) <svg class="popupTrigger" data-popup-id="pu-kbs" style="fill:orange;width:21px;height:21px;margin-bottom:-5px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg></p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">1,554,620.00 RDD</span> – @Chillh89</p>
                <p class="light margin-bottom-1 opacity-8"><span class="weight-6">1,252,200.00 RDD</span> – @fiische</p>
                <p class="light italic margin-bottom-1 opacity-8">* Click on <svg class="opacity-6" style="width:18px;height:18px;margin-bottom:-2px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg> to see how much has been paid back.</p>
                <p class="margin-bottom-0 opacity-8"><svg class="popupTrigger" data-popup-id="pu-kbs" style="fill:#8dc63f;width:21px;height:21px;margin-bottom:-4px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg> – Fully Repaid</p>
                <p class="margin-bottom-0 opacity-8"><svg class="popupTrigger" data-popup-id="pu-kbs" style="fill:orange;width:21px;height:21px;margin-bottom:-4px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg> – Partially Repaid</p>
              </li>
            </ul>
          </div>


        </div>
      </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/img-65.jpg)"></div>
  </section>

<!-- Popup KBS10000 -->
<div class="popup" data-popup-id="pu-kbs">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
        
        
        <h1>Repayment Status</h1>
        <p><span class="opacity-8">Status of 소풍같은삶 (@kbs10000) donation.</span></p>
        <div class="form-55 fix-5-12 popupContent">
          <div class="pad padding-top-3 shadow left selected">
          
          <p class="padding-top-2 cropBottom">1,000,000 RDD – REPAID</p>
          <p class="cropTop cropBottom">-------------</p>
          <p class="bold">1,110,559.85 RDD – Remaining Balance</p>
                   
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

  <!-- Sync to wallet balances -->
  <script>
    $(document).ready(function () {
      $.ajax({
        url: '/fundsapi/get',
        dataType: 'json',
        success: function (data) {
          $('#DynamicDevWalletOneUSD').html(data.DevWalletOne.USD)
          $('#DynamicDevWalletOneRDD').html(data.DevWalletOne.RDD)

          $('#DynamicDevWalletTwoUSD').html(data.DevWalletTwo.USD)
          $('#DynamicDevWalletTwoRDD').html(data.DevWalletTwo.RDD)

          $('#DynamicDevWalletThreeUSD').html(data.DevWalletThree.USD)
          $('#DynamicDevWalletThreeRDD').html(data.DevWalletThree.RDD)
        }
      })
    })
  </script>

<?php include(COMPONENT_DIR . '/footer.php'); ?>