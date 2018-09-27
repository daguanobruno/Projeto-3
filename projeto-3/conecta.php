<?php

	class Conecta{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $banco = "mydb";

		private $conecta = null;

		public function getInstance(){
			
			if($this->conecta != null) return $this->conecta;

			try{
				$this->conecta = new PDO(
					"mysql:host={$this->host};dbname={$this->banco}",
					$this->user,
					$this->pass
				);
				return $this->conecta;
			}catch(Exception $e){
				echo $e->getMessage();
			}finally{
				$this->conecta = null;
			}
		}
	}
?>