<?phpnamespace Nemundo\Meteo\Zamg\ImageTimeline;use Nemundo\Content\App\ImageTimeline\Content\ImageTimeline\AbstractImageTimelineContentType;class ZamgImageTimeline extends AbstractImageTimelineContentType{    protected function loadContentType()    {        parent::loadContentType();        $this->typeLabel = 'Zamg Image Timeline';        $this->typeId = 'f3bb0c81-ea5f-4f56-983f-6a1098ae4314';        $this->timeline = 'Zamg Bodendruck';        $this->imageUrl = 'https://www.zamg.ac.at/cms/de/wetter/wetterkarte';        $this->source = 'Zamg';        $this->sourceUrl = 'https://www.zamg.ac.at/cms/de/wetter/wetterkarte';        $this->crawling = false;    }}