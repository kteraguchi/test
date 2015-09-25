Frame4blogsFixture
===============

Class Frame4BlogFixture




* Class name: Frame4blogsFixture
* Namespace: 
* Parent class: [FrameFixture](FrameFixture.md)





Properties
----------


### $name

    public string $name = 'Frame'

モデル名



* Visibility: **public**


### $records

    public array $records = array(array('id' => 1, 'language_id' => 2, 'room_id' => 1, 'box_id' => 3, 'plugin_key' => 'online_statuses', 'block_id' => 1, 'key' => 'frame_1', 'weight' => 1, 'is_published' => 1, 'from' => '2014-07-25 08:10:53', 'to' => '2014-07-25 08:10:53'), array('id' => 2, 'language_id' => 2, 'room_id' => 1, 'box_id' => 3, 'plugin_key' => 'online_statuses', 'block_id' => 2, 'key' => 'frame_2', 'weight' => 1, 'is_published' => 1, 'from' => '2014-07-25 08:10:53', 'to' => '2014-07-25 08:10:53'))

Records



* Visibility: **public**


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'), 'language_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6), 'room_id' => array('type' => 'integer', 'null' => false, 'default' => null), 'box_id' => array('type' => 'integer', 'null' => false, 'default' => null), 'plugin_key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'), 'block_id' => array('type' => 'integer', 'null' => true, 'default' => null), 'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Key of the frame.', 'charset' => 'utf8'), 'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Name of the frame.', 'charset' => 'utf8'), 'weight' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'Display order.'), 'is_published' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => '一般以下のパートが閲覧可能かどうか。

ルーム配下ならルーム管理者、またはそれに準ずるユーザ(room_parts.edit_page, room_parts.create_page 双方が true のユーザ)はこの値に関わらず閲覧できる。
e.g.) ルーム管理者、またはそれに準ずるユーザ: ルーム管理者、編集長'), 'from' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Datetime display frame from.'), 'to' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'Datetime display frame to.'), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => null), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


