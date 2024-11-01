<?php

function insert_tag()
{
  $api = new Ve_API();
  echo '<script src="'. $api->getConfigOption('tag') .'"></script>';
}

?>
