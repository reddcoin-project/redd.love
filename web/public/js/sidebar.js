$('.submenu-dropdown1').click(function () {
  $('.submenu-elements1').slideToggle();

  //change icon
  $('.submenu-dropdown1 .material-icons').toggleText('arrow_drop_up', 'arrow_drop_down');
});
//toggle text function
$.fn.extend({
  toggleText: function (a, b) {
    return this.text(this.text() == b ? a : b);
  }
});

$('.submenu-dropdown2').click(function () {
  $('.submenu-elements2').slideToggle();

  //change icon
  $('.submenu-dropdown2 .material-icons').toggleText('arrow_drop_up', 'arrow_drop_down');
});
//toggle text function
$.fn.extend({
  toggleText: function (a, b) {
    return this.text(this.text() == b ? a : b);
  }
});

//set or get lang
var defaultLang = 'en',
  cookieLang = $.cookie('current-lang') ? $.cookie('current-lang') : defaultLang;

if($.cookie('current-lang') === null) {
  $.cookie('current-lang', defaultLang, { expires: 30, path: '/' });
}

if (defaultLang !== cookieLang) switchToLang(cookieLang);

//switch languages on click from menu
$('[data-switch-lang]').click(function () {
  var newLang = $(this).attr('data-switch-lang'),
    currentLang = $('body').attr('data-current-lang');

  if (newLang !== currentLang) {
    switchToLang(newLang);
  }
});

//change content and set a cookie
function switchToLang(newLang) {
  var currentLang = $('body').attr('data-current-lang') ? $('body').attr('data-current-lang') : defaultLang;

  //swap content
  $('[data-lang="' + currentLang + '"]').hide();
  $('[data-lang="' + newLang + '"]').show();

  //change language in panel
  $('.dropdownTrigger[data-dropdown-id="language"]').text(newLang);

  //set language for future needs
  $('body').attr('data-current-lang', newLang);
  $.cookie('current-lang', newLang, { expires: 30, path: '/' });

  //Recalculate panels and equal elements
  $(window).resize();
}