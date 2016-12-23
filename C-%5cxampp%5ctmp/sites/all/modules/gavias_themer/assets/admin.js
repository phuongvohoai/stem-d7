var keyString="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
base64Encode = function(c) {
  var a = "";
  var k, h, f, j, g, e, d;
  var b = 0;
  c = UTF8Encode(c);
  while (b < c.length) {
    k = c.charCodeAt(b++);
    h = c.charCodeAt(b++);
    f = c.charCodeAt(b++);
    j = k >> 2;
    g = ((k & 3) << 4) | (h >> 4);
    e = ((h & 15) << 2) | (f >> 6);
    d = f & 63;
    if (isNaN(h)) {
      e = d = 64
    } else {
      if (isNaN(f)) {
        d = 64
      }
    }
    a = a + keyString.charAt(j)
    + keyString.charAt(g)
    + keyString.charAt(e)
    + keyString.charAt(d)
  }
  return a
};

UTF8Encode = function(b) {
  b = b.replace(/\x0d\x0a/g, "\x0a");
  var a = "";
  for ( var e = 0; e < b.length; e++) {
    var d = b.charCodeAt(e);
    if (d < 128) {
      a += String.fromCharCode(d)
    } else {
      if ((d > 127) && (d < 2048)) {
        a += String.fromCharCode((d >> 6) | 192);
        a += String.fromCharCode((d & 63) | 128)
      } else {
        a += String.fromCharCode((d >> 12) | 224);
        a += String.fromCharCode(((d >> 6) & 63) | 128);
        a += String.fromCharCode((d & 63) | 128)
      }
    }
  }
  return a;
};

var $customize;
if($customize == null) $customize = {};

(function ($) {
  $(document).ready(function () {

    //=== ColorPicker ===
      if($.fn.ColorPicker){
        $('.colorselector input').each(function(){
          var $input = $(this);
           $input.attr('readonly','readonly');
          $input.ColorPicker({
            onChange:function (hsb, hex, rgb) {
              $input.parent().find('.input-group-addon').css('backgroundColor', '#' + hex);
              $input.val( '#' + hex );
            }
         });
        });
        $('.colorselector .remove').each(function(){
          $(this).click(function(){
            $(this).parent().find('input').val('');
            $(this).parent().find('.input-group-addon').css('backgroundColor', '#eeeeee');
          })
        })
      }


    $('#gavias_customize_save').click(function () {
      saveCustomize();
    });

    $('#gavias_customize_preview').click(function(){
      previewCustomize();
    });

    $('#gavias_customize_active').click(function(){
      activeCustomize();
      var $name_profile = $('#gavias_profile_customize_name');
      if($name_profile.val()){
        var url = $name_profile.attr('data-url') + $name_profile.val() + '.json';
        changeProfile(url);
      }
    });

    $('#gavias_customize_delete').click(function(){
        deleteCustomize();
    });

    var $name_profile = $('#gavias_profile_customize_name');
     if($name_profile.val()){
        var url = $name_profile.attr('data-url') + $name_profile.val() + '.json';
        changeProfile(url);
      }

    $('#gavias_profile_customize_name').change(function(){
      if($(this).val()){
        var url = $(this).attr('data-url') + $(this).val() + '.json';
        changeProfile(url);
      }
    });
  })

  function changeColor(){
    $('.colorselector').each(function(){
      $this = $(this);
      $(this).find('.input-group-addon').each(function(){
          $(this).css('background',  $this.find('input').val())
      });
    });
  }

  function dataCustomize() {
    jQuery('.customize-option').each(function (index) {
      $customize[jQuery(this).attr('name')] = $(this).val();
    });      
  }

  function changeProfile(url){
    if(url){
      $.getJSON( url, function(data) {
        var items = data;
        if(items){
          $('.customize-option').each(function (index) {
            if(items[$(this).attr('name')]){
              $(this).val(items[$(this).attr('name')]);
            }
          }) 
          changeColor();
        }  
      });
    }  
  }

  function activeCustomize(){
    var data = {
      gavias_profile_customize_name: $('#gavias_profile_customize_name').val(),
    };
    $('#gavias_customize_active').val('Loading...');
    $.ajax({
      url: Drupal.settings.basePath + '?q=admin/gavias_customize/active',
      type: 'POST',
      data: data,
      dataType: 'Json',
      success: function (data) {
        $('#gavias_customize_active').val('Active');
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert(textStatus + ":" + jqXHR.responseText);
      }
    });
  }

  function saveCustomize() {
    dataCustomize();
    //console.log(($customize));return;
    var datacustomize = JSON.stringify($customize);
    var data = {
      data: datacustomize,
      gavias_profile_customize_name: $('#gavias_profile_customize_name').val(),
      gavias_profile_customize_new: $('#gavias_profile_customize_new').val()
    };
    
    $('#gavias_customize_save').val('Saving...');
    $.ajax({
      url: Drupal.settings.basePath + '?q=admin/gavias_customize/save',
      type: 'POST',
      data: data,
      dataType: 'Json',
      success: function (data) {
        $('#gavias_customize_save').val('Save');
        if(data['data_profile']){
          $('#gavias_profile_customize_name').html(data['data_profile']);
        } 
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert(textStatus + ":" + jqXHR.responseText);
      }
    });
  }

  function previewCustomize() {
    dataCustomize();
    //console.log(($customize));return;
    var datacustomize = JSON.stringify($customize);
    var data = {
      data: datacustomize
    };
    
    $('#gavias_customize_preview').val('Loading...');
    $.ajax({
      url: Drupal.settings.basePath + '?q=admin/gavias_customize/preview',
      type: 'POST',
      data: data,
      dataType: 'Json',
      success: function (data) {
        $('#gavias_customize_preview').val('Preview');
        if($('head #gavias_css_preview').length){
          $('head #gavias_css_preview').html(data['style']);
        }else{
          $('head').append('<style id="gavias_css_preview">' + data['style'] + '</style>');
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert(textStatus + ":" + jqXHR.responseText);
      }
    });
  }

  function deleteCustomize(){
    var data = {
      gavias_profile_customize_name: $('#gavias_profile_customize_name').val()
    };
    $('#gavias_customize_delete').val('Deleting...');
    $.ajax({
      url: Drupal.settings.basePath + '?q=admin/gavias_customize/delete',
      type: 'POST',
      data: data,
      dataType: 'Json',
      success: function (data) {
        $('#gavias_customize_delete').val('Delete');
        if(data['data_profile']){
          $('#gavias_profile_customize_name').html(data['data_profile']);
        } 
      },
      error: function (jqXHR, textStatus, errorThrown) {
        alert(textStatus + ":" + jqXHR.responseText);
      }
    });
  }

})(jQuery);

