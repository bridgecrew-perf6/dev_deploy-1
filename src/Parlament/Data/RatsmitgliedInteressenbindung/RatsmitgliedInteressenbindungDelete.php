<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedInteressenbindungModel();
}
}