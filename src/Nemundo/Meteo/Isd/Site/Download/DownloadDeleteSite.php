<?phpnamespace Nemundo\Meteo\Isd\Site\Download;use Nemundo\Meteo\Isd\Data\DownloadQueue\DownloadQueueDelete;use Nemundo\Package\FontAwesome\Site\AbstractDeleteIconSite;use Nemundo\Core\Http\Url\UrlReferer;class DownloadDeleteSite extends AbstractDeleteIconSite{    /**     * @var DownloadDeleteSite     */    public static $site;    protected function loadSite()    {        parent::loadSite();        DownloadDeleteSite::$site=$this;    }    public function loadContent()    {        (new DownloadQueueDelete())->delete();        (new UrlReferer())->redirect();    }}