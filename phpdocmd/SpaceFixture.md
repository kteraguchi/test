SpaceFixture
===============

SpaceFixture




* Class name: SpaceFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'), 'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'lft' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'rght' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'type' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'comment' => 'Type of the space.   1: Whole site, 2: Public space, 3: Private space, 4: Room space'), 'plugin_key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'), 'default_setting_action' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('id' => '1', 'parent_id' => null, 'lft' => '1', 'rght' => '8', 'type' => '1', 'plugin_key' => null, 'default_setting_action' => null), array('id' => '2', 'parent_id' => '1', 'lft' => '2', 'rght' => '3', 'type' => '2', 'plugin_key' => 'public_space', 'default_setting_action' => 'rooms/index/2'), array('id' => '3', 'parent_id' => '1', 'lft' => '4', 'rght' => '5', 'type' => '3', 'plugin_key' => 'private_space', 'default_setting_action' => 'rooms/edit/2'), array('id' => '4', 'parent_id' => '1', 'lft' => '6', 'rght' => '7', 'type' => '4', 'plugin_key' => 'room_space', 'default_setting_action' => 'rooms/index/4'))

Records



* Visibility: **public**



