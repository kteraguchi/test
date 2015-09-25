CircularNoticesController
===============

CircularNotices Controller

Add your application-wide methods in the class below, your controllers
will inherit them.


* Class name: CircularNoticesController
* Namespace: 
* Parent class: [CircularNoticesAppController](CircularNoticesAppController.md)





Properties
----------


### $uses

    public array $uses = array('M17n.Language', 'NetCommons.SiteSetting')

use model



* Visibility: **public**


### $components

    public array $components = array('Asset', 'Auth' => array('loginAction' => array('plugin' => 'auth', 'controller' => 'auth', 'action' => 'login'), 'loginRedirect' => array('plugin' => 'pages', 'controller' => 'pages', 'action' => 'index'), 'logoutRedirect' => array('plugin' => 'pages', 'controller' => 'pages', 'action' => 'index')), 'DebugKit.Toolbar', 'Flash', 'NetCommons.NetCommons', 'NetCommons.Permission' => array('allow' => array('index' => null, 'view' => null)), 'RequestHandler', 'Session', 'Workflow.Workflow')

use components



* Visibility: **public**


### $helpers

    public array $helpers = array('Html' => array('className' => 'NetCommons.SingletonViewBlockHtml'), 'NetCommons.BackTo', 'NetCommons.Button', 'NetCommons.Date', 'NetCommons.NetCommonsForm', 'NetCommons.NetCommonsHtml')

use helpers



* Visibility: **public**


### $layout

    public string $layout = 'NetCommons.default'

use layout



* Visibility: **public**


### $theme

    public string $theme = 'default'

use theme



* Visibility: **public**


Methods
-------


### beforeFilter

    void NetCommonsAppController::beforeFilter()

beforeFilter



* Visibility: **public**
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)




### index

    void CircularNoticesController::index()

index action



* Visibility: **public**




### view

    void CircularNoticesController::view(integer $frameId, integer $contentId)

view action



* Visibility: **public**


#### Arguments
* $frameId **integer** - &lt;p&gt;frames.id&lt;/p&gt;
* $contentId **integer** - &lt;p&gt;circular_notice_content.id&lt;/p&gt;



### add

    void CircularNoticesController::add(integer $frameId)

add action



* Visibility: **public**


#### Arguments
* $frameId **integer** - &lt;p&gt;frames.id&lt;/p&gt;



### edit

    void CircularNoticesController::edit(integer $frameId, integer $contentId)

edit action



* Visibility: **public**


#### Arguments
* $frameId **integer** - &lt;p&gt;frames.id&lt;/p&gt;
* $contentId **integer** - &lt;p&gt;circular_notice_content.id&lt;/p&gt;



### delete

    void CircularNoticesController::delete(integer $frameId, string $contentKey)

delete action



* Visibility: **public**


#### Arguments
* $frameId **integer** - &lt;p&gt;frames.id&lt;/p&gt;
* $contentKey **string** - &lt;p&gt;circular_notice_content.key&lt;/p&gt;



### __getAnswerSummary

    array CircularNoticesController::__getAnswerSummary(integer $contentId)

Get summary of answer.



* Visibility: **private**


#### Arguments
* $contentId **integer** - &lt;p&gt;circular_notice_content.id&lt;/p&gt;



### __parseRequestForSave

    mixed CircularNoticesController::__parseRequestForSave()

Parsing request data for save



* Visibility: **private**




### initCircularNotice

    void CircularNoticesAppController::initCircularNotice()

Initialize circular notices



* Visibility: **public**
* This method is defined by [CircularNoticesAppController](CircularNoticesAppController.md)




### initSettingTabs

    void CircularNoticesAppController::initSettingTabs(string $activeTab)

Initialize setting tabs



* Visibility: **public**
* This method is defined by [CircularNoticesAppController](CircularNoticesAppController.md)


#### Arguments
* $activeTab **string** - &lt;p&gt;Active tag name&lt;/p&gt;



### _getGroupsStub

    array CircularNoticesAppController::_getGroupsStub()

Get groups for stub.



* Visibility: **protected**
* This method is defined by [CircularNoticesAppController](CircularNoticesAppController.md)




### __construct

    mixed NetCommonsAppController::__construct(\CakeRequest $request, \CakeResponse $response)

Constructor.



* Visibility: **public**
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)


#### Arguments
* $request **CakeRequest** - &lt;p&gt;Request object for this controller. Can be null for testing,
 but expect that features that use the request parameters will not work.&lt;/p&gt;
* $response **CakeResponse** - &lt;p&gt;Response object for this controller.&lt;/p&gt;



### beforeRender

    void NetCommonsAppController::beforeRender()

beforeRender



* Visibility: **public**
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)




### beforeRedirect

    mixed NetCommonsAppController::beforeRedirect(string|array $url, integer $status, boolean $exit)

The beforeRedirect method is invoked when the controller's redirect method is called but before any
further action.

If this method returns false the controller will not continue on to redirect the request.
The $url, $status and $exit variables have same meaning as for the controller's method. You can also
return a string which will be interpreted as the URL to redirect to or return associative array with
key 'url' and optionally 'status' and 'exit'.

* Visibility: **public**
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)


#### Arguments
* $url **string|array** - &lt;p&gt;A string or array-based URL pointing to another location within the app,
or an absolute URL&lt;/p&gt;
* $status **integer** - &lt;p&gt;Optional HTTP status code (eg: 404)&lt;/p&gt;
* $exit **boolean** - &lt;p&gt;If true, exit() will be called after the redirect&lt;/p&gt;



### ping

    void NetCommonsAppController::ping()

Keep connection alive



* Visibility: **public**
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)




### camelizeKeyRecursive

    array NetCommonsAppController::camelizeKeyRecursive(array $orig)

camelizeKeyRecursive



* Visibility: **public**
* This method is **static**.
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)


#### Arguments
* $orig **array** - &lt;p&gt;data to camelize&lt;/p&gt;



### throwBadRequest

    void NetCommonsAppController::throwBadRequest()

throw bad request



* Visibility: **public**
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)




### emptyRender

    void NetCommonsAppController::emptyRender()

Empty render



* Visibility: **public**
* This method is defined by [NetCommonsAppController](NetCommonsAppController.md)


