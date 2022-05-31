<?php

namespace Parlament;

use Nemundo\Bfs\BfsProject;
use Nemundo\Core\Path\Path;
use Nemundo\Project\AbstractProject;

class ParlamentProject extends AbstractProject
{
    public function loadProject()
    {
        $this->project = 'Parlament';
        $this->projectName = 'parlament';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = (new Path())
            ->addPath(__DIR__)
            ->addParentPath()
            ->addPath("model")
            ->getPath();

        $this->addDependency(new BfsProject());

    }
}