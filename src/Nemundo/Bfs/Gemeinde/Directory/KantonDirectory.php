<?php

namespace Nemundo\Bfs\Gemeinde\Directory;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\Debug\Debug;

class KantonDirectory extends AbstractBase
{

    private $kantonList = [];

    public function __construct()
    {

        $kantonReader = new KantonReader();
        foreach ($kantonReader->getData() as $kantonRow) {
            $this->kantonList[$kantonRow->kantonAbk] = $kantonRow->id;
        }

    }


    public function getKantonId($kantonAbk)
    {

        $kantonId = null;
        if (isset($this->kantonList[$kantonAbk])) {
            $kantonId = $this->kantonList[$kantonAbk];
        } else {
            (new Debug())->write('Kein Kanton für ' . $kantonAbk);
        }

        return $kantonId;

    }

}