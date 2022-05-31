<?php

namespace Nemundo\Bfs\Abstimmung\Service;

use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Bfs\Abstimmung\Data\Resultat\ResultatPaginationReader;
use Nemundo\Bfs\Abstimmung\Request\AbstimmungRequest;
use Nemundo\Bfs\Abstimmung\Request\GeoLevelRequest;
use Nemundo\Bfs\Abstimmung\Request\JahrRequest;
use Nemundo\Bfs\Abstimmung\Request\KantonRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Text\BoldText;
use Nemundo\Core\Type\Number\Number;

class ResultatService extends AbstractListServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'abstimmung-resultat';
    }


    public function onRequest()
    {

        $resultatReader = new ResultatPaginationReader();
        $resultatReader->model->loadAbstimmung();
        $resultatReader->model->abstimmung->loadDatum();
        //$resultatReader->model->loadGeo();
        $resultatReader->model->loadGemeinde();
        $resultatReader->model->loadBezirk();
        $resultatReader->model->loadKanton();
        $resultatReader->currentPage = $this->getCurrentPage();
        $resultatReader->paginationLimit = $this->getPaginationLimit();

        $request = new AbstimmungRequest();
        if ($request->hasValue()) {
            $resultatReader->filter->andEqual($resultatReader->model->abstimmungId, $request->getValue());
        }

        $abstimmungQuery = null;
        $request = new HttpRequest('abstimmung-search');
        if ($request->hasValue()) {
            $abstimmungQuery = $request->getValue();
            $resultatReader->filter->andContains($resultatReader->model->abstimmung->abstimmung, $abstimmungQuery);
        }

        $request = new HttpRequest('gemeinde-search');
        if ($request->hasValue()) {
            $resultatReader->filter->andContains($resultatReader->model->gemeinde->gemeinde, $request->getValue());
        }

        $request = new JahrRequest();
        if ($request->hasValue()) {
            $resultatReader->filter->andEqual($resultatReader->model->abstimmung->datum->jahr, $request->getValue());
        }

        $request = new HttpRequest('datum-id');
        if ($request->hasValue()) {
            $resultatReader->filter->andEqual($resultatReader->model->abstimmung->datumId, $request->getValue());
        }

        $request = new GeoLevelRequest();
        if ($request->hasValue()) {
            $resultatReader->filter->andEqual($resultatReader->model->geoLevelId, $request->getValue());
        }

        $request = new KantonRequest();
        if ($request->hasValue()) {
            $resultatReader->filter->andEqual($resultatReader->model->kantonId, $request->getValue());
        }

        /*$request = new GemeindeTextRequest();
       if ($request->hasValue()) {
           $resultatReader->filter->andEqual($resultatReader->model->gemeinde->gemeinde, $request->getValue());
       }*/


        $request = new HttpRequest('gemeinde');
        if ($request->hasValue()) {
            $resultatReader->filter->andEqual($resultatReader->model->gemeindeId, $request->getValue());
        }


        switch ($this->getSortingField()) {

            case 'ja':
                $resultatReader->addOrder($resultatReader->model->jaAbsolut, $this->getSortingOrder());
                break;

            case 'nein':
                $resultatReader->addOrder($resultatReader->model->neinAbsolut, $this->getSortingOrder());
                break;

            case 'ja_prozent':
                $resultatReader->addOrder($resultatReader->model->jaProzent, $this->getSortingOrder());
                break;

            case 'stimmbeteiligung':
                $resultatReader->addOrder($resultatReader->model->stimmbeteiligungProzent, $this->getSortingOrder());
                break;


            default:


                break;

        }


        foreach ($resultatReader->getData() as $resultatRow) {

            $data = [];
            $data['ausgezaehlt'] = $resultatRow->ausgezaehlt;

            $abstimmung = $resultatRow->abstimmung->abstimmung;
            if ($abstimmungQuery !== null) {
                $boldText = new BoldText();
                $boldText->addKeyword($abstimmungQuery);
                $abstimmung = $boldText->getBoldText($abstimmung);
            }
            $data['abstimmung'] = $abstimmung;

            //$data['geo']=$resultatRow->geo->geo;
            $data['datum'] = $resultatRow->abstimmung->datum->datum->getShortDateLeadingZeroFormat();
            $data['ja_absolut'] = (new Number($resultatRow->jaAbsolut))->getFormatNumber();
            $data['ja_prozent'] = (new Number($resultatRow->jaProzent))->getRoundedNumber(1) . '%';  // $resultatRow->jaProzent;
            $data['nein_absolut'] = (new Number($resultatRow->neinAbsolut))->getFormatNumber();
            $data['stimmbeteiligung_prozent'] = (new Number($resultatRow->stimmbeteiligungProzent))->getRoundedNumber(1) . '%';

            $data['gemeinde'] = $resultatRow->gemeinde->gemeinde;
            $data['bezirk'] = $resultatRow->bezirk->bezirk;
            $data['kanton'] = $resultatRow->kanton->kanton;

            $this->addRow($data);

        }

    }

}
