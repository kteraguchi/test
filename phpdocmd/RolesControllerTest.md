RolesControllerTest
===============

RolesController Test Case




* Class name: RolesControllerTest
* Namespace: 
* Parent class: ControllerTestCase





Properties
----------


### $fixtures

    public array $fixtures = array('app.Session', 'plugin.net_commons.site_setting', 'plugin.pages.page', 'plugin.roles.role', 'plugin.users.user')

Fixtures



* Visibility: **public**


### $roles

    public array $roles = array('system_administrator' => array('id' => 1, 'username' => 'admin', 'password' => 'admin', 'role_key' => 'system_administrator'), 'chief_editor' => array('id' => 2, 'username' => 'chief_editor', 'password' => 'chief_editor', 'role_key' => 'chief_editor'), 'editor' => array('id' => 3, 'username' => 'editor', 'password' => 'editor', 'role_key' => 'editor'), 'general_user' => array('id' => 4, 'username' => 'general_user', 'password' => 'general_user', 'role_key' => 'general_user'), 'visitor' => array('id' => 5, 'username' => 'visitor', 'password' => 'visitor', 'role_key' => 'visitor'))

Roles data for testing



* Visibility: **public**
* This property is **static**.


Methods
-------


### setUp

    void RolesControllerTest::setUp()

setUp



* Visibility: **public**




### tearDown

    void RolesControllerTest::tearDown()

tearDown method



* Visibility: **public**




### testIndex

    void RolesControllerTest::testIndex()

index



* Visibility: **public**




### login

    void RolesControllerTest::login(\CakeTestCase $test, string $role)

Login as given roles



* Visibility: **public**
* This method is **static**.


#### Arguments
* $test **CakeTestCase** - &lt;p&gt;CakeTestCase instance&lt;/p&gt;
* $role **string** - &lt;p&gt;role key&lt;/p&gt;


