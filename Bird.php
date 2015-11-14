<?php  

	class Bird
	{

		protected $animalType = "flying_animal";

		public function fly()
		{
			$this->prepareFly();
			return "Bird is flying";
		}

		protected function prepareFly()
		{
			// preapre something before flying
		}

		public function attack()
		{
			return "Attack with bird";
		}

	}
?>