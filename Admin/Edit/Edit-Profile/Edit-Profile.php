<?php
$fnameErr1 = $lnameErr1 = $emailErr1 = "";
include("Process-Edit.php");
include("Check-Input.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../Register/style.css">
    <script src="../../../JavaScrips.js"></script>
    <title>Update-Profile</title>
    <link rel="icon" sizes="192x192" href="../../../Image/178f6b924bbee8befb5cf61c9a17a12e.png">
</head>

<body>
    <div class="title">
        <h1>Update - Profile</h1>
    </div>
    <form method="POST" action="Edit-Profile.php?id=<?php echo $_GET["id"] ?>">
        <div class="form">
            <label for="">Firstname</label><br>
            <input type="text" name="fname" value="<?php echo $fname ?>">
            <span class="error"><?php echo $fnameErr1; ?></span><br>
            <label for="">Lastname</label><br>
            <input type="text" name="lname" value="<?php echo $lname ?>">
            <span class="error"><?php echo $lnameErr1; ?></span><br>
            <label for="">Email</label><br>
            <input type="email" name="email" value="<?php echo $email ?>">
            <span class="error"><?php echo $emailErr1; ?></span><br>
        </div>
        <input type="submit" name="update" value="Update" onclick="return checkupdate()" style="cursor: pointer">
        <a href="../../Manager/Admin.php" name="return">Return</a>
    </form>
</body>

</html>