<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercise_3</title>
    </head>
    <body>
        <h1>Exercise_3</h1>
        <?php 
            $first_note = 15;
            $second_note = 20;
            $sum_contain = $first_note + $second_note;
            
            if ( $sum_contain >= 0.06) 
            {
                echo "grade will be First Division"; 
            }
            elseif ($sum_contain >= 0.45 && $sum_contain < 0.59)
            {
                echo "grade will be Second Division";
            }
            elseif($sum_contain >= 0.33 && $sum_contain < 0.44)
            {
                echo "grade will be Third Division";
            }
            elseif($sum_contain < 0.33)
            {
                echo"student will be Fail.";
            }
        ?>
    </body>
</html>