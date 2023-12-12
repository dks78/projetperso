<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['form_email']) && !empty($_POST['form_email']) &&
        isset($_POST['form_password']) && !empty($_POST['form_password'])
    ) {
        $form_email = $_POST['form_email'];
        $form_password = $_POST['form_password'];
        $form_password = password_hash($form_password , PASSWORD_BCRYPT);
        $pdo = new \PDO('mysql:host=localhost;dbname=projetperso', 'root', 'Caraboumga1.');
        $query = "INSERT INTO user (user_email, user_password) VALUES (:email, :password)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':email', $form_email, \PDO::PARAM_STR);
        $statement->bindParam(':password', $form_password, \PDO::PARAM_STR);
        $statement->execute();
        header("location: index.php");
        exit();
    }
}
?>