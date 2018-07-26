<!-- <?php echo $_GET['page'] == "contact"; ?> -->


<h3>Contacte moi : </h3>

<form action="/save.php" method="POST">
    <label>Nom :</label><input type="text" name="nom"/><br>
    <label>Prénom :</label><input type="text" name="prenom"/><br>
    <label>Mail :</label><input type="email" name="mail"/><br>
    <textarea name="message" cols="30" rows="10" placeholder="Votre message"></textarea>
    <input type="submit" value="OK">
</form>

