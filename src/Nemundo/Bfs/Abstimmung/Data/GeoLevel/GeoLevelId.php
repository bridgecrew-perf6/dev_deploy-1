<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeoLevelId extends AbstractModelIdValue {
/**
* @var GeoLevelModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
}