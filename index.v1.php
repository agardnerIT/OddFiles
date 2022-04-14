<?php
  $delay = 0;
  sleep($delay);
  $environment = getenv("Environment");
  $version = "v1";
  echo "Version: $version<br />";
  echo "Delay: $delay second(s)<br />";
  echo "Environment: $environment";
?>
