<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1</title>
    <meta charset="UTF-8">
    <style type="text/css">
   .table_head { 
    font-size: 140%; 
    color: Blue;
    text-align: center;
    }
   .table_item {
    color:green;
    text-align: center;
    }
  </style>
</head>

<body>

<?php
$str = file_get_contents('phone.json');
$data = json_decode($str, true);
?>

<table>
    <tr class=table_head>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Address</td>
        <td>Phone Number</td>
        <td>E-mail</td>
        <td>Gender</td>
    </tr>
    <?php foreach ($data as $item) { ?>
 <tr class=table_item>
    <td><?php echo $item['firstName']; ?></td>
    <td><?php echo $item['lastName']; ?></td>
    <td><?php echo $item['address']; ?></td>
    <td><?php echo $item['phoneNumber']; ?></td>
    <td><?php echo $item['e-mail']; ?></td>
    <td><?php echo $item['gender']; ?></td>
</tr>
    <?php } ?>
</table>
</body>
</html>