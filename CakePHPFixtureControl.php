class SampleTest extends CakeTestCase {
	public static $isFirst = true;

	public function setUp() {
		if (self::$isFirst) {
			$this->fixtures = array(
				'plugin.sampleA.sampleA',
				'plugin.sampleB.sampleB'
			);
			$this->fixtureManager->load($this);
			self::$isFirst = false;
			$this->fixtures = array();
		}

		parent::setUp();
	}
}

class Sample2Test extends CakeTestCase {
	public $autoFixtures = false;
	public static $isFirst = true;
	public $fixtures = array(
		'plugin.sampleA.sampleA',
		'plugin.sampleB.sampleB'
	);

	public function setUp() {
		if (self::$isFirst) {
			$this->autoFixtures = true;
			$this->fixtureManager->load($this);
			self::$isFirst = false;
		}
		$this->fixtures = array();

		parent::setUp();
	}
}


