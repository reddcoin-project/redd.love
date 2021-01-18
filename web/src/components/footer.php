<?php

  if(!isset($footerClasses)) {
    $footerClasses = '';
  }
  if(!isset($showNextSlideButton)) {
    $showNextSlideButton = false;
  }

  $footerScriptsString = '';
  if(PRODUCTION === true && file_exists(CACHE_DIR . '/scripts.min.js')) {
    $footerScriptsString = '<script src="/scripts.min.js?[version]"></script>';
  } else {
    foreach($js as $jsPath) {
      $footerScriptsString .= '<script src="' . $jsPath . '?[version]"></script>';
    }
  }

?>
<?php if($showNextSlideButton === true) { ?>
<nav class="panel bottom firstSlideOnly">
  <div class="sections">
    <div class="center"><span class="nextSlide"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use></svg></span></div>
  </div>
</nav>
<?php } ?>

<!-- Panel Bottom #12 -->
<nav class="panel bottom <?php echo $footerClasses; ?>">

  <!-- English language -->
  <div class="sections desktop" data-lang="en">
    <div class="left uppercase">We <svg style="width:27px;height:25px;margin-bottom:-3px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#redd-heart"></use></svg> our community</div>
    <div class="center">

      <ul class="menu uppercase" data-lang="en">
        <li><a href="/privacy/">Privacy</a></li>
        <li><a href="/privacy/">Terms of Use</a></li>
        <li><a href="/press/">Press Kit</a></li>
        <li><a href="javascript:" class="popupTrigger opacity-8" data-popup-id="contact">Donations</a></li>
      </ul>
      
    </div>
    <div class="right">
      <ul class="menu crop">
        <li style="margin:0 0 0 0;"><a href="https://twitter.com/ProjectReddTW" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://www.youtube.com/ReddProject" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#youtube"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://medium.com/projectredd" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#medium"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://t.me/ReddcoinOfficial" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a></li>
      </ul>
    </div>
  </div>

  <!-- Deutsch language -->
  <div class="sections desktop" data-lang="de" style="display:none;">
    <div class="left uppercase">Wir <svg style="width:27px;height:25px;margin-bottom:-3px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#redd-heart"></use></svg> euch</div>
    <div class="center">
      <ul class="menu uppercase">
        <li style="margin:0 0 0 0;"><a href="/privacy/">Privatsphäre</a></li>
        <li style="margin:0 0 0 0;"><a href="/privacy/">Nutzungsbedingungen</a></li>
        <li style="margin:0 0 0 0;"><a href="/press/">Pressemappe</a></li>
        <li style="margin:0 0 0 0;"><a href="javascript:" class="popupTrigger opacity-8" data-popup-id="contact">Spenden</a></li>
      </ul>
    </div>
    <div class="right">
      <ul class="menu crop">
        <li style="margin:0 0 0 0;"><a href="https://twitter.com/ProjectReddTW" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://www.youtube.com/ReddProject" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#youtube"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://medium.com/projectredd" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#medium"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://t.me/ReddcoinOfficial" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a></li>
      </ul>
    </div>
  </div>

  <!-- Korean language -->
  <div class="sections desktop" data-lang="ko" style="display:none;">
    <div class="left uppercase">우리는 <svg style="width:27px;height:25px;margin-bottom:-3px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#redd-heart"></use></svg> 우리의 커뮤니티</div>
    <div class="center">
      <ul class="menu uppercase">
        <li><a href="/privacy/">개인정보</a></li>
        <li><a href="/privacy/">이용약관</a></li>
        <li><a href="/press/">보도자료</a></li>
        <li><a href="javascript:" class="popupTrigger opacity-8" data-popup-id="contact">기부</a></li>
      </ul>
    </div>
    <div class="right">
      <ul class="menu crop">
        <li style="margin:0 0 0 0;"><a href="https://twitter.com/ProjectReddTW" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://www.youtube.com/ReddProject" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#youtube"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://medium.com/projectredd" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#medium"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://t.me/ReddcoinOfficial" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a></li>
      </ul>
    </div>
  </div>
  
  <!-- Russian language -->
  <div class="sections desktop" data-lang="ru" style="display:none;">
    <div class="left uppercase">Мы <svg style="width:27px;height:25px;margin-bottom:-3px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#redd-heart"></use></svg> наше сообщество</div>
    <div class="center">

      <ul class="menu uppercase">
        <li style="margin:0 0 0 0;"><a href="/privacy/">Политика конфиденциальности</a></li>
        <li style="margin:0 0 0 0;"><a href="/privacy/">Условия использования</a></li>
        <li style="margin:0 0 0 0;"><a href="/press/">Подборка для прессы</a></li>
        <li style="margin:0 0 0 0;"><a href="javascript:" class="popupTrigger opacity-8" data-popup-id="contact">Пожертвования</a></li>
      </ul>
      
    </div>
    <div class="right">
      <ul class="menu crop">
        <li style="margin:0 0 0 0;"><a href="https://twitter.com/ProjectReddTW" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://www.youtube.com/ReddProject" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#youtube"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://medium.com/projectredd" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#medium"></use></svg></a></li>
        <li style="margin:0 0 0 0;"><a href="https://t.me/ReddcoinOfficial" target="_blank" rel="noreferrer"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a></li>
      </ul>
    </div>
  </div>

  <div class="sections compact hidden"></div>
  
</nav>

<!-- Popup Donation Window -->
<div class="popup animated" data-popup-id="contact">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
      
        <div class="fix-10-12">
          <ul class="flex fixedSpaces reverse">
            
            <!-- English language -->
            <li class="col-5-12 left" data-lang="en">
              <h2 class="margin-top-5 margin-bottom-2 ae-1 fromLeft">Donations</h2>
              <p class="large ae-2 fromLeft"><span class="opacity-8">As Redd is now self-funded for all operations following successful PoSV v2 activation, all donations sent to this address will be used for charitable and community-oriented activities.</span></p>
              <p class="large ae-2 fromLeft"><span class="opacity-8 break-word">If you really, really want to donate to the team to buy them a drink or as a thank you, please send to Ru6sDVdn4MhxXJauQ2GAJP4ozpPpmcDKdc.</span></p>
            </li>
            
            <!-- Deutsch language -->
            <li class="col-5-12 left" data-lang="de" style="display:none;">
              <h2 class="margin-top-4 margin-bottom-2 ae-1 fromLeft">Spenden</h2>
              <p class="ae-2 fromLeft"><span class="opacity-8">Da Redd nach erfolgreicher Aktivierung von PoSV v2 nun für alle Operationen selbst finanziert wird, werden alle an diese Adresse gesendeten Spenden für wohltätige und gemeinschaftsorientierte Aktivitäten verwendet.</span></p>
              <p class="ae-2 fromLeft"><span class="opacity-8 break-word">Wenn Sie wirklich, wirklich an das Team spenden möchten, um ihnen ein Getränk zu kaufen, oder als Dankeschön, senden Sie es bitte an Ru6sDVdn4MhxXJauQ2GAJP4ozpPpmcDKdc.</span></p>
            </li>
            
            <!-- Korean language -->
            <li class="col-5-12 left" data-lang="ko" style="display:none;">
              <h2 class="margin-top-5 margin-bottom-2 ae-1 fromLeft">기부</h2>
              <p class="large ae-2 fromLeft"><span class="opacity-8">Redd는 PoSV v2의 활성화에 성공한 후 모든 운영에 대해서 자체적으로 자금조달을 하고 있기 때문에 이 주소로 보내지는 모든 기부금은 자선 및 지역사회중심의 활동에 사용될 것입니다.</span></p>
              <p class="large ae-2 fromLeft"><span class="opacity-8 break-word">여러분이 진심으로 팀에 대한 감사의 표시로 음료나 기부를 원하신다면 Ru6sDVdn4MhxXJauQ2GAJP4ozpPpmcDKdc 로 보내주세요.</span></p>
            </li>
            
            <!-- Russian language -->
            <li class="col-5-12 left" data-lang="ru" style="display:none;">
              <h2 class="margin-top-5 margin-bottom-2 ae-1 fromLeft">Пожертвования</h2>
              <p class="ae-2 fromLeft"><span class="opacity-8">"Поскольку Redd, после успешной активации PoSV v2 находится полностью на самофинансировании, все пожертвования отправленные на этот адрес будут использованы для благотворительной и общественной деятельности."</span></p>
              <p class="ae-2 fromLeft"><span class="opacity-8 break-word">Если вы действительно хотите сделать пожертвование команде, чтобы угостить их выпивкой или просто в знак благодарности, отправьте ее на адрес: Ru6sDVdn4MhxXJauQ2GAJP4ozpPpmcDKdc</span></p>
            </li>
            
            <li class="col-1-12"></li>
            <li class="col-6-12">
			<div class="form-55 fix-5-12 popupContent ae-3">
			  
			  <!-- English language -->
			  <div class="pad padding-top-2 shadow center selected" data-lang="en">
				<img class="margin-top-3 donation-qr-code" width="350" height="350" src="assets/img/redd-qr.jpg" alt="Redd Donation Address"/>
				<h4 class="smaller margin-top-2 margin-bottom-0">Charity &amp; Community Activities</h4>
				<p class="small margin-top-0 margin-bottom-0 break-word">Recrcq8moZjbEHVoJx6JiQ2mfZkQnktvnf</p>
			  </div>
			  
			  <!-- Deutsch language -->
			  <div class="pad padding-top-2 shadow center selected" data-lang="de" style="display:none;">
				<img class="margin-top-3 donation-qr-code" width="350" height="350"  src="assets/img/redd-qr.jpg" alt="Redd Donation Address"/>
				<h4 class="smaller margin-top-2 margin-bottom-0">Wohltätigkeits und Gemeinschaftsaktivitäten</h4>
				<p class="small margin-top-0 margin-bottom-0 break-word">Recrcq8moZjbEHVoJx6JiQ2mfZkQnktvnf</p>
			  </div>
			  
			  <!-- Korean language -->
			  <div class="pad padding-top-2 shadow center selected" data-lang="ko" style="display:none;">
				<img class="margin-top-3 donation-qr-code" width="350" height="350"  src="assets/img/redd-qr.jpg" alt="Redd Donation Address"/>
				<h4 class="smaller margin-top-2 margin-bottom-0">자선 및 지역 사회 활동</h4>
				<p class="small margin-top-0 margin-bottom-0 break-word">Recrcq8moZjbEHVoJx6JiQ2mfZkQnktvnf</p>
			  </div>
			  
			  <!-- Russian language -->
			  <div class="pad padding-top-2 shadow center selected" data-lang="ru" style="display:none;">
				<img class="margin-top-3 donation-qr-code" width="350" height="350"  src="assets/img/redd-qr.jpg" alt="Redd Donation Address"/>
				<h4 class="smaller margin-top-2 margin-bottom-0">Благотворительность и общественная деятельность</h4>
				<p class="small margin-top-0 margin-bottom-0 break-word">Recrcq8moZjbEHVoJx6JiQ2mfZkQnktvnf</p>
			  </div>
			  
			</div>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="dialogContainer bottom">
	
	<!-- Crowdfund Dialog -->
	<div class="dialog rounded hidden" data-dialog-id="crowdfunding" data-dialog-action="open" data-dialog-open-delay="3000" data-dialog-cookie-age="2592000">
		<div class="close" data-dialog-action="close"></div>
		<a href="/funding/#crowdfund" target="_blank"><img src="assets/img/crowdfund-pic.png" class="wide" alt="img"/></a>
		<div class="dialogContent">
			<div class="text center">
				<div class="h4 small bold">Exchange Crowdfunding</div>
					Donate ReddCoin to help us get onto more exchanges.
			</div>
		</div>
		<ul>
			<li class="button red" data-href="/funding/#crowdfund" data-target="_self" data-dialog-action="close">Learn more</li>
			<li data-dialog-action="close">Close</li>
		</ul>
	</div>

</div>

<?php echo $footerScriptsString; ?>

</body>

</html>
