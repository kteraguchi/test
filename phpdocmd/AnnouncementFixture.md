AnnouncementFixture
===============

AnnouncementFixture




* Class name: AnnouncementFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'ID |  |  | '), 'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false), 'block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false), 'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'announcement content key | お知らせコンテンツキー | Hash値 | ', 'charset' => 'utf8'), 'status' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false, 'comment' => 'public status, 1: public, 2: public pending, 3: draft during 4: remand | 公開状況  1:公開中、2:公開申請中、3:下書き中、4:差し戻し |  | '), 'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'Is active, 0:deactive 1:acive | アクティブなコンテンツかどうか 0:アクティブでない 1:アクティブ | | '), 'is_latest' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'Is latest, 0:not latest 1:latest | 最新コンテンツかどうか 0:最新でない 1:最新 | |'), 'content' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'content | コンテンツ |  | ', 'charset' => 'utf8'), 'is_first_auto_translation' => array('type' => 'boolean', 'null' => false, 'default' => null), 'is_auto_translated' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => 'translation type. 0:original , 1:auto translation | 翻訳タイプ  0:オリジナル、1:自動翻訳 |  | '), 'translation_engine' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'translation engine | 翻訳エンジン |  | ', 'charset' => 'utf8'), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false, 'comment' => 'created user | 作成者 | users.id | '), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created datetime | 作成日時 |  | '), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false, 'comment' => 'modified user | 更新者 | users.id | '), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified datetime | 更新日時 |  | '), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('id' => '1', 'language_id' => '2', 'block_id' => '1', 'key' => 'announcement_1', 'status' => '1', 'is_active' => '1', 'is_latest' => '0', 'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.', 'is_auto_translated' => true, 'translation_engine' => 'Lorem ipsum dolor sit amet', 'created_user' => '1', 'created' => '2014-10-09 16:07:57', 'modified_user' => '1', 'modified' => '2014-10-09 16:07:57'), array('id' => '2', 'language_id' => '2', 'block_id' => '1', 'key' => 'announcement_1', 'status' => '3', 'is_active' => '0', 'is_latest' => '1', 'content' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.', 'is_auto_translated' => true, 'translation_engine' => 'Lorem ipsum dolor sit amet', 'created_user' => '1', 'created' => '2014-10-09 16:07:57', 'modified_user' => '1', 'modified' => '2014-10-09 16:07:57'), array('id' => '3', 'language_id' => '2', 'block_id' => '2', 'key' => 'announcement_11', 'status' => '1', 'is_active' => '1', 'is_latest' => '0', 'content' => 'Content 11', 'is_auto_translated' => true, 'translation_engine' => 'Lorem ipsum dolor sit amet', 'created_user' => '1', 'created' => '2014-10-09 16:07:57', 'modified_user' => '1', 'modified' => '2014-10-09 16:07:57'), array('id' => '4', 'language_id' => '2', 'block_id' => '4', 'key' => 'announcement_12', 'status' => '2', 'is_active' => '0', 'is_latest' => '1', 'content' => 'Content 12', 'is_auto_translated' => true, 'translation_engine' => 'Lorem ipsum dolor sit amet', 'created_user' => '1', 'created' => '2014-10-09 16:07:57', 'modified_user' => '1', 'modified' => '2014-10-09 16:07:57'))

Records



* Visibility: **public**



