<?php
/* Evaluation Test cases generated on: 2011-09-05 15:02:46 : 1315234966*/
App::import('Model', 'Evaluation');

class EvaluationTestCase extends CakeTestCase {
	var $fixtures = array('app.evaluation', 'app.clipp', 'app.status', 'app.customer', 'app.publisher_type', 'app.publisher', 'app.section', 'app.subject');

	function startTest() {
		$this->Evaluation =& ClassRegistry::init('Evaluation');
	}

	function endTest() {
		unset($this->Evaluation);
		ClassRegistry::flush();
	}

}
?>