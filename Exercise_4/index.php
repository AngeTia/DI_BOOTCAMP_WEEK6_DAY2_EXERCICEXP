<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercise_4</title>
    </head>
    <body>
    
        <?php 
            $role = 'jour';

            switch ($role) 
            {
                case '1':
                    echo  $role= 'lundi';
                break;
                    
                case '2':
                    echo $role = 'mardi';
                break;
                case '3':
                    echo $role= 'mercredi';
                break;
                case '4':
                    echo $role= 'jeudi';
                break;
                case '5':
                    echo $role= 'vendredi';
                break;
                case '6':
                    echo $role= 'samedi';
                break;
                case '7':
                    echo $role= 'dimanche';
                break;
                default: 
                    echo $role= ' le nombre invalide par défaut';
                break;
                        
            }
        ?>
        
    </body>
</html>