BlogFrameSetting
===============

Summary for BlogFrameSetting Model

Add your application-wide methods in the class below, your models
will inherit them.


* Class name: BlogFrameSetting
* Namespace: 
* Parent class: [BlogsAppModel](BlogsAppModel.md)





Properties
----------


### $_newRecord

    protected null $_newRecord = null





* Visibility: **protected**


### $actsAs

    public array $actsAs = array('NetCommons.Trackable')

use behaviors



* Visibility: **public**


### $validate

    public array $validate = array()

Validation rules



* Visibility: **public**


Methods
-------


### getSettingByFrameKey

    mixed BlogFrameSetting::getSettingByFrameKey(string $frameKey)

フレームキーからフレーム設定を返す



* Visibility: **public**


#### Arguments
* $frameKey **string** - &lt;p&gt;フレームキー&lt;/p&gt;



### beforeValidate

    boolean BlogsAppModel::beforeValidate(array $options)

バリデートメッセージ多言語化対応のためのラップ



* Visibility: **public**
* This method is defined by [BlogsAppModel](BlogsAppModel.md)


#### Arguments
* $options **array** - &lt;p&gt;options&lt;/p&gt;



### saveBlogFrameSetting

    mixed BlogFrameSetting::saveBlogFrameSetting(array $data)

save blog



* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;received post data&lt;/p&gt;



### validateBlogFrameSetting

    boolean BlogFrameSetting::validateBlogFrameSetting(array $data)

validate blog_frame_setting



* Visibility: **public**


#### Arguments
* $data **array** - &lt;p&gt;received post data&lt;/p&gt;



### getDisplayNumberOptions

    array BlogFrameSetting::getDisplayNumberOptions()

getDisplayNumberOptions



* Visibility: **public**
* This method is **static**.




### getNew

    array BlogsAppModel::getNew()

プラリマリキーを除いた新規レコード配列を返す
ex) array('ModelName' => array('filedName' => default, .

..));

* Visibility: **public**
* This method is defined by [BlogsAppModel](BlogsAppModel.md)




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



### _getValidateSpecification

    array BlogsAppModel::_getValidateSpecification()

バリデート仕様を返す（継承した各モデルで実装）



* Visibility: **protected**
* This method is defined by [BlogsAppModel](BlogsAppModel.md)




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

