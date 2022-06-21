<?php

namespace Nemundo\Bfs\Gemeinde\Application;

use Nemundo\App\Application\Type\AbstractApplication;
use Nemundo\Bfs\Gemeinde\Data\GemeindeModelCollection;
use Nemundo\Bfs\Gemeinde\Install\GemeindeInstall;

class GemeindeApplication extends AbstractApplication
{
    protected function loadApplication()
    {
        $this->application = 'Gemeinde';
        $this->applicationId = '0943d8a6-b92b-409e-9dab-230c35b22f86';
        $this->installClass = GemeindeInstall::class;
        $this->modelCollectionClass = GemeindeModelCollection::class;
    }
}