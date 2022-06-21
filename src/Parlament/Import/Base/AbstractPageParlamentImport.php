<?php

namespace Parlament\Import\Base;

use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\WebRequest\WebRequest;
use Parlament\Data\CrawlerLog\CrawlerLogReader;
use Parlament\Data\CrawlerLog\CrawlerLogUpdate;

abstract class AbstractPageParlamentImport extends AbstractParlamentImport
{

    public $page;  // = 1;

    public $crawlerLogId;





    protected function loadJson($webService)
    {

        if ($this->crawlerLogId!==null) {
            if ($this->page==null) {
                $this->page = (new CrawlerLogReader())->getRowById($this->crawlerLogId)->page;
            }
        } else {
            $this->page=1;
        }



        $morePages = true;

        do {

            //(new Debug())->write($this->page);

            $url = $this->getUrl($webService, $this->page);

            $responseCode = (new WebRequest())->getResponseCode($url);

            if ($responseCode === 200) {

                $reader = new JsonReader();
                $reader->fromUrl($url);
                foreach ($reader->getData() as $json) {

                    $this->onJson($json);

                    if (isset($json['hasMorePages'])) {
                        $morePages = $json['hasMorePages'];
                        $this->page++;
                    }

                }

                if ($this->crawlerLogId!==null) {

                    $update=new CrawlerLogUpdate();
                    $update->page=$this->page;
                    $update->updateById($this->crawlerLogId);

                }




            } else {
                $morePages = false;
            }

        } while ($morePages);

    }

}