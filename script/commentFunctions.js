//commentFunctions.js

/**
*	Funktionen verifyDeleteOfComment visar en dialogruta med "OK" och "Cancel".
*	Texten i dialogrutan består av tal + text i inkommande parametrar.
*	Funktionen returnerar sant vid tryck på "OK" och falskt vid tryck på "Cancel".
*	@param {Number} inId - Id (primärnyckel i databasen) för kommentaren som skall tas bort.
*	@param {String} inText - Texten i kommentaren som skall tas bort.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellström
*/
function verifyDeleteOfComment(inId, inText){
    return window.confirm("Delete " + inId + ": " + inText + "?");
}

$('form').submit(function(e) {
  e.preventDefault();
  var id = $(e.target).find('[name=hidId]').val();
  if (verifyDeleteOfComment(id, $(e.target).find('[name=hidText]').val())) {
    console.debug('Delete comment w. AJAX.');
    $(e.target.parentNode).remove();
    $('h3#c' + id).remove();
  } else {
    console.debug('Canceled delete.');
  }
});

$("#comments-accordion" ).accordion();