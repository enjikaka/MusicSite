//songFunctions.js

/**
*	Funktionen copySongFormData kopierar inkommande parametrar till formul?et "frmNewUpdateSong".
*	@param {Number} inId - Id (prim?nyckel i databasen) f?r s?gen som skall redigeras.
*	@param {String} inFileName - Filnamn f?r s?gen som skall redigeras.
*	@param {Number} inArtistId - Id (fr?mandenyckel i databasen) f?r artisten s?gen knyts till.
*	@param {String} inTitle - S?gtitel f?r s?gen som skall redigeras.
*	@param {Number} inCount - Antal "gilla" f? s?gen som skall redigeras.
*	@version 1.0
*	@author Peter Bellstr?m
*/
function copySongFormData(inId, inFileName, inArtistId, inTitle, inCount) {

	var theForm = document.getElementById("frmNewUpdateSong");

    theForm.hidId.value = inId;
    theForm.hidSoundFileName.value = inFileName;
    theForm.selArtistId.value = inArtistId;
	theForm.txtTitle.value = inTitle;
    theForm.txtCount.value = inCount;
}

/**
*	Funktionen verifyDeleteOfSong visar en dialogruta med "OK" och "Cancel".
*	Texten i dialogrutan best? av tal + text i inkommande parametrar.
*	Funktionen returnerar sant vid tryck p?"OK" och falskt vid tryck p?"Cancel.
*	@param {Number} inId - Id (prim?nyckel i databasen) f?r s?gen som skall tas bort.
*	@param {String} inTitle - S?gtitel f?r s?gen som skall tas bort.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellstr?m
*/
function verifyDeleteOfSong(inId, inTitle) {
   return window.confirm("Delete " + inId + " " + inTitle + "?");
}

/**
*	Funktionen checkFileExtension kontrollerar fil?delsen f?r inkommande parameter och
*	returnerar sant om det ? "ogg" annars falskt.
*	@param {String} inFileName - Filnamn f?r filen som skall kontrolleras.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellstr?m
*/
function checkFileExtension(inFileName) {

    var fileExtension = inFileName.substring(inFileName.length - 3);
	fileExtension = fileExtension.toLowerCase();

    if(fileExtension !== 'ogg'){
        return false;
    }
    return true;
}

/**
*	Funktionen validateSongFormData kontrollerar att indata i formul?et "frmNewUpdateSong" uppfyller
*	givna villkor. Om alla villkor uppfylls returneras sant om inte visas en dialogruta med "felet" och
*	d?efter returneras falskt.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellstr?m
*/
function validateSongFormData(theForm) {
	var theForm = document.getElementById("frmNewUpdateSong");

  	try {
		if(theForm.selArtistId.selectedIndex === 0) {
			throw new Error("Artist is missing!");
		}

		if(theForm.txtTitle.value === "") {
			throw new Error("Songtitle is missing!");
		}

		if(theForm.hidId.value === ""){
			if(theForm.fileSoundFileName.value === "") {
                throw new Error("Soundname is missing!");
            }
            else {
                if(checkFileExtension(theForm.fileSoundFileName.value) === false) {
					throw new Error('Only ogg files are valid!');
				}
            }

		}

		if(theForm.hidId.value !== "") {
			if(theForm.hidSoundFileName.value !== null || theForm.hidSoundFileName.value !== "") {
                if(checkFileExtension(theForm.hidSoundFileName.value) == false) {
					throw new Error("Only ogg files are valid!");
				}
            }
		}

		if(theForm.txtCount.value === "") {
			throw new Error("Count is missing!");
		}

		if(isNaN(theForm.txtCount.value)) {
			throw new Error("Count is not a number!");
		}

		return true;
	}
	catch(oException)
	{
		window.document.getElementById("jsErrorMsg").innerHTML = oException.message;
		return false;
	}
}



