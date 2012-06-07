<?php
/* Clipps Test cases generated on: 2011-09-05 15:07:53 : 1315235273*/
App::import('Controller', 'Clipps');

class TestClippsController extends ClippsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ClippsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.clipp', 'app.evaluation', 'app.status', 'app.customer', 'app.publisher_type', 'app.publisher', 'app.section', 'app.subject', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->Clipps =& new TestClippsController();
		$this->Clipps->constructClasses();
	}

	function endTest() {
		unset($this->Clipps);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>