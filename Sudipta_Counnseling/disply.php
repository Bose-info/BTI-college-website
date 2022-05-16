<?php include 'index.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
<table align="center" border="1.5px solid black" cellspacing="0" width="100%" height="200%">
    <center><h3>Data</h3></center>
        <tr align="center">
            <th>ID</th>
            <th>Number</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        <?php foreach($f as $a){?>
        <tr align="center">
            <td><?=$a['id']?></td>
            <td><?=$a['Avg']?></td>
            <td><?=$a['Dept']?></td>
            <td><form action="index.php" method="post">
                <input type="hidden" name="id" value="<?=$a['id']?>">
                <input type="submit" value="DELETE" name="dl" >
                </form>
            </td>
        </tr>
        <?php } ?>
        </table>

</body>
</html>