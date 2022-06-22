<?phpnamespace Nemundo\WebLog\Data\Browser;class BrowserModel extends \Nemundo\Model\Definition\Model\AbstractModel {/*** @var \Nemundo\Model\Type\Id\IdType*/public $id;/*** @var \Nemundo\Model\Type\Text\TextType*/public $browser;protected function loadModel() {$this->tableName = "weblog_browser";$this->aliasTableName = "weblog_browser";$this->label = "Browser";$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();$this->id = new \Nemundo\Model\Type\Id\IdType($this);$this->id->tableName = "weblog_browser";$this->id->externalTableName = "weblog_browser";$this->id->fieldName = "id";$this->id->aliasFieldName = "weblog_browser_id";$this->id->label = "Id";$this->id->allowNullValue = false;$this->browser = new \Nemundo\Model\Type\Text\TextType($this);$this->browser->tableName = "weblog_browser";$this->browser->externalTableName = "weblog_browser";$this->browser->fieldName = "browser";$this->browser->aliasFieldName = "weblog_browser_browser";$this->browser->label = "Browser";$this->browser->allowNullValue = false;$this->browser->length = 255;}}