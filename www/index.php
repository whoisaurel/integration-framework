<?php
// Free PHP File Directory Listing Script - Version 1.4
// HalGatewood.com

// ADD SPECIFIC FILES YOU WANT TO IGNORE HERE
$ignore_file_list = array(".", "..", "Thumbs.db", ".DS_Store", "index.php", "icons.png", '.htaccess', 'functions', 'blocks');

// ADD SPECIFIC FILE EXTENSIONS YOU WANT TO IGNORE HERE
$ignore_ext_list = array();

$title = cleanTitle(basename(dirname(__FILE__)));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: sans-serif;
            padding: 0;
            margin: 0;
            background: #f5f5f5;
        }

        .wrap {
            width: 515px;
            margin: 1em auto;
            background: white;
            border: solid 1px #ECE9E9;
        }

        h1 {
            padding: 10px 15px;
            font-size: 120%;
            font-weight: normal;
            color: #666;
        }

        a {
            padding: 10px 15px;
            display: block;
            color: #399ae5;
            text-decoration: none;
        }

        a:hover {
            color: #206ba4;
            text-decoration: underline;
        }

        .media_block {
            position: relative;
            clear: both;
            border-top: solid 1px #ECE9E9;
        }

        .documentation,
        .assets,
        .media_block:last-child,
        .media_block:nth-last-child(2){
            display: none;
        }

        @media (max-width: 515px) {
            .wrap {
                width: 100%;
                border: none;
            }
        }
    </style>
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW"/>
</head>
<body>
<div class="wrap">
    <h1><?php echo $title ?></h1>
    <?php

    function cleanTitle($title)
    {
        $title = str_replace("-", " ", $title);
        $title = str_replace("_", " ", $title);
        return ucwords($title);
    }

    function getFileExt($filename)
    {
        return substr(strrchr($filename, '.'), 1);
    }

    function format_size($file)
    {
        $bytes = filesize($file);
        if ($bytes < 1024) return $bytes . 'b';
        elseif ($bytes < 1048576) return round($bytes / 1024, 2) . 'kb';
        elseif ($bytes < 1073741824) return round($bytes / 1048576, 2) . 'mb';
        elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2) . 'gb';
        else return round($bytes / 1099511627776, 2) . 'tb';
    }

    // GET FILES AND PUT INTO AN ARRAY
    $files = $directories = array();
    $handle = opendir(dirname(__FILE__));
    while (($file = readdir($handle)) !== false) {
        $files[] = $file;
    }
    closedir($handle);

    sort($files);

    // GET DIRECTORIES
    foreach ($files as $c => $file) {
        if (!is_dir($file)) {
            continue;
        }
        if (in_array($file, $ignore_file_list)) {
            continue;
        }
        if (in_array($fileExt, $ignore_ext_list)) {
            continue;
        }

        echo "<div class=\"media_block $file \"><a href=\"$file\">$file</a></div>";

        unset($files[$c]);
    }

    // LOOP THE FILES
    foreach ($files as $file) {
        $fileExt = getFileExt($file);
        if (in_array($file, $ignore_file_list)) {
            continue;
        }
        if (in_array($fileExt, $ignore_ext_list)) {
            continue;
        }
        if (is_dir($file)) {
            $fileExt = "dir";
        }

        echo "<div class=\"media_block $file \"><a href=\"$file\">$file</a></div>";
    }

    ?>
</div>
</body>
</html>