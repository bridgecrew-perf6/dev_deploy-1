<?php
namespace Dev\App\Wetzikon\Site;
use Nemundo\Web\Site\AbstractSite;
use Dev\App\Wetzikon\Page\MapPage;
class MapSite extends AbstractSite {
protected function loadSite() {
$this->title = 'Map';
$this->url = 'map';
}
public function loadContent() {
(new MapPage())->render();
}
}