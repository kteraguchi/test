LinkOrderFixture
===============

LinkOrder Fixture




* Class name: LinkOrderFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'ID |  |  | '), 'block_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'block key | ブロックKey | blocks.key | ', 'charset' => 'utf8'), 'category_key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'category key | カテゴリKey | categories.key | ', 'charset' => 'utf8'), 'link_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'link key | リンクKey | links.key | ', 'charset' => 'utf8'), 'weight' => array('type' => 'integer', 'null' => false, 'default' => '0', 'comment' => 'The weight of the display(display order) | 表示の重み(表示順序) |  | '), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'created user | 作成者 | users.id | '), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created datetime | 作成日時 |  | '), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'comment' => 'modified user | 更新者 | users.id | '), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified datetime | 更新日時 |  | '), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('id' => 1, 'block_key' => 'Lorem ipsum dolor sit amet', 'category_key' => 'Lorem ipsum dolor sit amet', 'link_key' => 'Lorem ipsum dolor sit amet', 'weight' => 1, 'created_user' => 1, 'created' => '2015-05-01 07:17:55', 'modified_user' => 1, 'modified' => '2015-05-01 07:17:55'))

Records



* Visibility: **public**



