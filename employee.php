<?php

$sql="SELECT * FROM employee";
$result=mysqli_query($conn,$sql);

?>
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
<table border="1" cellspacing="0" cellpadding="5">
    <thead>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>age</td>
        <td>gender</td>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($employee=mysqli_fetch_assoc($result)){
    echo ("<tr>");

    echo ("<td>");
    echo ($employee['id']);
    echo ("</td>");

        echo ("<td>");
        echo ($employee['name']);
        echo ("</td>");

        echo ("<td>");
        echo ($employee['age']);
        echo ("</td>");


        echo ("<td>");
        echo ($employee['gender_id']);
        echo ("</td>");


    echo ("</tr>");
    }
    ?>
    </tbody>
</table>
</body>
</html>
