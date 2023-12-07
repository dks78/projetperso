<?php
if (isset($_POST['valid_connection'])) {
    if (
        isset($_POST['form_email']) && !empty($_POST['form_email']) &&
        isset($_POST['form_password']) && !empty($_POST['form_password'])
    ) {
        $useremail = $_POST['form_email'];
        $password = $_POST['form_password'];
        $pdo = new \PDO('mysql:host=localhost;dbname=projetperso', 'root', 'Caraboumga1.');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT user_password FROM user WHERE user_email = :email';
        $req = $pdo->prepare($sql);
        $req->bindParam(':email', $useremail, \PDO::PARAM_STR);
        $req->execute();
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        $yourHashedPassword = $result['user_password'];
        // }

        if ($result && password_verify($password, $result['user_password'])) {
            // Connexion réussie, rediriger vers function.php
            header("Location: page1.php");
            exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
        } else {
            // Mot de passe incorrect
            $error_message = 'Erreur de connexion. Veuillez vérifier vos identifiants.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projetPcss/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <form method="post">
                <h1>CONNECTION</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" name="form_email" class="form-control" id="form_email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="form_password" name="form_password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Cochez-moi</label> 
                    <a class="lien" href="inscription.php">Inscription</a>          
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="valid_connection" value="conexion">Soumettre</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>