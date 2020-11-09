<?php

  // Page Title
  $title = 'Redd | The social currency.';

  // Page Configuration
  $navigations = [
    ['classes' => 'exceptFirstSlide']
  ];
  $footerClasses = 'exceptFirstSlide';
  $showNextSlideButton = true;

?>
<?php include(COMPONENT_DIR . '/header.php'); ?>

<body class="slides stack animated noPreload">

<?php include(COMPONENT_DIR . '/svg.php'); ?>
<?php include(COMPONENT_DIR . '/sidebar.php'); ?>

<!-- Navigation -->
<nav class="side medium">
  <div class="navigation default">
    <ul></ul>
  </div>
</nav>

<!-- Slide 1 (#01) -->
<div class="slide fade-6 video" data-name="intro">
  <div class="content">
    <div class="container toSlide-2 pointer">
      <div class="wrap">
        
        <!-- English language -->
        <div class="fix-10-12 hideForMobile" data-lang="en">
          <svg height="120" class="wide ae-1 fromCenter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-tagline"></use></svg>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-10-12 hideForMobile" data-lang="de" style="display:none;">
          <svg height="120" class="wide ae-1 fromCenter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-tagline-de"></use></svg>
        </div>
        
        <!-- Korean language -->
        <div class="fix-10-12 hideForMobile" data-lang="ko" style="display:none;">
          <svg height="120" class="wide ae-1 fromCenter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-tagline-ko"></use></svg>
        </div>
        
        <!-- Russian language -->
        <div class="fix-10-12 hideForMobile" data-lang="ru" style="display:none;">
          <svg height="120" class="wide ae-1 fromCenter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-tagline-ru"></use></svg>
        </div>
        
        <div class="fix-10-12 showForMobile" style="display:none">
          <svg height="120" class="wide ae-1 fromCenter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg>
        </div>
          
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url('assets/vid/home-vid.jpg');">
    <video poster="assets/img/home-vid-pic.jpg" autoplay loop muted playsinline>
      <source src="assets/vid/home-vid.mp4" type="video/mp4"/>
      <source src="assets/vid/home-vid.webm" type="video/webm"/>
      <source src="assets/vid/home-vid.ogv" type="video/ogv"/>
    </video>
  </div>
</div>

<!-- Slide 2 (#37) -->
<div class="slide fade-6 kenBurns" data-name="redd-msg">
  <div class="content">
    <div class="container">
      <div class="wrap">
        
        <!-- English language -->
        <div class="fix-8-12" data-lang="en">
          <h1 class="large ae-2">Our goal is to bring value back to humanity and social interaction.</h1>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-8-12" data-lang="de" style="display:none;">
          <h1 class="small ae-2">Unser Ziel ist, der Menschheit und der sozialen Interaktion wieder Wert zu verleihen.</h1>
        </div>
        
        <!-- Korean language -->
        <div class="fix-6-12" data-lang="ko" style="display:none;">
          <h1 class="large weight-6 ae-2">우리의 목표는 인류와 사회적 상호작용에 가치를 되돌리는 것입니다.</h1>
        </div>
        
        <!-- Russian language -->
        <div class="fix-8-12" data-lang="ru" style="display:none;">
          <h1 class="large ae-2">Наша цель - вернуть ценность человечеству и социальному взаимодействию.</h1>
        </div>
             
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/slide-2.jpg)"></div>
</div>

<!-- Slide 3 (#14) -->
<div class="slide fade-6 kenBurns fromRight" data-name="redd-everyone">
  <div class="content">
    <div class="container">
      <div class="wrap">
        
        <!-- English language -->
        <div class="fix-12-12" data-lang="en">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 small margin-bottom-2">Redd is everyone.</h1>
            <p class="ae-2 large"><span class="opacity-8">Our users are made up of all colors, religions and languages. With over 60,000 users, Redd gives you the tools to share, support, and reward people and social causes for their efforts.</span></p>
			  <ul class="flex">
				<li class="col-6-12 left ae-3">
				  <div class="popupTrigger ae-3 relative margin-top-0" data-popup-id="76">
					<span class="button play white button-86 absolute">
					  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#play"></use></svg>
					</span>
					<div class="text-86 margin-bottom-2"><p class="smaller bold uppercase cropBottom">Watch video</p><p class="cropBottom small opacity-8">Redd is everyone (1:01)</p></div>
				  </div>
				</li>
				<li class="col-6-12 left ae-4">
				  <a href="/about/" class="button red rounded crop margin-top-0 ae-3">Learn More</a>
				</li>
			  </ul>
          </div>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-12-12" data-lang="de" style="display:none;">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 small margin-bottom-2">Redd ist jeder.</h1>
            <p class="ae-2 large"><span class="opacity-8">Unsere Benutzer stellen sich aus allen Farben, Religionen und Sprachen zusammen. Mit über 60.000 Benutzern bietet Redd Ihnen die Tools, um Menschen und soziale Anliegen für ihre Bemühungen zu unterstützen und zu belohnen.</span></p>
			  <ul class="flex">
				<li class="col-6-12 left ae-3">
				  <div class="popupTrigger ae-3 relative margin-top-0" data-popup-id="76">
					<span class="button play white button-86 absolute">
					  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#play"></use></svg>
					</span>
					<div class="text-86 margin-bottom-2"><p class="smaller bold uppercase cropBottom">Video ansehen</p><p class="cropBottom small opacity-8">Redd ist überall (1:04)</p></div>
				  </div>
				</li>
				<li class="col-6-12 left ae-4">
				  <a href="/about/" class="button red rounded crop margin-top-0 ae-3">Erfahren Sie mehr</a>
				</li>
			  </ul>
          </div>
        </div>
        
        <!-- Korean language -->
        <div class="fix-12-12" data-lang="ko" style="display:none;">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 small margin-bottom-2">Redd<span class="weight-8">는 우리 모두입니다.</span></h1>
            <p class="ae-2 large"><span class="opacity-8">우리의 사용자들은 모든 인종, 종교, 언어로 구성되어 있습니다. 60,000명 이상이 사용하는 Redd는 사람들에게 그들의 노력에 대한 사회적 대의를 공유, 지원, 보상할 수 있는 도구를 제공합니다.</span></p>
            <a href="/about/" class="button red rounded crop margin-top-1 ae-3">자세히 알아보기</a>
          </div>
        </div>
        
        <!-- Russian language -->
        <div class="fix-12-12" data-lang="ru" style="display:none;">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 small margin-bottom-2">Redd - это все.</h1>
            <p class="ae-2 large"><span class="opacity-8">Наши пользователи имеют разные цвета кожи, принадлежат к различным религиям и языкам. Redd, насчитывающий более 60 000 пользователей, дает им инструменты, чтобы делиться, поддерживать и вознаграждать людей и общественные организации за их усилия.</span></p>
            <a href="/about/" class="button red rounded crop margin-top-1 ae-3">Узнать больше</a>
          </div>
        </div>
            
      </div>  
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/slide-3.jpg)"></div>
</div>

<!-- English Redd is everyone Popup Video -->
<div class="popup autoplay" data-popup-id="76">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo popupContent shadow rounded">
            <iframe data-src="https://www.youtube.com/embed/N5dQPfXZRfU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Slide 4 (#15) -->
<div class="slide fade-6 kenBurns fromLeft" data-name="redd-everywhere">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- English language -->
        <div class="fix-12-12" data-lang="en">
          <div class="fix-6-12 left toRight">
            <h1 class="ae-1 small margin-bottom-2">Redd is everywhere.</h1>
            <p class="ae-2 large"><span class="opacity-8">Currently being used in over 50+ countries, ReddID will soon allow you to support, tip, and donate to anyone on all major social media platforms.</span></p>
			  <ul class="flex">
				<li class="col-6-12 left ae-3">
				  <div class="popupTrigger ae-3 relative margin-top-0" data-popup-id="86-en">
					<span class="button play white button-86 absolute">
					  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#play"></use></svg>
					</span>
					<div class="text-86 margin-bottom-2"><p class="smaller bold uppercase cropBottom">Watch video</p><p class="cropBottom small opacity-8">Redd is everywhere (1:04)</p></div>
				  </div>
				</li>
				<li class="col-6-12 left ae-4">
				  <a href="/technology/#redd-network" class="button red rounded crop margin-top-0 ae-3">Learn More</a>
				</li>
			  </ul>
          </div>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-12-12" data-lang="de" style="display:none;">
          <div class="fix-6-12 left toRight">
            <h1 class="ae-1 small margin-bottom-2">Redd ist überall.</h1>
            <p class="ae-2 large"><span class="opacity-8">ReddID wird derzeit in über 50+ Ländern eingesetzt und ermöglicht Ihnen in kurzer Zeit, alle wichtigen Social-Media-Plattformen zu unterstützen, Trinkgeld zu geben und an alle zu spenden.</span></p>
			  <ul class="flex">
				<li class="col-6-12 left ae-3">
				  <div class="popupTrigger ae-3 relative margin-top-0" data-popup-id="86-de">
					<span class="button play white button-86 absolute">
					  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#play"></use></svg>
					</span>
					<div class="text-86 margin-bottom-2"><p class="smaller bold uppercase cropBottom">Video ansehen</p><p class="cropBottom small opacity-8">Redd ist überall (1:03)</p></div>
				  </div>
				</li>
				<li class="col-6-12 left ae-4">
				  <a href="/technology/#redd-network" class="button red rounded crop margin-top-0 ae-3">Erfahren Sie mehr</a>
				</li>
			  </ul>
          </div>
        </div>
        
        <!-- Korean language -->
        <div class="fix-12-12" data-lang="ko" style="display:none;">
          <div class="fix-5-12 left toRight">
            <h1 class="ae-1 small margin-bottom-2">Redd<span class="weight-8">는 세상 어디에나 있습니다.</span></h1>
            <p class="ae-2 large"><span class="opacity-8">현재 50개국 이상에서 사용되고 있는 Redd아이디는 곧 주요 소셜 미디어 플랫폼의 모든 사람들을 지원하고, 팁을 주고, 기부할 수 있도록 해줄 것입니다.</span></p>
            <a href="/technology/#redd-network" class="button red rounded crop margin-top-1 ae-3">자세히 알아보기</a>
          </div>
        </div>
        
        <!-- Russian language -->
        <div class="fix-12-12" data-lang="ru" style="display:none;">
          <div class="fix-6-12 left toRight">
            <h1 class="ae-1 small margin-bottom-2">Redd повсюду.</h1>
            <p class="ae-2 large"><span class="opacity-8">В настоящее время ReddID используется более чем в 50 странах, и вскоре он позволит вам поддерживать, давать чаевые и делать пожертвования любому человеку на всех основных платформах социальных сетей.</span></p>
			  <ul class="flex">
				<li class="col-6-12 left ae-3">
				  <div class="popupTrigger ae-3 relative margin-top-0" data-popup-id="86-ru">
					<span class="button play white button-86 absolute">
					  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#play"></use></svg>
					</span>
					<div class="text-86 margin-bottom-2"><p class="smaller bold uppercase cropBottom">Смотреть видео</p><p class="cropBottom small opacity-8">Redd повсюду (1:03)</p></div>
				  </div>
				</li>
				<li class="col-6-12 left ae-4">
				  <a href="/technology/#redd-network" class="button red rounded crop margin-top-0 ae-3">Узнать больше</a>
				</li>
			  </ul>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/slide-4.jpg)"></div>
</div>

<!-- English Redd is everywhere Popup Video -->
<div class="popup autoplay" data-popup-id="86-en">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo popupContent shadow rounded">
            <iframe data-src="https://www.youtube.com/embed/0AFQLVO4bvM" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- German Redd is everywhere Popup Video -->
<div class="popup autoplay" data-popup-id="86-de">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo popupContent shadow rounded">
            <iframe data-src="https://www.youtube.com/embed/XpVp9D7c3yc" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Russian Redd is everywhere Popup Video -->
<div class="popup autoplay" data-popup-id="86-ru">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo popupContent shadow rounded">
            <iframe data-src="https://www.youtube.com/embed/z-r5_AuCBBw" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Slide 5 (#14) -->
<div class="slide fade-6 kenBurns fromRight" data-name="redd-caring">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- English language -->
        <div class="fix-12-12" data-lang="en">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 small margin-bottom-2">Redd is caring.</h1>
            <p class="ae-2 large"><span class="opacity-8">For over six years, Redd has been a social currency that allows you to give value and support to any person or social cause around the world.</span></p>
            <a href="/about/" class="button red rounded crop margin-top-1 ae-3">Learn More</a>
          </div>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-12-12" data-lang="de" style="display:none;">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 smaller margin-bottom-2">Redd kümmert sich um Sie</h1>
            <p class="ae-2 large"><span class="opacity-8">Seit über sechs Jahren ist Redd eine soziale Währung, mit der Sie jeder Person oder sozialer Sache auf der ganzen Welt Wert und Unterstützung geben können.</span></p>
            <a href="/about/" class="button red rounded crop margin-top-1 ae-3">Erfahren Sie mehr</a>
          </div>
        </div>
        
        <!-- Korean language -->
        <div class="fix-12-12" data-lang="ko" style="display:none;">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 small margin-bottom-2">Redd<span class="weight-8">는 모두를 배려합니다.</span></h1>
            <p class="ae-2 large"><span class="opacity-8">6년 이상, Redd는 여러분이 전세계의 어떤 사람이나 사회적 대의에 가치와 지원을 할 수 있도록 해주는 사회적 통화였습니다.</span></p>
            <a href="/about/" class="button red rounded crop margin-top-1 ae-3">자세히 알아보기</a>
          </div>
        </div>
        
        <!-- Russian language -->
        <div class="fix-12-12" data-lang="ru" style="display:none;">
          <div class="fix-6-12 left toLeft">
            <h1 class="ae-1 small margin-bottom-2">Redd заботится.</h1>
            <p class="ae-2 large"><span class="opacity-8">Вот уже более шести лет Redd является международной валютой, которая позволяет вам оказывать поддержку любому человеку или обществу в целом по всему миру.</span></p>
            <a href="/about/" class="button red rounded crop margin-top-1 ae-3">Узнать больше</a>
          </div>
        </div>
            
      </div>  
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/slide-5.jpg)"></div>
</div>

<!-- Slide 6 (#19) -->
<div class="slide fade-6 kenBurns" data-name="redd-you">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- English language -->
        <div class="fix-8-12" data-lang="en">
          <h1 class="ae-1 large margin-bottom-2">Redd is you.</h1>
          <p class="largest light ae-2"><span class="opacity-8">Whether you&apos;re an organization that wants to contribute, or a person passionate about the movement, get in touch with us!</span></p>
          <a href="assets/doc/Redd-Book.pdf" class="button large rounded margin-right-2 red ae-3 fromLeft" download>Read the Redd Book</a><a href="/join/" class="button large rounded white ae-4 fromCenter">Join the movement</a>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-8-12" data-lang="de" style="display:none;">
          <h1 class="ae-1 large margin-bottom-2">Redd sind Sie</h1>
          <p class="largest light ae-2"><span class="opacity-8">Egal, ob Sie eine Organisation, die einen Beitrag leisten möchte oder eine Person, die sich für die Bewegung begeistert, sind, nehmen Sie Kontakt mit uns auf!</span></p>
          <a href="assets/doc/Redd-Book.pdf" class="button large rounded margin-right-2 red ae-3 fromLeft" download>Lesen Sie das Redd Book</a><a href="/join/" class="button large rounded white ae-6 fromCenter">Treten Sie der Bewegung bei</a>
        </div>
        
        <!-- Korean language -->
        <div class="fix-7-12" data-lang="ko" style="display:none;">
          <h1 class="ae-1 large margin-bottom-2">Redd<span class="weight-8">는 바로 당신입니다.</span></h1>
          <p class="largest light ae-2"><span class="opacity-8">여러분이 기여하고 싶은 단체이든, 운동에 열정적인 사람이든, 우리와 연락세요!</span></p>
          <a href="assets/doc/Redd-Book.pdf" class="button large rounded margin-right-2 red ae-3 fromLeft" download>Redd Book 읽기</a><a href="/join/" class="button large rounded white ae-4 fromCenter">운동에 참여하세요</a>
        </div>
        
        <!-- Russian language -->
        <div class="fix-7-12" data-lang="ru" style="display:none;">
          <h1 class="ae-1 large margin-bottom-2">Redd - это ты.</h1>
          <p class="largest light ae-2"><span class="opacity-8">Независимо от того, являетесь ли вы организацией, которая хочет внести свой вклад, или человеком, увлеченным движением, свяжитесь с нами!</span></p>
          <a href="assets/doc/Redd-Book.pdf" class="button large rounded margin-right-2 red ae-3 fromLeft" download>Прочтите книгу Redd</a><a href="/join/" class="button large rounded white ae-4 fromCenter">Присоединиться к движению</a>
        </div>
      
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/slide-6.jpg)"></div>
</div>

<!-- White Slide 7 (#50) -->
<div class="slide whiteSlide" data-name="redd-products">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- English language -->
        <div class="fix-10-12 left" data-lang="en">
          <h1 class="ae-1 large">See what we’re working on!</h1>
          <ul class="flex later margin-top-4">
            <li class="col-4-12 left ae-3 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">ReddCoin</h4>
              <div class="ae-5"><p class="small opacity-8">The digital currency our community uses to tip, share, and donate.</p><a href="/technology/#redd-coin" class="button small red margin-left-0 ae-5 fromCenter">Learn More</a></div>
            </li>
            <li class="col-4-12 left ae-4 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">ReddNetwork</h4>
              <div class="ae-6"><p class="small opacity-8">ReddCoins run on top of a custom blockchain network we developed.</p><a href="/technology/" class="button small red margin-left-0 ae-5 fromCenter">Learn More</a></div>
            </li>
            <li class="col-4-12 left ae-5 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">ReddWallet</h4>
              <div class="ae-7"><p class="small opacity-8">An application we use to store, send, and receive ReddCoin.</p><a href="/technology/#redd-wallet" class="button small red margin-left-0 ae-5 fromCenter">Download Wallet</a></div>
            </li>
          </ul>
          <ul class="flex later">
            <li class="col-4-12 left ae-6 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">ReddRewards</h4>
              <div class="ae-5"><p class="small opacity-8">Earn extra ReddCoins just for storing your coins in a ReddWallet.</p><a href="/technology/#redd-rewards" class="button rounded small red margin-left-0 ae-5 fromCenter">Learn more</a></div>
            </li>
            <li class="col-4-12 left ae-7 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">ReddID</h4>
              <div class="ae-6"><p class="small opacity-8">A single user ID that allows you to tip and donate on all major social platforms.</p><a class="button rounded small white white margin-left-0 ae-5 fromCenter">Coming Soon</a></div>
            </li>
            <li class="col-4-12 left ae-8 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">ReddFoundation</h4>
              <div class="ae-7"><p class="small opacity-8">Will be used to help support various social initiates around the world.</p><a class="button rounded small white margin-left-0 ae-5 fromCenter">Coming Soon</a></div>
            </li>
          </ul>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-10-12 left" data-lang="de" style="display:none;">
          <h1 class="ae-1">Schauen Sie mal, woran wir arbeiten</h1>
          <ul class="flex later margin-top-4">
            <li class="col-4-12 left ae-3 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">ReddCoin</h4>
              <div class="ae-5"><p class="small opacity-8">Die digitale Währung, mit der unsere Community Trinkgeld gibt, teilt und spendet.</p><a href="/technology/#redd-coin" class="button small red margin-left-0 ae-5 fromCenter">Erfahren Sie mehr</a></div>
            </li>
            <li class="col-4-12 left ae-4 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">ReddNetwork</h4>
              <div class="ae-6"><p class="small opacity-8">ReddCoins laufen auf einem von uns entwickelten benutzerdefinierten Blockchain-Netzwerk.</p><a href="/technology/" class="button small red margin-left-0 ae-5 fromCenter">Erfahren Sie mehr</a></div>
            </li>
            <li class="col-4-12 left ae-5 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">ReddWallet</h4>
              <div class="ae-7"><p class="small opacity-8">Eine Applikation, mit der wir ReddCoin speichern, senden und empfangen.</p><a href="/technology/#redd-wallet" class="button small red margin-left-0 ae-5 fromCenter">Brieftasche herunterladen</a></div>
            </li>
          </ul>
          <ul class="flex later">
            <li class="col-4-12 left ae-6 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">ReddRewards</h4>
              <div class="ae-5"><p class="small opacity-8">Verdienen Sie zusätzliche ReddCoins, um Ihre Münzen in einer ReddWallet zu speichern.</p><a href="/technology/#redd-rewards" class="button rounded small red margin-left-0 ae-5 fromCenter">Erfahren Sie mehr</a></div>
            </li>
            <li class="col-4-12 left ae-7 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">ReddID</h4>
              <div class="ae-6"><p class="small opacity-8">Eine einzelne Benutzer-ID, mit der Sie auf allen wichtigen sozialen Plattformen Trinkgeld geben und spenden können.</p><a class="button rounded small white white margin-left-0 ae-5 fromCenter">Kommt bald</a></div>
            </li>
            <li class="col-4-12 left ae-8 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">ReddFoundation</h4>
              <div class="ae-7"><p class="small opacity-8">Wird verwendet, um verschiedene soziale Initiatieven auf der ganzen Welt zu unterstützen.</p><a class="button rounded small white margin-left-0 ae-5 fromCenter">Kommt bald</a></div>
            </li>
          </ul>
        </div>
        
        <!-- Korean language -->
        <div class="fix-10-12 left" data-lang="ko" style="display:none;">
          <h1 class="ae-1 large weight-8">우리가 무엇을 하고 있는지 보세요!</h1>
          <ul class="flex later margin-top-4">
            <li class="col-4-12 left ae-3 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">Redd <span class="weight-8">코인</span></h4>
              <div class="ae-5"><p class="small opacity-8">우리 공동체가 팁을 주고 공유하고 기부하는 데 사용하는 디지털 통화입니다.</p><a href="/technology/#redd-coin" class="button small red margin-left-0 ae-5 fromCenter">자세히 알아보기</a></div>
            </li>
            <li class="col-4-12 left ae-4 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">Redd <span class="weight-8">네트워크</span></h4>
              <div class="ae-6"><p class="small opacity-8">Redd코인은 우리가 개발한 맞춤형 블록체인 네트워크를 기반으로 운영됩니다.</p><a href="/technology/" class="button small red margin-left-0 ae-5 fromCenter">자세히 알아보기</a></div>
            </li>
            <li class="col-4-12 left ae-5 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">Redd <span class="weight-8">월렛</span></h4>
              <div class="ae-7"><p class="small opacity-8">Redd코인을 저장, 전송 및 수신하는 데 사용하는 애플리케이션입니다.</p><a href="/technology/#redd-wallet" class="button small red margin-left-0 ae-5 fromCenter">지갑 다운로드</a></div>
            </li>
          </ul>
          <ul class="flex later">
            <li class="col-4-12 left ae-6 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">Redd <span class="weight-8">리워드</span></h4>
              <div class="ae-5"><p class="small opacity-8">Redd지갑에 동전을 보관하는 것만으로도 Redd코인을 추가로 획득할 수 있습니다.</p><a href="/technology/#redd-rewards" class="button rounded small red margin-left-0 ae-5 fromCenter">자세히 알아보기</a></div>
            </li>
            <li class="col-4-12 left ae-7 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">Redd <span class="weight-8">아이디</span></h4>
              <div class="ae-6"><p class="small opacity-8">모든 주요 소셜 플랫폼에서 팁을 주고 기부할 수 있는 단일 사용자 아이디입니다.</p><a class="button rounded small white white margin-left-0 ae-5 fromCenter">곧 출시</a></div>
            </li>
            <li class="col-4-12 left ae-8 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">Redd <span class="weight-8">재단</span></h4>
              <div class="ae-7"><p class="small opacity-8">전 세계의 다양한 사회적 활동을 지원하기 위해 사용될 것입니다.</p><a class="button rounded small white margin-left-0 ae-5 fromCenter">곧 출시</a></div>
            </li>
          </ul>
        </div>
        
        <!-- Russian language -->
        <div class="fix-10-12 left" data-lang="ru" style="display:none;">
          <h1 class="ae-1 large">Смотрите, над чем мы работаем!</h1>
          <ul class="flex later margin-top-4">
            <li class="col-4-12 left ae-3 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">ReddCoin</h4>
              <div class="ae-5"><p class="small opacity-8">Цифровая валюта, которую наше сообщество использует для чаевых, обмена и пожертвований.</p><a href="/technology/#redd-coin" class="button small red margin-left-0 ae-5 fromCenter">Узнать больше</a></div>
            </li>
            <li class="col-4-12 left ae-4 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">Сеть Redd</h4>
              <div class="ae-6"><p class="small opacity-8">ReddCoins работают на поверхности пользовательской блокчейн-сети, которую мы разработали.</p><a href="/technology/" class="button small red margin-left-0 ae-5 fromCenter">Узнать больше</a></div>
            </li>
            <li class="col-4-12 left ae-5 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">Кошелек Redd</h4>
              <div class="ae-7"><p class="small opacity-8">Приложение, которое мы используем для хранения, отправки и получения ReddCoin.</p><a href="/technology/#redd-wallet" class="button small red margin-left-0 ae-5 fromCenter">Скачать Кошелек</a></div>
            </li>
          </ul>
          <ul class="flex later">
            <li class="col-4-12 left ae-6 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-4">Вознаграждения Redd</h4>
              <div class="ae-5"><p class="small opacity-8">Зарабатывайте дополнительные ReddCoins только за то, что храните свои монеты в кошельке Redd.</p><a href="/technology/#redd-rewards" class="button rounded small red margin-left-0 ae-5 fromCenter">Узнать больше</a></div>
            </li>
            <li class="col-4-12 left ae-7 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-5">ReddID</h4>
              <div class="ae-6"><p class="small opacity-8">Единый идентификатор пользователя, который позволяет вам давать чаевые и делать пожертвования на всех основных социальных платформах.</p><a class="button rounded small white white margin-left-0 ae-5 fromCenter">Будет в скором времени</a></div>
            </li>
            <li class="col-4-12 left ae-8 margin-bottom-3">
              <h4 class="small margin-bottom-1 ae-6">Фонд Redd</h4>
              <div class="ae-7"><p class="small opacity-8">Будет использоваться для поддержки различных социальных инициатив по всему миру.</p><a class="button rounded small white margin-left-0 ae-5 fromCenter">Узнать больше</a></div>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php include(COMPONENT_DIR . '/footer.php'); ?>
