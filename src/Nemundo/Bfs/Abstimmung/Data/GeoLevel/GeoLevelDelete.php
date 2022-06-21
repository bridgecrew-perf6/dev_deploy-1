<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeoLevelModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
}