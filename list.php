<?

$dbname = 'cz25018_db';
$dbuser = 'cz25018_db';
$dbpass = 'C4zu8tRC';


$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
$stmt = $pdo->query('SELECT * FROM orders ORDER BY id DESC'); // * - выводим все поля из таблицы БД по убыванию id

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список заявок</title>
    <style>
        table {
            border: 1px solid darkgray;
            border-collapse: collapse;
        }

        th {
            background-color: lightblue;
        }

        th,td {
            border: 1px solid darkgray;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PHONE</th>
        <th>EMAIL</th>
    </tr>
        <?
            foreach ($stmt as $row) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>


