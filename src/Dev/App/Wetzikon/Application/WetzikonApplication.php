<?php
namespace Dev\App\Wetzikon\Application;
use Dev\App\Wetzikon\Install\WetzikonInstall;
use Nemundo\App\Application\Type\AbstractApplication;
class WetzikonApplication extends AbstractApplication {
protected function loadApplication() {
$this->application = 'Wetzikon';
$this->applicationId = 'af96fb22-0269-409a-8ad9-c8719468b194';
$this->installClass=WetzikonInstall::class;
}
}