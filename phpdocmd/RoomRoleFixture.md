RoomRoleFixture
===============

RoomRoleFixture




* Class name: RoomRoleFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'), 'role_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'), 'level' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => '下位レベルに与えた権限を上位に与える時に使用。大きいほうが上位。'), 'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Display order'), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('id' => '1', 'role_key' => 'room_administrator', 'level' => '2147483647', 'weight' => '1'), array('id' => '2', 'role_key' => 'chief_editor', 'level' => '8000', 'weight' => '2'), array('id' => '3', 'role_key' => 'editor', 'level' => '7000', 'weight' => '3'), array('id' => '4', 'role_key' => 'general_user', 'level' => '6000', 'weight' => '4'), array('id' => '5', 'role_key' => 'visitor', 'level' => '1000', 'weight' => '5'))

Records



* Visibility: **public**



