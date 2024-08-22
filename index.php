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
    <form action="index.php">
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