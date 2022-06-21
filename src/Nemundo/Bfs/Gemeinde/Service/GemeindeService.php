<?php


namespace Nemundo\Bfs\Gemeinde\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\App\WebService\Service\AbstractWordServiceRequest;

use Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeReader;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Core\Http\Request\HttpRequest;

class GemeindeService extends AbstractWordServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'gemeinde-gemeinde';
    }


    public function onRequest()
    {

        $gemeindeReader = new GemeindeReader();

        $request=new HttpRequest('kanton');
        if ($request->hasValue()) {
            $gemeindeReader->filter->andEqual($gemeindeReader->model->kantonId, $request->getValue());
        }

        $request=new HttpRequest('kanton-kuerzel');
        if ($request->hasValue()) {
            $gemeindeReader->model->loadKanton();
            $gemeindeReader->filter->andEqual($gemeindeReader->model->kanton->kantonAbk, $request->getValue());
        }



        $request=new HttpRequest('bezirk');
        if ($request->hasValue()) {
            $gemeindeReader->filter->andEqual($gemeindeReader->model->bezirkId, $request->getValue());
        }



        $gemeindeReader->filter->andContains($gemeindeReader->model->gemeinde, $this->getQuery());
        $gemeindeReader->addOrder($gemeindeReader->model->gemeinde);
        foreach ($gemeindeReader->getData() as $gemeindeRow) {
            $this->addWord($gemeindeRow->id, $gemeindeRow->gemeinde);
        }


    }

}