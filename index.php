<!DOCTYPE html>
<html>
<head>
	<title>PRESENTATION GIT/GITHUB</title>
</head>

<body>
	<h1>TEST GIT</h1>
	<?php
	
	//Voici une commentair(Comme en lc ou #  devant)langage non typee mais peut reconnaitre les types
		echo 'Pour afficher un message en php,<br/> on utilise la commande <b style="color:red" >ECHO</b>';
        echo"<hr>" ;
        //RVB(Rouge,Vert,Bleu) RGB EN ANGLAIS creer un tableau des couleurs(les couleurs que tout navigateur peut afficher)
        //les deux premiers=>rouge les deux suivants =>vert  les deux derniers =>bleu tout les six preceder de #
        $colors=["00","33","66","99","CC","FF"];
        foreach($colors as $rouge)
        {
			echo "<table border='1' width='100%'>";
            foreach($colors as $vert)
            {
				echo"<tr>";
                foreach($colors as $bleu)
                {
                    $rgb="#".$rouge.$vert.$bleu;
					echo "<td style='background-color:$rgb'>$rgb</td>";
				}
				echo"</tr>";
			}
			echo "</table><hr>";
        }




    
         








	?>
</body>
</html>