$(document).ready(function () {
  
  $("body").removeClass("js-loading");

  if (typeof Redd !== "undefined") {
    if (typeof Redd.onReady !== "undefined") {
      for (onReadyFunction of Redd.onReady) {
        onReadyFunction();
      }
    }
  }

  var isLoadFundsData = $("body.loadFundsData").length;
  if (isLoadFundsData) {
    $.ajax({
      url: "/fundsapi/get",
      dataType: "json",
      success: function (data) {
        $("#DynamicDevWalletOneUSD").html(data.DevWalletOne.USD);
        $("#DynamicDevWalletOneRDD").html(data.DevWalletOne.RDD);

        $("#DynamicDevWalletTwoUSD").html(data.DevWalletTwo.USD);
        $("#DynamicDevWalletTwoRDD").html(data.DevWalletTwo.RDD);

        $("#DynamicDevWalletThreeUSD").html(data.DevWalletThree.USD);
        $("#DynamicDevWalletThreeRDD").html(data.DevWalletThree.RDD);

        window.FundingExchanges2021Amount = data.ExchangeFundAmount;
        $("#FundingExchanges2021Amount").html(data.ExchangeFundAmountFormatted);

        const lastUpdatedCaption = [
          new Date(data.LastUpdated).toLocaleDateString("en-US"),
          new Date(data.LastUpdated).toLocaleTimeString("en-US"),
        ].join(", ");

        $("#lastUpdatedCaption").html(lastUpdatedCaption);

        const $donorsContent = $("#donorsContent");
        const $donorsPopups = $("#donorPopups");

        data.PaybackData.map(function (Donor) {
          // <p class="light margin-bottom-1 opacity-8"></p>
          const DonorRow = $(document.createElement("p"));
          DonorRow.addClass("light margin-bottom-1 opacity-8");

          let Caption = [
            '<span class="weight-6">',
            Donor.DebtText,
            "</span> – ",
            Donor.Name,
          ].join("");

          if (Donor.IsPartiallyPaid === true) {
            const $donorPopup = $(".donorPopupDefault").clone();
            $donorPopup.removeClass("donorPopupDefault");

            $donorPopup.find(".donor-name").html(Donor.Name);
            $donorPopup.find(".donor-paid").html(Donor.PaidText);
            $donorPopup.find(".donor-rest").html(Donor.RestText);

            $donorPopup.attr("data-popup-id", Donor.ID);

            $donorsPopups.append($donorPopup);

            if (Donor.IsFullyPaid === true) {
              Caption +=
                ' <svg class="popupTrigger" data-popup-id="' +
                Donor.ID +
                '" style="fill:#8dc63f;width:21px;height:21px;margin-bottom:-4px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg>';
            } else {
              Caption +=
                ' <svg class="popupTrigger" data-popup-id="' +
                Donor.ID +
                '" style="fill:orange;width:21px;height:21px;margin-bottom:-5px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#checkmark"></use></svg>';
            }
          }

          DonorRow.html(Caption);

          $donorsContent.append(DonorRow);
        });

        $("#loadingDonorsCaption").remove();
        $donorsContent.parent().removeClass("hidden");

        loadChartExchangeFundData();

      },
    });
  }

});

/* Function to load Exchange Fund Pie Chart */
function loadChartExchangeFundData() {
  $(window).on('slideChange',function(event, number, element){

    //animate only if slide has class chartist
    if (!$(element).hasClass('chartist')) return;
  
    var chart = new Chartist.Pie('.ct-chart', {
      series: [window.FundingExchanges2021Amount, 20000000]
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
            dur: 630,
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
}