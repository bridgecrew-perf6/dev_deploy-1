<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedInteressenbindungModel();
}
}