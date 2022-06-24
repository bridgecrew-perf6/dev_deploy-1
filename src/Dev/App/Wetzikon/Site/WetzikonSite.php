<?php
namespace Dev\App\Wetzikon\Site;
use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\WetzikonPage;
class WetzikonSite extends AbstractSite {
protected function loadSite() {
$this->title = 'Wetzikon';
$this->url = 'wetzikon';

new PoiNewSite($this);
new PoiKmlSite($this);

}
public function loadContent() {
(new WetzikonPage())->render();
}
}