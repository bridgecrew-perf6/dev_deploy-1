<?php
namespace Parlament\Data\Abstimmung;
class AbstimmungDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AbstimmungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
}
}