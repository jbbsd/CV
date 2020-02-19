<?php include("header.php")?>


<div class="content">
    <form class="card mt-3 p-3" method="post">
        <h5 class="card-title text-center tform">Pour me contacter</h5>
        <div class="form-group">
            <label for="raison">Indiquer l'objet de votre demande de contact</label>
            <select class="form-control" type="text" name="raison" id="raison">
                <option></option>
                <option>Demande de renseignement</option>
                <option>Offre d'emploi</option>
                <option>Recommandation professionnelle</option>
                <option>Autre</option>
            </select>
        </div>

        <div>
            <label for="email">Votre email</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="abc@exemple.com">
        </div>
        <div>
            <label for="message">Votre message</label>
            <textarea class="form-control" name="message" id="message" rows="3"></textarea>
        </div>

        <?php

        //affiche les éventuelles erreurs de validations
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '<div>' . $error . '</div>';
            }
        }
        ?>

        <button class="btn btn-warning m-3">Envoyer !</button>
    </form>
    <div id="cont" class="card mt-3">
        <div class="card-body conta">
            <h5 class="card-title text-center tconta">Contacts</h5>
            <p class="card-text text-center pt-1">julien4915@hotmail.com
<img src="image/mail.png" alt="mail">
            </p>
            <p class="card-text text-center">07 83 06 70 82
<img src="image/tel.png" alt="tel">
            </p>
        </div>
    </div>
</div>
<?php include("footer.php")?>