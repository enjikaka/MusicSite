<?php
	/* Funktioner (inklusive parametrar) som beh?vs f?r att administrera en s?g */
    function printSongForm() {}
    function listSongs($inDBConnection) {}
    function updateSong($inDBConnection, $inSongId, $inArtistId, $inCount, $inTitle, $inNewSongFileName, $inOldSongFileName) {}
    function deleteSong($inDBConnection, $inSongId, $inSongFileName) {}
    function insertSong($inDBConnection, $inArtistId, $inCount, $inTitle, $inNewSongFileName) {}
?>