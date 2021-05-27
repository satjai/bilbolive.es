<?php include("./Models/model.php");

class IndexController{
	
	public function display(){    
		$obj = new stdClass();
		$obj->ID = 1; $obj->CODE = 'es'; 
		$class = new Model();
		$stmt = $class->display($obj); 
		
		 // print_r(json_encode($data));
		 
 require_once('./Views/'.$class->view('Display').'View.php');
	 $class->desconn(); $stmt = null; 
	 return $stmt;
	}
	
/********************
 $data[]=  echo json_encode($data, JSON_FORCE_OBJECT);
  while($row  = $stmt->fetch()){ 
		 print_r($row);
		  }
**********************/	
	
	
	public function page(){  
		$class = new Model(); 
 	    $requestJSON = $class->page($_POST); 
 	    require_once('./Views/'.$class->view('Page').'View.php'); 
 	    return;
	 
	}


	public function bound(){
		$obj = new stdClass();
		$obj->ID = 1; $obj->CODE = 'es'; 
		$class = new Model();
		$stmt = $class->bound($obj);
	 require_once('./Views/'.$class->view('Bound').'View.php');
	 $class->desconn(); $stmt = null;
	  
	 return;
	 
	}
	public function norma(){
		 
		$class = new Model(); 
	   require_once('./Views/'.$class->view('Norma').'View.php');
	 
	  
	 return;
	 
	}
}
?>