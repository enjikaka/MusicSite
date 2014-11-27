//searchFunctions.js

$('button[data-id]').click(function() {
  var id = this.dataset.id;
  $.getJSON('ajax/likesong.php', function(data) {
    $('span[data-id='+id+']').html(data.gilla);
  });
});