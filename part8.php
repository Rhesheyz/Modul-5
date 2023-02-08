<html>
    <head>
        <title>Dynamic Function calls</title>
    </head>
    <body>
        <?php
        function sayHello()
        {
            echo "Hello<br />";
        }
        $function_holder = "sayHello";
        $function_holder();
        ?>
    </body>
</html>