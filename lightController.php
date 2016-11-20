<?php
  $minute = $_POST["minute"];
  $hour = $_POST["hour"];

  chmod("/etc/cron.d/lightup", 0666);
  $fp = fopen("/etc/cron.d/lightup", "w");
  fwrite($fp, "#!/bin/sh\n");
  fwrite($fp, "SHELL=/bin/bash\n");
  fwrite($fp, "PATH=/sbin:/bin:/usr/sbin:/usr/bin\n");
  fwrite($fp, "${minute} ${hour} * * * tatsuki sh /home/tatsuki/on_light.sh\n");
  fclose($fp);
  chmod("/etc/cron.d/lightup", 0644);

//  0  0    *   *   *   sh /home/tatsuki/off_light.sh

  echo("${minute}  ${hour}    *   *   *   tatsuki sh /home/tatsuki/on_light.sh");