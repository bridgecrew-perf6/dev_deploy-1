<?php

namespace Dev;

use Dev\Deployment\DevDeployment;
use Dev\Setup\DevSetup;
use Dev\Web\DevWeb;
use Nemundo\Bfs\BfsProject;
use Nemundo\Core\Path\Path;
use Nemundo\FrameworkProject;
use Nemundo\Project\AbstractProject;
use Parlament\ParlamentProject;

class DevProject extends AbstractProject
{
    public function loadProject()
    {
        $this->project = 'Dev';
        $this->projectName = 'dev';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = (new Path())
            ->addPath(__DIR__)
            ->addParentPath()
            ->addPath('model')
            ->getPath();

        $this->webClass = DevWeb::class;
        $this->setupClass = DevSetup::class;
        $this->deploymentClass = DevDeployment::class;
        //$this- webteClass=DevTemplate::class;

        $this->addDependency(new FrameworkProject());
        //$this->addDependency(new MeteoProject());
        $this->addDependency(new ParlamentProject());
        $this->addDependency(new BfsProject());


    }
}