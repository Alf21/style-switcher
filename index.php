<html>
    <head>
        <title>Multiple Colors</title>
        <?php include("header.php"); ?>
    </head>
    <body>
        <center>
            <br /><br /><br />
            <u><h1>&nbsp;PHP Color Switcher&nbsp;</u></h1>
            <div>
                <?php if (cookiesEnabled()) : ?>
                <?php colorChanger("blue", "blue"); ?>
                <?php colorChanger("red", "#FF0000"); ?>
                <?php colorChanger("default", "rgb(255, 255, 255)"); ?>
                <?php endif; ?>
            </div>
            <br />
            <hr />
        </center>
    </body>
</html>