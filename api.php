<?

    // ini_set('display_errors', 1);
    // error_reporting(E_ALL);

    //все переменные начинаются с $
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    // echo '<h1>Имя: ' . $name . '</h1>';
    // echo '<h1>Телефон: ' . $phone . '</h1>';
    // echo '<h1>E-mail: ' . $email . '</h1>';

    $dbname = 'cz25018_db';
    $dbuser = 'cz25018_db';
    $dbpass = 'C4zu8tRC';


    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->prepare('INSERT INTO orders(name, phone, email) VALUES(:name, :phone, :email)');
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':email', $email);

    if ($stmt->execute()) {
        echo '1';
    }

    //$_GET - метод запроса

    // if ($count == 50) {
    //     echo 'Value is valid'; //выводит значение на страницу
    // } else {
    //     echo 'Value is invalid';
    // }
