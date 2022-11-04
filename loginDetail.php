<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Detail</title>
</head>
<body>
        <?php
            $con=mysqli_connect('localhost','root','','wt_project');
            if(isset($_POST['login'])){
                $name=$_POST['emailORusername'];
                $pass=$_POST['loginPass'];
                $query="INSERT INTO login (emailORusername,loginPass) VALUES('$name','$pass')";
                $run=mysqli_query($con,$query);
            }
        ?>
</body>
</html>