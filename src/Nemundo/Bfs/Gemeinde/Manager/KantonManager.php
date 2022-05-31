<?php

namespace Nemundo\Bfs\Gemeinde\Manager;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Core\Base\AbstractBase;

class KantonManager extends AbstractBase
{

    public function getKantonReader() {

        $reader = new KantonReader();
        $reader->addOrder($reader->model->kanton);
        return $reader->getData();

    }

}