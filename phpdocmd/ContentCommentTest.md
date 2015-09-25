ContentCommentTest
===============

ContentComment Test Case




* Class name: ContentCommentTest
* Namespace: 
* Parent class: [ContentCommentAppTest](ContentCommentAppTest.md)





Properties
----------


### $fixtures

    public array $fixtures = array('plugin.content_comments.content_comment', 'plugin.content_comments.fake_model')

Fixtures



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


### testFindById

    void ContentCommentTest::testFindById()

testFindById



* Visibility: **public**




### testGetContentComments

    void ContentCommentTest::testGetContentComments()

コンテンツコメント データ取得テスト 1件あり



* Visibility: **public**




### testSaveContentCommentAdd

    void ContentCommentTest::testSaveContentCommentAdd()

コンテンツコメントのデータ保存 登録テスト



* Visibility: **public**




### testSaveContentCommentEdit

    void ContentCommentTest::testSaveContentCommentEdit()

コンテンツコメントのデータ保存 編集テスト



* Visibility: **public**




### testSaveContentCommentApproved

    void ContentCommentTest::testSaveContentCommentApproved()

コンテンツコメントのデータ保存 承認テスト
コメントを含まないで登録



* Visibility: **public**




### testDeleteContentComment

    void ContentCommentTest::testDeleteContentComment()

コンテンツコメント データ削除テスト



* Visibility: **public**




### testDeleteContentCommentNoId

    void ContentCommentTest::testDeleteContentCommentNoId()

コンテンツコメント データ削除 IDなしテスト



* Visibility: **public**




### setUp

    void ContentCommentAppTest::setUp()

setUp method



* Visibility: **public**
* This method is defined by [ContentCommentAppTest](ContentCommentAppTest.md)




### tearDown

    void ContentCommentAppTest::tearDown()

tearDown method



* Visibility: **public**
* This method is defined by [ContentCommentAppTest](ContentCommentAppTest.md)




### testIndex

    void ContentCommentAppTest::testIndex()

testIndex method



* Visibility: **public**
* This method is defined by [ContentCommentAppTest](ContentCommentAppTest.md)




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

