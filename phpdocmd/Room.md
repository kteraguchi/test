Room
===============

Room Model

Add your application-wide methods in the class below, your models
will inherit them.


* Class name: Room
* Namespace: 
* Parent class: [RoomsAppModel](RoomsAppModel.md)



Constants
----------


### PUBLIC_PARENT_ID

    const PUBLIC_PARENT_ID = '1'





### PRIVATE_PARENT_ID

    const PRIVATE_PARENT_ID = '2'





### ROOM_PARENT_ID

    const ROOM_PARENT_ID = '3'





Properties
----------


### $actsAs

    public array $actsAs = array('NetCommons.Trackable')

use behaviors



* Visibility: **public**


### $belongsTo

    public array $belongsTo = array('Space' => array('className' => 'Rooms.Space', 'foreignKey' => 'space_id', 'conditions' => '', 'fields' => '', 'order' => ''), 'ParentRoom' => array('className' => 'Rooms.Room', 'foreignKey' => 'parent_id', 'conditions' => '', 'fields' => '', 'order' => ''))

belongsTo associations



* Visibility: **public**


### $hasMany

    public array $hasMany = array('ChildRoom' => array('className' => 'Rooms.Room', 'foreignKey' => 'parent_id', 'dependent' => false, 'conditions' => '', 'fields' => '', 'order' => '', 'limit' => '', 'offset' => '', 'exclusive' => '', 'finderQuery' => '', 'counterQuery' => ''), 'RoomsLanguage' => array('className' => 'Rooms.RoomsLanguage', 'foreignKey' => 'room_id', 'dependent' => false, 'conditions' => '', 'fields' => '', 'order' => '', 'limit' => '', 'offset' => '', 'exclusive' => '', 'finderQuery' => '', 'counterQuery' => ''))

hasMany associations



* Visibility: **public**


### $hasAndBelongsToMany

    public array $hasAndBelongsToMany = array('Language' => array('className' => 'M17n.Language', 'joinTable' => 'rooms_languages', 'foreignKey' => 'room_id', 'associationForeignKey' => 'language_id', 'unique' => 'keepExisting', 'conditions' => '', 'fields' => '', 'order' => '', 'limit' => '', 'offset' => '', 'finderQuery' => ''))

hasAndBelongsToMany associations



* Visibility: **public**


### $validate

    public array $validate = array()

Validation rules



* Visibility: **public**


Methods
-------


### saveRoom

    boolean Room::saveRoom(array $data, boolean $created)

Save Room



* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;received post data&lt;/p&gt;
* $created **boolean** - &lt;p&gt;True is created(add action), false is updated(edit action)&lt;/p&gt;



### validateRoom

    boolean Room::validateRoom(array $data)

validate of Room



* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;received post data&lt;/p&gt;



### deleteRoom

    boolean Room::deleteRoom(array $data)

Save Room



* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;received post data&lt;/p&gt;



### getReadableRooms

    array Room::getReadableRooms(array $conditions)

Return readable rooms



* Visibility: **public**


#### Arguments
* $conditions **array** - &lt;p&gt;conditions.&lt;/p&gt;



### __construct

    void NetCommonsAppModel::__construct(boolean|integer|string|array $id, string $table, string $ds)

Constructor. Binds the model's database table to the object.



* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)


#### Arguments
* $id **boolean|integer|string|array** - &lt;p&gt;Set this ID for this model on startup,
can also be an array of options, see above.&lt;/p&gt;
* $table **string** - &lt;p&gt;Name of database table to use.&lt;/p&gt;
* $ds **string** - &lt;p&gt;DataSource connection name.&lt;/p&gt;



### setDataSource

    void NetCommonsAppModel::setDataSource(string $dataSource)

Sets the DataSource to which this model is bound.



* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)


#### Arguments
* $dataSource **string** - &lt;p&gt;The name of the DataSource, as defined in app/Config/database.php&lt;/p&gt;



### create

    array NetCommonsAppModel::create(boolean|array $data, boolean $filterKey)

Initializes the model for writing a new record, loading the default values
for those fields that are not defined in $data, and clearing previous validation errors.

Especially helpful for saving data in loops.

* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)


#### Arguments
* $data **boolean|array** - &lt;p&gt;Optional data array to assign to the model after it is created. If null or false,
  schema data defaults are not merged.&lt;/p&gt;
* $filterKey **boolean** - &lt;p&gt;If true, overwrites any primary key input with an empty value&lt;/p&gt;



### createAll

    array NetCommonsAppModel::createAll(boolean|array $data, boolean $filterKey)

Initializes the model for writing a new record, loading the default values
for those fields that are not defined in $data, and clearing previous validation errors.

Especially helpful for saving data in loops.

* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)


#### Arguments
* $data **boolean|array** - &lt;p&gt;Optional data array to assign to the model after it is created. If null or false,
  schema data defaults are not merged.&lt;/p&gt;
* $filterKey **boolean** - &lt;p&gt;If true, overwrites any primary key input with an empty value&lt;/p&gt;



### begin

    void NetCommonsAppModel::begin()

transaction begin



* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)




### commit

    void NetCommonsAppModel::commit()

transaction commit



* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)




### rollback

    void NetCommonsAppModel::rollback(mixed $ex)

transaction rollback



* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)


#### Arguments
* $ex **mixed** - &lt;p&gt;Exception&lt;/p&gt;



### loadModels

    void NetCommonsAppModel::loadModels(array $models, string $source)

Load models



* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)


#### Arguments
* $models **array** - &lt;p&gt;models to load&lt;/p&gt;
* $source **string** - &lt;p&gt;data source&lt;/p&gt;



### equalToField

    boolean NetCommonsAppModel::equalToField(array $field1, string $field2)

Check field1 matches field2



* Visibility: **public**
* This method is defined by [NetCommonsAppModel](NetCommonsAppModel.md)


#### Arguments
* $field1 **array** - &lt;p&gt;field1 parameters&lt;/p&gt;
* $field2 **string** - &lt;p&gt;field2 key&lt;/p&gt;


