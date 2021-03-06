VideoValidationEditSaveVideoTest
===============

VideoValidationEditSaveVideoTest Case




* Class name: VideoValidationEditSaveVideoTest
* Namespace: 
* Parent class: [VideoValidationTestBase](VideoValidationTestBase.md)





Properties
----------


### $components

    public array $components = array('NetCommons.NetCommonsBlock')

use component



* Visibility: **public**


### $fixtures

    public array $fixtures = array('plugin.comments.comment', 'plugin.content_comments.content_comment', 'plugin.files.files_plugin', 'plugin.files.files_room', 'plugin.files.files_user', 'plugin.likes.like', 'plugin.tags.tag', 'plugin.tags.tags_content', 'plugin.videos.file', 'plugin.videos.video', 'plugin.videos.video_block_setting', 'plugin.videos.video_frame_setting', 'plugin.videos.video_view_log')

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


### $Block

    public \Block $Block





* Visibility: **public**
* This property is defined by [VideoTestBase](VideoTestBase.md)


### $FileModel

    public \FileModel $FileModel





* Visibility: **public**
* This property is defined by [VideoTestBase](VideoTestBase.md)


### $NetCommonsBlock

    public \NetCommonsBlockComponent $NetCommonsBlock





* Visibility: **public**
* This property is defined by [VideoTestBase](VideoTestBase.md)


### $Video

    public \Video $Video





* Visibility: **public**
* This property is defined by [VideoTestBase](VideoTestBase.md)


### $VideoBlockSetting

    public \VideoBlockSetting $VideoBlockSetting





* Visibility: **public**
* This property is defined by [VideoTestBase](VideoTestBase.md)


### $VideoFrameSetting

    public \VideoFrameSetting $VideoFrameSetting





* Visibility: **public**
* This property is defined by [VideoTestBase](VideoTestBase.md)


### $VideoViewLog

    public \VideoViewLog $VideoViewLog





* Visibility: **public**
* This property is defined by [VideoTestBase](VideoTestBase.md)


Methods
-------


### testEditSaveVideoValidationErrors

    void VideoValidationEditSaveVideoTest::testEditSaveVideoValidationErrors()

編集Videoデータ保存 リデーションエラー戻り値テスト
$data['Video']['title'] keyなしのため、エラー



* Visibility: **public**




### testEditSaveVideoValidateVideoFile

    void VideoValidationEditSaveVideoTest::testEditSaveVideoValidateVideoFile()

編集Videoデータ保存 validateVideoFile サムネイル エラー戻り値テスト
$data['thumbnail']['File']['role_type'] = null のため、エラー



* Visibility: **public**




### testEditSaveVideoValidateByStatus

    void VideoValidationEditSaveVideoTest::testEditSaveVideoValidateByStatus()

編集Videoデータ保存 validateByStatus テスト
$data['Comment']['comment'] = null のため、エラー



* Visibility: **public**




### testEditSaveVideoTitleRequired

    void VideoValidationEditSaveVideoTest::testEditSaveVideoTitleRequired()

編集Videoデータ保存 title required エラー
$data['Video']['title'] keyなしのため、エラー



* Visibility: **public**




### testEditSaveVideoTitleNotEmpty

    void VideoValidationEditSaveVideoTest::testEditSaveVideoTitleNotEmpty()

編集Videoデータ保存 title notEmpty エラー
$data['Video']['title'] = nullのため、エラー



* Visibility: **public**




### testEditSaveVideoBlockIdRequired

    void VideoValidationEditSaveVideoTest::testEditSaveVideoBlockIdRequired()

編集Videoデータ保存 block_id required エラー
$data['Video']['block_id'] keyなしのため、エラー



* Visibility: **public**




### testEditSaveVideoBlockIdNumeric

    void VideoValidationEditSaveVideoTest::testEditSaveVideoBlockIdNumeric()

編集Videoデータ保存 block_id numeric エラー
$data['Video']['block_id'] = 数値以外のため、エラー



* Visibility: **public**




### testEditSaveVideoThumbnailExtension

    void VideoValidationEditSaveVideoTest::testEditSaveVideoThumbnailExtension()

編集Videoデータ保存 thumbnail extension エラー
アップロードしたファイルが Video::THUMBNAIL_EXTENSION 以外の拡張子のため、エラー



* Visibility: **public**




### testEditSaveVideoThumbnailMimeType

    void VideoValidationEditSaveVideoTest::testEditSaveVideoThumbnailMimeType()

編集Videoデータ保存 thumbnail mimeType エラー
アップロードしたファイルが Video::THUMBNAIL_MIME_TYPE 以外の mimetype のため、エラー



* Visibility: **public**




### _readyTestSaveVideoData

    array VideoValidationTestBase::_readyTestSaveVideoData(integer $roomId, integer $contentsId, string $fileName)

テスト saveVideo data準備



* Visibility: **protected**
* This method is defined by [VideoValidationTestBase](VideoValidationTestBase.md)


#### Arguments
* $roomId **integer** - &lt;p&gt;ルームID&lt;/p&gt;
* $contentsId **integer** - &lt;p&gt;コンテンツID&lt;/p&gt;
* $fileName **string** - &lt;p&gt;ファイル名&lt;/p&gt;



### _readyVideoMock

    \Model VideoValidationTestBase::_readyVideoMock()

Video modelモック準備



* Visibility: **protected**
* This method is defined by [VideoValidationTestBase](VideoValidationTestBase.md)




### setUp

    void VideoTestBase::setUp()

setUp method



* Visibility: **public**
* This method is defined by [VideoTestBase](VideoTestBase.md)




### tearDown

    void VideoTestBase::tearDown()

tearDown method



* Visibility: **public**
* This method is defined by [VideoTestBase](VideoTestBase.md)




### _readyTestFile

    string VideoTestBase::_readyTestFile(integer $contentsId, integer $roomId, string $fileName)

テストファイル準備



* Visibility: **protected**
* This method is defined by [VideoTestBase](VideoTestBase.md)


#### Arguments
* $contentsId **integer** - &lt;p&gt;コンテンツID&lt;/p&gt;
* $roomId **integer** - &lt;p&gt;ルームID&lt;/p&gt;
* $fileName **string** - &lt;p&gt;ファイル名&lt;/p&gt;



### _deleteTestFile

    void VideoTestBase::_deleteTestFile()

テストファイル削除



* Visibility: **protected**
* This method is defined by [VideoTestBase](VideoTestBase.md)




### _getVideoBlockSettingTestData

    array VideoTestBase::_getVideoBlockSettingTestData()

saveVideoBlockSetting で保存する $data 取得



* Visibility: **protected**
* This method is defined by [VideoTestBase](VideoTestBase.md)




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


