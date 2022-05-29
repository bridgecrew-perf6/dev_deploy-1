<?php
namespace Nemundo\Meteo\Isd\Data\Country;
class CountryValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var CountryModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CountryModel();
}
}