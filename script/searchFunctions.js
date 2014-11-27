//searchFunctions.js

$('button[data-id]').click(function() {
  var id = this.dataset.id;
  $.getJSON('ajax/likesong.php', function(data) {
    $('span[data-id='+id+']').html(data.gilla);
  });
});

$('div[data-comments] button').click(function() {
  $(this).parent().toggleClass('show');
});

$('form[name="frmcomment"]').submit(function(e) {
  e.preventDefault();
  var id = this.dataset.id;
  $.getJSON('ajax/savecomment.php', function(data) {
    $('div[data-comments][data-id='+id+']').find('p').last().append('<p><b>'+data.date+': </b><i>'+data.comment+'</i></p>');
  });
});