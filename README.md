NetCommonsAppModel
===============

NetCommonsApp Model

CakePHPのModelクラスを継承してます。
#### Overrideしているメソッド
[__construct](#__construct)
[setDataSource](#setDataSource)
[create](#create)


* Class name: NetCommonsAppModel
* Namespace: 
* Parent class: Model





Properties
----------


### $__useDbConfig

    private array $__useDbConfig

use useDbConfig



* Visibility: **private**
* This property is **static**.


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


### __construct

    void NetCommonsAppModel::__construct(boolean|integer|string|array $id, string $table, string $ds)

Constructor. DataSourceの選択

接続先DBをランダムに選択します。

* Visibility: **public**


#### Arguments
* $id **boolean|integer|string|array** - &lt;p&gt;Set this ID for this model on startup,
can also be an array of options, see above.&lt;/p&gt;
* $table **string** - &lt;p&gt;Name of database table to use.&lt;/p&gt;
* $ds **string** - &lt;p&gt;DataSource connection name.&lt;/p&gt;



### setDataSource

    void NetCommonsAppModel::setDataSource(string $dataSource)

Sets the DataSource to which this model is bound.

データの書き込み時はMaterDBに対して行うため、接続先DBを変更しているが、<br>
Test実行時は唯一のDBに対して行うようにOverrideしています。

* Visibility: **public**


#### Arguments
* $dataSource **string** - &lt;p&gt;The name of the DataSource, as defined in app/Config/database.php&lt;/p&gt;



### create

    array NetCommonsAppModel::create(boolean|array $data, boolean $filterKey)

Initializes the model for writing a new record, loading the default values
for those fields that are not defined in $data, and clearing previous validation errors.

Especially helpful for saving data in loops.

NetCommonsで使用する共通の値がセットされた結果を返します。<br>
CakePHPのSchemaは、not null指定されたカラムのdefaultがnullになっているため、<br>
''(長さ0の文字列)に書き換えています。

* Visibility: **public**


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


#### Arguments
* $data **boolean|array** - &lt;p&gt;Optional data array to assign to the model after it is created. If null or false,
  schema data defaults are not merged.&lt;/p&gt;
* $filterKey **boolean** - &lt;p&gt;If true, overwrites any primary key input with an empty value&lt;/p&gt;



### begin

    void NetCommonsAppModel::begin()

transaction begin



* Visibility: **public**




### commit

    void NetCommonsAppModel::commit()

transaction commit



* Visibility: **public**




### rollback

    void NetCommonsAppModel::rollback(mixed $ex)

transaction rollback



* Visibility: **public**


#### Arguments
* $ex **mixed** - &lt;p&gt;Exception&lt;/p&gt;



### loadModels

    void NetCommonsAppModel::loadModels(array $models, string $source)

Load models



* Visibility: **public**


#### Arguments
* $models **array** - &lt;p&gt;models to load&lt;/p&gt;
* $source **string** - &lt;p&gt;data source&lt;/p&gt;



### equalToField

    boolean NetCommonsAppModel::equalToField(array $field1, string $field2)

Check field1 matches field2



* Visibility: **public**


#### Arguments
* $field1 **array** - &lt;p&gt;field1 parameters&lt;/p&gt;
* $field2 **string** - &lt;p&gt;field2 key&lt;/p&gt;



### _getDefaultValue

    array NetCommonsAppModel::_getDefaultValue(array $data)

全カラムのデフォルト値をセットした配列を返す。



* Visibility: **protected**


#### Arguments
* $data **array** - &lt;p&gt;デフォルトを上書きするカラム配列&lt;/p&gt;



### _getCurrentValue

    array NetCommonsAppModel::_getCurrentValue()

Currentで取れる値を返す。



* Visibility: **protected**



