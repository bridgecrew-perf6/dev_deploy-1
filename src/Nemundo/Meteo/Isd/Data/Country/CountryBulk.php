<?php
namespace Nemundo\Meteo\Isd\Data\Country;
class CountryBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var CountryModel
*/
protected $model;

/**
* @var string
*/
public $countryCode;

/**
* @var string
*/
public $country;

public function __construct() {
parent::__construct();
$this->model = new CountryModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->countryCode, $this->countryCode);
$this->typeValueList->setModelValue($this->model->country, $this->country);
$id = parent::save();
return $id;
}
}