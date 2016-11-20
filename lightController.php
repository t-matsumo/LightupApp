<?php
  $minute = $_POST["minute"];
  $hour = $_POST["hour"];

  $outputFile = "/etc/cron.d/lightup";
  exec('sudo sh -c "echo \'#!/bin/sh\n\' >> ' .$outputFile .'"');
  exec('sudo sh -c "echo \'SHELL=/bin/bash\n\' >> ' .$outputFile .'"');
  exec('sudo sh -c "echo \'PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/local/games:/usr/games\n\' >> ' .$outputFile .'"');
  exec('sudo sh -c "echo \'HOME=/\n\' >> ' .$outputFile .'"');
  exec('sudo sh -c "echo \'' .${minute} .' ' .${hour} .' * * * tatsuki sh /home/tatsuki/on_light.sh\n\' >> ' .$outputFile .'"');
//  0  0    *   *   *   sh /home/tatsuki/off_light.sh

  echo("${minute}  ${hour}    *   *   *   tatsuki sh /home/tatsuki/on_light.sh");