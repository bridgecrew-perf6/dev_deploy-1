<?phpnamespace Nemundo\Roundshot\Site;use Nemundo\Roundshot\Page\RoundshotJsonImagePage;use Nemundo\Web\Site\AbstractSite;use Paranautik\Usergroup\BetaUsergroup;class RoundshotImageSite extends AbstractSite{    protected function loadSite()    {        $this->title = 'Roundshot Image';        $this->url = 'roundshot-image';        //$this->restricted=true;        //$this->addRestrictedUsergroup(new BetaUsergroup());        //new RoundshotKmlSite($this);    }    public function loadContent()    {       // (new RoundshotImagePage())->render();        (new RoundshotJsonImagePage())->render();    }}