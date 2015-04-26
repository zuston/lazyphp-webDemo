<?php 
	/**
	* 		
	*/
	class templateClass 
	{
		private $arrayConfig=array(
			'suffix_template'=>'.htm'，
			'templateDir'=>'view/layout/web/',
			'compileDir'=>'cache/',	
			);
		private $compileObj;
		public function __construct(argument)
		{
			# code...
			#
			if(is_dir($this->arrayConfig['compileDir'])){ 
				mkdir($this->arrayConfig['compileDir']);
			}
			if(is_dir($this->arrayConfig['templateDir'])){ 
				exit('can not find the template file');
			}
			included_once('compile.class.php');
			$this->compileObj=new compileClass();
		}

		public  function tplToCompile(){ 

		}
	}
 ?>