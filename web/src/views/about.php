<?php

  // Page Configuration
  $title = 'Learn about Redd | The social currency.';

  // Page Configuration
  $navigations = [
    [],
    ['classes' => 'white exceptFirstSlide']
  ];
  $footerClasses = 'white exceptFirstSlide';

?>
<?php include(COMPONENT_DIR . '/header.php'); ?>

<body class="slides scroll animated noPreload">

<?php include(COMPONENT_DIR . '/svg.php'); ?>
<?php include(COMPONENT_DIR . '/sidebar.php'); ?>

<!-- Slide 1 (#19) -->
<section class="slide kenBurns transparent" data-name="about-home">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- English language -->
        <div class="fix-8-12" data-lang="en">
          <h1 class="margin-bottom-2 ae-1">It's time to change the world.</h1>
          <p class="largest ae-2"><span class="opacity-8">We are making a big push to bring Redd and social tipping to all platforms as the leading vehicle to support, donate, and fund various causes around the world.</span></p>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-9-12" data-lang="de" style="display:none;">
          <h1 class="margin-bottom-2 ae-1">Es ist Zeit, die Welt zu verändern.</h1>
          <p class="largest ae-2"><span class="opacity-8">Wir bemühen uns, Redd und Social Tipping als führendes Instrument zur Unterstützung, Spende und Finanzierung von verschiedenen Anlässen auf alle Plattformen zu bringen.</span></p>
        </div>
        
        <!-- Korean language -->
        <div class="fix-8-12" data-lang="ko" style="display:none;">
          <h1 class="margin-bottom-2 weight-6 ae-1">세상을 바꿀 때입니다.</h1>
          <p class="largest ae-2"><span class="opacity-8">우리는 전 세계의 다양한 대의를 지원하고 기부 및 자금을 조달하는 선도적인 수단으로서 Redd 및 사회적 팁을 모든 플랫폼에 제공하기 위해서 많은 노력을 기울이고 있습니다.</span></p>
        </div>
        
        <!-- Russian language -->
        <div class="fix-10-12" data-lang="ru" style="display:none;">
          <h1 class="margin-bottom-2 ae-1">Пришло время изменить мир.</h1>
          <p class="largest ae-2"><span class="opacity-8">Мы делаем большое усилие, чтобы привнести Redd и социальные чаевые на все платформы в качестве ведущего средства для поддержки, пожертвований и финансирования различных проектов по всему миру.</span></p>
        </div>
      
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/about-sect-1.jpg)"></div>
</section>

<!-- White Slide 2 (#49) -->
<section class="slide whiteSlide" data-name="about-who">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- English language -->
        <div class="fix-8-12 toCenter" data-lang="en">
          <h1 class="smaller margin-bottom-2 ae-1">What is Redd and who is it for?</h1>
          <p class="large ae-2"><span class="opacity-8">ReddCoin is a tool to bring value to people. It is a digital social currency that allows followers, supporters, or fans the ability to tip and share 100% of its value to any person, cause, or organization without a middleman.</span></p>
        </div>
        <div class="fix-10-12 margin-top-4" data-lang="en">  
          <ul class="flex flex-49 later equal">
            <li class="col-4-12">
              <div class="fix-4-12 ae-3">
                <img class="wide margin-bottom-1 ae-4" src="assets/img/Who-contentcreator.jpg" style="border-radius: 5px;" alt="Content Creator"/>
                <h4 class="small margin-bottom-1 equalElement ae-4">Content Creators</h4>
                <div class="ae-5"><p class="opacity-8">Anyone from a developer on GitHub to a social influencer can create a ReddID and earn ReddCoins.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-4">
                <img class="wide margin-bottom-1 ae-5" src="assets/img/Who-socialcause.jpg" style="border-radius: 5px;" alt="Social Cause"/>
                <h4 class="small margin-bottom-1 equalElement ae-5">Social Causes</h4>
                <div class="ae-6"><p class="opacity-8">By using Redd you can support those who are making a stand for causes that matter to you.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-5">
                <img class="wide margin-bottom-1 ae-6" src="assets/img/Who-humanitarian.jpg" style="border-radius: 5px;" alt="Humanitarian"/>
                <h4 class="small margin-bottom-1 equalElement ae-6">Humanitarian Programs</h4>
                <div class="ae-7"><p class="opacity-8">With Redd you can support any program from saving the whales to providing aid for a war-torn village.</p>
              </div>
            </li>
          </ul>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-10-12 toCenter" data-lang="de" style="display:none;">
          <h1 class="smaller margin-bottom-2 ae-1">Was ist Redd und für wen ist es?</h1>
          <p class="large ae-2"><span class="opacity-8">ReddCoin ist ein Instrument, um Menschen einen Mehrwert zu bieten. Es ist eine digitale soziale Währung, die es Anhängern, Unterstützern oder Fans ermöglicht, Trinkgeld zu geben und 100% ihres Wertes an jede Person, Sache oder Organisation ohne Zwischenhändler weiterzugeben.</span></p>
        </div>
        <div class="fix-12-12 margin-top-4" data-lang="de" style="display:none;">  
          <ul class="flex flex-49 later equal">
            <li class="col-4-12">
              <div class="fix-4-12 ae-3">
                <img class="wide margin-bottom-1 ae-4" src="assets/img/Who-contentcreator.jpg" style="border-radius: 5px;" alt="Content Creator"/>
                <h4 class="small margin-bottom-1 equalElement ae-4">Ersteller von Inhalten</h4>
                <div class="ae-5"><p class="small opacity-8">Jeder, vom Entwickler auf GitHub bis zum Social Influencer, kann eine ReddID erstellen und ReddCoins verdienen.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-4">
                <img class="wide margin-bottom-1 ae-5" src="assets/img/Who-socialcause.jpg" style="border-radius: 5px;" alt="Social Cause"/>
                <h4 class="small margin-bottom-1 equalElement ae-5">Soziale Anlässe</h4>
                <div class="ae-6"><p class="small opacity-8">Mit Redd können Sie diejenigen unterstützen, die sich für Sie wichtige Anlässe einsetzen.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-5">
                <img class="wide margin-bottom-1 ae-6" src="assets/img/Who-humanitarian.jpg" style="border-radius: 5px;" alt="Humanitarian"/>
                <h4 class="small margin-bottom-1 equalElement ae-6">Humanitäre Programme</h4>
                <div class="ae-7"><p class="small opacity-8">Mit Redd können Sie jedes Programm unterstützen, von der Rettung der Wale bis zur Unterstützung eines vom Krieg zerrissenen Dorfes.</p>
              </div>
            </li>
          </ul>
        </div>
        
        <!-- Korean language -->
        <div class="fix-10-12 toCenter" data-lang="ko" style="display:none;">
          <h1 class="smaller margin-bottom-2 ae-1">Redd<span class="weight-8">란 무엇이며 누구를 위한 것입니까</span>?</h1>
          <p class="large ae-2"><span class="opacity-8">ReddCoin은 사람들에게 가치를 제공하는 도구입니다. 팔로워나 서포터, 팬 등이 중개인이 없이도 그 가치의 100%를 어떤 사람이나 대의 및 조직에 팁을 주고 공유할 수 있는 디지털 사회통화입니다.</span></p>
        </div>
        <div class="fix-12-12 margin-top-4" data-lang="ko" style="display:none;">  
          <ul class="flex flex-49 later equal">
            <li class="col-4-12">
              <div class="fix-4-12 ae-3">
                <img class="wide margin-bottom-1 ae-4" src="assets/img/Who-contentcreator.jpg" style="border-radius: 5px;" alt="Content Creator"/>
                <h4 class="small margin-bottom-1 weight-6 equalElement ae-4">콘텐츠 제작자</h4>
                <div class="ae-5"><p class="opacity-8">GitHub의 개발자부터 소셜 인플루언서에 이르기까지 누구나 ReddID를 만들고 ReddCoin을 얻을 수 있습니다.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-4">
                <img class="wide margin-bottom-1 ae-5" src="assets/img/Who-socialcause.jpg" style="border-radius: 5px;" alt="Social Cause"/>
                <h4 class="small margin-bottom-1 weight-6 equalElement ae-5">사회적 대의</h4>
                <div class="ae-6"><p class="opacity-8">Redd를 사용함으로써 당신은 당신에게 중요한 대의를 지지하는 사람들을 지원할 수 있습니다.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-5">
                <img class="wide margin-bottom-1 ae-6" src="assets/img/Who-humanitarian.jpg" style="border-radius: 5px;" alt="Humanitarian"/>
                <h4 class="small margin-bottom-1 weight-6 equalElement ae-6">인도주의 프로그램</h4>
                <div class="ae-7"><p class="opacity-8">Redd와 함께 당신은 고래를 구하는 것에서부터 전쟁으로 폐허가 된 마을에 원조를 제공하는 것까지 어떤 프로그램도 지원할 수 있습니다.</p>
              </div>
            </li>
          </ul>
        </div>
        
        <!-- Russian language -->
        <div class="fix-10-12 toCenter" data-lang="ru" style="display:none;">
          <h1 class="smaller margin-bottom-2 ae-1">Что такое Redd и для кого он предназначен?</h1>
          <p class="large ae-2"><span class="opacity-8">ReddCoin - это инструмент, приносящий пользу людям. Это цифровая социальная валюта, которая позволяет давать чаевые последователям, сторонникам или фанатам и делиться 100% своей стоимости  по любому поводу, с любым человеком или организацией без посредников.</span></p>
        </div>
        <div class="fix-10-12 margin-top-4" data-lang="ru" style="display:none;">  
          <ul class="flex flex-49 later equal">
            <li class="col-4-12">
              <div class="fix-4-12 ae-3">
                <img class="wide margin-bottom-1 ae-4" src="assets/img/Who-contentcreator.jpg" style="border-radius: 5px;" alt="Content Creator"/>
                <h4 class="small margin-bottom-1 equalElement ae-4">Создателям контента</h4>
                <div class="ae-5"><p class="opacity-8">Любой человек, от разработчика на GitHub до влиятельного лица в социальных сетях, может создать ReddID и зарабатывать ReddCoins.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-4">
                <img class="wide margin-bottom-1 ae-5" src="assets/img/Who-socialcause.jpg" style="border-radius: 5px;" alt="Social Cause"/>
                <h4 class="small margin-bottom-1 equalElement ae-5">Социальные причины</h4>
                <div class="ae-6"><p class="opacity-8">Используя Redd, вы можете поддерживать тех, кто отстаивает важные для вас вопросы.</p>
              </div>
            </li>
            <li class="col-4-12">
              <div class="fix-4-12 ae-5">
                <img class="wide margin-bottom-1 ae-6" src="assets/img/Who-humanitarian.jpg" style="border-radius: 5px;" alt="Humanitarian"/>
                <h4 class="small margin-bottom-1 equalElement ae-6">Гуманитарные программы</h4>
                <div class="ae-7"><p class="opacity-8">С Redd вы можете поддержать любую программу - от спасения китов до помощи разоренному войной поселку.</p>
              </div>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!-- White Slide 3 (#29) -->
<section class="slide whiteSlide" data-name="about-history">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-12-12">
          <ul class="flex verticalCenter later">
            <li class="col-5-12 ae-1 cell-29">
              <img width="500" src="assets/img/plant.jpg" class="iphone-29" alt="The Redd Evolution"/>
            </li>
            
            <!-- English language -->
            <li class="col-7-12 left" data-lang="en">
              <h1 class="smaller margin-bottom-2 ae-1 fromLeft">How did we get here?</h1>
              <p class="ae-2 fromLeft"><span class="opacity-8">Redd is one of the oldest and most established cryptocurrency projects in the space. Created in early 2014, it first was known as &quot;Reddcoin.&quot; Over the past six years, the project has gone through several evolutions of its network and technology.</span></p>
              <p class="ae-3 fromLeft"><span class="opacity-8">Many people are unaware that Redd is a 100% volunteer-based organization. This is a major achievement that shows not only the passion and belief everyone has in this project but also the goals we are trying to make a reality. Redd has received donations from the community in the past, and is now self-funded through the most recent POSV v2 network upgrade.</span></p>
              <a href="/funding/" class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">Project Funding Page</a><a href="assets/doc/PoSV-v2-FAQ.pdf" class="button small white rounded crop margin-top-0 ae-5">Learn about POSV v2</a>
            </li>
            
            <!-- Deutsch language -->
            <li class="col-7-12 left" data-lang="de" style="display:none;">
              <h1 class="smaller margin-bottom-2 ae-1 fromLeft">Wie sind wir hierher gekommen?</h1>
              <p class="ae-2 fromLeft"><span class="opacity-8">Redd ist eines der ältesten und etabliertesten Kryptowährungsprojekte im Weltraum. Es wurde Anfang 2014 erstellt und ist zunächst als "Reddcoin" bekannt worden. In den letzten sechs Jahren hat das Projekt mehrere Entwicklungen seines Netzwerks und seiner Technologie durchlaufen.</span></p>
              <p class="ae-3 fromLeft"><span class="opacity-8">Vielen Menschen ist es nicht bekannt, dass Redd eine 100% freiwillige Organisation ist. Dies ist eine große Leistung, die nicht nur die Leidenschaft und den Glauben zeigt, das jeder an dieses Projekt hat, sondern auch die Ziele, die wir verwirklichen wollen.</span></p>
              <a href="/funding/" class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">Projektfinanzierungsseite</a><a href="assets/doc/PoSV-v2-FAQ.pdf" class="button small white rounded crop margin-top-0 ae-5">Erfahren Sie mehr über POSv2</a>
            </li>
            
            <!-- Korean language -->
            <li class="col-7-12 left" data-lang="ko" style="display:none;">
              <h1 class="smaller margin-bottom-2 ae-1 fromLeft"><span class="weight-8">우리가 어떻게 여기까지 왔을까요</span>?</h1>
              <p class="ae-2 fromLeft"><span class="opacity-8">Redd는 이 분야에서 가장 오래되고 가장 확립된 프로젝트 중 하나입니다. 2014년 초에 만들어져 처음에는 "ReddCoin"으로 알려졌으며, 지난 6년 동안 이 프로젝트는 네트워크 기술의 몇 가지 진화를 거쳤습니다.</span></p>
              <p class="ae-3 fromLeft"><span class="opacity-8">많은 사람들이 Redd가 100% 자원봉사를 기반으로한 조직이라는 것을 모르고 있습니다. 이것은 모두가 이 프로젝트에 가지고 있는 열정과 믿음뿐만 아니라 우리가 실현하고자 하는 목표들을 보여주는 중요한 성과입니다.</span></p>
              <a href="/funding/" class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">프로젝트 자금 지원 페이지</a><a href="assets/doc/PoSV-v2-FAQ.pdf" class="button small white rounded crop margin-top-0 ae-5">POSV v2에 대해 알아보기</a>
            </li>
            
            <!-- Russian language -->
            <li class="col-7-12 left" data-lang="ru" style="display:none;">
              <h1 class="smaller margin-bottom-2 ae-1 fromLeft">Как мы тут оказались?</h1>
              <p class="ae-2 fromLeft"><span class="opacity-8">Redd - один из старейших и наиболее устоявшихся проектов в криптовалютнном пространстве. Созданный в начале 2014 года, сначала был известен как "Reddcoin", но за последние шесть лет проект прошел через несколько эволюционных изменений своей сети и технологии.</span></p>
              <p class="ae-3 fromLeft"><span class="opacity-8">Многие люди не знают, что Redd - это 100% волонтерская организация. Это важное достижение, которое показывает не только страсть и веру каждого в этот проект, но и цели, которые мы пытаемся воплотить в жизнь.</span></p>
              <a href="/funding/" class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">Страница финансирования проекта</a><a href="assets/doc/PoSV-v2-FAQ.pdf" class="button small white rounded crop margin-top-0 ae-5">Узнать о POSV v2</a>
            </li>
            
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  
</section>

<!-- White Slide 4 (#34) -->
<section class="slide whiteSlide" data-name="about-redd">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-12-12">
          <ul class="flex verticalCenter reverse">
            <li class="col-6-12 left middle">
              
              <!-- English language -->
              <div class="fix-6-12 toLeft margin-left-tablet-auto margin-right-tablet-auto" data-lang="en">
                <h1 class="ae-1 fromLeft smaller margin-bottom-2">The meaning of Redd</h1>
                <p class="ae-2 fromLeft"><span class="opacity-8">With our latest redesign we made a conscious effort to emphasize our ongoing message of inclusion and caring for one another. The graphic in our logo symbolizes support and community. No one shape or color is the same. Yet all pieces come together to form one whole.</span></p>
                <p class="ae-3 fromLeft"><span class="opacity-8">This is the power of Redd. It is a place that welcomes anyone and empowers everyone. See our  upcoming Redd Book to learn more about Redd or our Redd Paper to learn more about ReddCoin, the engine that powers Redd.</span></p>
                <a href="assets/doc/Redd-Book.pdf" class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">Read our Redd Book</a><a href="assets/doc/Redd-Paper.pdf" class="button small white margin-left-0 ae-6 fromCenter">See our Redd Paper</a>
              </div>
              
              <!-- Deutsch language -->
              <div class="fix-6-12 toLeft margin-left-tablet-auto margin-right-tablet-auto" data-lang="de" style="display:none;">
                <h1 class="ae-1 fromLeft smaller margin-bottom-2">Die Bedeutung von Redd</h1>
                <p class="ae-2 fromLeft"><span class="opacity-8">Mit unserer Neugestaltung haben wir uns bewusst bemüht, unsere fortwährende Botschaft der Inklusion und gegenseitigen Fürsorge zu betonen. Die Grafik in unserem Logo symbolisiert Unterstützung und Community. Keine Form oder Farbe ist gleich. Dennoch bilden alle Teile ein Ganzes.</span></p>
                <p class="ae-3 fromLeft"><span class="opacity-8">Das ist die Kraft von Redd. Es ist ein Ort, das jeden willkommen heißt und jeden befähigt. In unserem kommenden Redd Book erfahren Sie mehr über Redd und in unserem Redd Paper erfahren Sie mehr über ReddCoin, den Motor, der Redd antreibt.</span></p>
                <a class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">Lesen Sie unser Redd Book</a><a href="assets/doc/Redd-Paper.pdf" class="button small white margin-left-0 ae-6 fromCenter">Schauen Sie unser Redd Paper an</a>
              </div>
              
              <!-- Korean language -->
              <div class="fix-6-12 toLeft margin-left-tablet-auto margin-right-tablet-auto" data-lang="ko" style="display:none;">
                <h1 class="ae-1 fromLeft smaller weight-6 margin-bottom-2">Redd의 의미</h1>
                <p class="ae-2 fromLeft"><span class="opacity-8">최근의 재설계를 통해서 우린 서로를 배려하고 포용하는 지속적인 메시지를 강조하기 위해 의식적인 노력을 기울였습니다. 저희 로고의 그래픽은 지원와 커뮤니티를 상징합니다. 어떤 모양이나 색깔도 같지 않습니다. 그러나 모든 조각들이 모여서 하나의 전체를 형성합니다.</span></p>
                <p class="ae-3 fromLeft"><span class="opacity-8">이것이 바로 Redd의 힘입니다. 모든 사람을 환영하고 모든 사람에게 권한을 부여하는 곳입니다. Redd에 대해 자세히 알아 보려면 곧 출시 될 Redd Book을 참조하고 Redd를 구동하는 엔진인 ReddCoin에 대해 자세히 알아 보려면 Redd Paper를 참조하세요.</span></p>
                <a href="assets/doc/Redd-Book.pdf" class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">Redd Book 읽기</a><a href="assets/doc/Redd-Paper.pdf" class="button small white margin-left-0 ae-6 fromCenter">Redd Paper 보기</a>
              </div>
              
              <!-- Russian language -->
              <div class="fix-6-12 toLeft margin-left-tablet-auto margin-right-tablet-auto" data-lang="ru" style="display:none;">
                <h1 class="ae-1 fromLeft smaller margin-bottom-2">Что означает Redd</h1>
                <p class="ae-2 fromLeft"><span class="opacity-8">В нашем последнем редизайне мы приложили огромные усилия, чтобы подчеркнуть наше постоянное послание о вовлеченности и заботе друг о друге. Изображение в нашем логотипе символизирует поддержку и объединение. Ни одна форма или цвет не похожи. Тем не менее, все части собираются вместе и образуют одно целое.</span></p>
                <p class="ae-3 fromLeft"><span class="opacity-8">В этом сила Redd. Это место, которое приветствует всех и вдохновляет всех. Прочтите  нашу книгу Redd Book, чтобы узнать больше о Redd, или наш Redd Paper, чтобы узнать больше о ReddCoin движке, на котором работает Redd.</span></p>
                <a href="assets/doc/Redd-Book.pdf" class="button small red margin-left-0 margin-right-1 ae-5 fromCenter">Прочтите нашу книгу Redd Book</a><a href="assets/doc/Redd-Paper.pdf" class="button small white margin-left-0 ae-6 fromCenter">Смотрите наш Redd Paper</a>
              </div>
              
            </li>
            <li class="col-6-12">
              <img class="ae-4 margin-bottom-tablet-4" width="580" styles="margin:-28% 0" src="assets/img/redd-3dgraphic.png" alt="Redd Graphic"/>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  
</section>

<!-- White Slide 5 (#90) -->
<section class="slide whiteSlide" data-name="core-team">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <!-- English language -->
        <div class="fix-8-12 toCenter" data-lang="en">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">The Redd Team</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Our Core Members</h1>
          <p class="large ae-2"><span class="opacity-8">These passionate people are responsible for making Redd a reality. With their vision and dedication, this project would not be where it is today.</span></p>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-9-12 toCenter" data-lang="de" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Das Redd-Team</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Unsere Kernmitglieder</h1>
          <p class="large ae-2"><span class="opacity-8">Diese leidenschaftlichen Menschen sind dafür verantwortlich, Redd Wirklichkeit werden zu lassen. Mit ihrer Vision und ihrem Engagement wäre dieses Projekt nicht dort, wo es heute ist.</span></p>
        </div>
        
        <!-- Korean language -->
        <div class="fix-8-12 toCenter" data-lang="ko" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Redd 팀</span></p>
          <h1 class="smaller weight-6 margin-bottom-2 ae-1">핵심 멤버</h1>
          <p class="large ae-2"><span class="opacity-8">이 열정적인 사람들은 Redd를 현실로 만드는 책임을 지고 있습니다. 그들의 비전과 헌신으로, 이 프로젝트의 미래는 오늘과 같지 않을 것입니다.</span></p>
        </div>
        
        <!-- Russian language -->
        <div class="fix-8-12 toCenter" data-lang="ru" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Команда Redd</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Наши Основные Сотрудники</h1>
          <p class="large ae-2"><span class="opacity-8">Эти увлеченные люди создают возможность того, чтобы Redd стал реальностью. Без их виденья и целеустремленности этот проект не был бы там, где он есть сегодня.</span></p>
        </div>
        
        <div class="fix-12-12 margin-top-4">
          <ul class="flex fixedSpaces later left">
            <li class="col-3-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-3"><img class="wide" src="assets/img/team-jay.jpg" style="border-radius: 5px;" alt="Jay &quot;TechAdept&quot; Laurence"/></div>
              <h4 class="smaller ae-4">Jay &quot;TechAdept&quot; Laurence</h4>
              <div class="ae-5"><p class="small cropBottom opacity-8">Project Leader</p></div>
              <div class="ae-5">
				  <a href="https://t.me/TechAdept" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://twitter.com/@TechAdeptRDD" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
				  <a href="https://www.linkedin.com/in/techadeptrdd/" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-5"><img class="wide" src="assets/img/team-john.jpg" style="border-radius: 5px;" alt="John &quot;CryptoGnasher&quot; Nash"/></div>
              <h4 class="smaller ae-6">John &quot;CryptoGnasher&quot; Nash</h4>
              <div class="ae-7"><p class="small cropBottom opacity-8">Technology Evangelist</p></div>
              <div class="ae-7">
				  <a href="https://t.me/CryptoGnasher" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://twitter.com/CryptoGnasher" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
				  <a href="http://www.linkedin.com/in/johnnash00" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-7"><img class="wide" src="assets/img/team-david.jpg" style="border-radius: 5px;" alt="David Faust"/></div>
              <h4 class="smaller ae-8">David Faust</h4>
              <div class="ae-9"><p class="small cropBottom opacity-8">Operations</p></div>
              <div class="ae-9">
				  <a href="https://t.me/dfaust400" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://twitter.com/davidfaust2936" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
				  <a href="https://www.linkedin.com/in/davidafaust" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-9"><img class="wide" src="assets/img/team-tim.jpg" style="border-radius: 5px;" alt="Tim &quot;MindReDDer&quot; Musick"/></div>
              <h4 class="smaller ae-10">Tim &quot;MindReDDer&quot; Musick</h4>
              <div class="ae-10"><p class="small cropBottom opacity-8">Business Development</p></div>
              <div class="ae-10">
				  <a href="https://t.me/MindReDDer" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://twitter.com/timothy_musick" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
				  <a href="https://www.linkedin.com/in/timothymindreddermusick/" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
  
</section>

<!-- White Slide 6 (#90) -->
<section class="slide whiteSlide" data-name="senior-team">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <!-- English language -->
        <div class="fix-8-12 toCenter" data-lang="en">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">The Redd Team</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Senior Officers</h1>
          <p class="large ae-2"><span class="opacity-8">Everyone on the team, including the senior officers have made major contributions to bring Redd into future of social interaction.</span></p>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-8-12 toCenter" data-lang="de" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Das Redd-Team</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Leitende Offiziere</h1>
          <p class="large ae-2"><span class="opacity-8">Alle im Team, einschließlich der leitenden Angestellten, haben wichtige Beiträge geleistet, um Redd in die Zukunft der sozialen Interaktion zu bringen.</span></p>
        </div>
        
        <!-- Korean language -->
        <div class="fix-8-12 toCenter" data-lang="ko" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Redd 팀</span></p>
          <h1 class="smaller weight-6 margin-bottom-2 ae-1">고위 실무자</h1>
          <p class="large ae-2"><span class="opacity-8">고위 실무자를 포함한 팀의 모든 사람들은 Redd를 사회적 상호작용의 미래로 이끌기 위해서 많은 공헌을 했습니다.</span></p>
        </div>
        
        <!-- Russian language -->
        <div class="fix-8-12 toCenter" data-lang="ru" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Команда Redd</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Старшие сотрудники</h1>
          <p class="large ae-2"><span class="opacity-8">Все в команде, включая старших сотрудников, внесли большой вклад в то, чтобы Redd стал будущим социальным взаимодействием.</span></p>
        </div>
        
        <div class="fix-12-12 margin-top-4">
          <ul class="flex fixedSpaces later left">
            <li class="col-2-10 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-3"><img class="wide" src="assets/img/team-roni.jpg" style="border-radius: 5px;" alt="Roni Toni"/></div>
              <h4 class="smaller ae-4">Roni Toni</h4>
              <div class="ae-5"><p class="small cropBottom opacity-8">Social Media Ambassador</p></div>
              <div class="ae-5">
				  <a href="https://t.me/teeroni" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="http://twitter.com/TeeRoni" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
              </div>
            </li>
            <li class="col-2-10 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-5"><img class="wide" src="assets/img/team-robin.jpg" style="border-radius: 5px;" alt="shroomlife"/></div>
              <h4 class="smaller ae-6">shroomlife</h4>
              <div class="ae-7"><p class="small cropBottom opacity-8">Fullstack Web Developer</p></div>
              <div class="ae-7">
				  <a href="https://t.me/shroomlife" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://twitter.com/theshroomlife" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
				  <a href="https://www.linkedin.com/in/shroomlife/" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
              </div>
            </li>
            <li class="col-2-10 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-7"><img class="wide" src="assets/img/team-michael.jpg" style="border-radius: 5px;" alt="Michael Kirlew"/></div>
              <h4 class="smaller ae-8">Michael Kirlew</h4>
              <div class="ae-9"><p class="small cropBottom opacity-8">Design &amp; Brand Strategy</p></div>
              <div class="ae-9">
				  <a href="https://t.me/coinmarketdeals" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://www.linkedin.com/in/michaelkirlew/" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
              </div>
            </li>
            <li class="col-2-10 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-9"><img class="wide" src="assets/img/team-tim.jpg" style="border-radius: 5px;" alt="ioDoug"/></div>
              <h4 class="smaller ae-10">ioDoug</h4>
              <div class="ae-10"><p class="small cropBottom opacity-8">Graphic Designer</p></div>
              <div class="ae-10">
				  <a href="https://t.me/ioClub" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
            <li class="col-2-10 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-10"><img class="wide" src="assets/img/team-pro.jpg" style="border-radius: 5px;" alt="Yavuz Selim"/></div>
              <h4 class="smaller ae-10">Yavuz Selim</h4>
              <div class="ae-10"><p class="small cropBottom opacity-8">Technical Advisor</p></div>
              <div class="ae-10">
				  <a href="https://t.me/Yavuz_Selim" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
  
</section>

<!-- White Slide 7 (#90) -->
<section class="slide whiteSlide" data-name="support-team">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <!-- English language -->
        <div class="fix-8-12 toCenter" data-lang="en">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">The Redd Team</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Supporting Cast</h1>
          <p class="large ae-2"><span class="opacity-8">There would be no community or awareness of our project if it was not for the key support members of the Redd team you see below.</span></p>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-8-12 toCenter" data-lang="de" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Das Redd-Team</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Nebendarsteller</h1>
          <p class="large ae-2"><span class="opacity-8">Ohne die wichtigsten Support-Mitglieder des Redd-Teams, die Sie unten sehen, gäbe es keine Community oder Wahrnehmung für unser Projekt.</span></p>
        </div>
        
        <!-- Korean language -->
        <div class="fix-8-12 toCenter" data-lang="ko" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Redd 팀</span></p>
          <h1 class="smaller weight-6 margin-bottom-2 ae-1">커뮤니티 관리자</h1>
          <p class="large ae-2"><span class="opacity-8">아래 보이는 Redd 팀의 핵심 지원팀이 아니었다면 우리 프로젝트에 대한 커뮤니티나 인지도는 없었을 것입니다.</span></p>
        </div>
        
        <!-- Russian language -->
        <div class="fix-8-12 toCenter" data-lang="ru" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Команда Redd</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Вспомогательный состав</h1>
          <p class="large ae-2"><span class="opacity-8">Не было бы никакого сообщества или осведомленности о нашем проекте, если бы не ключевые члены поддержки команды Redd, которых вы видите ниже.</span></p>
        </div>
        
        <div class="fix-12-12 margin-top-4">
          <ul class="flex fixedSpaces later left">
            <li class="col-3-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-3"><img class="wide" src="assets/img/team-tim.jpg" style="border-radius: 5px;" alt="Yoni"/></div>
              <h4 class="smaller ae-4">Yoni</h4>
              <div class="ae-5"><p class="small cropBottom opacity-8">IT Specialist</p></div>
              <div class="ae-5">
				  <a href="https://t.me/fireysword" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-5"><img class="wide" src="assets/img/team-pro.jpg" style="border-radius: 5px;" alt="Pro"/></div>
              <h4 class="smaller ae-6">Pro</h4>
              <div class="ae-7"><p class="small cropBottom opacity-8">Full Stack Developer</p></div>
              <div class="ae-7">
				  <a href="https://t.me/projoshi" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://www.linkedin.com/in/pramod-joshi" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-3 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-7"><img class="wide" src="assets/img/team-walter.jpg" style="border-radius: 5px;" alt="Walter"/></div>
              <h4 class="smaller ae-8">Walter</h4>
              <div class="ae-9"><p class="small cropBottom opacity-8">Legal Advisor</p></div>
              <div class="ae-9">
				  <a href="https://t.me/waltlou" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-3 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-9"><img class="wide" src="assets/img/team-pasquale.jpg" style="border-radius: 5px;" alt="Pasquale Carbone"/></div>
              <h4 class="smaller ae-10">Pasquale Carbone</h4>
              <div class="ae-10"><p class="small cropBottom opacity-8">Social Media Advisor</p></div>
              <div class="ae-10">
				  <a href="https://t.me/PasCarbs" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-3 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-4"><img class="wide" src="assets/img/team-shin.jpg" style="border-radius: 5px;" alt="Shin JK"/></div>
              <h4 class="smaller ae-5">Shin JK</h4>
              <div class="ae-6"><p class="small cropBottom opacity-8">Social Media Advisor</p></div>
              <div class="ae-6">
				  <a href="https://t.me/Reddheadjk" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-3 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-6"><img class="wide" src="assets/img/team-willem.jpg" style="border-radius: 5px;" alt="Willem Dik"/></div>
              <h4 class="smaller ae-7">Willem Dik</h4>
              <div class="ae-8"><p class="small cropBottom opacity-8">Social Outreach</p></div>
              <div class="ae-8">
				  <a href="https://t.me/WillemDik" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-3 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-8"><img class="wide" src="assets/img/team-randy.jpg" style="border-radius: 5px;" alt="Randy"/></div>
              <h4 class="smaller ae-9">Randy</h4>
              <div class="ae-10"><p class="small cropBottom opacity-8">Social Outreach</p></div>
              <div class="ae-10">
				  <a href="https://t.me/Fldammy" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
              </div>
            </li>
            <li class="col-3-12 col-tablet-1-3 col-phone-1-1 padding-bottom-4">
              <div class="empty margin-bottom-2 noShadow ae-10"><a href="/join/"><img class="wide" src="assets/img/team-you.jpg" style="border-radius: 5px;" alt="Join Team Redd"/></a></div>
              <h4 class="smaller ae-10">This could be you!</h4>
              <div class="ae-10"><p class="small cropBottom opacity-8"><a href="/join/">Join Team Redd</a></p></div>
              <div class="ae-10">
				  <a href="https://t.me/ReddcoinOfficial" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a>
				  <a href="https://twitter.com/ProjectReddTW" target="_blank" rel="noreferrer"><svg style="margin-right:10px;width:15px;height:15px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
              </div>
            </li>
          </ul>
          
        </div>

      </div>
    </div>
  </div>
  
</section>

<!-- White Slide 8 (#90) -->
<section class="slide whiteSlide" data-name="community">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <!-- English language -->
        <div class="fix-8-12 toCenter margin-bottom-2" data-lang="en">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">The Reddheads</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Our Community</h1>
          <p class="large ae-2"><span class="opacity-8">One of the best things about Redd is our amazing community of users who support not only our vision but share our same values.</span></p>
        </div>
        
        <!-- Deutsch language -->
        <div class="fix-8-12 toCenter margin-bottom-2" data-lang="de" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Die Rothaarigen</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Unsere Gemeinschaft</h1>
          <p class="large ae-2"><span class="opacity-8">Eines der besten Dinge an Redd ist unsere erstaunliche Community, die nicht nur unsere Vision unterstützt, sondern dieselben Werte teilt.</span></p>
        </div>
        
        <!-- Korean language -->
        <div class="fix-8-12 toCenter margin-bottom-2" data-lang="ko" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">The Reddheads</span></p>
          <h1 class="smaller weight-6 margin-bottom-2 ae-1">우리의 커뮤니티</h1>
          <p class="large ae-2"><span class="opacity-8">Redd의 가장 좋은 점 중 하나는 우리의 비전을 지지할 뿐만 아니라 우리와 같은 가치를 공유하는 놀라운 사용자 커뮤니티입니다.</span></p>
        </div>
        
        <!-- Russian language -->
        <div class="fix-8-12 toCenter margin-bottom-2" data-lang="ru" style="display:none;">
          <p class="larger margin-bottom-1 ae-1"><span class="opacity-4">Reddheads</span></p>
          <h1 class="smaller margin-bottom-2 ae-1">Наше сообщество</h1>
          <p class="large ae-2"><span class="opacity-8">Одна из лучших сторон Redd - это удивительное сообщество пользователей, которые поддерживают не только наше виденье, но и разделяют наши общие ценности.</span></p>
        </div>
        
        <div class="fix-10-12 margin-top-4">
          <ul class="flex fixedSpaces later center">
            <li class="col-2-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <p class="ae-3"><a href="https://www.facebook.com/reddcoin" target="_blank" rel="noreferrer"><svg style="width:70px;height:70px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg></a></p>
              <h4 class="smaller ae-4">Facebook</h4>
            </li>
            <li class="col-2-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <p class="ae-4"><a href="https://twitter.com/ProjectReddTW" target="_blank" rel="noreferrer"><svg style="width:70px;height:70px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a></p>
              <h4 class="smaller ae-5">Twitter</h4>
            </li>
            <li class="col-2-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <p class="ae-5"><a href="https://t.me/ReddcoinOfficial" target="_blank" rel="noreferrer"><svg style="width:70px;height:70px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#telegram"></use></svg></a></p>
              <h4 class="smaller ae-6">Telegram</h4>
            </li>
            <li class="col-2-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <p class="ae-6"><a href="https://www.reddit.com/r/ProjectRedd" target="_blank" rel="noreferrer"><svg style="width:70px;height:70px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#reddit"></use></svg></a></p>
              <h4 class="smaller ae-7">Reddit</h4>
            </li>
            <li class="col-2-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <p class="ae-6"><a href="https://discord.gg/vKyEVnw" target="_blank" rel="noreferrer"><svg style="width:70px;height:70px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#discord"></use></svg></a></p>
              <h4 class="smaller ae-7">Discord</h4>
            </li>
            <li class="col-2-12 col-tablet-1-2 col-phone-1-1 padding-bottom-4">
              <p class="ae-6"><a href="https://reddcointalk.org/" target="_blank" rel="noreferrer"><svg style="width:70px;height:70px"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#redd-blk-symbol"></use></svg></a></p>
              <h4 class="smaller ae-7">Redd Talk</h4>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
  
</section>

<?php include(COMPONENT_DIR . '/footer.php'); ?>