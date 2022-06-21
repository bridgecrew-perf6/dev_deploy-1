<?php
namespace Parlament\Data\Interessenbindung;
class InteressenbindungDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var InteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
}