
<body>
    <form  action="saveinscrip.php" method="post" >
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
        </div>
        <button type="submit" class="btn btn-primary" name="valid_connection" value="conexion">Soumettre</button>
    </form>
</body>
</html>