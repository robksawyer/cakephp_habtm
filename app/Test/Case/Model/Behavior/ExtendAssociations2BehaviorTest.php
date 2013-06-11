<?php 

App::uses('Model', 'Model');
App::uses('CakeRequest', 'Network');
App::uses('CakeResponse', 'Network');
App::uses('BehaviorCollection', 'Model');
App::uses('ExtendAssociations2Behavior', 'Model/Behavior');

// A fake controller to test against
class TestHATBMModel extends Model {
	public $paginate = null;
}

class ExtendAssociations2BehaviorTest extends CakeTestCase {
	public $ExtendAssociations2Behavior = null;
	public $Model = null;

	public function setUp() {
		parent::setUp();
		// Setup our behavior and fake test model
		$Collection = new BehaviorCollection();
		$this->ExtendAssociations2Behavior = new ExtendAssociations2Behavior($Collection);
		$CakeRequest = new CakeRequest();
		$CakeResponse = new CakeResponse();
		$this->Model = new TestExtendAssociations2Model($CakeRequest, $CakeResponse);
		$this->ExtendAssociations2Behavior->startup($this->Model);
	}

	public function testHABTMAdd() {
		
	}

	public function tearDown() {
		parent::tearDown();
		// Clean up after we're done
		unset($this->ExtendAssociations2Behavior);
		unset($this->Model);
	}
}

?>