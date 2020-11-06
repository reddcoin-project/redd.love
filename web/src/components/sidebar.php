<!-- Language selector dropdown -->
<div class="dropdown translate top right" data-dropdown-id="language">
  <ul>
    <li data-switch-lang="en">English</li>
    <li data-switch-lang="de">Deutsch</li>
    <li data-switch-lang="ko">한국인</li>
    <li data-switch-lang="ru">Pусский</li>
    <!-- <li data-switch-lang="tr">Türkçe</li> -->
  </ul>
</div>

<!-- Panel Top #01 -->
<nav class="panel top <?php echo isset($exceptFirstSlide) && $exceptFirstSlide === true ? 'exceptFirstSlide' : ''; ?>">
  <div class="sections desktop">
    <div class="left"><a href="/" title="Redd"><svg style="width:158px;height:60px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg></a></div>
    <div class="center">
    
      <!-- English language -->
      <ul class="menu small" data-lang="en">
        <li><a href="/">Home</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-en">About <i class="material-icons">expand_more</i></li>
        <li><a href="/technology/">Technology</a></li>
        <li><a href="/developers/">Developers</a></li>
        <li><a href="https://medium.com/projectredd">News</a></li>
        <li><a href="/join/">Join</a></li>
      </ul>
      
      <!-- Deutsch language -->
      <ul class="menu" data-lang="de" style="display:none;">
        <li><a href="/">Home</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-de">Über Uns <i class="material-icons">expand_more</i></li>
        <li><a href="/technology/">Technologie</a></li>
        <li><a href="/developers/">Entwickler</a></li>
        <li><a href="https://medium.com/projectredd">Nachrichten</a></li>
        <li><a href="/join/">Mitmachen</a></li>
      </ul>
      
      <!-- Korean language -->
      <ul class="menu" data-lang="ko" style="display:none;">
        <li><a href="/">홈</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-ko">소개 <i class="material-icons">expand_more</i></li>
        <li><a href="/technology/">기술</a></li>
        <li><a href="/developers/">개발자</a></li>
        <li><a href="https://medium.com/projectredd">뉴스</a></li>
        <li><a href="/join/">함께해요</a></li>
      </ul>
      
      <!-- Russian language -->
      <ul class="menu small" data-lang="ru" style="display:none;">
        <li><a href="/">Главная</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-ru">О нас <i class="material-icons">expand_more</i></li>
        <li><a href="/technology/">Технология</a></li>
        <li><a href="/developers/">Разработчики</a></li>
        <li><a href="https://medium.com/projectredd">Присоединиться</a></li>
        <li><a href="/join/">Присоединиться</a></li>
      </ul>
      
    </div>
    <div class="right"><span data-dropdown-id="language" class="button actionButton dropdownTrigger">EN</span></div>
  </div>
  <div class="sections compact hidden">
    <div class="left"><a href="/" title="Redd"><svg style="width:158px;height:60px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg></a></div>
    <div class="right"><span class="button actionButton sidebarTrigger" data-sidebar-id="1"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span></div>
  </div>
</nav>

<!-- English Menu dropdown -->
<ul class="dropdown top left center customDropdown" data-dropdown-id="dropdown-menu-en">
    <li class="selected wide">
      <ul class="menu small">
        <li><a href="/about/">Project Redd</a></li>
        <li><a href="/roadmap/">The ReddMap</a></li>
        <li><a href="/funding/">Funding</a></li>
      </ul>
    </li>
</ul>

<!-- German Menu dropdown -->
<ul class="dropdown top left center customDropdown" data-dropdown-id="dropdown-menu-de">
    <li class="selected wide">
      <ul class="menu small">
        <li><a href="/about/">Projekt Redd</a></li>
        <li><a href="/roadmap/">Die ReddMap</a></li>
        <li><a href="/funding/">Finanzierung</a></li>
      </ul>
    </li>
</ul>

<!-- Korean Menu dropdown -->
<ul class="dropdown top left center customDropdown" data-dropdown-id="dropdown-menu-ko">
    <li class="selected wide">
      <ul class="menu small">
        <li><a href="/about/">프로젝트 Redd</a></li>
        <li><a href="/roadmap/">ReddMap</a></li>
        <li><a href="/funding/">자금</a></li>
      </ul>
    </li>
</ul>

<!-- Russian Menu dropdown -->
<ul class="dropdown top left center customDropdown" data-dropdown-id="dropdown-menu-ru">
    <li class="selected wide">
      <ul class="menu small">
        <li><a href="/about/">Проект Redd</a></li>
        <li><a href="/roadmap/">ReddMap</a></li>
        <li><a href="/funding/">Финансирование</a></li>
      </ul>
    </li>
</ul>

<!-- Panel Top #02 -->
<nav class="panel top <?php echo isset($headerNavBlackBackground) && $headerNavBlackBackground === true ? '' : 'white'; ?> exceptFirstSlide">
  <div class="sections desktop">
    <div class="left"><a href="/" title="Redd"><svg style="width:158px;height:60px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg></a></div>
    <div class="center">
    
      <!-- English language -->
      <ul class="menu small" data-lang="en">
        <li><a href="/">Home</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-en">About <i class="material-icons">expand_more</i></li>
        <li><a href="technology.html">Technology</a></li>
        <li><a href="developers.html">Developers</a></li>
        <li><a href="https://medium.com/projectredd">News</a></li>
        <li><a href="join.html">Join</a></li>
      </ul>
      
      <!-- Deutsch language -->
      <ul class="menu" data-lang="de" style="display:none;">
        <li><a href="/">Home</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-de">Über Uns <i class="material-icons">expand_more</i></li>
        <li><a href="technology.html">Technologie</a></li>
        <li><a href="developers.html">Entwickler</a></li>
        <li><a href="https://medium.com/projectredd">Nachrichten</a></li>
        <li><a href="join.html">Mitmachen</a></li>
      </ul>
      
      <!-- Korean language -->
      <ul class="menu" data-lang="ko" style="display:none;">
        <li><a href="/">홈</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-ko">소개 <i class="material-icons">expand_more</i></li>
        <li><a href="technology.html">기술</a></li>
        <li><a href="developers.html">개발자</a></li>
        <li><a href="https://medium.com/projectredd">뉴스</a></li>
        <li><a href="join.html">함께해요</a></li>
      </ul>
      
      <!-- Russian language -->
      <ul class="menu small" data-lang="ru" style="display:none;">
        <li><a href="/">Главная</a></li>
        <li class="dropdownTrigger opacity-8" data-dropdown-id="dropdown-menu-ru">О нас <i class="material-icons">expand_more</i></li>
        <li><a href="technology.html">Технология</a></li>
        <li><a href="developers.html">Разработчики</a></li>
        <li><a href="https://medium.com/projectredd">Присоединиться</a></li>
        <li><a href="join.html">Присоединиться</a></li>
      </ul>
      
    </div>
    <div class="right"><span data-dropdown-id="language" class="button actionButton dropdownTrigger">EN</span></div>
  </div>
  <div class="sections compact hidden">
    <div class="left"><a href="/" title="Redd"><svg style="width:158px;height:60px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg></a></div>
    <div class="right"><span class="button actionButton sidebarTrigger" data-sidebar-id="1"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span></div>
  </div>
</nav>

<!-- Sidebar -->
<nav class="sidebar" data-sidebar-id="1">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <a href="#" class="logo"><svg width="132" height="50" style="margin:-5px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg></a>
    
    <!-- English language -->
    <ul class="mainMenu margin-top-3" data-lang="en">
      <li><a href="/">Home</a></li>
      <li>
        <a class="submenu-dropdown1">About<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements1" style="display: none">
			<li class="padding-left-2"><a href="/about/">Project Redd</a></li>
			<li class="padding-left-2"><a href="/roadmap/">The ReddMap</a></li>
			<li class="padding-left-2"><a href="/funding/">Funding</a></li>
        </ul>
      </li>
      <li><a href="/technology/">Technology</a></li>
      <li><a href="/developers/">Developers</a></li>
      <li><a href="https://medium.com/projectredd">News</a></li>
      <li><a href="/join/">Join</a></li>
      <li>
        <a class="submenu-dropdown2 translate">Language<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements2" style="display: none">
			<li class="padding-left-2" data-switch-lang="en"><a>English</a></li>
			<li class="padding-left-2" data-switch-lang="de"><a>Deutsch</a></li>
			<li class="padding-left-2" data-switch-lang="ko"><a>한국인</a></li>
			<li class="padding-left-2" data-switch-lang="ru"><a>Pусский</a></li>
        </ul>
      </li>
    </ul>
    <ul class="subMenu small opacity-8" data-lang="en">
		<li><a href="/privacy/">Privacy</a></li>
		<li><a href="/privacy/">Terms of Use</a></li>
		<li><a href="/press/">Press Kit</a></li>
		<li><div class="popupTrigger opacity-8" data-popup-id="contact">Donations</div></li>
    </ul>
    
    <!-- Deutsch language -->
    <ul class="mainMenu margin-top-3" data-lang="de" style="display:none;">
      <li><a href="/">Home</a></li>
      <li>
        <a class="submenu-dropdown1">Über Uns<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements1" style="display: none">
			<li class="padding-left-2"><a href="/about/">Projekt Redd</a></li>
			<li class="padding-left-2"><a href="/roadmap/">Die ReddMap</a></li>
			<li class="padding-left-2"><a href="/funding/">Finanzierung</a></li>
        </ul>
      </li>
      <li><a href="/technology/">Technologie</a></li>
      <li><a href="/developers/">Entwickler</a></li>
      <li><a href="https://medium.com/projectredd">Nachrichten</a></li>
      <li><a href="/join/">Mitmachen</a></li>
      <li>
        <a class="submenu-dropdown2 translate">Sprache<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements2" style="display: none">
			<li class="padding-left-2" data-switch-lang="en"><a>English</a></li>
			<li class="padding-left-2" data-switch-lang="de"><a>Deutsch</a></li>
			<li class="padding-left-2" data-switch-lang="ko"><a>한국인</a></li>
			<li class="padding-left-2" data-switch-lang="ru"><a>Pусский</a></li>
        </ul>
      </li>
    </ul>
    <ul class="subMenu small opacity-8" data-lang="de" style="display:none;">
		<li><a href="/privacy/">Privatsphäre</a></li>
		<li><a href="/privacy/">Nutzungsbedingungen</a></li>
		<li><a href="/press/">Pressemappe</a></li>
		<li><div class="popupTrigger opacity-8" data-popup-id="contact">Spenden</div></li>
    </ul>
    
    <!-- Korean language -->
    <ul class="mainMenu margin-top-3" data-lang="ko" style="display:none;">
      <li><a href="/">홈</a></li>
      <li>
        <a class="submenu-dropdown1">소개<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements1" style="display: none">
			<li class="padding-left-2"><a href="/about/">프로젝트 Redd</a></li>
			<li class="padding-left-2"><a href="/roadmap/">ReddMap</a></li>
			<li class="padding-left-2"><a href="/funding/">자금</a></li>
        </ul>
      </li>
      <li><a href="/technology/">기술</a></li>
      <li><a href="/developers/">개발자</a></li>
      <li><a href="https://medium.com/projectredd">뉴스</a></li>
      <li><a href="/join/">함께해요</a></li>
      <li>
        <a class="submenu-dropdown2 translate">언어<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements2" style="display: none">
			<li class="padding-left-2" data-switch-lang="en"><a>English</a></li>
			<li class="padding-left-2" data-switch-lang="de"><a>Deutsch</a></li>
			<li class="padding-left-2" data-switch-lang="ko"><a>한국인</a></li>
			<li class="padding-left-2" data-switch-lang="ru"><a>Pусский</a></li>
        </ul>
      </li>
    </ul>
    <ul class="subMenu small opacity-8" data-lang="ko" style="display:none;">
		<li><a href="/privacy/">개인정보</a></li>
		<li><a href="/privacy/">이용약관</a></li>
		<li><a href="/press/">보도자료</a></li>
		<li><div class="popupTrigger opacity-8" data-popup-id="contact">기부</div></li>
    </ul>
    
    <!-- Russian language -->
    <ul class="mainMenu margin-top-3" data-lang="ru" style="display:none;">
      <li><a href="/">Главная</a></li>
      <li>
        <a class="submenu-dropdown1">О нас<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements1" style="display: none">
			<li class="padding-left-2"><a href="/about/">Проект Redd</a></li>
			<li class="padding-left-2"><a href="/roadmap/">ReddMap</a></li>
			<li class="padding-left-2"><a href="/funding/">Финансирование</a></li>
        </ul>
      </li>
      <li><a href="/technology/">Технология</a></li>
      <li><a href="/developers/">Разработчики</a></li>
      <li><a href="https://medium.com/projectredd">Новости</a></li>
      <li><a href="/join/">Присоединиться</a></li>
      <li>
        <a class="submenu-dropdown2 translate">Язык<i class="material-icons shift-down-4 shift-left-3">arrow_drop_down</i></a>
        <ul class="mainMenu small submenu-elements2" style="display: none">
			<li class="padding-left-2" data-switch-lang="en"><a>English</a></li>
			<li class="padding-left-2" data-switch-lang="de"><a>Deutsch</a></li>
			<li class="padding-left-2" data-switch-lang="ko"><a>한국인</a></li>
			<li class="padding-left-2" data-switch-lang="ru"><a>Pусский</a></li>
        </ul>
      </li>
    </ul>
    <ul class="subMenu small opacity-8" data-lang="ru" style="display:none;">
		<li><a href="/privacy/">Политика конфиденциальности</a></li>
		<li><a href="/privacy/">Условия использования</a></li>
		<li><a href="/press/">Подборка для прессы</a></li>
		<li><div class="popupTrigger opacity-8" data-popup-id="contact">Пожертвования</div></li>
    </ul>
    
    <!-- Social Media Icons -->
    <ul class="social opacity-8 mb-0">
        <li><a href="https://www.facebook.com/reddcoin" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a></li>
        <li><a href="https://twitter.com/ProjectReddTW" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></li>
        <li><a href="https://www.instagram.com/reddcoin" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use></svg></a></li>
    </ul>
    <ul class="social opacity-8 mt-0">
        <li><a href="https://medium.com/projectredd" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#medium"></use></svg></a></li>
        <li><a href="https://t.me/ReddcoinOfficial" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a></li>
        <li><a href="https://www.reddit.com/r/ReddCoin/" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#reddit"></use></svg></a></li>
    </ul>
        
  </div>
</nav>
