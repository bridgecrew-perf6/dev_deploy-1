<?phpnamespace Nemundo\Meteo\Dwd\Source;use Nemundo\ImageCrawler\Source\AbstractImageSource;class BodendruckSource extends AbstractImageSource{    protected function loadSource()    {        $this->title='DWD Bodendruck';        $this->imageUrl='https://www.dwd.de/DWD/wetter/wv_spez/hobbymet/wetterkarten/bwk_bodendruck_na_ana.png';        //$this->imageUrl='http://www.dwd.de/DWD/wetter/wv_spez/hobbymet/wetterkarten/bwk_bodendruck_na_ana.png';    }}