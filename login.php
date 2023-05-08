<!DOCTYPE html>
<html>
    <head>
    <?php
    include("dbdata.php");
?>
        <link rel="stylesheet" type="text/css" href="logincss.css">
        <link rel="stylesheet" type="text/css" href="global.css">
        <div id="title"><p>Enter your information log in below</p></div>
        
    </head>
    <body>
        <div id="forM">
            <input type="text" id="idnum" name="idnum" placeholder="ESIS number"><br>

            <input type="password" id="pass" name="pass" placeholder="Password"><br>
                
            <input type="submit" id="registeer" value="Log in">
        </div>
        <div class="buttoncont">
            <button class="button">Forgot password?</button>
        </div>
    </body>
</html>
