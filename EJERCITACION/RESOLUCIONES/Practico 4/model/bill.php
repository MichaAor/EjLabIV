<?php 
namespace model;

	class Bill{
		private $date;
		private $type;
		private $number;

		function __construct($date, $type, $number){
			$this->date = $date;
			$this->type = $type;
			$this->number = $number;
		}
		public function getDate(){
			return $this->date;
		}
		public function getType(){
			return $this->type;
		}
		public function getNumber(){
			return $this->number;
		}
		public function setDate($date){
			$this->date = $date;
		}
		public function setType($type){
			$this->type = $type;
		}
		public function setNumber($number){
			$this->number = $number;
		}
	}
 ?>