<?php

/**
 *
 */

// playlist text file containing string $file
//require('playlist.php');
// configuration variables
require('config.php');

  $track_lengths = array();     // track length strings
  $track_times = array();       // track time datetime objects
  $track_dates = array();
  $track_infos = array();       // track info strings

  $file = file_get_contents('playlist.m3u');


// convert playlist string into array delimited by "\n"
$playlist = explode("\n", $file);

// remove file header "#EXTM3U" found in first line
unset($playlist[0]);

// tidy up formatting, etc.
$playlist = array_map('trim', $playlist);

// extract track data
foreach($playlist as $key=>$line)  {

  // extract track duration from odd-numbered lines
  if(($key % 2) == 1) {

    // remove "#EXTINF:" and extract substring
    $line = strstr(str_replace('#EXTINF:', '', $line), ',', true);
    // convert into DateInterval 
    //$interval = new DateInterval('PT' . $line . 'S');
    $interval = DateInterval::createFromDateString($line . ' seconds');
    $track_lengths[] = $interval;

    // add to start date
    $track_times[] = $pointer->add($interval)->format("Y-m-d\THis\-0500");

  } // end if

  // extract track data from even-numbered lines
  else  {

    // extract filename from filepath
    $line = substr(strrchr($line, '\\'), 1);

    // replace delimiters with spaces
    $line = strtr($line, ",.-_[]", "      ");
/*  TEMPORARY STUFF BUT I HAVEN'T SLEPT IN THREE DAYS SO JUST UNCOMMENT AND DELETE THIS LINE AND COMMENT THE CODE BLOCK BELOW
    // extract track info sans removal substrings
    $track_infos[] = str_ireplace($removal, '', $line);
*/

    /* begin sleepy code block */
    // extract track info sans removal substrings
    $sleep = str_ireplace($removal, '', $line);
    // replace: VOB file that is Senna's onboards
    if(substr($sleep, -3, 3) == 'VOB') {
      $track_infos[] = 'フジテレビ Driver’s Eyes AYRTON SENNA Onboard Compilation 1985-1994';
    }
    // replace: Roman Polanski film
    else if(substr($sleep, 0, 7) == 'Weekend') {
      $track_infos[] = "Jackie Stewart & Roman Polanski - Weekend of a Champion";
    }
    // Replace: 50 Years of F1 Onboard
    else if(substr($sleep, 0, 7) == '50years') {
      $track_infos[] = "50 Years of Formula 1 On Board";
    }
    // default
    else  {
      $track_infos[] = $sleep;
    }
    /* end sleepy code block */

  } // end else

} // end foreach

// create associative array to json_encode and output
$tracks = array();

foreach($track_infos as $key=>$info)  {
    $tracks[] = array(
      'time'  =>  $track_times[$key-1],
      'name'   =>  trim($info)
    );
}

$tracks[0]['time'] = $start->format("Y-m-d\THis\-0500");

echo json_encode($tracks);
