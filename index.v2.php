<?php
  $delay = 5;
  sleep($delay);
  $environment = getenv("DT_RELEASE_STAGE");
  $version = getenv("DT_RELEASE_VERSION");
  echo "Version: $version<br />";
  echo "Delay: $delay second(s)<br />";
  echo "Environment: $environment";
?>
