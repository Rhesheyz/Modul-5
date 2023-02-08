<html>
    <head>
        <title>passing Argument by Reference</title>
    </head>
    <body>
        <?php
        function addFive(&$num)
        {
            $num += 5;
        }
        
        function addSix(&$num)
        {
            $num += 6;
        }
        $origum = 10;
        addFive(@$origum);
        echo "Original value is $originum<br />";
        addSix($originum);
        echo "original value is $originum<br />";
        ?>
    </body>
</html>