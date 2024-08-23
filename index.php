<?php
    echo"i like pizza <br>";
    echo"it's really good";
    // br bir alt satıra geçirmek için kullanılır.

?>
</head>
</body>
    <button>order pizza</button>

</body>
<?php
    $name = "elma armut";
    $food = "pizza";
    $email = "sahte123@gmail.com";
    $pizza = "kaşarlı";

    $age = 21;
    $users = 2;

    echo"hello {$name}<br>";
    echo"you like {$food}<br>";
    echo"your email is {$email}<br>";
    
    echo"you are {$age} years old<br>";
    echo"there are {$users} users online<br>";

    echo $$food;
?>
<?php
    $x = 10;
    $y = 2;
    $z = null;

    //$z = $x + $y;
    //$z = $x - $y;
    //$z = $x * $y;
    //$z = $x / $y;
    //$z = $x ** $y;
    //$z = $x ½ $y;
    echo $z;
?>
<?php
    $counter = 0;

    $counter++;
    echo $counter;
?>
<?php
    //işlem önceliği
    // ()
    // **
    // * / ½
    // + -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;
?>
</head>
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">
    </form>
</body>
</html>

<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>
</head>
<body>
    <form action="index.php" method="post"
        <label>miktar: </label><br>
        <input type="text" name="miktar">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $item = "pizza";
    $price = 5.99;
    $miktar = $_POST["miktar"];
    $total = null;

    echo"you have ordered {$miktar} x {$item}/s";
    echo"your total is: \${$total}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x); mutlak değer
    //$total = round($x); sayıyı yuvarlar
    //$total = floor($x); her zaman aşağı yuvarlar
    //$total = ceil($x); her zaman yukarı yuvarlar
    //$total = pow($x, $y); üssünü alır
    //$total = sqrt($x); karekökünü alır
    //$total = max($x, $y, $z); üc sayı arasında en yükseğini alır
    //$total = max($x, $y, $z); üc sayı arasında en düşüğünü alır
    //$total = pi(); pi sayısını alır
    //$total = rand(1, 6);  iki sayı arasında rastgele sayıyı ekrana verir
    

    echo $total;
?>