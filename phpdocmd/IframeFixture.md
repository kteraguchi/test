IframeFixture
===============

IframeFixture




* Class name: IframeFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID | | | '), 'block_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'block id | ブロックID | blocks.id | '), 'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'iframe key | iframeキー | Hash値 | ', 'charset' => 'utf8'), 'url' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'iframe url | iframeに設定するURL | | ', 'charset' => 'utf8'), 'height' => array('type' => 'integer', 'null' => false, 'default' => '400', 'comment' => 'iframe height | iframeの高さ |  | '), 'display_scrollbar' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'display scrollbar, 1: display or 0: no display | スクロールバーの表示  1:表示する、0:表示しない |  | '), 'display_frame' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'display frame, 1: display or 0: no display | フレーム枠の表示  1:表示する、0:表示しない |  | '), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'created user | 作成者 | users.id | '), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created time | 作成日時 | | '), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'modified user | 更新者 | users.id | '), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified time | 更新日時 | | '), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('id' => '1', 'block_id' => '141', 'key' => 'iframe_1', 'url' => 'http://www.netcommons.org/', 'height' => '400', 'display_scrollbar' => true, 'display_frame' => true), array('id' => '2', 'block_id' => '142', 'key' => 'iframe_2', 'url' => 'http://www.netcommons.org/', 'height' => '400', 'display_scrollbar' => true, 'display_frame' => true), array('id' => '3', 'block_id' => '143', 'key' => 'iframe_3', 'url' => 'http://www.netcommons.org/', 'height' => '400', 'display_scrollbar' => true, 'display_frame' => true))

Records



* Visibility: **public**



