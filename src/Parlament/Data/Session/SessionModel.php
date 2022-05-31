<?php
namespace Parlament\Data\Session;
class SessionModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $session;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $von;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $bis;

protected function loadModel() {
$this->tableName = "parlament_session";
$this->aliasTableName = "parlament_session";
$this->label = "Session";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_session";
$this->id->externalTableName = "parlament_session";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_session_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->session = new \Nemundo\Model\Type\Text\TextType($this);
$this->session->tableName = "parlament_session";
$this->session->externalTableName = "parlament_session";
$this->session->fieldName = "session";
$this->session->aliasFieldName = "parlament_session_session";
$this->session->label = "Session";
$this->session->allowNullValue = false;
$this->session->length = 50;

$this->von = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->von->tableName = "parlament_session";
$this->von->externalTableName = "parlament_session";
$this->von->fieldName = "von";
$this->von->aliasFieldName = "parlament_session_von";
$this->von->label = "Von";
$this->von->allowNullValue = false;

$this->bis = new \Nemundo\Model\Type\DateTime\DateType($this);
$this->bis->tableName = "parlament_session";
$this->bis->externalTableName = "parlament_session";
$this->bis->fieldName = "bis";
$this->bis->aliasFieldName = "parlament_session_bis";
$this->bis->label = "Bis";
$this->bis->allowNullValue = false;

}
}