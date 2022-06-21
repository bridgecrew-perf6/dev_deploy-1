<?php
namespace Parlament\Data\Ratsmitglied;
use Nemundo\Model\Id\AbstractModelIdValue;
class RatsmitgliedId extends AbstractModelIdValue {
/**
* @var RatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedModel();
}
}