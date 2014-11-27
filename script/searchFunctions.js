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
  $.getJSON('ajax/savecomment.php', function(data) {
    console.log(data);
  });
});