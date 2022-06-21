<?php


namespace Nemundo\Bfs\Gemeinde\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\App\WebService\Service\AbstractWordServiceRequest;

use Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkReader;
use Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeReader;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Core\Http\Request\HttpRequest;

class BezirkService extends AbstractWordServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'gemeinde-bezirk';
    }


    public function onRequest()
    {

        $reader = new BezirkReader();
        //$reader->filter->andContains($reader->model->bezirkNrgemeinde, $this->getQuery());

        $request=new HttpRequest('kanton');
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->kantonId, $request->getValue());
        }

        $request=new HttpRequest('kanton-kuerzel');
        if ($request->hasValue()) {
            $reader->model->loadKanton();
            $reader->filter->andEqual($reader->model->kanton->kantonAbk, $request->getValue());
        }

        $reader->addOrder($reader->model->bezirk);
        foreach ($reader->getData() as $bezirkRow) {
            $this->addWord($bezirkRow->id, $bezirkRow->bezirk);
        }


    }

}