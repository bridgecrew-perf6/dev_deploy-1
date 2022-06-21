<?php
namespace Parlament\Data\Interessenbindung;
use Nemundo\Model\Id\AbstractModelIdValue;
class InteressenbindungId extends AbstractModelIdValue {
/**
* @var InteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
}