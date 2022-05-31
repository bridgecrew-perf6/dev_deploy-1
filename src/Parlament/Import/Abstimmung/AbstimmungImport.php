<?php

namespace Parlament\Import\Abstimmung;

use Nemundo\Core\Type\DateTime\Date;
use Parlament\Data\Abstimmung\Abstimmung;
use Parlament\Import\Base\AbstractPageParlamentImport;

class AbstimmungImport extends AbstractPageParlamentImport
{

    public $importDetail = false;

    public $importGeschaeft = false;

    public $sessionId;

    /**
     * @var Date
     */
    public $datum;


    public function importData()
    {

        if ($this->sessionId !== null) {
            $this->addParameter('sessionFilter', $this->sessionId);
        }

        if ($this->datum !== null) {
            $datumText = $this->datum->getYear() . '/' . $this->datum->getMonthNumberWithLeadingZero() . '/' . $this->datum->getDayWithLeadingZero();
            $this->addParameter('dateFromFilter', $datumText);
            $this->addParameter('dateToFilter', $datumText);
        }

        $this->loadJson('votes/affairs');

    }


    protected function onJson($json)
    {

        $geschaeftId = $json['id'];

        /*$data = new Abstimmung();
        $data->updateOnDuplicate = true;
        $data->id = $geschaeftId;
        $data->abstimmung = $json['title'];
        $data->save();*/

        if ($this->importDetail) {
            $imort = new AbstimmungDetailImport();
            $imort->importGeschaeft = $this->importGeschaeft;
            $imort->importAbstimmung($geschaeftId);
        }

    }

}