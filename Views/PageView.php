 
<?php   
 // header("Content-type: application/json; charset=utf-8"); 

 //echo json_encode($requestJSON) ; // descomentar y activar header
echo 'recibo un array de objetos creado  de un query con pdo <hr>';
print_r($requestJSON);
echo '<hr> puedo recorrer el array con php <hr>';
  foreach($requestJSON as $p){echo '<p>'.$p->code.' - '.$p->nplato.'</p>' ;} // comentar si quiero formato json

echo '<hr> y con json_encode(array_de_objetos) puedo recorrerlo con javascript (ver en consola)   <hr>';
 ?>
 
  
  
  
  <script>
 var x=<?php echo json_encode($requestJSON);?>;
  console.log(x);

 console.log(x.code);



  </script>
  

 
 