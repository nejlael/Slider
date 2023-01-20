<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider</title>
    <style>
        li{
            list-style-type: none;
        }
        .slider{
            border: solid pink 2px;
        }
        img{
            height: 150px;
        }
    </style>
</head>
<body>
    <?php

/* J'utilise la fonction scandir pour afficher mes dossier photos,
il me retourne un array : je fais une boucle foreach pour chaque item de l'array,
je fais une condition pour demander si l'item est un dossier avec la focntion is_dir,
si oui, jouvre avec opendir(), si non je réutilise la fonction scandir() */

        /* chdir()	Changes the current directory
        chroot()	Changes the root directory
        closedir()	Closes a directory handle
        dir()	Returns an instance of the Directory class
        getcwd()	Returns the current working directory
        opendir()	Opens a directory handle
        readdir()	Returns an entry from a directory handle
        rewinddir()	Resets a directory handle
        scandir()	Returns an array of files and directories of a specified directory
        $dir = "Gallerie/";

        // Sort in ascending order - this is default
        $a = scandir($dir);

        // Sort in descending order
        $b = scandir($dir,1);

        print_r($a);
        */

        $dir = ".";
        $a = scandir($dir);

        //print_r($a);
        //echo "<br>";

        foreach($a as $value){
            if (is_dir($value)){
                echo "<li><a>" . $value . "</a></li>";
            }else if (pathinfo($value, PATHINFO_EXTENSION) == "jpg" OR pathinfo($value, PATHINFO_EXTENSION) == "jpeg" ){
                echo '<img src ="./' . $value . '">';
            }else{
                echo ' ';
            }
        }

        //a faire : des lien permettant dacceder au dossier et afficher les photos de celui ci

    ?>
    <script>

    </script>
</body>
</html>