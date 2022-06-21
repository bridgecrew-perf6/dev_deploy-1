<?php

namespace Parlament\Directory;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Directory\AbstractKeyValueDirectory;
use Parlament\Data\Rat\RatReader;


// core/KeyValue

// IdDirectory
abstract class AbstractKeyValue extends AbstractBase
{

    private $list = [];


    abstract protected function loadList();

    public function __construct()
    {

        $this->loadList();

    }


    protected function addValue($key,$value) {

        $this->list[$key] = $value;

    }


    public function getId($type)
    {

        $id = null;
        if (isset($this->list[$type])) {
            $id = $this->list[$type];
        } else {
            (new Debug())->write('No item found. Value: ' . $type);
        }

        return $id;

    }

}