//commentFunctions.js

/**
*	Funktionen verifyDeleteOfComment visar en dialogruta med "OK" och "Cancel".
*	Texten i dialogrutan best�r av tal + text i inkommande parametrar.
*	Funktionen returnerar sant vid tryck p� "OK" och falskt vid tryck p� "Cancel.
*	@param {Number} inId - Id (prim�rnyckel i databasen) f�r kommentaren som skall tas bort.
*	@param {String} inText - Texten i kommentaren som skall tas bort.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellstr�m
*/
function verifyDeleteOfComment(inId, inText){
    return window.confirm("Delete " + inId + ": " + inText + "?");
}