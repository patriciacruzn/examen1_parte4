<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Usuario_model extends CI_Model
	{
		public $variable;
		public function __construct()
		{
			parent::__construct();
		}
		public function datos(){
			$usuarios=array(
				'joseflores'=>'123456a',
				'belennina'=>'123456b',
				'leogomez'=>'123456c',
				'laurapaz'=>'123456c'
				);
			$retorno=[];
			for ($i= 0; $i <$usuarios.length; $i++) { 
				$retorno[$i]=$usuarios[$i];
			}
			retourn $retorno;

		}
		public function login($username,$password)
		{
			$this->db->where('login',$username);
			$this->db->where('clave',$password);
			$q=$this->db->get('usuario');
			if($q->num_rows()>0){
				return true;
			}
			else{
				return false;
			}
		}
	}


 ?>