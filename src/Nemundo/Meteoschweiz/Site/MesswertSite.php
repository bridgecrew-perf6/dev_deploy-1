<?phpnamespace Nemundo\Meteoschweiz\Site;use Nemundo\Web\Site\AbstractSite;use Nemundo\Meteoschweiz\Page\MesswertPage;class MesswertSite extends AbstractSite {protected function loadSite() {$this->title = 'Messwert';$this->url = 'messwert';}public function loadContent() {(new MesswertPage())->render();}}