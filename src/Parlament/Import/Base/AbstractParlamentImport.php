<?php

namespace Parlament\Import\Base;

use Nemundo\Core\Base\AbstractImport;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Json\Reader\JsonReader;
use Nemundo\Core\WebRequest\WebRequest;
use Nemundo\Web\Url\UrlParameterBuilder;

abstract class AbstractParlamentImport extends AbstractImport
{

    /**
     * @var UrlParameterBuilder
     */
    private $urlBuilder;


    public function __construct()
    {

        $this->urlBuilder = new UrlParameterBuilder('');


    }


    protected function addParameter($name, $value)
    {

        $this->urlBuilder->addParameterNameValue($name, $value);

    }


    /**
     * @param $webService
     * @param $pageNumber
     * @return UrlParameterBuilder
     */
    protected function getUrlBuilder($webService, $pageNumber = null)
    {

        $this->urlBuilder->setUrl('http://ws-old.parlament.ch/' . $webService);
        $this->urlBuilder->addParameterNameValue('format', 'json');

        if ($pageNumber !== null) {
            $this->urlBuilder->addParameterNameValue('pageNumber', $pageNumber);
        }

        return $this->urlBuilder;

    }


    protected function getUrl($webService, $pageNumber = null)
    {

        $urlBuilder = $this->getUrlBuilder($webService, $pageNumber);
        $url = $urlBuilder->getUrl();

        (new Debug())->write($url);

        return $url;

    }


    protected function loadJson($webService)
    {

        $url = $this->getUrl($webService);


        $reader = new JsonReader();
        $reader->fromUrl($url);
        foreach ($reader->getData() as $json) {
            $this->onJson($json);
        }

    }


    protected function loadJsonList($webService)
    {

        $url = $this->getUrl($webService);

        $reader = new JsonReader();
        $reader->fromUrl($url);

        $this->onJson($reader->getList());

    }


    protected function onJson($json)
    {


    }


}