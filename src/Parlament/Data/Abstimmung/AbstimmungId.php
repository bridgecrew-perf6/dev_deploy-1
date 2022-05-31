<?php
namespace Parlament\Data\Abstimmung;
use Nemundo\Model\Id\AbstractModelIdValue;
class AbstimmungId extends AbstractModelIdValue {
/**
* @var AbstimmungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
}
}