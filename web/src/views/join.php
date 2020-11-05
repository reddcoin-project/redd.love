<?php

  // Page Configuration
  $title = 'Join Redd | The Social Currency';

?>
<?php include(COMPONENT_DIR . '/header.php'); ?>

<body class="slides scroll animated noPreload">

<?php include(COMPONENT_DIR . '/svg.php'); ?>
<?php include(COMPONENT_DIR . '/sidebar.php'); ?>

<!-- Slide 1 (#16) -->
<section class="slide transparent kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <!-- English language -->
        <div class="fix-12-12" data-lang="en">
          <ul class="flex fixedSpaces">
            <li class="col-5-12 left margin-bottom-3">
              <h2 class="margin-top-2 margin-bottom-2 ae-1 fromLeft">Join Team Redd</h1>
              <p class="large ae-2 fromLeft"><span class="opacity-8">As an organization 100% run by volunteers, our team is made up of passionate Reddheads who just want to make an impact on the world. If you&apos;re interested, fill out the form and let us know how you can help.</span></p>
              <a href="/about/" class="button red rounded crop margin-top-1 margin-right-2 ae-3 fromCenter">Learn about Redd</a><a href="assets/doc/Redd-Book.pdf" class="button white rounded margin-top-1 ae-3 fromCenter" download>Read the Redd Book</a>
            </li>
            <li class="col-1-12"></li>
            <li class="col-6-12">
			<div class="form-55 fix-5-12">
			  <div class="pad padding-top-2 shadow left selected ae-3">
				<form action="/api/contact/send/" id="contact-form" method="post" class="slides-form wide" data-ajax-form="true">
				  <ul class="flex noSpaces">
					<li class="col-6-12 form-55-input-1">
					  <div class="label ae-5"><label class="left opacity-5" for="name55">Your name</label></div>
					  <input class="rounded wide ae-6" id="name55" type="name" name="name" placeholder="Name" required/>
					</li>
					<li class="col-6-12 form-55-input-2">
					  <div class="label ae-5"><label class="left opacity-5" for="email55">Email address</label></div>
					  <input class="rounded wide ae-6" id="email55" type="email" name="email" placeholder="Email" required/>
					</li>
				  </ul>
				  <div class="label ae-8"><label class="opacity-5" for="message55">Message</label></div>
				  <textarea class="rounded left wide ae-9" id="message55" type="text" name="message" placeholder="Let us know how you can help!" required></textarea>
				  <button type="submit" class="button wide red rounded ae-10 cropBottom margin-top-2" data-success-text="Done!" data-success-class="message-sent" name="button">Send Some Love</button>
				</form>
			  </div>
			</div>
            </li>
          </ul>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-12-12" data-lang="de" style="display:none;">
          <ul class="flex fixedSpaces">
            <li class="col-5-12 left margin-bottom-3">
              <h2 class="small margin-top-2 margin-bottom-2 ae-1 fromLeft">Treten Sie dem Team Redd bei</h1>
              <p class="ae-2 fromLeft"><span class="opacity-8">Als Organisation, die zu 100% von Freiwilligen geleitet wird, besteht unser Team aus leidenschaftlichen Reddheads, die nur einen Einfluss auf die Welt haben wollen. Falls Sie Interesse haben, füllen Sie das Formular aus und teilen Sie uns mit, auf welcher Weise Sie helfen können.</span></p>
              <a href="/about/" class="button small red rounded crop margin-top-1 margin-right-2 ae-3 fromCenter">Erfahren Sie mehr über Redd</a><a href="assets/doc/Redd-Book.pdf" class="button small large rounded white margin-top-1 ae-3 fromCenter" download>Lesen Sie das Redd Book</a>
            </li>
            <li class="col-1-12"></li>
            <li class="col-6-12">
			<div class="form-55 fix-5-12">
			  <div class="pad padding-top-2 shadow left selected ae-3">
				<form action="/api/contact/send/" id="contact-form" method="post" class="slides-form wide" data-ajax-form="true">
				  <ul class="flex noSpaces">
					<li class="col-6-12 form-55-input-1">
					  <div class="label ae-5"><label class="left opacity-5" for="name55">Dein Name</label></div>
					  <input class="rounded wide ae-6" id="name55" type="name" name="name" placeholder="Name" required/>
					</li>
					<li class="col-6-12 form-55-input-2">
					  <div class="label ae-5"><label class="left opacity-5" for="email55">E-Mail-Addresse</label></div>
					  <input class="rounded wide ae-6" id="email55" type="email" name="email" placeholder="Email" required/>
					</li>
				  </ul>
				  <div class="label ae-8"><label class="opacity-5" for="message55">Botschaft</label></div>
				  <textarea class="rounded left wide ae-9" id="message55" type="text" name="message" placeholder="Lassen Sie uns wissen, wie Sie helfen können!" required></textarea>
				  <button type="submit" class="button wide red rounded ae-10 cropBottom margin-top-2" data-success-text="Done!" data-success-class="message-sent" name="button">Sende etwas Liebe</button>
				</form>
			  </div>
			</div>
            </li>
          </ul>
        </div>
        
        <!-- Korean language -->
        <div class="fix-12-12" data-lang="ko" style="display:none;">
          <ul class="flex fixedSpaces">
            <li class="col-5-12 left margin-bottom-3">
              <h2 class="margin-top-2 margin-bottom-2 ae-1 fromLeft">Redd <span class="weight-8">팀에 가입하기</span></h1>
              <p class="large ae-2 fromLeft"><span class="opacity-8">우리팀은 100% 자원봉사자들이 운영하는 조직으로서, 세상에 영향을 미치기를 원하는 열정적인 Redd헤드들로 구성되어 있습니다. 만약 당신이 관심이 있다면 양식을 작성하여 어떻게 우리를 도울 수 있는지 알려주십시오.</span></p>
              <a href="/about/" class="button red rounded crop margin-top-1 margin-right-2 ae-3 fromCenter">Redd에 대해서 알아보기</a><a href="assets/doc/Redd-Book.pdf" class="button white rounded margin-top-1 ae-3 fromCenter" download>Redd Book 읽기</a>
            </li>
            <li class="col-1-12"></li>
            <li class="col-6-12">
			<div class="form-55 fix-5-12">
			  <div class="pad padding-top-2 shadow left selected ae-3">
				<form action="ajax-email.php" id="contact-form" method="post" class="slides-form wide" data-ajax-form="true">
				  <ul class="flex noSpaces">
					<li class="col-6-12 form-55-input-1">
					  <div class="label ae-5"><label class="left opacity-5" for="name55">이름</label></div>
					  <input class="rounded wide ae-6" id="name55" type="name" name="name" placeholder="이름" required/>
					</li>
					<li class="col-6-12 form-55-input-2">
					  <div class="label ae-5"><label class="left opacity-5" for="email55">이메일</label></div>
					  <input class="rounded wide ae-6" id="email55" type="email" name="email" placeholder="이메일" required/>
					</li>
				  </ul>
				  <div class="label ae-8"><label class="opacity-5" for="message55">메시지</label></div>
				  <textarea class="rounded left wide ae-9" id="message55" type="text" name="message" placeholder="어떻게 도울 수 있는지 알려주세요!" required></textarea>
				  <button type="submit" class="button wide red rounded ae-10 cropBottom margin-top-2" data-success-text="끝난!" data-success-class="message-sent" name="button">전송하기</button>
				</form>
			  </div>
			</div>
            </li>
          </ul>
        </div>
        
        <!-- Russian language -->
        <div class="fix-12-12" data-lang="ru" style="display:none;">
          <ul class="flex fixedSpaces">
            <li class="col-5-12 left margin-bottom-3">
              <h2 class="margin-top-2 margin-bottom-2 ae-1 fromLeft">Присоединяйтесь к команде Redd</h1>
              <p class="large ae-2 fromLeft"><span class="opacity-8">Наша команда, на 100% управляемая волонтерами, состоит из увлеченных Reddheads, которые просто хотят оказать влияние на мир. Если вы заинтересованы, заполните форму и дайте нам знать, как вы можете помочь.</span></p>
              <a href="/about/" class="button red rounded crop margin-top-1 margin-right-2 ae-3 fromCenter">Узнайте о Redd</a><a href="assets/doc/Redd-Book.pdf" class="button white rounded margin-top-1 ae-3 fromCenter" download>Прочтите Redd Book</a>
            </li>
            <li class="col-1-12"></li>
            <li class="col-6-12">
			<div class="form-55 fix-5-12">
			  <div class="pad padding-top-2 shadow left selected ae-3">
				<form action="/api/contact/send/" id="contact-form" method="post" class="slides-form wide" data-ajax-form="true">
				  <ul class="flex noSpaces">
					<li class="col-6-12 form-55-input-1">
					  <div class="label ae-5"><label class="left opacity-5" for="name55">Ваше имя</label></div>
					  <input class="rounded wide ae-6" id="name55" type="name" name="name" placeholder="название" required/>
					</li>
					<li class="col-6-12 form-55-input-2">
					  <div class="label ae-5"><label class="left opacity-5" for="email55">Адрес электронной почты</label></div>
					  <input class="rounded wide ae-6" id="email55" type="email" name="email" placeholder="Электронное письмо" required/>
					</li>
				  </ul>
				  <div class="label ae-8"><label class="opacity-5" for="message55">Электронное письмо</label></div>
				  <textarea class="rounded left wide ae-9" id="message55" type="text" name="message" placeholder="Сообщите нам, чем вы можете помочь!" required></textarea>
				  <button type="submit" class="button wide red rounded ae-10 cropBottom margin-top-2" data-success-text="Done!" data-success-class="message-sent" name="button">Отправить</button>
				</form>
			  </div>
			</div>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/volunteer-sect-1.jpg)"></div>
</section>

<?php include(COMPONENT_DIR . '/footer.php'); ?>