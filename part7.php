<html>
    <head>
        <title>writing PHP Function which returns value</tItle>
    </head>
    <body>
        <?php
        function printMe($param = NULL)
        {
            print $param;
        }
        printMe("This is test");
        printMe();
        ?>
    </body>
</html>