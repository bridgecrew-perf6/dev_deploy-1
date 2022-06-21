<?php

namespace Parlament\Import\Geschaeft;

use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Type\DateTime\DateTime;
use Parlament\Data\Geschaeft\Geschaeft;
use Parlament\Data\Geschaeft\GeschaeftCount;
use Parlament\Import\Base\AbstractPageParlamentImport;

class GeschaeftImport extends AbstractPageParlamentImport
{

    public $importDetail = false;

    public function importData()
    {

        $this->crawlerLogId = 1;
        $this->loadJson('affairs');

    }


    protected function onJson($json)
    {

        $geschaeftId = $json['id'];

        $lastUpdate = new DateTime($json['updated']);

        $data = new Geschaeft();
        $data->updateOnDuplicate = true;
        $data->id = $geschaeftId;
        $data->kurzbezeichnung = $json['shortId'];
        $data->lastUpdate = $lastUpdate;
        $data->save();

        if ($this->importDetail) {
            (new GeschaeftDetailImport())->importGeschaeft($geschaeftId);
        }



        //http://ws-old.parlament.ch/affairsummaries?format=json

        /*$count = new GeschaeftCount();
        $count->filter->andEqual($count->model->lastUpdate, $lastUpdate->getIsoDateTime());
        if ($count->getCount() === 0) {

            (new Debug())->write('update');

            $data = new Geschaeft();
            $data->updateOnDuplicate = true;
            $data->id = $geschaeftId;
            $data->kurzbezeichnung = $json['shortId'];
            $data->lastUpdate = $lastUpdate;  // $json['shortId'];
            $data->save();

            if ($this->importDetail) {
                (new GeschaeftDetailImport())->importGeschaeft($geschaeftId);
            }

        } else {
            (new Debug())->write('kein update');
        }*/

    }

}