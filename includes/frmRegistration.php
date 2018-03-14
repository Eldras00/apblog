<form action="#" method="post">
    <div>
        <label for="name">Nom : </label>
        <input type="text" id="name" name="name" value="<?php if(isset($name)) echo $name;?>" />
    </div>
    <div>
        <label for="firstName">Prénom : </label>
        <input type="text" id="firstName" name="firstName" value="<?php if(isset($firstName)) echo $firstName;?>" />
    </div>
    <div>
        <label for="mail">e-mail : </label>
        <input type="text" id="mail" name="mail" value="<?php if(isset($mail)) echo $mail;?>" />
    </div>
    <div>
        <label for="password">Mot de passe : </label>
        <input type="password" id="password" name="password" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" name="frmRegistration" />
    </div>
</form>