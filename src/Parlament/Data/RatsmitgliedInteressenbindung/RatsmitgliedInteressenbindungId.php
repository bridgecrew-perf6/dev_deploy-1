<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
use Nemundo\Model\Id\AbstractModelIdValue;
class RatsmitgliedInteressenbindungId extends AbstractModelIdValue {
/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedInteressenbindungModel();
}
}