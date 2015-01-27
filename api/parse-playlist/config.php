<?php

  $removal = array('mp4', 'mkv', 'avi', 'mpg', 'MPEG-4', 'MPEG-2', 'MPEG 4', 'MPEG 2',
  'Formula1', 'F1', 'Formula 1', '(Live)', 'DVD', 'WebRip', 'Web', 'VHSRip', 'VHS', 'Rip',
  'Eurosport', 'ITV', 'BBC', 'Sky', 'Sports', 'Sport', 'HD', 'ESPNClassic',
  'DaRmEtH', 'opiates', 'Veetle', 'Nub', 'Master', 'Chief',
  'x264', 'Xvid', 'DivX', 'WebRip', 'Web-Rip', 'FOF', 'LEGENDS THE BEST', 'snk', 'i5vv', 'AFG', 
  'English', 'Eng', 'Live');


  $startString = '2015-01-24T14:47:19-0500';
  $start = date_create($startString, timezone_open('America/New_York'));
  $pointer = date_create($startString, timezone_open('America/New_York'));

/*

  16:18:45
  00:27:10
  01:01:17
  14:50:18
*/
  

  // 50years Of Formula1 Onboard.mp4
  // Weekend Of A Champion Roman Polansky 1972.mp4
