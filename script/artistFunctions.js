//artistFunctions.js

/**
*	Funktionen copyArtistFormData kopierar inkommande parametrar till formuläret "frmNewUpdateArtist".
*	@param {Number} inId - Id (primärnyckel i databasen) för artisten som skall redigeras.
*	@param {String} inFileName - Filnamn för artisten som skall redigeras.
*	@param {String} inArtist - Artistnamn för artisten som skall redigeras.
*	@version 1.0
*	@author Peter Bellström
*/
function copyArtistFormData(inForm) {
	/*var theForm = document.getElementById("frmNewUpdateArtist");
    theForm.hidId.value = inId;
    theForm.hidPictureFileName.value = inFileName;
    theForm.txtArtist.value = inArtist;*/
  var theForm = $("#frmNewUpdateArtist");
  $(inForm).find('input[type=hidden]').each(function() {
    theForm.find('[name=txt'+this.name.split('hid')[1]+']').val(this.value);
    //console.log('[name=txt'+this.name.split('hid')[1]+'] + ' + this.value);
  });
}

/**
*	Funktionen verifyDeleteOfArtist visar en dialogruta med "OK" och "Cancel".
*	Texten i dialogrutan består av tal + text i inkommande parametrar.
*	Funktionen returnerar sant vid tryck på "OK" och falskt vid tryck på "Cancel.
*	@param {Number} inId - Id (primärnyckel i databasen) för artisten som skall tas bort.
*	@param {String} inArtist - Artistnamn för artisten som skall tas bort.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellström
*/
function verifyDeleteOfArtist(inId, inArtist) {
		return window.confirm("Delete " + inId + " " + inArtist + "?");
}

/**
*	Funktionen checkFileExtension kontrollerar filändelsen för inkommande parameter och
*	returnerar sant om det är "jpg" annars falskt.
*	@param {String} inFileName - Filnamn för filen som skall kontrolleras.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellström
*/
function checkFileExtension(inFileName) {
    var fileExtension = inFileName.substring(inFileName.length - 3);

	fileExtension = fileExtension.toLowerCase();

    if(fileExtension !== "jpg")
    {
        return false;
    }

    return true;

}

/**
*	Funktionen validateArtistFormData kontrollerar att indata i formuläret "frmNewUpdateArtist" uppfyller
*	givna villkor. Om alla villkor uppfylls returneras sant om inte visas en dialogruta med "felet" och
*	därefter returneras falskt.
*	@returns {Boolean}
*	@version 1.0
*	@author Peter Bellström
*/
function validateArtistFormData(theForm) {
	var theForm = document.getElementById("frmNewUpdateArtist");
	try
	{
		if(theForm.txtArtist.value === "")
		{
			throw new Error("Artistname is missing!");
		}

		if(theForm.hidId.value === "")
		{
			if(theForm.filePictureFileName.value === "")
            {
                throw new Error("Picturename is missing!");
            }
            else
            {
                if(checkFileExtension(theForm.filePictureFileName.value) === false)
				{
					throw new Error("Only jpg files are valid!");
				}
            }

		}

		if(theForm.hidId.value !== "")
		{
			if(theForm.filePictureFileName.value !== "")
            {
                if(checkFileExtension(theForm.filePictureFileName.value) === false)
				{
					throw new Error("Only jpg files are valid!");
				}
            }

		}

		return true;

	}
	catch(oException)
	{
		window.document.getElementById("jsErrorMsg").innerHTML = oException.message;
		return false;
	}
}

$('[name=btnEdit]').click(function(e) {
  e.preventDefault();
  copyArtistFormData(e.target.parentNode);
});

$('form[name=frmArtist]').submit(function(e) {
  e.preventDefault();
  verifyDeleteOfArtist(this.hidId.value, this.hidArtist.value);
});

$('form[name=frmNewUpdateArtist]').submit(function(e) {
  e.preventDefault();
  if (validateArtistFormData(this)) {
    // Submit
    console.log('submitting');
  }
});

$("#songs-accordion" ).accordion();