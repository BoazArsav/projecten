<?php 


try{
    require("dbconnect.php");
    if(isset($_POST['submitBtnLogin'])) {


        $username = filter_input(INPUT_POST, "username", FILTER_UNSAFE_RAW);
        $password = ($_POST['pass']);
        $query = $db->prepare("SELECT username, passwrd, idclient FROM client WHERE username = :user");
        $query->bindValue("user", $username, PDO::PARAM_STR);
        $query->execute();



        if($query->rowCount() == 1){
            while($result = $query->fetch(PDO::FETCH_ASSOC)){
                if($username && password_verify($password, $result['passwrd'])){
                    session_regenerate_id();
                    $login = true;
                    $client = ($result['idclient']);
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['client'] = $client;
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    header("location: index.php");
                    exit();
                }else{
                    echo "<script>alert('Onjuiste gegevens!')</script>";
                    echo "<h1>Redirecting</h1>";
                    header('Refresh: 1; url=index.php');
                    exit();
                }
            } 
        }

        }

    }
 catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}

?>


<!--Gemaakt door Boaz Arsav-->