<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <fieldset><legend>Đọc số</legend>
            <input type="text" name="number" placeholder="Nhập số cần đọc" size="30">
            <input type="submit" value="Đọc số">
        </fieldset>
    </form>
    <?php
    function readNumber($num){
            switch ($num) {
                case 1:
                    return "one";
                case 2:
                    return "two";
                case 3:
                    return "three";
                case 4:
                    return "four";
                case 5:
                    return "five";
                case 6:
                    return "six";
                case 7:
                    return "seven";
                case 8:
                    return "eight";
                case 9:
                    return "nine";
                case 10:
                    return "ten";
                case 11:
                    return "eleven";
                case 12:
                    return "Twelve";
                case 13:
                    return "Thirteen";
                case 15:
                    return "Fifteen";
                case 20:
                    return "twenty";
                case 30:
                    return "thirty";
                case 40:
                    return "fourty";
                case 50:
                    return "fivety";
                case 60:
                    return "sixty";
                case 70:
                    return "seventy";
                case 80:
                    return "eighty";
                case 90:
                    return "ninety";
            }
    }
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $number=$_POST['number'];
        $readnumber="";
        if ($number>0 && $number<=12){
            $readnumber= readNumber($number);
        }
        if ($number>13 && $number<20){
            $readnumber= readNumber($number%10).'teen';
        }
        if ($number>=20&&$number<100){
            $readnumber= readNumber(floor($number/10)*10).readNumber($number%10);
        }
        if ($number>=100&&$number<1000){
            $readnumber= readNumber(floor($number/100)).'hundred'.readnumber((floor($number/10)%10)*10).readnumber($number%10);
        }
        echo $readnumber;
    }
    ?>
</body>
</html>
