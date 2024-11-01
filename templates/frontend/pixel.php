<?php

function insert_pixel()
{
  $api = new Ve_API();
  echo '<img height="1" width="1" style="position:absolute;top:0;left:0;" src="'. $api->getConfigOption('pixel') .'" />';
}

?>
