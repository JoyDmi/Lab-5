<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (!empty($_POST["email"]) and !empty($_POST["category"]) and !empty($_POST["title"]) and !empty($_POST["description"])) {
    $mysqli -> query("INSERT INTO ad (email, category, title, description) VALUES ('{$_POST['email']}', '{$_POST['category']}', '{$_POST['title']}', '{$_POST['description']}')");
}
?>

<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8">
</head>

<body>
<label><center>Добавить объявление!</center></label><br><br>
<form action="safe3.php" method="POST">
    E-mail:
    <input type="text" name="email" /><br>
    <br>
    Категория объявления:
    <select name="category">
        <option>House</option>
        <option>Cars</option>
        <option>Services</option>
        <option>Other</option>
    </select>
    <br>
    <br>
    Название объявления:
    <input type="text" name="heading"><br>
    <br>
    Описание:
    <textarea rows="5" cols="50" name="description"></textarea><br>
    <br>
    <input type="submit" value="отправить">

    <p><center>Table List:</form>
<table border="1">
    <tr>
        <th>Category</th>
        <th>Name</th>
        <th>Email</th>
        <th>Description</th>
        </center>
    </tr>
    <?php
    include 'data.php';
    include 'create.php';
    include 'table.php';
    include 'safe3.php';
    $result = mysqli_query($mysqli , "SELECT*FROM ad");
    while ($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>' . $row['Category'] . '</td>';
        echo '<td>' . $row['Name'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '</tr>';
    }
    $result->close();
    $mysqli->close();
    ?>
</table>

</body>
</html>
