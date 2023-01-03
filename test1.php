
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box
        }
        .container{
            max-width: 60%;
            background-color: grey;
            margin: auto;
            padding:23px
            /* text-align: center; */
    
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>PHP Logic</h3>
        <!-- <h1>Lets Learn about PHP<h1> -->
            <p>Your party status:</p>
        <?php
        $age = 38;
        if ($age===38){
            echo "You can go to party";
        }
        else if($age===7){
        echo "You are 7 years old";
        }
        echo "<br/>";
        echo "<br/>";
        $lang = array("python","c++", "javascrip");
        echo $lang[2];
        $a = 0;
        while ($a<=15){
            echo "<br>The Value of a is:";
            echo $a;
            $a++;
        }
            // array is using php
           
        $langs = array("python","c++", "javascrip");
        $a = 0;
        while ($a <= count($langs)){
            echo "<br>The Value of languages is: ";
            echo langs[$a];
            $a++;
        }

        ?>
        </div>
</body>
</html>