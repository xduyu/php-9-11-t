<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="" method="get">
        <input type="text" name="username" placeholder="enter your name" id="">
        <button type="submit">send</button>
    </form>
    <form action="" method="post">
        <input type="text" name="username" placeholder="enter your name" id="">
        <button type="submit">send</button>
    </form> -->
    <!-- <form action="" method="POST">
        <input type="text" name="login" placeholder="enter your name" id="">
        <input type="password" name="password" placeholder="enter your password" id="">
        <button type="submit">send</button>
    </form> -->
    <form action="" method="GET">
        <h1>what's your favourite color?</h1>
        <label for="">
            <input type="checkbox" name="color[]" value="red" id=""> <span>red</span>
        </label>
        <label for="">
            <input type="checkbox" name="color[]" value="yellow" id=""> <span>yellow</span>
        </label>
        <label for="">
            <input type="checkbox" name="color[]" value="blue" id=""> <span>blue</span>
        </label>
        <button type="submit" style="background-color: #ff00f7;">send</button>
    </form>
    <?php
    $colors = 'no data';
    if (isset($_GET['color'])) {
        // echo $_GET['color'];
        foreach ($_GET['color'] as $value) {
            echo $value . '</br>';
        }
    }
    // $login = "Нет данных";
    // $pass = "Нет данных";
    // if (isset($_POST['login']) && isset($_POST['password'])) {
    //     $login = htmlspecialchars($_POST['login']);
    //     $password = htmlspecialchars($_POST['password']);
    //     echo "Логин: $login, пароль: $password";
    // }
    ?>
</body>

</html>