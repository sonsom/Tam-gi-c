<html>
	
	<?php 
		for ($i=0; $i < 8; $i++) {
   		 for ($j=0; $j < 8-$i; $j++) {
     	 echo "&nbsp";
   	 }
    	for ($j=0; $j < $i; $j++) {
      echo " *";
   		 }
    echo "<br>";
  } ?>
</html>