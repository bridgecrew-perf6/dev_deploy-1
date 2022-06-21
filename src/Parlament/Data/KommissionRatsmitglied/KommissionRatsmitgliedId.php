<?php
namespace Parlament\Data\KommissionRatsmitglied;
use Nemundo\Model\Id\AbstractModelIdValue;
class KommissionRatsmitgliedId extends AbstractModelIdValue {
/**
* @var KommissionRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionRatsmitgliedModel();
}
}