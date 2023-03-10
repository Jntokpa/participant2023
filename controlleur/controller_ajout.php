<?php
if (isset($_POST['valider'])) {
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['telephone']) and !empty($_POST['email'])) {
        $nom = htmlspecialchars(strtoUpper($_POST['nom']));
        $prenom = htmlspecialchars(strtoUpper($_POST['prenom']));
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);

        $select_email_participant->execute(array($email));
        $email_exist = $select_email_participant->rowCount();
        if ($email_exist != 0) {
            $error = "Erreur!! Un participant a deja été enregistré avec le même email";
        } else {
            $create_participant->execute(array($nom, $prenom, $telephone, $email));
            $success = "Participant enregistré avec succès";
        }
    } else {
        $error = "Remplir tous les champs";
    }
}
