$(document).ready(function() {

  if(typeof Redd !== 'undefined') {

    if(typeof Redd.onReady !== 'undefined') {

      for(onReadyFunction of Redd.onReady) {
        onReadyFunction();
      }

    }

  }

  $('body').removeClass('js-loading');

})
