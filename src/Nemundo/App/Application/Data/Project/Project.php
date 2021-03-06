<?php
namespace Nemundo\App\Application\Data\Project;
class Project extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var ProjectModel
*/
protected $model;

/**
* @var string
*/
public $project;

/**
* @var string
*/
public $phpClass;

/**
* @var bool
*/
public $setupStatus;

public function __construct() {
parent::__construct();
$this->model = new ProjectModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->project, $this->project);
$this->typeValueList->setModelValue($this->model->phpClass, $this->phpClass);
$this->typeValueList->setModelValue($this->model->setupStatus, $this->setupStatus);
$id = parent::save();
return $id;
}
}