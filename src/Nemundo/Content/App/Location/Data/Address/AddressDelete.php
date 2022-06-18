<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AddressModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AddressModel();
}
}