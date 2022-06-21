<?php
namespace Parlament\Data\Ratsmitglied;
use Nemundo\Model\Data\AbstractModelUpdate;
class RatsmitgliedUpdate extends AbstractModelUpdate {
/**
* @var RatsmitgliedModel
*/
public $model;

/**
* @var string
*/
public $name;

/**
* @var string
*/
public $vorname;

/**
* @var string
*/
public $kantonId;

/**
* @var string
*/
public $ratId;

/**
* @var string
*/
public $fraktionId;

/**
* @var string
*/
public $biographieUrl;

/**
* @var string
*/
public $homepage;

/**
* @var \Nemundo\Model\Data\Property\File\ImageDataProperty
*/
public $bild;

/**
* @var bool
*/
public $hasHomepage;

/**
* @var string
*/
public $parteiId;

/**
* @var bool
*/
public $aktiv;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $geburtstag;

/**
* @var string
*/
public $geschlechtId;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedModel();
$this->bild = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->bild, $this->typeValueList);
$this->geburtstag = new \Nemundo\Core\Type\DateTime\Date();
}
public function update() {
$this->typeValueList->setModelValue($this->model->name, $this->name);
$this->typeValueList->setModelValue($this->model->vorname, $this->vorname);
$this->typeValueList->setModelValue($this->model->kantonId, $this->kantonId);
$this->typeValueList->setModelValue($this->model->ratId, $this->ratId);
$this->typeValueList->setModelValue($this->model->fraktionId, $this->fraktionId);
$this->typeValueList->setModelValue($this->model->biographieUrl, $this->biographieUrl);
$this->typeValueList->setModelValue($this->model->homepage, $this->homepage);
$this->typeValueList->setModelValue($this->model->hasHomepage, $this->hasHomepage);
$this->typeValueList->setModelValue($this->model->parteiId, $this->parteiId);
$this->typeValueList->setModelValue($this->model->aktiv, $this->aktiv);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->geburtstag, $this->typeValueList);
$property->setValue($this->geburtstag);
$this->typeValueList->setModelValue($this->model->geschlechtId, $this->geschlechtId);
parent::update();
}
}