<html>
    <header>
        <title>IsInteger</title>
    </header>
    <body> 
        <h1>
            <?php
            
            $x = NAN;

            /*var_dump($x);
            echo "<br>";
            var_dump(is_int($x));
            echo "$x is a ";
            var_dump($x);*/

            if (is_int($x)){
                echo "$x is an Integer";
            }elseif(is_nan($x)){
                echo "$x is not a number";
            }elseif(is_float($x)) {
                echo "$x is a float";
            }elseif(is_string($x)){
                echo "$x is a String";
            } else {
                echo " ";
            }
            ?>
          
        </body>
      </html>