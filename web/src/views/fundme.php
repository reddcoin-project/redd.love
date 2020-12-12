<?php

  // Page Configuration
  $title = 'Redd | The social currency.';

  // Page Configuration
  $navigations = [
    ['classes' => 'white']
  ];
  $footerClasses = 'white';

?>
<?php include(COMPONENT_DIR . '/header.php'); ?>
<?php include(COMPONENT_DIR . '/svg.php'); ?>
<?php include(COMPONENT_DIR . '/sidebar.php'); ?>

	<!-- Chartist Scripts -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
	<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

<!-- Chartist Scripts -->
<script>
$(function(){

  $(window).on('slideChange',function(event, number, element){

    //animate only if slide has class chartist
    if (!$(element).hasClass('chartist')) return;

    var chart = new Chartist.Pie('.ct-chart', {
      series: [7, 6, 5, 4, 3, 2, 1]
    }, {
      donut: true,
      showLabel: false
    });

    chart.on('draw', function(data) {
      if(data.type === 'slice') {
        // Get the total path length in order to use for dash array animation
        var pathLength = data.element._node.getTotalLength();

        // Set a dasharray that matches the path length as prerequisite to animate dashoffset
        data.element.attr({
          'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
        });

        // Create animation definition while also assigning an ID to the animation for later sync usage
        var animationDefinition = {
          'stroke-dashoffset': {
            id: 'anim' + data.index,
            dur: 600,
            from: -pathLength + 'px',
            to:  '0px',
            easing: Chartist.Svg.Easing.easeOutQuint,
            // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
            fill: 'freeze'
          }
        };

        // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
        if(data.index !== 0) {
          animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
        }

        // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
        data.element.attr({
          'stroke-dashoffset': -pathLength + 'px'
        });

        // We can't use guided mode as the animations need to rely on setting begin manually
        // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate

        data.element.animate(animationDefinition, false);
      }
    });
  });

});
</script>

<!-- Chartist Colors -->
<style>
  .ct-series-a .ct-slice-donut {
    stroke: #F44336;
  }
  .ct-series-b .ct-slice-donut {
    stroke: #FF9800;
  }
  .ct-series-c .ct-slice-donut {
    stroke: #FFC107;
  }
  .ct-series-d .ct-slice-donut {
    stroke: #4CAF50;
  }
  .ct-series-e .ct-slice-donut {
    stroke: #00BCD4;
  }
  .ct-series-f .ct-slice-donut {
    stroke: #2196F3;
  }
  .ct-series-g .ct-slice-donut {
    stroke: #673AB7;
  }
</style>

<!-- slide for example -->
<section class="slide whiteSlide">
  <div class="content">
    <div class="container">
      <div class="wrap">

        <p class="small">Scroll down</p>

      </div>
    </div>
  </div>
</section>

<!-- Slide 1 -->
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
              <h4>So far <span style="color:red;">1,348,569 RDD</span> has been raised!</h4>
              <p><strong>ReddCoin (RDD) Donation Address:</strong> RqQ4qnJCAcqxPqsvMtyJx73eyVyWtpjN73</p>
              <a href="https://medium.com/projectredd/reddhead-community-outreach-reddcoin-rdd-exchange-crowdfund-2020-cc65c0f7c55b" target="_blank" class="button red small cropLeft">See details<i class="material-icons right">open_in_new</i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include(COMPONENT_DIR . '/footer.php'); ?>