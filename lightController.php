<?php
  $minute = $_POST["minute"];
  $hour = $_POST["hour"];

  $fp = fopen("/etc/cron.d/lightup", "w");
  fwrite($fp, "${minute} ${hour} * * * tatsuki sh /home/tatsuki/on_light.sh");
  fclose($fp);
//  0  0    *   *   *   sh /home/tatsuki/off_light.sh

  echo("${minute}  ${hour}    *   *   *   tatsuki sh /home/tatsuki/on_light.sh");