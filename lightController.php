<?php
  $minute = $_POST["minute"];
  $hour = $_POST["hour"];

  $fp = fopen("/var/www/html/lightupapp/cron", "w");
  fwrite($fp, "#!/bin/sh\n");
  fwrite($fp, "SHELL=/bin/bash\n");
  fwrite($fp, "PATH=/sbin:/bin:/usr/sbin:/usr/bin\n");
  fwrite($fp, "${minute} ${hour} * * * tatsuki sh /home/tatsuki/on_light.sh\n");
  fclose($fp);
  exec("crontab cron");

//  0  0    *   *   *   sh /home/tatsuki/off_light.sh

  echo("${minute}  ${hour}    *   *   *   tatsuki sh /home/tatsuki/on_light.sh");