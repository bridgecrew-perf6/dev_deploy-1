<?php
namespace Parlament\Data\RatsmitgliedBeruf;
use Nemundo\Model\Id\AbstractModelIdValue;
class RatsmitgliedBerufId extends AbstractModelIdValue {
/**
* @var RatsmitgliedBerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedBerufModel();
}
}