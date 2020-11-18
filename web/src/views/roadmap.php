<?php

  // Page Configuration
  $title = 'The Future of Redd | The social currency.';

  // Page Configuration
  $navigations = [
    [],
    ['classes' => 'white exceptFirstSlide']
  ];
  $footerClasses = 'white exceptFirstSlide';

?>
<?php include(COMPONENT_DIR . '/header.php'); ?>
<?php include(COMPONENT_DIR . '/svg.php'); ?>
<?php include(COMPONENT_DIR . '/sidebar.php'); ?>

<!-- Slide 1 (#19) -->
<section class="slide kenBurns transparent" data-name="about-home">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <div class="fix-8-12">
          <h1 class="largest margin-bottom-2 margin-top-2 ae-1">The ReddMap</h1>
          <p class="largest ae-2"><span class="opacity-8">See all the awesome things what we’ve done up to this point and where we plan on going in the near future.</span></p>
        </div>
        <div class="fix-12-12 ae-2 margin-top-6">
          <img src="assets/img/map-ipad.png" width="1080" class="ipad-6" alt="iPad App" data-action="zoom"/>
        </div>
      
      </div>
    </div>
  </div>
  <div class="background" style="background-image:url(assets/img/background/map-sect-1.jpg)"></div>
</section>


<!-- White Slide 2 (#49) -->
<section class="slide whiteSlide" data-name="about-who">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- Future Milestones -->
        <div class="fix-8-12 toCenter">
          <h1 class="margin-bottom-2 ae-1">Future Milestones</h1>
        </div>
        <div class="fix-8-12 margin-top-4" data-lang="en">  
        
        
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-2">
				<h4 class="margin-bottom-1 equalElement">2021 & Onward</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">DeFi & Stable Coin Integration</li>
				  <li class="small crop margin-left-2">Wrapped RDD Implementations</li>
				  <li class="small crop margin-left-2">Interoperability with Third-party Blockchain & Payment Systems</li>
				  <li class="small crop margin-left-2">Corporate Partnership & Product integrations</li>
				  <li class="small crop margin-left-2">Wearable & NFC Applications for Redd Payment Solutions</li>
				  <li class="small crop margin-left-2">Local Governmental Pilot in Africa</li>
				</ol>
            </li>
          </ul>

        </div>   
      </div>
    </div>
  </div>
</section>



<!-- White Slide 3 (#49) -->
<section class="slide whiteSlide" data-name="about-who">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- Current Progress & Partnerships -->
        <div class="fix-8-12 toCenter">
          <h1 class="margin-bottom-2 ae-1">Current Progress</h1>
          <p class="large ae-2"><span class="opacity-8">Here we are letting our community know a list of items we are currently working on and any relationships we are building with other companies in the industry.</span></p>
        </div>
        <div class="fix-8-12 margin-top-4" data-lang="en">  
        
        
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-2">
                <h4 class="margin-bottom-1 equalElement">Core Wallet</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Continue feature(s) evolution to track Bitcoin Core codebase.</li>
				  <li class="small crop margin-left-2">HD (Hierarchical Deterministic) Wallet Support</li>
				  <li class="small crop margin-left-2">Rapid-Sync Headers-first Full Synchronization (achieved in v3.10.3)</li>
				  <li class="small crop margin-left-2">DDoS &amp; Peer Management Enhancements (achieved in v3.10.3)</li>
				  <li class="small crop margin-left-2">Transaction Optimizations &amp; Blocksize Research</li>
				  <li class="small crop margin-left-2">24-word Seed Phrase Backup/Restore of Keys</li>
				  <li class="small crop margin-left-2">Watch-only Addresses (achieved in v3.10.2)</li>
				  <li class="small crop margin-left-2">PoSV v2 In-wallet Information Summary Pane</li>
				  <li class="small crop margin-left-2">Block Explorer In-wallet Summary Information</li>
				  <li class="small crop margin-left-2">Live Debug and Error Log Monitoring Pane inside wallet</li>
				  <li class="small crop margin-left-2">Add Additional In-wallet Maintenance Tools</li>
				  <li class="small crop margin-left-2">Check for Upgrade Functionality</li>
				  <li class="small crop margin-left-2">Send RDD via Email</li>
				  <li class="small crop margin-left-2">Send Fixed Value RDD Contracts using Coinlock</li>
				  <li class="small crop margin-left-2">Send RDD Payment Requests</li>
				  <li class="small crop margin-left-2">Exploring In-wallet Stake-based Voting</li>
				  <li class="small crop margin-left-2">Non-staking Trezor & Ledger Hardware Integration</li>
				  <li class="small crop margin-left-2">Enhanced Multi-signature &amp; Time-based Transaction Controls</li>
				  <li class="small crop margin-left-2">REST and JSON API Enhancements with New RPC and Custom-built Redd RPC Commands (achieved in v3.10.3)</li>
				</ol>
            </li>
          </ul>


          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-1">
                <h4 class="margin-bottom-1 equalElement">Mobile Core Wallet</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Enhance Protocol to use Electrum/ElectrumX Solutions</li>
				  <li class="small crop margin-left-2">Android/iOS/Other Support</li>
				  <li class="small crop margin-left-2">Satisfy Non-custodial &amp; Security Requirements</li>
				  <li class="small crop margin-left-2">Mobile Staking Support</li>
				  <li class="small crop margin-left-2">Design UI/UX for Application</li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-1">
                <h4 class="margin-bottom-1 equalElement">ReddID</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Mobile-focused Development (90%+ of social users are on mobile, not desktop)</li>
				  <li class="small crop margin-left-2">Integration with Native Camera/Biometric/Third-party Apps</li>
				  <li class="small crop margin-left-2">Redesign of UI/UX</li>
				  <li class="small crop margin-left-2">Create ReddRewards On-boarding Incentive Program</li>
				  <li class="small crop margin-left-2">Exploring ReddID SuperNode Architecture</li>
				  <li class="small crop margin-left-2">ReddID Leaderboard/Stats Website</li>
				  <li class="small crop margin-left-2">ReddID Block Explorer Resource (API)</li>
				  <li class="small crop margin-left-2">Redesign/upgrade ReddCoin (RDD) Block Explorer</li>
				</ol>
            </li>
          </ul>

          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-1">
                <h4 class="margin-bottom-1 equalElement">General Partnerships &amp; Listings</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Working on Exchange Status Updates</li>
				  <li class="small crop margin-left-2">Working on Partnership Status Updates</li>
				  <li class="small crop margin-left-2">Integrated into FCAS’ <a href="https://app.flipsidecrypto.com/cooperative" class="customHover" target="_blank" rel="noreferrer">FlipSide Data Cooperative</a> for Greater Transparency &amp; Insight to project</li>
				  <li class="small crop margin-left-2">Opportunity for Bittrex RDD/USDT pair if proper liquidity can be provided by Redd or a third party</li>
				  <li class="small crop margin-left-2">Inclusion in <a href="https://coinmarketcap.com/indices/" class="customHover" target="_blank" rel="noreferrer">Crypto200 Digital Asset Index</a> by Solactive</li>
				  <li class="small crop margin-left-2">In discussions for Liquid.com’s <a href="https://app.liquid.com/quick-exchange" class="customHover" target="_blank" rel="noreferrer">“Liquid By Quoine” QuickExchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://revain.org/projects/reddcoin" class="customHover" target="_blank" rel="noreferrer">Revain Project (Live Reviews)</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-1">
                <h4 class="margin-bottom-1 equalElement">Project Redd</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><strong>ReddHelp –</strong> Global Support Center to launch on <a href="https://redd.help" class="customHover" target="_blank" rel="noreferrer">https://redd.help</a></li>
				  <li class="small crop margin-left-2"><strong>ReddWeb –</strong> Created <a href="https://redd.help" class="customHover" target="_blank" rel="noreferrer">https://redd.love</a> website to feature more accessible information, social movement aspects and documentation of Project.</li>
				  <li class="small crop margin-left-2"><strong>ReddTech –</strong> Redesign/update Reddcoin.com website to feature up-to-date ReddID, Wallet, and RDD technical cryptocurrency information/guides for users and developers.</li>
				  <li class="small crop margin-left-2"><strong>ReddAcademy –</strong> Educational portal, training and user video library to be launched on <a href="https://redd.academy" class="customHover" target="_blank" rel="noreferrer">https://redd.academy</a> with possible RDD-based incentive goals.</li>
				  <li class="small crop margin-left-2"><strong>ReddStats –</strong> ReddID data explorer, ReddCoin network enhanced block explorer, dynamic and up-to-date info on Redd projects, efforts and status of any live events.</li>
				  <li class="small crop margin-left-2"><strong>ReddBlog –</strong> Acting as a primary point of publishing for Redd as well as worthwhile contributors like the “Good News Blog” and other ReddHead-targeted unique content.</li>
				  <li class="small crop margin-left-2"><strong>ReddFunding –</strong> Transparency on current funding, obligations, targets and goals. <a href="https://redd.love/funding/" class="customHover" target="_blank" rel="noreferrer">See here</a></li>
				  <li class="small crop margin-left-2"><strong>ReddCharity –</strong> Engaging the community and the project’s firm commitment to charitable and altruistic efforts.</li>
				  <li class="small crop margin-left-2"><strong>ReddCard –</strong> VISA-branded debit/credit card through Visa.com Fintech Accelerator Program. <i>(*Already invited to participate, revenue/income needs to reach minimum requirement)</i></li>
				  <li class="small crop margin-left-2"><strong>ReddDocs –</strong> Project Redd documentation - Redd Book, Redd Handbook, more documents to come.</li>
				  <li class="small crop margin-left-2"><strong>ReddShift –</strong> Ability to exchange RDD to/and from fiat and other cryptos directly our website and apps securely.</li>
				  <li class="small crop margin-left-2"><strong>ReddTalk –</strong> Community discussion forums at <a href="https://reddcointalk.org" class="customHover" target="_blank" rel="noreferrer">https://reddcointalk.org</a>, possibly migrating to combined Redd and ReddCoin forum in future.</li>
				  <li class="small crop margin-left-2"><strong>ReddWords –</strong> New social media channels launched on  Xangle.com, Blockfolio.com, CoinMarketCap Headlines & events, and more.</li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-1">
                <h4 class="margin-bottom-1 equalElement">Community &amp; Team Building</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><strong>ReddHead Outreach –</strong> Focuses on community building, growth and general user acquisition.</li>
				  <li class="small crop margin-left-2"><strong>ReddTech Development –</strong> Responsible for building ReddCoin and all required supporting applications.</li>
				  <li class="small crop margin-left-2"><strong>ReddSwarm Development –</strong> Community activism and ambassadorships.</li>
				</ol>
            </li>
          </ul>
          

        </div>   
      </div>
    </div>
  </div>
</section>


<!-- White Slide 4 (#49) -->
<section class="slide whiteSlide" data-name="about-who">
  <div class="content">
    <div class="container">
      <div class="wrap">
      
        <!-- Past Milestones -->
        <div class="fix-8-12 toCenter">
          <h1 class="margin-bottom-2 ae-1">Past Milestones</h1>
          <p class="large ae-2"><span class="opacity-8">Below is an in-depth look at all the major milestones Redd has achieved over the last couple of years. Take a look at how far we've come!</span></p>
        </div>
        <div class="fix-8-12 margin-top-4" data-lang="en">  
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic_start.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-6 fromRight left ae-2">
                <h4 class="margin-bottom-1 equalElement">2020 Q4</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Started Public Testing of New Electrum-based Mobile ReddWallet.</li>
				  <li class="small crop margin-left-2">Project <a href="https://t.co/rs5yMSw8S3" class="customHover" target="_blank" rel="noreferrer">#Redd</a> launches.</li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromTop">
                <img class="wide margin-bottom-1 ae-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left ae-1">
                <h4 class="margin-bottom-1 equalElement">2020 Q3</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Redd Core Wallet v3.10.3 Released</li>
				  <li class="small crop margin-left-2">Reddcoin Rebranded to Redd</li>
				  <li class="small crop margin-left-2">The Redd Book is Published</li>
				  <li class="small crop margin-left-2"><a href="https://redd.love" class="customHover" target="_blank" rel="noreferrer">Project Redd Launched</a></li>
				  <li class="small crop margin-left-2">Bololex Opened RDD Trading</li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1293591160443871234" class="customHover" target="_blank" rel="noreferrer">Getblock.io Launches High-avail Redd API Node</a></li>
				  <li class="small crop margin-left-2"><a href="https://link.medium.com/HxcB23ekN8" class="customHover" target="_blank" rel="noreferrer">August Redd Team Update</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.youtube.com/watch?v=AipJQX0yTRM&feature=youtu.be" class="customHover" target="_blank" rel="noreferrer">Redd "Block Party" AMA/Q&A</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.reddcoin.com/2020/07/30/reddcoin-rdd-core-wallet-v3-10-2-dos-mitigation-and-peer-management-update/" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet v3.10.2 Released (DoS Mitigation)</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/Ta4SwqPVGz" class="customHover" target="_blank" rel="noreferrer">Redd Activates PoSV v2 Algorithm (New Consensus Rules Activated)</a></li>
				  <li class="small crop margin-left-2"><a href="https://github.com/reddcoin-project/reddcoin-docker" class="customHover" target="_blank" rel="noreferrer">Redd Releases “Dockerized” Versions of Core Software</a></li>
				  <li class="small crop margin-left-2"><a href="https://github.com/reddcoin-project/reddcoin/releases" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet v3.10.1 Released</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2020 Q2</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><a href="https://youtu.be/DAXjNGWkeDw" class="customHover" target="_blank" rel="noreferrer">Interview with Jsnip4 of Realist News</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.reddcoin.com/2020/06/19/cardrates-com-informative-article-on-reddcoin-rdd-reddid-reddheads-more/" class="customHover" target="_blank" rel="noreferrer">Redd Article Published by Cardrates.com</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1271814542641766401" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet v3.10.0 Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.youtube.com/watch?v=z10ePYupYHo" class="customHover" target="_blank" rel="noreferrer">Blockchain Breakfast Podcast with Redd</a></li>
				  <li class="small crop margin-left-2">Redd Core Beta Wallet v3.10.0rc4 Release (w/MacOS Catalina)</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/569Vi95xNE" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet v3.10.0rc1 Release</a></li>
				  <li class="small crop margin-left-2"><a href=" https://medium.com/@techadept/reddcoin-rdd-may-2020-team-update-or-what-to-expect-when-youre-expecting-posv-v2-b708319221ce?sk=b5eafc57b67327d99a35380f390d77ca" class="customHover" target="_blank" rel="noreferrer">Redd May Team Update</a></li>
				  <li class="small crop margin-left-2">ReddCoin (RDD) Market Capitalization Doubled</li>
				  <li class="small crop margin-left-2">PoSV v2 Reaches 6,750 out of 9,000 Blocks (75% Consensus)</li>
				  <li class="small crop margin-left-2"><a href="https://www.youtube.com/watch?v=zVY5xwHwDQ8&feature=youtu.be" class="customHover" target="_blank" rel="noreferrer">First Redd Global Virtual Meetup</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2020 Q1</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Redd Announces Partnership with Rypplzz</li>
				  <li class="small crop margin-left-2"><a href="https://www.youtube.com/watch?v=nTjlad5CQrM" class="customHover" target="_blank" rel="noreferrer">Redd January Core Team Update</a></li>
				  <li class="small crop margin-left-2">2020 Australian Firefighter Crypto Fundraiser</li>
				  <li class="small crop margin-left-2">Redd Meme Competition Winner Announced</li>
				  <li class="small crop margin-left-2">Redd Developer Call & AMA</li>
				  <li class="small crop margin-left-2">Redd Blockchain 6th Year Anniversary</li>
				  <li class="small crop margin-left-2">PoSV v2 reaches 4,500 out of 9,000 blocks (50% Consensus)</li>
				  <li class="small crop margin-left-2">Red Core Wallet v3.0.1 Released</li>
				  <li class="small crop margin-left-2"><a href="" class="customHover" target="_blank" rel="noreferrer">Redd Core RaspberryPi (ARM) v3.0 Wallet Released</a></li>
				  <li class="small crop margin-left-2">PoSV v2 reaches 3,000 out of 9,000 Blocks (33.33% Consensus)</li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2019 Q4</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><a href="https://www.reddcoin.com/2019/12/31/rdd-posv-v2-with-enhanced-staking-a-simple-core-wallet-upgrade-and-a-quantum-leap-forward-for-reddcoin-rdd/" class="customHover" target="_blank" rel="noreferrer">Article on PoSV v2 with Enhanced Staking</a></li>
				  <li class="small crop margin-left-2">Redd Core Wallet v3.0.0 Released (PoSV v2 Launched)</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/0H0yjjantf" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet v3.0.0RC1 Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.reddcoin.com/2019/12/24/official-release-v3-0-posv2/" class="customHover" target="_blank" rel="noreferrer">Official Release v3.0 PoSV v2</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1198990215634915329" class="customHover" target="_blank" rel="noreferrer">Listed on VCC Exchange</a></li>
				  <li class="small crop margin-left-2">Redd Reaches Block Number 3,000,000</li>
				  <li class="small crop margin-left-2">Redd Point-Of-Sale (POS) Mobile App Released</li>
				  <li class="small crop margin-left-2"><a href="https://www.reddcoin.com/2019/10/09/9300/" class="customHover" target="_blank" rel="noreferrer">Announces New Enhanced Proof of Stake Velocity Protocol</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2019 Q3</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Enhanced PoSV v2 Protocol Announced</li>
				  <li class="small crop margin-left-2">Attended Coinvention 2019</li>
				  <li class="small crop margin-left-2">ReddID ‘Love Button’ Code Turned Open-source</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/axl85e9cpP" class="customHover" target="_blank" rel="noreferrer">Redd Relaunches ReddID (Beta)</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/CLHFRwLhTD" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Utrum Crypto Playbook</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/fyDKhUi5L4" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on BXB Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.forbes.com/sites/joresablount/2019/09/05/these-startups-show-blockchains-potential-in-various-industries/#6fd9b4d36e0b" class="customHover" target="_blank" rel="noreferrer">Forbes.com Publishes Article on Redd</a></li>
				  <li class="small crop margin-left-2">New Reddcoin.com Website Goes live</li>
				  <li class="small crop margin-left-2">PoSV v2 Frequently Asked Questions (FAQ) Published</li>
				  <li class="small crop margin-left-2">The Redd Paper: A Guide to PoSV v2 Published</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/nsMhLptjGd" class="customHover" target="_blank" rel="noreferrer">ReddCoin Listed on SwapSpace</a></li>
				  <li class="small crop margin-left-2"><a href="https://youtu.be/ORvrclvprwM" class="customHover" target="_blank" rel="noreferrer">Redd Q3 Core Team Update</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/xgtwFzCwfE" class="customHover" target="_blank" rel="noreferrer">ReddCoin Listed on CryptofacilEX Latin America</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/sequoirx/status/1150752250937118721" class="customHover" target="_blank" rel="noreferrer">ReddCoin Listed on Vertbase Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/wmVJobCjiU" class="customHover" target="_blank" rel="noreferrer">ReddCoin Listed on DynX Exchange</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2019 Q2</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">ReddCoin (RDD) Records Market Cap New All-time High</li>
				  <li class="small crop margin-left-2"><a href="https://www.reddcoin.com/2019/06/17/hello-world-reddcoin-energizes-with-a-dev-team-video-ama/" class="customHover" target="_blank" rel="noreferrer">Redd Developer Team AMA</a></li>
				  <li class="small crop margin-left-2"><a href="https://youtu.be/xxx_gq2qEec" class="customHover" target="_blank" rel="noreferrer">ReddCoin Listed on VCC Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/woUZiIXtrU" class="customHover" target="_blank" rel="noreferrer">Redd Reintroduces ReddID Tipping Extension v0.99.19</a></li>
				  <li class="small crop margin-left-2">ReddCoin Listed at Changeangel.io</li>
				  <li class="small crop margin-left-2"><a href="https://rdd.tokenview.com https://t.co/ubSFReUqTh" class="customHover" target="_blank" rel="noreferrer">New ReddCoin Block Explorer Goes Live</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoinnews/status/1117313317352112129" class="customHover" target="_blank" rel="noreferrer">ReddCoin Listed on CoinZark</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2019 Q1</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><a href="https://www.reddit.com/r/reddCoin/comments/b737sy/reddcoin_rdd_core_reddid_v09914_rereleased_to/" class="customHover" target="_blank" rel="noreferrer">ReddID v0.99.14 Goes to Public Testing</a></li>
				  <li class="small crop margin-left-2">ReddCoin Listed at Cryptofacil.com Exchange</li>
				  <li class="small crop margin-left-2"><a href="https://www.instagram.com/reddcoin/" class="customHover" target="_blank" rel="noreferrer">Redd Starts Publishing on Intsagram</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1097949101843496961" class="customHover" target="_blank" rel="noreferrer">ReddCoin Listed on Cheddur</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/qi0pEdL7wp" class="customHover" target="_blank" rel="noreferrer">ReddCoin Goes Live on CoinGecko Beam</a></li>
				  <li class="small crop margin-left-2">5th Anniversary of the Redd Blockchain</li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2018 Q4</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><a href="https://cryptogazette.com/rdeddcoins-rdd-badly-required-wallet-a-life-changing-dev-for-widening-economic-community/" class="customHover" target="_blank" rel="noreferrer">Redd Wallet Update</a></li>
				  <li class="small crop margin-left-2">ReddCoin (Rdd) All-time Low Market Cap Recorded</li>
				  <li class="small crop margin-left-2">Redd Blockchain Reaches Block Number 2,500,000</li>
				  <li class="small crop margin-left-2">ReddCoin Listed on Domitai Exchange</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/pybhjhQRsc" class="customHover" target="_blank" rel="noreferrer">ReddID v0.99.3 Released with Firefox Support</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/3tD9bGukZH" class="customHover" target="_blank" rel="noreferrer">Redd & WhaleApparel Offer ReddGear</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1054465194875912193" class="customHover" target="_blank" rel="noreferrer">ReddCoin Integrated Into Delta Direct App</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.youtube.com/watch?v=dA0brltVOkU" class="customHover" target="_blank" rel="noreferrer">Reddcoin & Minecraft</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/OfDXR0qd5x" class="customHover" target="_blank" rel="noreferrer">ReddID v0.99.2 Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1048305306831413248" class="customHover" target="_blank" rel="noreferrer">Guarda Multiwallet Adds ReddCoin Integration</a></li>
				  <li class="small crop margin-left-2">ReddID Video – The Internet’s Love Button</li>
				  <li class="small crop margin-left-2"><a href=" https://t.co/qeQTCKmJqx" class="customHover" target="_blank" rel="noreferrer">ReddID Public Beta Tipping Extension Launched</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2018 Q3</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2">Redd Gets Added to Blockfolio Signal App</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/8SHIEYRYaq" class="customHover" target="_blank" rel="noreferrer">Redd Announces Partnership with Hodl Finance</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/PbTmIO4nam" class="customHover" target="_blank" rel="noreferrer">ReddID Social Tipping Extension Beta v0.1.7 Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/sUF2d09Tdp" class="customHover" target="_blank" rel="noreferrer">Redd Shuts Down Twitter Tipbot</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/9dTfmINH8q" class="customHover" target="_blank" rel="noreferrer">Redd Partners with TourDeCrypto to Raise Awareness</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/YzThpTUAcX" class="customHover" target="_blank" rel="noreferrer">"Reddcoin Alliance" Launches Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.switchain.com/" class="customHover" target="_blank" rel="noreferrer">Redd Goes Live on SwitchChain</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/oMEQDvYOEx" class="customHover" target="_blank" rel="noreferrer">BiYong Sponsors Reddcoin China Channel</a></li>
				  <li class="small crop margin-left-2"><a href="https://app.algory.io/app/cryptonews" class="customHover" target="_blank" rel="noreferrer">Redd added as a dedicated feed to Algory, Cryptonews Aggregator</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/suPwD5tb2N" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Kompler Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1029396782051147777" class="customHover" target="_blank" rel="noreferrer">Redd Added to ALT100 CryptoIndex</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/nVo9BKolYn" class="customHover" target="_blank" rel="noreferrer">ReddID Tipping Extension v0.1.5.1 Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/AeHfW51orm" class="customHover" target="_blank" rel="noreferrer">ReddID Beta v0.1.3 is Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/edL0cl3iOt" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet Limited Beta v0.1.2 Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/GCeDeQngcw" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet Limited Beta v0.1.1 Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1022304899453923328" class="customHover" target="_blank" rel="noreferrer">Redd Faucet Goes Live</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/zLsCwmjwSk" class="customHover" target="_blank" rel="noreferrer">Redd Now Available on Easybit.com</a></li>
				  <li class="small crop margin-left-2">ReddID Public Beta Testing Began</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/NjGlDXyCOQ" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on EasyRabbit Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/EUDGsT0KeL" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on ChangeNOW</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/iN41FAOTKJ" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on BitBox Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/AZEIDXfAqk https://t.co/IoBNzFSv5r" class="customHover" target="_blank" rel="noreferrer">ReddID Public Beta User Documentation Released</a></li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromCenter">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_cont.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2018 Q2</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><a href="https://t.co/3o0tewbAuF" class="customHover" target="_blank" rel="noreferrer">Redd’s Subreddit Chat Goes Live</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/t8D3kzIVG7 https://t.co/iMTNJjRikw https://t.co/rtVvmQ6aeN" class="customHover" target="_blank" rel="noreferrer">Redd Listed Bitvavo.com</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/49ujQfHTJT" class="customHover" target="_blank" rel="noreferrer">Redd Official Korea Telegram Chat Goes Live</a></li>
				  <li class="small crop margin-left-2"><a href="https://www.facebook.com/reddcoinbrasil/" class="customHover" target="_blank" rel="noreferrer">Launch of Redd Brasil Community</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/6m7Pb4UdiA" class="customHover" target="_blank" rel="noreferrer">Redd Announces Strategic Partnership with Musards</a></li>
				  <li class="small crop margin-left-2">Redd-Id Private Beta Testing Began</li>
				  <li class="small crop margin-left-2"><a href="https://exchange-assets.com/en/?market=rdd_btc" class="customHover" target="_blank" rel="noreferrer">ReddCoin Live on Russian Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/cYdwdo044q" class="customHover" target="_blank" rel="noreferrer">What is ReddID?</a></li>
				  <li class="small crop margin-left-2">Redd Announces Partnership with Linda Blockchain</li>
				  <li class="small crop margin-left-2">Redd Announces Partnership with Phore Blockchain</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/hLm20fU4vb" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on CoinCalendar</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/GcQ8EBkQ0Q" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Ircex Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/6KKku54zWr" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) declared a Utility Token</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/skW4Hpszk8" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Altilly.com Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/JBJ9PksqyP" class="customHover" target="_blank" rel="noreferrer">ReddCoin Faucet Live on Altilly.com</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/1001845104221609984" class="customHover" target="_blank" rel="noreferrer">ReddCoin Integrated onto CoinMonkey_io</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/Z4KSwSEb8m" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Bithemoth Exchange</a></li>
				  <li class="small crop margin-left-2">Staking Live on Rymos.com Webwallet</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/5HJGEAAj84" class="customHover" target="_blank" rel="noreferrer">ReddId Name Cost Calculator Released</a></li>
				  <li class="small crop margin-left-2"><a href="https://onchainfx.com/asset/reddcoin" class="customHover" target="_blank" rel="noreferrer">ReddCoin Asset Analysis Live at OnChainFX (now Messari)</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/o2pO6lC0gb" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Indian KoinOK Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/998968461085863937" class="customHover" target="_blank" rel="noreferrer">Redd May Team Update</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/vCVLrJMA6A" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on NovaExchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/LA0coFBbKL" class="customHover" target="_blank" rel="noreferrer">Redd Attends Consensus 2018</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/JTvZA9OtKO" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Cfinex Exchange</a></li>
				  <li class="small crop margin-left-2">Redd Launches Medium.com Channel</li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/995789116968259584" class="customHover" target="_blank" rel="noreferrer">Redd Launches Tumblr Social Channel</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/995693740638523392" class="customHover" target="_blank" rel="noreferrer">Redd Launches Paper Wallet Generator</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/iYSEccqPVm" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on BiteBTC Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/8EOwW7zKdX " class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on FreiExchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/Q4RUHazPBr" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Xchange.me</a></li>
				  <li class="small crop margin-left-2">Redd Crowdfund</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/h7dfRMYYKE" class="customHover" target="_blank" rel="noreferrer">Redd Announces Exploratory Partnership with Investaco</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/YJ6N0PWcbM" class="customHover" target="_blank" rel="noreferrer">Redd Implements BIP39 Mnemonics</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/989302005511442432" class="customHover" target="_blank" rel="noreferrer">Overwatch & Reddcoin</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/J6sGEguQiI" class="customHover" target="_blank" rel="noreferrer">ReddCoin integrated with Fortnite Battle Royale</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/986771544578969600" class="customHover" target="_blank" rel="noreferrer">New community project – Reddcoin Poker </a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/oJU7dLieuc" class="customHover" target="_blank" rel="noreferrer">Scan QR Code Send and Receive with Rymos</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/m7JqVxbVI1" class="customHover" target="_blank" rel="noreferrer">ReddPay.Me – Send RDD via email or SMS</a></li>
				  <li class="small crop margin-left-2">Simpleswap.io Adds Support for Reddcoin</li>
				  <li class="small crop margin-left-2">RDD Market Cap More Than Doubled</li>
				</ol>
            </li>
          </ul>
          
          
          <ul class="flex flex-49 later equal">
            <li class="col-3-12 fromBottom">
                <img class="wide margin-bottom-1" src="assets/img/Reddmap-3Dgraphic_last.png" alt="ReddMap Milestone"/>
            </li>
            <li class="col-9-12 margin-top-9 fromRight left">
                <h4 class="margin-bottom-1 equalElement">2018 Q1</h4>
				<ol class="list disc">
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/979714584050315264" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on CREX 24</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/979358150737514496" class="customHover" target="_blank" rel="noreferrer">Language channels launched for Italy, China, Russia</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/979020234836336641" class="customHover" target="_blank" rel="noreferrer">Redd Sponsors the RDD4Justice Project</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/uE0NhemBhh" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on C_PATEX Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/974978122088148992" class="customHover" target="_blank" rel="noreferrer">Redd Development Team AMA/Q&A on Reddit</a></li>
				  <li class="small crop margin-left-2">First Reddcoin Reddit AMA Occurred</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/Gi2cp5OU4Q" class="customHover" target="_blank" rel="noreferrer">Official Reddcoin Russian Community Launches</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/KHKIbt8JKP" class="customHover" target="_blank" rel="noreferrer">New Redd Java API Released for JSON-RPC</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/970737552067104768" class="customHover" target="_blank" rel="noreferrer">Redd Spanish Telegram & Twitter Channels Launched</a></li>
				  <li class="small crop margin-left-2">Reddcoin Global LLC & Reddcoin Solutions LLC incorporate in USA</li>
				  <li class="small crop margin-left-2"><a href="" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Jalapeño Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/969610585053818880" class="customHover" target="_blank" rel="noreferrer">2018/2019 Roadmap Published</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/967065761729646592" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Shiftex_io</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/nOEvvLsZVr" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Upbit</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/XNVhQ9ozkw" class="customHover" target="_blank" rel="noreferrer">Redd Stakebox Preorders Begin</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/961251606997225473" class="customHover" target="_blank" rel="noreferrer">Redd Launches Arabic.Middle East Telegram Channel</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/P9ivaZrjbU" class="customHover" target="_blank" rel="noreferrer">Redd Releases Reddcoin .Net Core API</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/qJRU4CzdT0" class="customHover" target="_blank" rel="noreferrer">Reddhead Community Member Launches Redd Android Widget</a></li>
				  <li class="small crop margin-left-2"><a href="https://twitter.com/reddcoin/status/959609490927734785" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Godex Exchange</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/F1O4E9042G" class="customHover" target="_blank" rel="noreferrer">Redd Launches Germany Telegram Channel</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/WPRHNJzOuS" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on CoinDirect.com</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/PWgsVvpFFv" class="customHover" target="_blank" rel="noreferrer">Reddconomy brings Reddcoin to Minecraft</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/XBMr6H8kKe" class="customHover" target="_blank" rel="noreferrer">Redd Core Wallet v2.0.1.2 Released</a></li>
				  <li class="small crop margin-left-2">Redd Blockchain 4th Year Anniversary</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/F2MIRAnI90" class="customHover" target="_blank" rel="noreferrer">Redd Launches Korean Native Language Telegram Channel</a></li>
				  <li class="small crop margin-left-2"><a href="https://t.co/mWbuAKeeb9" class="customHover" target="_blank" rel="noreferrer">ReddCoin (RDD) Listed on Coinhouse.eu Exchange</a></li>
				  <li class="small crop margin-left-2">2018 All-time High RDD Market Cap Recorded</li>
				  <li class="small crop margin-left-2"><a href="https://t.co/R7nkxTt6mN" class="customHover" target="_blank" rel="noreferrer">ReddCoin Korea Telegram Channel Launches</a></li>
				</ol>
            </li>
          </ul>

          
        </div>   
      </div>
    </div>
  </div>
</section>

<!-- White Slide 5 (#90) -->
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