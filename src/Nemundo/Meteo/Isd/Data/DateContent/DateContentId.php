<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
use Nemundo\Model\Id\AbstractModelIdValue;
class DateContentId extends AbstractModelIdValue {
/**
* @var DateContentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentModel();
}
}