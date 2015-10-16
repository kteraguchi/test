PermissionComponent
===============

Permission Component

リクエストされたController、もしくは、actionのアクセス許可を、<br>
Currentオブジェクトの権限から判定します。
チェックタイプと許可アクションリストを渡してください。

[チェックタイプ](#type)
[許可アクションリスト](#allow)


* Class name: PermissionComponent
* Namespace: 
* Parent class: Component



Constants
----------


### READABLE_PERMISSION

    const READABLE_PERMISSION = 'content_readable'





### CHECK_TYEP_GENERAL_PLUGIN

    const CHECK_TYEP_GENERAL_PLUGIN = 'general_plugin'





### CHECK_TYEP_CONTROL_PANEL

    const CHECK_TYEP_CONTROL_PANEL = 'control_panel'





### CHECK_TYEP_USER_PLUGIN

    const CHECK_TYEP_USER_PLUGIN = 'user_plugin'





### CHECK_TYEP_ROOM_PLUGIN

    const CHECK_TYEP_ROOM_PLUGIN = 'room_plugin'





### CHECK_TYEP_SYSTEM_PLUGIN

    const CHECK_TYEP_SYSTEM_PLUGIN = 'system_plugin'





Properties
----------


### $type

    public string $type = self::CHECK_TYEP_GENERAL_PLUGIN

チェックタイプ

* CHECK_TYEP_GENERAL_PLUGIN
ページに配置するプラグインの場合に使用します。（デフォルト）<br>
許可アクションリストに指定された権限から判定します。

* CHECK_TYEP_CONTROL_PANEL
コントロールパネルを表示する際に使用します。
コントロールパネルで動作するプラグインの有無で判定します。

* CHECK_TYEP_USER_PLUGIN
？？？

* CHECK_TYEP_ROOM_PLUGIN
？？？

* CHECK_TYEP_SYSTEM_PLUGIN
？？？
ユーザーが使用できるプラグインか否かで判定します。

* Visibility: **public**


### $allow

    public array $allow = array('index,view' => null)

許可アクションリスト

チェックタイプがCHECK_TYEP_GENERAL_PLUGINの場合に使用される判定リストです。
アクション名 => 権限名の形式で指定してください。
デフォルトでは、indexアクション、viewアクションを許可しています。
#### サンプルコード
##### Controller
```
public $components = array(
	'NetCommons.Permission' => array(
		'allow' => array(
			'add,edit,delete' => 'content_creatable',
			'reply' => 'content_comment_creatable',
			'approve' => 'content_comment_publishable',
		)
	)
)
```
アクション名に'＊'を指定するとコントローラ内すべてのアクションが対象になります。
#### サンプルコード
##### Controller
```
public $components = array(
	'NetCommons.Permission' => array(
		'allow' => array(
			'*' => 'content_creatable'
		)
	)
)
```
権限名にnullを指定するとアクセスが許可されます。
#### サンプルコード
##### Controller
```
public $components = array(
	'NetCommons.Permission' => array(
		'allow' => array(
			'add,edit,delete' => 'null'
		)
	)
)
```

* Visibility: **public**


Methods
-------


### initialize

    void PermissionComponent::initialize(\Controller $controller)

Called before the Controller::beforeFilter().



* Visibility: **public**


#### Arguments
* $controller **Controller** - &lt;p&gt;Instantiating controller&lt;/p&gt;



### startup

    void PermissionComponent::startup(\Controller $controller)

Called after the Controller::beforeFilter() and before the controller action



* Visibility: **public**


#### Arguments
* $controller **Controller** - &lt;p&gt;Controller with components to startup&lt;/p&gt;


