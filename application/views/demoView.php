<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php print_r($users); ?>
    <table class="table">
        <tr>
            <td>UserName</td>
            <td>Email</td>
            <td>Password</td>
            <td>Confirm Password</td>
    </tr>
    <?php foreach ($users as $items): ?>
        <tr>
            <td><?php echo $items['name']; ?></td>
            <td><?php echo $items['email']; ?></td>
            <td><?php echo $items['password']; ?></td>
            <td><?php echo $items['cpassword']; ?></td>
        </tr>
    <?php  endforeach; ?>
    
    </table>
</body>
</html>