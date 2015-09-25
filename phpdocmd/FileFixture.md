FileFixture
===============

FileFixture




* Class name: FileFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID |  |  | '), 'name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'comment' => 'file name | ファイル名 |  | ', 'charset' => 'utf8', 'after' => 'id'), 'original_name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'comment' => 'original file name | オリジナルファイル名 |  | ', 'charset' => 'utf8', 'after' => 'name'), 'slug' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'comment' => 'slug | 固定リンク(デフォルト:アップロードID + 拡張子) |  | ', 'charset' => 'utf8', 'after' => 'name'), 'extension' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'comment' => 'extension | 拡張子 |  | ', 'charset' => 'utf8', 'after' => 'path'), 'path' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'comment' => 'path | パス |  | ', 'charset' => 'utf8', 'after' => 'slug'), 'mimetype' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'comment' => 'mimetype | MIMEタイプ |  | ', 'charset' => 'utf8', 'after' => 'extension'), 'size' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'file size | ファイルサイズ |  | ', 'after' => 'mimetype'), 'alt' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'alt | 代替テキスト |  | ', 'charset' => 'utf8', 'after' => 'size'), 'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'description | 説明 |  | ', 'charset' => 'utf8', 'after' => 'alt'), 'role_type' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'role type | ロールタイプ | | e.g.) room_file_role, user_file_role, registoration_file_role', 'charset' => 'utf8', 'after' => 'description'), 'download_password' => array('type' => 'string', 'null' => true, 'collate' => 'utf8_general_ci', 'comment' => 'download password | ダウンロードパスワード |  | ', 'charset' => 'utf8', 'after' => 'number_of_downloads'), 'status' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'status | ステータス | 0:未確定, 1:公開中, 2:利用中止 | ', 'after' => 'download_password'), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'created user | 作成者 | users.id | '), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created datetime | 作成日時 |  | '), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'modified user | 更新者 | users.id | '), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified datetime | 更新日時 |  | '), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('id' => 1, 'name' => 'video1.mp4', 'original_name' => 'video1', 'slug' => 'video1', 'extension' => 'mp4', 'path' => '{ROOT}', 'mimetype' => 'video/mp4', 'size' => 4544587, 'alt' => 'video1.mp4', 'description' => '', 'role_type' => 'room_file_role', 'status' => 1, 'created_user' => 1, 'created' => '2015-01-25 07:41:07', 'modified_user' => 1, 'modified' => '2015-01-25 07:41:07'), array('id' => 2, 'name' => 'thumbnail1.jpg', 'original_name' => 'thumbnail1', 'slug' => 'thumbnail1', 'extension' => 'jpg', 'path' => '{ROOT}', 'mimetype' => 'image/jpeg', 'size' => 3728, 'alt' => 'thumbnail1.jpg', 'description' => '', 'role_type' => 'room_file_role', 'status' => 1, 'created_user' => 1, 'created' => '2015-01-25 07:41:07', 'modified_user' => 1, 'modified' => '2015-01-25 07:41:07'), array('id' => 3, 'name' => 'video2.MOV', 'original_name' => 'video2', 'slug' => 'video2', 'extension' => 'MOV', 'path' => '{ROOT}', 'mimetype' => 'video/quicktime', 'size' => 3728, 'alt' => 'video2.MOV', 'description' => '', 'role_type' => 'room_file_role', 'status' => 1, 'created_user' => 1, 'created' => '2015-01-25 07:41:07', 'modified_user' => 1, 'modified' => '2015-01-25 07:41:07'))

Records



* Visibility: **public**


Methods
-------


### init

    void FileFixture::init()

Initialize the fixture.



* Visibility: **public**



