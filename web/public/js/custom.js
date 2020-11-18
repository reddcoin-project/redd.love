$(document).ready(function () {
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
      },
    });
  }

  $("body").removeClass("js-loading");

});
