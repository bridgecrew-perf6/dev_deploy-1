<?php
namespace Parlament\Data\Beruf;
use Nemundo\Model\Id\AbstractModelIdValue;
class BerufId extends AbstractModelIdValue {
/**
* @var BerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
}