<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","");
//mysqli_select_db("espace_pélerin");
//mysqli_connect("localhost","root","","espace_pélerin")
if(
isset($_POST['forminscription'])
  )
{
	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['contact']) AND !empty($_POST['diocése']) AND !empty($_POST['paroisse']))
	{
	  /* $insertion=$con_prepare("INSERT INTO pélerin(Nom,Prenom,Telephone,Diocése,Paroisse)/*VALUES($_POST['Nom'],$_POST['Prenom'],$_POST['Telephone'],$_POST['Diocése'],$_POST['Paroisse'])");*/
	   $insertion=con_query($_POST['Nom'],$_POST['Prenom'],$_POST['Telephone'],$_POST['Diocése'],$_POST['Paroisse'])
	   $execute=$con-query($insertion);
	   $erreur="incription réussie bon pélérinage";
	}
	else
	{
		$erreur="tout les champs doivent etre completés";
	}
}
?>
<html>
<head>
	<title>PELERIN</title>
	<meta charset="utf-8">
</head>
<body>
	<div align="center">
		<h2>Inscription</h2>
		<br/><br/><br/>
		<form method="POST"action="">
			<table>
				<tr>
					<td align="right">
						<label for="nom">Nom :</label>
					</td>
					<td>
					<input type="text" placeholder="votre nom"id="nom"name="nom"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="prenom">Prenom :</label>
					</td>
					<td>
					<input type="text" placeholder="votre prenom"id="prenom"name="prenom"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="contact">contact :</label>
					</td>
					<td align="right">
					<input type="input" placeholder="contact" id="contact"name="contact"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="diocése">Diocése :</label>
					</td>
					<td>
					<input type="text" placeholder="diocése" id="diocése"name="diocése"/>
					</td>
				</tr>
				<tr>
					<td align="right">
						<label for="paroisse">Paroisse :</label>
					</td>
					<td>
					<input type="text" placeholder="paroise" id="paroisse"name="paroisse"/>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="radio" name="sex"value="homme">Homme<br>
						<input type="radio"name="sex"value="femme">Femme<br>
					</td>

					<td align="center">
						<br/>
						<input type="submit" name="forminscription" value="inscription"/>
					</td>
			</table>
			
			
		</form>
		<?php
		if(isset($erreur))
		{
			echo $erreur;
		}
		?>

	</div>
</body>
</html>