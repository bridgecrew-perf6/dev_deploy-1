<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $kurzbezeichnung;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $geschaeft;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $geschaeftstypId;

/**
* @var \Parlament\Data\Geschaeftstyp\GeschaeftstypExternalType
*/
public $geschaeftstyp;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $sessionId;

/**
* @var \Parlament\Data\Session\SessionExternalType
*/
public $session;

/**
* @var \Nemundo\Model\Type\External\Id\ExternalIdType
*/
public $geschaeftsstatusId;

/**
* @var \Parlament\Data\Geschaeftsstatus\GeschaeftsstatusExternalType
*/
public $geschaeftsstatus;

protected function loadModel() {
$this->tableName = "parlament_geschaeft";
$this->aliasTableName = "parlament_geschaeft";
$this->label = "Geschäft";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_geschaeft";
$this->id->externalTableName = "parlament_geschaeft";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_geschaeft_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->kurzbezeichnung = new \Nemundo\Model\Type\Text\TextType($this);
$this->kurzbezeichnung->tableName = "parlament_geschaeft";
$this->kurzbezeichnung->externalTableName = "parlament_geschaeft";
$this->kurzbezeichnung->fieldName = "kurzbezeichnung";
$this->kurzbezeichnung->aliasFieldName = "parlament_geschaeft_kurzbezeichnung";
$this->kurzbezeichnung->label = "Kurzbezeichnung";
$this->kurzbezeichnung->allowNullValue = false;
$this->kurzbezeichnung->length = 10;

$this->geschaeft = new \Nemundo\Model\Type\Text\TextType($this);
$this->geschaeft->tableName = "parlament_geschaeft";
$this->geschaeft->externalTableName = "parlament_geschaeft";
$this->geschaeft->fieldName = "geschaeft";
$this->geschaeft->aliasFieldName = "parlament_geschaeft_geschaeft";
$this->geschaeft->label = "Geschäft";
$this->geschaeft->allowNullValue = false;
$this->geschaeft->length = 255;

$this->geschaeftstypId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geschaeftstypId->tableName = "parlament_geschaeft";
$this->geschaeftstypId->fieldName = "geschaeftstyp";
$this->geschaeftstypId->aliasFieldName = "parlament_geschaeft_geschaeftstyp";
$this->geschaeftstypId->label = "Geschäftstyp";
$this->geschaeftstypId->allowNullValue = false;

$this->sessionId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->sessionId->tableName = "parlament_geschaeft";
$this->sessionId->fieldName = "session";
$this->sessionId->aliasFieldName = "parlament_geschaeft_session";
$this->sessionId->label = "Session";
$this->sessionId->allowNullValue = false;

$this->geschaeftsstatusId = new \Nemundo\Model\Type\External\Id\ExternalIdType($this);
$this->geschaeftsstatusId->tableName = "parlament_geschaeft";
$this->geschaeftsstatusId->fieldName = "geschaeftsstatus";
$this->geschaeftsstatusId->aliasFieldName = "parlament_geschaeft_geschaeftsstatus";
$this->geschaeftsstatusId->label = "Geschaeftsstatus";
$this->geschaeftsstatusId->allowNullValue = false;

}
public function loadGeschaeftstyp() {
if ($this->geschaeftstyp == null) {
$this->geschaeftstyp = new \Parlament\Data\Geschaeftstyp\GeschaeftstypExternalType($this, "parlament_geschaeft_geschaeftstyp");
$this->geschaeftstyp->tableName = "parlament_geschaeft";
$this->geschaeftstyp->fieldName = "geschaeftstyp";
$this->geschaeftstyp->aliasFieldName = "parlament_geschaeft_geschaeftstyp";
$this->geschaeftstyp->label = "Geschäftstyp";
}
return $this;
}
public function loadSession() {
if ($this->session == null) {
$this->session = new \Parlament\Data\Session\SessionExternalType($this, "parlament_geschaeft_session");
$this->session->tableName = "parlament_geschaeft";
$this->session->fieldName = "session";
$this->session->aliasFieldName = "parlament_geschaeft_session";
$this->session->label = "Session";
}
return $this;
}
public function loadGeschaeftsstatus() {
if ($this->geschaeftsstatus == null) {
$this->geschaeftsstatus = new \Parlament\Data\Geschaeftsstatus\GeschaeftsstatusExternalType($this, "parlament_geschaeft_geschaeftsstatus");
$this->geschaeftsstatus->tableName = "parlament_geschaeft";
$this->geschaeftsstatus->fieldName = "geschaeftsstatus";
$this->geschaeftsstatus->aliasFieldName = "parlament_geschaeft_geschaeftsstatus";
$this->geschaeftsstatus->label = "Geschaeftsstatus";
}
return $this;
}
}