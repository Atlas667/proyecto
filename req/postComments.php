<?php
	
	global $comments;
	$comments = [
    ["user" => "potato", "estrellas" => 4, "comment" => "Excelente servicio y excelente precio. Se lo recomiendo a todo el que necesite un buen lavado de auto."],
    ["user" => "josue", "estrellas" => 1, "comment" => "Demasiado caro, que se creen ellos? ¡pagate este! "],
    ["user" => "admin", "estrellas" => 5, "comment" => "La mejor tienda del mundo, se la recomendaria a todo el mundo."] ];

  foreach ($comments as $k){
    echo '<div class="d-block pl-3 text-muted pt-0">';
	echo '<p class="small lh-125">';
	    
	    echo '<div>';
	    	echo '<strong class="text-gray-dark">@' . $k["user"] . '</strong>';
		    echo "<div class='commentStars' style='width:auto;' id='' value=" . $k['estrellas'] .">
			      <span class='fa fa-star' id='cstar1' ></span>
			      <span class='fa fa-star' id='cstar2' ></span>
			      <span class='fa fa-star' id='cstar3' ></span>
			      <span class='fa fa-star' id='cstar4' ></span>
			      <span class='fa fa-star' id='cstar5' ></span>
			    </div>";
	    echo "</div>";
    echo '</p>';

    echo '<p class="d-block pb-3 border-bottom border-gray">';
    	echo $k["comment"];
    echo '</p>';

    echo '</div>';

  }


?>