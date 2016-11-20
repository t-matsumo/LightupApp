<?php
  $minute = $_POST["minute"];
  $hour = $_POST["hour"];

  $fp = fopen("/etc/cron.d/lightup", "w");
  fwrite($fp, "#!/bin/sh\n");
  fwrite($fp, "SHELL=/bin/bash\n");
  fwrite($fp, "PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/local/games:/usr/games\n");
  fwrite($fp, "HOME=/\n");
  fwrite($fp, "${minute} ${hour} * * * tatsuki sh /home/tatsuki/on_light.sh\n");
  fclose($fp);
//  0  0    *   *   *   sh /home/tatsuki/off_light.sh

  echo("${minute}  ${hour}    *   *   *   tatsuki sh /home/tatsuki/on_light.sh");