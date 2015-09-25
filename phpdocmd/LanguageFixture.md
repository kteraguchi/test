LanguageFixture
===============

Summary for LanguageFixture




* Class name: LanguageFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'primary'), 'code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'), 'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Display order.'), 'is_active' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'Visible from user or not.
Only user w/ administrator role can edit this flag whether it\'s true or false.'), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => null), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('id' => '1', 'code' => 'en', 'weight' => '1', 'is_active' => 1, 'created_user' => null, 'created' => '2014-07-03 05:00:39', 'modified_user' => null, 'modified' => '2014-07-03 05:00:39'), array('id' => '2', 'code' => 'ja', 'weight' => '2', 'is_active' => 1, 'created_user' => null, 'created' => '2014-07-03 05:00:39', 'modified_user' => null, 'modified' => '2014-07-03 05:00:39'))

Records



* Visibility: **public**



