<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var RatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedModel();
}
}