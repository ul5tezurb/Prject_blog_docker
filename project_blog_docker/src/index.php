<?php //phpinfo(); die;

if(isset($_POST['submit'])) {

    header("Location: post.php");

} else {

    #echo <script>window.location.href='post.php'<script>;
}

$pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");

    $username =filter_input(INPUT_POST, 'username');
    $password =filter_input(INPUT_POST, 'password');
    $email =filter_input(INPUT_POST, 'email');

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $hashedpassword = password_hash($password , PASSWORD_DEFAULT);

    if (!empty($username) && !empty($password) && !empty($email)){

        $statement = $pdo->prepare("INSERT INTO user
        (username, password, email)
        VALUES
        (:username,:password,:email)");

        $statement->bindParam('username' , $username, \PDO::PARAM_STR);
        $statement->bindParam('password', $hashedpassword, \PDO::PARAM_STR);
        $statement->bindParam('email', $email, \PDO::PARAM_STR);
        $statement->execute();

    }

}

?>





