<?php
  $delay = 0;
  sleep($delay);
  $environment = getenv("DT_RELEASE_STAGE");
  $version = getenv("DT_RELEASE_VERSION");
  echo "Version: $version<br />";
  echo "Delay: $delay second(s)<br />";
  echo "Environment: $environment";
?>

<!doctype html>
<head>
  <title></title>
</head>
<body>
  <img src="https://github.com/agardnerIT/OddFiles/raw/images/optus_working.png" />
</body>
</html>
