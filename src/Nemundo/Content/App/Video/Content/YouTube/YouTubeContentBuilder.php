<?php

namespace Nemundo\Content\App\Video\Content\YouTube;

use Nemundo\Com\Video\YouTube\YouTubeInformation;
use Nemundo\Content\App\Video\Data\YouTube\YouTube;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Content\Builder\IndexBuilder;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Type\Text\Text;
use Nemundo\Crawler\HtmlParser\HtmlParser;

class YouTubeContentBuilder extends AbstractContentBuilder
{

    public $youTubeUrl;


    public function saveContent()
    {

        $parser = new HtmlParser();
        $parser->fromUrl($this->youTubeUrl);

        $title = $parser->getPageTitle();
        $title = (new Text($title))->removeRight('- YouTube')->getValue();
        $description = $parser->getDescription();

        /*
        $this->contentType->youTubeUrl = $this->url->getValue();
        $this->contentType->title = $title;
        $this->contentType->description = $description;
        $this->contentType->start=$this->start->getValue();
        $this->contentType->saveType();*/

        $data = new YouTube();
        $data->youtubeId = (new YouTubeInformation())->getYouTubeIdFromUrl($this->youTubeUrl);
        $data->title = $title;
        $data->description = $description;
        $data->start= 0;  //$this->start;
        $dataId = $data->save();

        $content=new YouTubeContentType($dataId);

        (new IndexBuilder())->buildIndex($content);





        // TODO: Implement saveContent() method.
    }


}