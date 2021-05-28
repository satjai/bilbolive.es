<?php include('menu.php');
while($p = $stmt->fetch(PDO::FETCH_OBJ)){
//echo '<p>'.$p->nplato.'</p>';
		  }
 // print_r( $data[0]->nplato);
 //print_r($_SERVER['SERVER_NAME']);
  ?>  
  <form id="platos" name="platos" enctype="multipart/form-data" action="#" method="post">
    <select name="code">
    	<option value="es">Select Language</option>
    	<option value="es">Spanish</option>
    	<option value="en">English</option>

    </select>
     <input type="text" name="ide" id="ide" value="1">
  </form>
  <button type="button" id="enviar" style="cursor:pointer" > ENVIAR </button>

  <div id="target"> target
  </div>  
   <div id="target2">  
  </div>
  <?php
 include('footer.php');
 ?>