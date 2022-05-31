<?php

namespace Parlament\Import\Base;

use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\WebRequest\WebRequest;

abstract class AbstractPageParlamentImport extends AbstractParlamentImport
{

    public $page = 1;

    protected function loadJson($webService)
    {

        $morePages = true;

        do {

            $url = $this->getUrl($webService, $this->page);

            $responseCode = (new WebRequest())->getResponseCode($url);

            //(new Debug())->write($responseCode);
            //exit;


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
            } else {
                $morePages=false;
            }

        } while ($morePages);

    }

}