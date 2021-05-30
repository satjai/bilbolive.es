<?php 

class Model{
	 private $mbd='';
	 function __construct(){
		 try {
		$m = new PDO('mysql:host=localhost;dbname=laravel2021','satjai', 'chit');
		$this->mbd = $m;
		} catch (PDOException $e){
    echo $e->getMessage();
}
	}
	function desconn(){$this->mbd = null; return;}
	public function view($view){
		if(isset($_GET['view'])){$view==$_GET['view'];}else{$view == $view;};
		return $view;
	}
	
	
	public function display($obj){ 
                     $stmt = $this->mbd ->prepare("SELECT platos.id as idplato,platos.precio,platos.numero,
                                   platos_lng.id as plngid, platos_lng.code, platos_lng.nplato from platos
		                           inner join platos_lng on platos.id = platos_lng.id");
	                 $stmt->execute();
	return  $stmt; 
	}


	public function page($obj){ 
	if(!isset($obj['code'])){$code = 'es';} else {$code = $obj['code'];}
	print_r($code.'->code ');
	 	$stmt = $this->mbd ->prepare("SELECT platos.id as idplato,platos.precio,platos.numero,
                                   platos_lng.id as plngid, platos_lng.code, platos_lng.nplato from platos
		                           inner join platos_lng on platos.id = platos_lng.id where  code ='$code'");
	    $stmt->execute(); 
	    while($results = $stmt->fetch(PDO::FETCH_OBJ)){
		$data["request"][] = $results;  
		  } 
	//print_r($data["request"]);
		return $data["request"];
		}
		



		
		public function bound($obj){
		$stmt = $this->mbd ->prepare("SELECT * from platos  
		inner join platos_lng on platos.id = platos_lng.id where platos.id='$obj->ID'");
// Ejecutamos
$stmt->execute();
// bindColumn
$stmt->bindColumn(1, $id);
$stmt->bindColumn('code', $code);
$stmt->bindColumn('nplato', $nplato);
while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
    $arr[] = $id . " - " . $code ." - " .$nplato;
   // echo $cliente . "<br>";
}
print_r($arr);
//  return $arr;

		}
}


 






 /* 
 while($results = $stmt->fetch(PDO::FETCH_OBJ)){
			$arr['data'][]= $results;
	      
	       //print_r('<br>');
		} // print_r(json_encode($arr));
		 $data = array(
		  'code'=>200,
		  'status'=>'success',
		  'arr'=> $arr['data']); //array de objetos
		  print_r(json_encode( $arr['data'])); 
   try {
     $mbd = new PDO('mysql:host=localhost;dbname=laravel2021', $usuario, $pass);
    foreach($mbd->query('SELECT * from reservas') as $fila) {
        print_r($fila);print_r('<br>');
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
} */
?>