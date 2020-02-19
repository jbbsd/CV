<?php include ("DbConnection.php")?>
<?php include ("index.php")?>
<?php
class Contacts{
    public function contacts(){

        if (!empty($_POST)) {
            //par défaut, on dit que le formulaire est entièrement valide
            //si on trouve ne serait-ce qu'une seule erreur, on
            //passera cette variable à false
            $formIsValid = true;


            $raison = strip_tags($_POST['raison']);
            $email = strip_tags($_POST['email']);
            $message = strip_tags($_POST['message']);

            //Le tableau erreurs permet d'afficher
            //Les éventuels problèmes à l'utilisateur
            $errors = [];

            // On teste ici si le nom est rempli,
            //puis s'il n'est pas trop court ou trop long
            if (empty($raison)) {

                $formIsValid = false;
                $errors[] = "Veuillez renseigner l'objet !";
            }


            //validation de l'email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $formIsValid = false;
                $errors[] = "Votre email n'est pas valide !";
            }

            //Validation message
            if (empty($message)) {

                $formIsValid = false;
                $errors[] = "Veuillez saisir votre message";
            }

            if ($formIsValid == true) {
                //on écrit tout d'abord notre requête SQL, dans une variable
                $sql = "INSERT INTO contacts 
            (raison, email, message, created_date)
            VALUES 
            (:raison, :email, :message, NOW())";
                $pdo = DbConnection::getPdo();
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    ":raison" => $raison,
                    ":email" => $email,
                    ":message" => $message,
                ]);
            }
        }
    }

}