<?php
  $delay = 5;
  sleep($delay);
  $environment = getenv("Environment");
  $version = "v2";
  echo "Version: $version<br />";
  echo "Delay: $delay second(s)<br />";
  echo "Environment: $environment";
?>
