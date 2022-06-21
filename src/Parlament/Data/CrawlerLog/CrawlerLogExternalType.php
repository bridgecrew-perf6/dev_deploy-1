<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $crawler;

/**
* @var \Nemundo\Model\Type\Number\NumberType
*/
public $page;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $finished;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = CrawlerLogModel::class;
$this->externalTableName = "parlament_crawler_log";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->crawler = new \Nemundo\Model\Type\Text\TextType();
$this->crawler->fieldName = "crawler";
$this->crawler->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->crawler->externalTableName = $this->externalTableName;
$this->crawler->aliasFieldName = $this->crawler->tableName . "_" . $this->crawler->fieldName;
$this->crawler->label = "Crawler";
$this->addType($this->crawler);

$this->page = new \Nemundo\Model\Type\Number\NumberType();
$this->page->fieldName = "page";
$this->page->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->page->externalTableName = $this->externalTableName;
$this->page->aliasFieldName = $this->page->tableName . "_" . $this->page->fieldName;
$this->page->label = "Page";
$this->addType($this->page);

$this->finished = new \Nemundo\Model\Type\Number\YesNoType();
$this->finished->fieldName = "finished";
$this->finished->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->finished->externalTableName = $this->externalTableName;
$this->finished->aliasFieldName = $this->finished->tableName . "_" . $this->finished->fieldName;
$this->finished->label = "Finished";
$this->addType($this->finished);

}
}