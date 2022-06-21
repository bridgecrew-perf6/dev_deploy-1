<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var RatsmitgliedBerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedBerufModel();
}
}