<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftExternalType extends \Nemundo\Model\Type\External\ExternalType {
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
* @var \Nemundo\Model\Type\Id\IdType
*/
public $geschaeftstypId;

/**
* @var \Parlament\Data\Geschaeftstyp\GeschaeftstypExternalType
*/
public $geschaeftstyp;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $sessionId;

/**
* @var \Parlament\Data\Session\SessionExternalType
*/
public $session;

/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $geschaeftsstatusId;

/**
* @var \Parlament\Data\Geschaeftsstatus\GeschaeftsstatusExternalType
*/
public $geschaeftsstatus;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $lastUpdate;

/**
* @var \Nemundo\Model\Type\DateTime\DateType
*/
public $datumEinreichung;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = GeschaeftModel::class;
$this->externalTableName = "parlament_geschaeft";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->kurzbezeichnung = new \Nemundo\Model\Type\Text\TextType();
$this->kurzbezeichnung->fieldName = "kurzbezeichnung";
$this->kurzbezeichnung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->kurzbezeichnung->externalTableName = $this->externalTableName;
$this->kurzbezeichnung->aliasFieldName = $this->kurzbezeichnung->tableName . "_" . $this->kurzbezeichnung->fieldName;
$this->kurzbezeichnung->label = "Kurzbezeichnung";
$this->addType($this->kurzbezeichnung);

$this->geschaeft = new \Nemundo\Model\Type\Text\TextType();
$this->geschaeft->fieldName = "geschaeft";
$this->geschaeft->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeft->externalTableName = $this->externalTableName;
$this->geschaeft->aliasFieldName = $this->geschaeft->tableName . "_" . $this->geschaeft->fieldName;
$this->geschaeft->label = "Geschäft";
$this->addType($this->geschaeft);

$this->geschaeftstypId = new \Nemundo\Model\Type\Id\IdType();
$this->geschaeftstypId->fieldName = "geschaeftstyp";
$this->geschaeftstypId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftstypId->aliasFieldName = $this->geschaeftstypId->tableName ."_".$this->geschaeftstypId->fieldName;
$this->geschaeftstypId->label = "Geschäftstyp";
$this->addType($this->geschaeftstypId);

$this->sessionId = new \Nemundo\Model\Type\Id\IdType();
$this->sessionId->fieldName = "session";
$this->sessionId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->sessionId->aliasFieldName = $this->sessionId->tableName ."_".$this->sessionId->fieldName;
$this->sessionId->label = "Session";
$this->addType($this->sessionId);

$this->geschaeftsstatusId = new \Nemundo\Model\Type\Id\IdType();
$this->geschaeftsstatusId->fieldName = "geschaeftsstatus";
$this->geschaeftsstatusId->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftsstatusId->aliasFieldName = $this->geschaeftsstatusId->tableName ."_".$this->geschaeftsstatusId->fieldName;
$this->geschaeftsstatusId->label = "Geschaeftsstatus";
$this->addType($this->geschaeftsstatusId);

$this->lastUpdate = new \Nemundo\Model\Type\DateTime\DateTimeType();
$this->lastUpdate->fieldName = "last_update";
$this->lastUpdate->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->lastUpdate->externalTableName = $this->externalTableName;
$this->lastUpdate->aliasFieldName = $this->lastUpdate->tableName . "_" . $this->lastUpdate->fieldName;
$this->lastUpdate->label = "Last Update";
$this->addType($this->lastUpdate);

$this->datumEinreichung = new \Nemundo\Model\Type\DateTime\DateType();
$this->datumEinreichung->fieldName = "datum_einreichung";
$this->datumEinreichung->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->datumEinreichung->externalTableName = $this->externalTableName;
$this->datumEinreichung->aliasFieldName = $this->datumEinreichung->tableName . "_" . $this->datumEinreichung->fieldName;
$this->datumEinreichung->label = "Datum Einreichung";
$this->addType($this->datumEinreichung);

}
public function loadGeschaeftstyp() {
if ($this->geschaeftstyp == null) {
$this->geschaeftstyp = new \Parlament\Data\Geschaeftstyp\GeschaeftstypExternalType(null, $this->parentFieldName . "_geschaeftstyp");
$this->geschaeftstyp->fieldName = "geschaeftstyp";
$this->geschaeftstyp->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftstyp->aliasFieldName = $this->geschaeftstyp->tableName ."_".$this->geschaeftstyp->fieldName;
$this->geschaeftstyp->label = "Geschäftstyp";
$this->addType($this->geschaeftstyp);
}
return $this;
}
public function loadSession() {
if ($this->session == null) {
$this->session = new \Parlament\Data\Session\SessionExternalType(null, $this->parentFieldName . "_session");
$this->session->fieldName = "session";
$this->session->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->session->aliasFieldName = $this->session->tableName ."_".$this->session->fieldName;
$this->session->label = "Session";
$this->addType($this->session);
}
return $this;
}
public function loadGeschaeftsstatus() {
if ($this->geschaeftsstatus == null) {
$this->geschaeftsstatus = new \Parlament\Data\Geschaeftsstatus\GeschaeftsstatusExternalType(null, $this->parentFieldName . "_geschaeftsstatus");
$this->geschaeftsstatus->fieldName = "geschaeftsstatus";
$this->geschaeftsstatus->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->geschaeftsstatus->aliasFieldName = $this->geschaeftsstatus->tableName ."_".$this->geschaeftsstatus->fieldName;
$this->geschaeftsstatus->label = "Geschaeftsstatus";
$this->addType($this->geschaeftsstatus);
}
return $this;
}
}