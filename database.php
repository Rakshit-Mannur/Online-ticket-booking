<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php 
        $servername='localhost';
        $username='root';
        $password='king';
        $dbname='starks';

        $conn=mysqli_connect($servername,$username,$password,$dbname);

        if(!$conn)
        {
            die('Connection failed: '.mysqli_connect_error());
        }

        if(isset($_POST['submit']))
        {
         $name =  $_POST['name'];
         $phone = $_POST['phone'];
         $email =  $_POST['email'];
         $password =  $_POST['password'];
         $confirmPassword =  $_POST['confirmPassword'];
        


         if ($_POST["password"] === $_POST["confirmPassword"]) 
         {
            $encPass = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $encCon = password_hash($_POST['confirmPassword'], PASSWORD_DEFAULT);

            $sql="INSERT INTO signup (name,phone,email,password,confirmPassword,encPass,encCon) values('$name','$phone','$email','$password','$confirmPassword','$encPass','$encCon')";

            if(mysqli_query($conn,$sql))
            {
               echo 'You are registered successfully !';
            }
            else
            {
               echo 'OOPS! Registration failed';
            }
         }
         else {
            echo 'Passwords mismatched :(';
         }

        mysqli_close($conn);
       }
    ?>
    
</body>
</html>




