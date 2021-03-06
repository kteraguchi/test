CategoriesComponentInitCategoriesTest
===============

Test of CategoriesComponent-&gt;initCategories()




* Class name: CategoriesComponentInitCategoriesTest
* Namespace: 
* Parent class: [CategoriesComponentTestBase](CategoriesComponentTestBase.md)





Properties
----------


### $fixtures

    public array $fixtures = array('plugin.categories.category', 'plugin.categories.category_order')

Fixtures



* Visibility: **public**


### $Categories

    public mixed $Categories = null

CategoriesComponent component



* Visibility: **public**


### $CategoryController

    public mixed $CategoryController = null

Controller of CategoriesComponent test



* Visibility: **public**


### $_isFixtureMerged

    protected array $_isFixtureMerged = true

Fixture merge



* Visibility: **protected**


### $_fixtures

    protected array $_fixtures = array('plugin.blocks.block', 'plugin.blocks.block_role_permission', 'plugin.boxes.box', 'plugin.boxes.boxes_page', 'plugin.containers.container', 'plugin.containers.containers_page', 'plugin.frames.frame', 'plugin.m17n.language', 'plugin.pages.page', 'plugin.plugin_manager.plugin', 'plugin.plugin_manager.plugins_role', 'plugin.roles.default_role_permission', 'plugin.roles.role', 'plugin.rooms.roles_room', 'plugin.rooms.roles_rooms_user', 'plugin.rooms.room', 'plugin.rooms.room_role', 'plugin.rooms.room_role_permission', 'plugin.users.user')

Fixtures



* Visibility: **protected**


Methods
-------


### setUp

    void CategoriesComponentTestBase::setUp()

setUp



* Visibility: **public**
* This method is defined by [CategoriesComponentTestBase](CategoriesComponentTestBase.md)




### test

    void CategoriesComponentInitCategoriesTest::test()

Expect to CategoriesComponent->initCategories()



* Visibility: **public**




### testHasEmpty

    void CategoriesComponentInitCategoriesTest::testHasEmpty()

Expect to CategoriesComponent->initCategories() by true on hasEmpty



* Visibility: **public**




### testAnotherRoomId

    void CategoriesComponentInitCategoriesTest::testAnotherRoomId()

Expect to CategoriesComponent->initCategories() by another roomId



* Visibility: **public**




### tearDown

    void CategoriesComponentTestBase::tearDown()

tearDown



* Visibility: **public**
* This method is defined by [CategoriesComponentTestBase](CategoriesComponentTestBase.md)




### _initCategoriesComponent

    void CategoriesComponentTestBase::_initCategoriesComponent(array $params)

Initialize of CategoriesComponent



* Visibility: **protected**
* This method is defined by [CategoriesComponentTestBase](CategoriesComponentTestBase.md)


#### Arguments
* $params **array** - &lt;p&gt;Set CakeRequest-&gt;params&lt;/p&gt;



### __construct

    void YACakeTestCase::__construct(string $name, array $data, string $dataName)

Fixtures load



* Visibility: **public**
* This method is defined by [YACakeTestCase](YACakeTestCase.md)


#### Arguments
* $name **string** - &lt;p&gt;The name parameter on PHPUnit_Framework_TestCase::__construct()&lt;/p&gt;
* $data **array** - &lt;p&gt;The date parameter on PHPUnit_Framework_TestCase::__construct()&lt;/p&gt;
* $dataName **string** - &lt;p&gt;The dataName parameter on PHPUnit_Framework_TestCase::__construct()&lt;/p&gt;



### loadTestPlugin

    void YACakeTestCase::loadTestPlugin(\CakeTestCase $test, string $plugin, string $testPlugin)

Load TestPlugin



* Visibility: **public**
* This method is **static**.
* This method is defined by [YACakeTestCase](YACakeTestCase.md)


#### Arguments
* $test **CakeTestCase** - &lt;p&gt;CakeTestCase&lt;/p&gt;
* $plugin **string** - &lt;p&gt;Plugin name&lt;/p&gt;
* $testPlugin **string** - &lt;p&gt;Test plugin name&lt;/p&gt;


