<?php

// We'll be outputting a MPEG
header("content-type: video/mpg");

// It will be called downloaded.mpeg
header('Content-Disposition: attachment; filename="downloaded.mpg"');

// The PDF source is in original.mpeg
readfile("original.mpg");
