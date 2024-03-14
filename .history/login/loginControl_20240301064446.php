<?php 

session_start(); 

include "../database/database.php";

if (isset($_POST['username']) && isset($_POST['current-password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       echo $data;
       return $data;

    }
    $uname = validate($_POST['username']);
    echo $uname;
    $pass = validate($_POST['current-password']);
    echo $pass;
    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM accounts WHERE NameLogin='$uname' AND Password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['NameLogin'] === $uname && $row['Password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                if ($row['PhanQuyen'] === 1) {
                    header("Location: admin");
                }
                
            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }
}else{

    header("Location: index.php");

    exit();

}