<?php
namespace Nemundo\Content\App\Location\Data\Address;
use Nemundo\Model\Id\AbstractModelIdValue;
class AddressId extends AbstractModelIdValue {
/**
* @var AddressModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AddressModel();
}
}