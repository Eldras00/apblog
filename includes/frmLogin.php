<form action="#" method="post">
    <div>
        <label for="mail">E-mail : </label>
        <input type="text" id="mail" name="mail" value="<?php if(isset($mail)) echo $mail;?>"/>
    </div>
    <div>
        <label for="password">Mot de passe : </label>
        <input type="password" id="password" name="password" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Connexion" name="frmAuthentication" />
    </div>
</form>