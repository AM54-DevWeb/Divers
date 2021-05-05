<?php
include("header.php")
?>

    <div class="space"></div>
    <form method="POST">
    <fieldset class="field"><legend class="legrdv"><strong> RDV : </strong></legend>
    <br />
    <label for="objetList" class="rdv"><strong> Objet du RDV :</strong></label>
    <select name="objetRDV" id="objetList" class="rdv2">
        <option></option>
        <option>Création de site web</option>
        <option>Transfert de site web</option>
        <option>Maintenance de site web</option>
    </select>
    <br />
        <label for="date1" class="rdv"><strong>Date &amp; heure :</strong></label>
        <input type="datetime-local" id="date1" class="rdv2">
    <br />
        </fieldset>
    <br />
    <fieldset class="field"><legend class="legrdv"><strong>Coordonnées :</strong></legend>
    <br />
    <label for="civilite"><strong> Civilité :</strong></label>

    <input type="radio" name="civ" id="civilite">
        <label for="civilite">M.</label>
    <input type="radio" name="civ" id="civilite2">
        <label for="civilite">Mme</label>
    <br />
    <br />

    <label for="nom" class="civ2"><strong>Nom :</strong></label>
        <input type="text" id="nom">
    <label for="prenom" class="civ2"><strong>Prenom :</strong></label>
        <input type="text" id="prenom">
    <br />
    <br />
            <label for="mail" class="civ2"><strong>Email :</strong></label>
            <input type="email" placeholder="exemple@mail.fr" id="mail">
            <label for="tel" class="civ2"><strong>Tel. :</strong></label>
            <input type="tel" placeholder="Votre numéro" id="tel">
    </fieldset>
    <br />
    <fieldset class="field"><legend class="legrdv"><strong>Adresse :</strong></legend>
    <br />
        <input type="number" placeholder="N°">
        <input type="text" placeholder="Rue">
    <br />
    <br />
        <input type="number" placeholder="Code Postal">
        <input type="text" placeholder="Ville">
    </fieldset>
    <br />
    <fieldset class="field"><legend class="legrdv"><strong>Commentaire :</strong></legend>
    <br />
        <textarea class="com" name="commentaire" id="commentaire" cols="80" rows="10" placeholder="Ecrivez ici"></textarea>
    </fieldset>
    <br />
    <br />
    <center>
        <div class="button">
    <button class="remisezero" type="reset">Remise à zéro</button>
    <input class="envoyer" type="submit" value="Envoyer le formulaire">
        </div>  
    </center>
    </form>