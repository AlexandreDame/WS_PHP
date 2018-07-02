<form method="POST">
	<input type="radio" name="q1" value="oui"><label>oui</label>
	<input type="radio" name="q1" value="non"><label>non</label>
	<button type="submit" name="btn">Envoyer</button>


</form>

<?php
if (isset($_POST['btn'])){

	if(isset($_POST['q1'])){
		$valeur = $_POST['q1'];
		echo 'vous avez selectionné '.$valeur;
	}
	else{
		echo "vous n'avez rien sélectionné"; 
	}
}

?>