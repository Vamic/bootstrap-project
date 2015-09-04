<?php

?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link id="bootstrap-theme" href="bower_components/bootstrap/dist/css/bootstrap-darkly.min.css" rel="stylesheet">

    </head>
    <body>
        <header>
            <?php
            include("content/bootstrapnav.html");
            
            if(isset($_GET['page']))
            {
                switch($_GET['page'])
                {
                    case 1:
                        include("content/page1.html");
                        break;
                    case 2:
                        include("content/page2.html");
                        break;
                    case 3:
                        include("content/page3.html");
                        break;
                    default:
                        include("content/default.html");
                }
            }
            else
            {
                include("content/default.html");
            }
            ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script>
                $("#theme-button").click(function(){
                    var theme = $("#bootstrap-theme")[0].href;
                    if(theme.includes("darkly"))
                    {
                        theme = theme.replace("bootstrap-darkly.min.css","bootstrap.min.css");
                    }
                    else
                    {
                        theme = theme.replace("bootstrap.min.css","bootstrap-darkly.min.css");
                    }
                    $("#bootstrap-theme")[0].href = theme;
                });
                if (!String.prototype.includes) {
                    String.prototype.includes = function() {'use strict';
                        return String.prototype.indexOf.apply(this, arguments) !== -1;
                    };
                }
        </script>
    </body>
</html>