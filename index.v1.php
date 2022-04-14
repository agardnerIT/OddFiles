<?php
  $delay = 0;
  sleep($delay);
  $environment = getenv("Environment");
  $version = getenv("DT_RELEASE_VERSION");
  echo "Version: $version (.1)<br />";
  echo "Delay: $delay second(s)<br />";
  echo "Environment: $environment";
?>
