<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="design.css">
        <link rel="stylesheet" type="text/css" href="global.css">
        <div id="title"><p>Enter your information and register below</p></div>
        
        <?php
            include("dbdata.php");
        ?>
        
    </head>
    <body>
        <div id="forM">
            <input type="text" id="dispname" name="dispname" placeholder="Full name"><br>

            <input type="text" id="idnum" name="idnum" placeholder="ESIS number"><br>

            <input type="password" id="pass" name="pass" placeholder="Password"><br>
                
            <input type="password" id="conpass" name="conpass" placeholder="Confirm password"><br>
                
            <input type="submit" id="registeer" value="Register">
        </div>
    </body>
</html>
