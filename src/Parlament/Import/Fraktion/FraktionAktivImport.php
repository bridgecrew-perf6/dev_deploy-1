<?php

namespace Parlament\Import\Fraktion;

use Nemundo\Core\Base\AbstractImport;
use Parlament\Data\Fraktion\Fraktion;
use Parlament\Data\Fraktion\FraktionReader;
use Parlament\Data\Fraktion\FraktionUpdate;
use Parlament\Data\Ratsmitglied\RatsmitgliedCount;
use Parlament\Import\Base\AbstractParlamentImport;

class FraktionAktivImport extends AbstractImport
{

    public function importData()
    {


        $fraktionReader=new FraktionReader();
        foreach ($fraktionReader->getData() as $fraktionRow) {


            $count = new RatsmitgliedCount();
            $count->filter->andEqual($count->model->aktiv,true);
            $count->filter->andEqual($count->model->fraktionId,$fraktionRow->id);
            if ($count->getCount()==0) {

                $update=new FraktionUpdate();
                $update->aktiv=false;
                $update->updateById($fraktionRow->id);


            }

        }

    }




}