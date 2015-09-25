RoomRolePermissionFixture
===============

RoomRolePermissionFixture




* Class name: RoomRolePermissionFixture
* Namespace: 
* Parent class: CakeTestFixture





Properties
----------


### $fields

    public array $fields = array('id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'), 'roles_room_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'comment' => 'Role type
e.g.) roomRole, announcementBlockRole, bbsBlockRole
'), 'permission' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'Permission name
e.g.) createPage, editOtherContent, publishContent', 'charset' => 'utf8'), 'value' => array('type' => 'boolean', 'null' => true, 'default' => null), 'created_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'created' => array('type' => 'datetime', 'null' => true, 'default' => null), 'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false), 'modified' => array('type' => 'datetime', 'null' => true, 'default' => null), 'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)), 'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'))

Fields



* Visibility: **public**


### $records

    public array $records = array(array('roles_room_id' => '1', 'permission' => 'page_editable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'block_editable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'block_permission_editable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'content_readable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'content_creatable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'content_editable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'content_publishable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'content_comment_creatable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'content_comment_editable', 'value' => '1'), array('roles_room_id' => '1', 'permission' => 'content_comment_publishable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'page_editable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'block_editable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'block_permission_editable', 'value' => '0'), array('roles_room_id' => '2', 'permission' => 'content_readable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'content_creatable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'content_editable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'content_publishable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'content_comment_creatable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'content_comment_editable', 'value' => '1'), array('roles_room_id' => '2', 'permission' => 'content_comment_publishable', 'value' => '1'), array('roles_room_id' => '3', 'permission' => 'page_editable', 'value' => '0'), array('roles_room_id' => '3', 'permission' => 'block_editable', 'value' => '0'), array('roles_room_id' => '3', 'permission' => 'block_permission_editable', 'value' => '0'), array('roles_room_id' => '3', 'permission' => 'content_readable', 'value' => '1'), array('roles_room_id' => '3', 'permission' => 'content_creatable', 'value' => '1'), array('roles_room_id' => '3', 'permission' => 'content_editable', 'value' => '1'), array('roles_room_id' => '3', 'permission' => 'content_publishable', 'value' => '0'), array('roles_room_id' => '3', 'permission' => 'content_comment_creatable', 'value' => '1'), array('roles_room_id' => '3', 'permission' => 'content_comment_editable', 'value' => '1'), array('roles_room_id' => '3', 'permission' => 'content_comment_publishable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'page_editable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'block_editable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'block_permission_editable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'content_readable', 'value' => '1'), array('roles_room_id' => '4', 'permission' => 'content_creatable', 'value' => '1'), array('roles_room_id' => '4', 'permission' => 'content_editable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'content_publishable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'content_comment_creatable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'content_comment_editable', 'value' => '0'), array('roles_room_id' => '4', 'permission' => 'content_comment_publishable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'page_editable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'block_editable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'block_permission_editable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'content_readable', 'value' => '1'), array('roles_room_id' => '5', 'permission' => 'content_creatable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'content_editable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'content_publishable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'content_comment_creatable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'content_comment_editable', 'value' => '0'), array('roles_room_id' => '5', 'permission' => 'content_comment_publishable', 'value' => '0'))

Records



* Visibility: **public**



