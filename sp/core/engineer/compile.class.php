<?php 
	class templateClass{ 
		public function __construct(){ 

		}

		public function compileFile($compileFile,$templateFile){ 
			file_put_contents($compileFile, file_get_contents($templateFile));
		}
	}
 ?>