//searchFunctions.js

$('a[data-id]').click(function(e) {
  e.preventDefault();
  var id = this.dataset.id;
  $.getJSON('ajax/like-song.php', function(data) {
    $('span[data-id='+id+']').html(data.gilla);
  });
});

$('form[name="frmcomment"]').submit(function(e) {
  e.preventDefault();
  var id = this.dataset.id;
  $.getJSON('ajax/save-comment.php', function(data) {
    var lp = $(e.target).parent().find('p').last();
    if (lp.is(':hidden')) {
      $(e.target).parent().find('a[data-toggle]').click();
    }
    var np = $('<p><b>'+data.date+': </b><i>'+data.comment+'</i></p>');
    lp.after(np);
  });
});

function registerToggleHandlers() {
  $('a[data-toggle]').click(function(e) {
    e.preventDefault();
    $(this).parent().find('p').each(function(e,d) {
      var d = $(d);
      if (d.is(":hidden")) {
        d.slideDown( "slow", function() { });
      } else {
        d.hide();
      }
    });
  });
  $('a[data-comment]').click(function(e) {
    e.preventDefault();
    var form = $(this).parent().find('form');
    if (form.is(":hidden")) {
      form.slideDown( "slow", function() { });
    } else {
      form.hide();
    }
  });
}

function showAsAsBlock() {
  $('fieldset a').each(function (e,d) {
    d.style.display = 'block';
  });
}

function pageLoad() {
  console.log('Page loaded.');
  $('div[data-comments]').each(function(e,d) {
    $(d).find('p').hide();
    $(d).find('form').hide();
    var id = d.dataset.id;
    var commentToggleA = $('<a href="#" data-toggle="'+id+'">Show comments</a>');
    $(d).find('p').first().before(commentToggleA);
    $(d).find('form').first().before('<a href="#" data-comment="'+id+'">Comment ['+$(d).find('~ a[data-id]').html().split(' ')[1]+']</a>');
  });
  registerToggleHandlers();
  showAsAsBlock();
}

window.onload = pageLoad;