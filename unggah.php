<?php

$berkas = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];

$dir = "unggahan/";

move_uploaded_file($tmp, $dir.$berkas);