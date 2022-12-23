<?php
//   header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="amirhosseinabedini_cv.pdf"');
  header("Content-Length: " . filesize("amirhosseinabedini_cv.pdf"));
  $fp = fopen("amirhosseinabedini_cv.pdf", "r");
  fpassthru($fp);
  fclose($fp);
?>