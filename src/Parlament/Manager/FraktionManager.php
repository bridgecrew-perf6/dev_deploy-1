<?php

namespace Parlament\Manager;

use Nemundo\Core\Base\AbstractBase;
use Parlament\Data\Fraktion\FraktionReader;

class FraktionManager extends AbstractBase
{

    public function getFraktionRow($fraktionId) {


        $reader = new FraktionReader();
        $reader->filter->andEqual($reader->model->aktiv, true);

        return $reader->getRowById($fraktionId);


    }


    public function getFraktionData() {


        $reader = new FraktionReader();
        $reader->filter->andEqual($reader->model->aktiv, true);
        $reader->addOrder($reader->model->fraktion);

        return $reader->getData();



    }


}