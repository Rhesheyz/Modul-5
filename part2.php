   <?php
    $filename = "newfile.txt";
    $file = fopen($filename' "w");
    if ($file == false) {
        echo ("Eror in opening new file");
        exit();
    }
    fwrite($file, "ini isi file\n");
    fclose($file);
    ?>

<html>
<head> 
    <title>Writing a file using PHP</title>
</head>
<body>
    <?php
    if (file_exists($filename)) {
        $filesize = filesize($filename);
        $msg = "File  created whith name $filename ";
        $msg = "containing $filesize bytes";
        echo ($msg);
    } else {
        echo ("file $filename does not exit");
    }
    ?>
    </body>
    <html>
