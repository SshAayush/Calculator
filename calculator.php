<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
        $choice = $_POST['choice'];
        $a = $_POST['first'];
        $b = $_POST['second'];
        
        switch($choice){
            case 1:
                $sum = $a + $b;
                echo "Sum is :".$sum;
                break;
            case 2:
                $dif = $a - $b;
                echo "Difference is :".$dif;
                break;
            case 3:
                $pro = $a * $b;
                echo "Product is :".$pro;
                break;
            case 4:
                $divi = $a / $b;
                echo "Division is :".$divi;
                break;
            default:
                echo"Invalid choice";
        }
        ?>
        <script src="" async defer></script>
    </body>
</html>
