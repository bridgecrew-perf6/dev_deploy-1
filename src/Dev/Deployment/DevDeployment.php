<?php

namespace Dev\Deployment;

use Dev\DevProject;
use Nemundo\Project\Deployment\Git\AbstractGithubDeployment;

class DevDeployment extends AbstractGithubDeployment
{

    protected function loadDeployment()
    {

        $this->project = new DevProject();
        $this->githubUrl = 'nemundo/dev_deploy.git';

        $this->copyPhpIndex = true;

    }

}