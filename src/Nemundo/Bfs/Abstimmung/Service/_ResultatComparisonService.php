<?php

namespace Nemundo\Bfs\Abstimmung\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Bfs\Abstimmung\Data\Resultat\ResultatReader;
use Nemundo\Bfs\Abstimmung\Request\GemeindeTextRequest;
use Nemundo\Bfs\Abstimmung\Request\GeoLevelRequest;
use Nemundo\Bfs\Abstimmung\Request\KantonRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Math\Percent\Percent;
use Nemundo\Db\DbConfig;

class ResultatComparisonService extends AbstractServiceRequest
{

    private $resultList = [];


    protected function loadServiceRequest()
    {
        $this->serviceName = 'abstimmung-resultat-comparison';
    }


    public function onRequest()
    {


        $request = new HttpRequest('abstimmung-1');
        if ($request->hasValue()) {
            $this->getList($request->getValue(), 1);
        }

        $request = new HttpRequest('abstimmung-2');
        if ($request->hasValue()) {
            $this->getList($request->getValue(), 2);
        }

        foreach ($this->resultList as $result) {
            //$this->addRow($result);

            $percent = new Percent();
            $percent->baseValue = $result['ja_absolut_1'];
            $percent->value = $result['ja_absolut_2'] - $result['ja_absolut_1'];
            $result['ja_absolut_change'] = $percent->getValue(); // getText();


            $percent = new Percent();
            $percent->baseValue = $result['nein_absolut_1'];
            $percent->value = $result['nein_absolut_2'] - $result['nein_absolut_1'];


            //$result['nein_percent_change'] = $percent->getText();
            $result['nein_absolut_change'] = $percent->getValue();


            $this->addRow($result);

        }


        /* foreach ($this->resultList as $result) {
             $this->addRow($result);
         }*/

    }


    private function getList($abstimmungId, $number)
    {


        $reader = new ResultatReader();
        $reader->model->loadAbstimmung();
        $reader->model->abstimmung->loadDatum();
        $reader->model->loadGeo();
        $reader->model->loadGemeinde();
        //$resultatReader->paginationLimit =100;  // (new HttpRequest('pagination-limit'))->getValue();

        //$resultatReader->filter->andEqual($resultatReader->model->abstimmungId, $abstimmungId);

        $reader->filter->andEqual($reader->model->abstimmung->abstimmungNumber, $abstimmungId);


        $request = new GeoLevelRequest();
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->geoLevelId, $request->getValue());
        }

        $request = new KantonRequest();
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->kantonId, $request->getValue());
        }

        //$resultatReader->filter->andEqual($resultatReader->model->gemeinde->gemeinde, 'stans');
        //DbConfig::$sqlDebug=true;



        $request = new GemeindeTextRequest();
        if ($request->hasValue()) {
            //$reader->filter->andContainsLeft($reader->model->gemeinde->gemeinde, $request->getValue());
            $reader->filter->andContainsLeft($reader->model->gemeinde->gemeinde, $request->getValue());
        }


        $reader->addOrder($reader->model->geo->geo);
        $reader->limit=30;


        foreach ($reader->getData() as $resultatRow) {

            $this->resultList[$resultatRow->geoId]['geo'] = $resultatRow->geo->geo;

            $this->resultList[$resultatRow->geoId]['gemeinde'] = $resultatRow->gemeinde->gemeinde;

            //$data['datum']=$resultatRow->abstimmung->datum->datum->getShortDateLeadingZeroFormat();
            $this->resultList[$resultatRow->geoId]['ja_absolut_' . $number] = $resultatRow->jaAbsolut;
            $this->resultList[$resultatRow->geoId]['ja_prozent_' . $number] = $resultatRow->jaProzent;
            $this->resultList[$resultatRow->geoId]['nein_absolut_' . $number] = $resultatRow->neinAbsolut;
            $this->resultList[$resultatRow->geoId]['stimmbeteiligung_prozent_' . $number] = $resultatRow->stimmbeteiligungProzent;


        }


    }


}