<?php
$files = glob(dirname(__FILE__). '/download/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}
?>
<a href="/">Home</a>