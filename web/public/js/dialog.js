
/***
*      _____  _       _
*     |  __ \(_)     | |
*     | |  | |_  __ _| | ___   __ _
*     | |  | | |/ _` | |/ _ \ / _` |
*     | |__| | | (_| | | (_) | (_| |
*     |_____/|_|\__,_|_|\___/ \__, |
*                              __/ |
*                             |___/
*     Dialog Windows
*/

$.fn.slidesDialog = function( options ) {
  // check if container for dialogs exists?
  if($(document).find('.dialogContainer').length==0){
    return false;
  }

  // bind open/close methods to any element with data-dialog-action
  if(options=="bindOpenCloseMethods"){
    bindOpenCloseMethods($(this));
    return false;
  }

  var dialogs = this;
  // check if already exists?
  if(dialogs.length==0){
    if(options.id){
      dialogs = $(document).find(".dialog[data-dialog-id="+options.id+"]");
    }else{
      alert("Error: you need to provide the 'id' property to create a dialog!");
      return false;
    }
  }

  // start creating
  if(dialogs.length){
    dialogs.each(function(i, dialog){
      if(typeof(options)!="string"){
        init(dialog,options);
      }else{
        if(options=="open"){dialog.open(true);}
        if(options=="close"){dialog.close();}
      }
    });
  }else{
    init(false,options);
  }

  // functions
  // init
  function init(el, options){

    var settings = mergeSettings(el);

    // remove dialog if it's HTML was changed
    if(el){
      if(el.settings){
        if(el.settings.template != settings.template){
          $(el).remove();
          el=false;
        }
      }
    }

    // create dialog box if not exists
    if(!el){
      el = $(settings.template);
      el.attr("data-dialog-id",settings.id);
      $('.dialogContainer').prepend(el);
      bindOpenCloseMethods(el.find('[data-dialog-action]'));
      el = el[0];
    }

    // store settings of an element inside it
    el.settings = settings;

    // bind methods
    bindMethods(el);

    // show dialog after initialization
    if(settings.action!="close" && !settings.closeByCookie){
      el.open();
    }
    // close dialog if cookie with it's id is set
    if(settings.closeByCookie){
      el.close();
    }
  
    // open links in dialog
    $(el).find("[data-href]").on('click', function(){
      if ($(this).data('target')){
        window.open($(this).data('href'), '_blank');
      } else {
        window.location = $(this).data('href');
      }
    });

    // submit forms in dialog
    $(el).find('[data-type="submit"]').click(function(){
      $(this).parents('form').submit();
    });

    return true;
  };
  // merge default, data-attributes set and provided options settings
  function mergeSettings(el){
    // default settings
    var settings = {
      template:'<div class="dialog hidden"><div class="close" data-dialog-action="close"></div><div class="dialogContent"><div class="text opacity-8">This popup was created with javascript. This is the default template. You can provide HTML code in the "template" property and it will be used as a Dialog box HTML.</div></div><ul><li data-dialog-action="close" class="indigo">Nice!</li></ul></div>', // the HTML code of a dialog box
      action: "close", // open/close
      id: false, // id of a dialog (need to be provided only if you create it via JS)
      speed:500, // show / hide animation speed
      openAfter:0, // delay before showing dialog
      closeAfter:0, // hide dialog after X ms after showing
      closeByCookie:false // close dialog if cookie with name = dialog-id is set
    };
    if(el){
      if(el.settings){settings = el.settings;}
      var $el = $(el);
      if(Object.keys($el.data()).length){
        // overwrite default settings to a data-attribes
        if($el.attr("data-dialog-id")){settings.id=$el.attr("data-dialog-id");}
        if($el.attr("data-dialog-action")){settings.action=$el.attr("data-dialog-action");}
        if($el.attr("data-dialog-speed")){settings.speed=parseInt($el.attr("data-dialog-speed"));}
        if($el.attr("data-dialog-open-delay")){settings.openAfter=parseInt($el.attr("data-dialog-open-delay"));}
        if($el.attr("data-dialog-close-delay")){settings.closeAfter=parseInt($el.attr("data-dialog-close-delay"));}
      }
      if($.cookie($el.attr("data-dialog-id"))){
        settings.closeByCookie = true;
      }
    }
    // overwrite settings with provided options
    settings = $.extend( {}, settings, options );
    return settings;
  };
  // bind methods to each dialog box
  function bindMethods(el){
    var settings = el.settings;
    // show
    el.open=function(noDelay){
      if(el.openTimeout){clearTimeout(el.openTimeout);}
      if(el.closeTimeout){clearTimeout(el.closeTimeout);}
      el.openTimeout = setTimeout(function(){
        if (!$(el).is(':visible')){
          $(el).addClass('reveal').slideDown(settings.speed,function(){
            $(this).removeClass('reveal hidden');
          });
        }
      },(noDelay)?0:settings.openAfter);
      if(settings.closeAfter+settings.openAfter > settings.openAfter && !noDelay){
        el.closeTimeout = setTimeout(function(){
          el.close();
        },settings.closeAfter + settings.openAfter);
      }
    };
    // hide
    el.close=function(){
    if(el.openTimeout){clearTimeout(el.openTimeout);}
      if(el.closeTimeout){clearTimeout(el.closeTimeout);}
      if ($(el).is(':visible')){

        // Set cookie if data-dialog-cookie-age is set
        if($(el).attr("data-dialog-cookie-age")!=undefined && el.settings.id){
          var age = parseInt($(el).attr("data-dialog-cookie-age"));
          $.cookie(el.settings.id,true,{expires:age,path:'/'});
        }

        $(el).addClass('hide').slideUp(settings.speed,function(){
          $(this).removeClass('hide');
        });
      }
    };
  }

  // bind open/close methods to any element with data-dialog-action and data-dialog-id provided
  function bindOpenCloseMethods(el){
    $(el).click(function(){
      var action = $(this).attr("data-dialog-action"),
          id = $(this).attr("data-dialog-id");
      
      if(id=="" || id==undefined){id=false;}
       
      if(action=="close"){
        if(id && $(this).closest(".dialog").length==0){ // if element is OUTSIDE the dialog box
          $(document).find(".dialog[data-dialog-id="+id+"]").slidesDialog("close");
        }else{ // if element is INSIDE the dialog box
          $(this).closest(".dialog").slidesDialog("close");
        }
      }else if(action="open" && id){
         $(document).find(".dialog[data-dialog-id="+id+"]").slidesDialog("open");
      }
    });
  }

};

// Initialize any element in HTML with .dialog class and data-dialog-id attribute
$(".dialog[data-dialog-id]").slidesDialog();
// Bind open/close methods to each element
$(document).find('[data-dialog-action]:not(.dialog)').slidesDialog("bindOpenCloseMethods");
