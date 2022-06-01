<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogModel extends \Nemundo\Model\Definition\Model\AbstractModel {
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

protected function loadModel() {
$this->tableName = "parlament_crawler_log";
$this->aliasTableName = "parlament_crawler_log";
$this->label = "Crawler Log";

$this->primaryIndex = new \Nemundo\Db\Index\NumberIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "parlament_crawler_log";
$this->id->externalTableName = "parlament_crawler_log";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "parlament_crawler_log_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->crawler = new \Nemundo\Model\Type\Text\TextType($this);
$this->crawler->tableName = "parlament_crawler_log";
$this->crawler->externalTableName = "parlament_crawler_log";
$this->crawler->fieldName = "crawler";
$this->crawler->aliasFieldName = "parlament_crawler_log_crawler";
$this->crawler->label = "Crawler";
$this->crawler->allowNullValue = false;
$this->crawler->length = 255;

$this->page = new \Nemundo\Model\Type\Number\NumberType($this);
$this->page->tableName = "parlament_crawler_log";
$this->page->externalTableName = "parlament_crawler_log";
$this->page->fieldName = "page";
$this->page->aliasFieldName = "parlament_crawler_log_page";
$this->page->label = "Page";
$this->page->allowNullValue = false;

$this->finished = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->finished->tableName = "parlament_crawler_log";
$this->finished->externalTableName = "parlament_crawler_log";
$this->finished->fieldName = "finished";
$this->finished->aliasFieldName = "parlament_crawler_log_finished";
$this->finished->label = "Finished";
$this->finished->allowNullValue = false;

}
}