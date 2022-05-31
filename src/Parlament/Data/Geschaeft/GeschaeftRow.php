<?php
namespace Parlament\Data\Geschaeft;
class GeschaeftRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var GeschaeftModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $kurzbezeichnung;

/**
* @var string
*/
public $geschaeft;

/**
* @var int
*/
public $geschaeftstypId;

/**
* @var \Parlament\Data\Geschaeftstyp\GeschaeftstypRow
*/
public $geschaeftstyp;

/**
* @var int
*/
public $sessionId;

/**
* @var \Parlament\Data\Session\SessionRow
*/
public $session;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->kurzbezeichnung = $this->getModelValue($model->kurzbezeichnung);
$this->geschaeft = $this->getModelValue($model->geschaeft);
$this->geschaeftstypId = intval($this->getModelValue($model->geschaeftstypId));
if ($model->geschaeftstyp !== null) {
$this->loadParlamentDataGeschaeftstypGeschaeftstypgeschaeftstypRow($model->geschaeftstyp);
}
$this->sessionId = intval($this->getModelValue($model->sessionId));
if ($model->session !== null) {
$this->loadParlamentDataSessionSessionsessionRow($model->session);
}
}
private function loadParlamentDataGeschaeftstypGeschaeftstypgeschaeftstypRow($model) {
$this->geschaeftstyp = new \Parlament\Data\Geschaeftstyp\GeschaeftstypRow($this->row, $model);
}
private function loadParlamentDataSessionSessionsessionRow($model) {
$this->session = new \Parlament\Data\Session\SessionRow($this->row, $model);
}
}