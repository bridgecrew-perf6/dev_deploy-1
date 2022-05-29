<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var DateContentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentModel();
}
}