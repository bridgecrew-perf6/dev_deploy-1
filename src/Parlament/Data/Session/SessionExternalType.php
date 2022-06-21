<?php
namespace Parlament\Data\Session;
class SessionExternalType extends \Nemundo\Model\Type\External\ExternalType {
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

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = SessionModel::class;
$this->externalTableName = "parlament_session";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->session = new \Nemundo\Model\Type\Text\TextType();
$this->session->fieldName = "session";
$this->session->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->session->externalTableName = $this->externalTableName;
$this->session->aliasFieldName = $this->session->tableName . "_" . $this->session->fieldName;
$this->session->label = "Session";
$this->addType($this->session);

$this->von = new \Nemundo\Model\Type\DateTime\DateType();
$this->von->fieldName = "von";
$this->von->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->von->externalTableName = $this->externalTableName;
$this->von->aliasFieldName = $this->von->tableName . "_" . $this->von->fieldName;
$this->von->label = "Von";
$this->addType($this->von);

$this->bis = new \Nemundo\Model\Type\DateTime\DateType();
$this->bis->fieldName = "bis";
$this->bis->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->bis->externalTableName = $this->externalTableName;
$this->bis->aliasFieldName = $this->bis->tableName . "_" . $this->bis->fieldName;
$this->bis->label = "Bis";
$this->addType($this->bis);

}
}