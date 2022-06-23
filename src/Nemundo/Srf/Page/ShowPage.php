<?phpnamespace Nemundo\Srf\Page;use Nemundo\Admin\Com\Item\AdminItemContainer;use Nemundo\Admin\Com\Item\AdminItemSmall;use Nemundo\Admin\Com\Item\AdminItemText;use Nemundo\Admin\Com\Item\AdminItemTitle;use Nemundo\Admin\Com\Table\AdminBootstrapTable;use Nemundo\Admin\Com\Table\AdminTableHeader;use Nemundo\Admin\Com\Table\Row\AdminTableRow;use Nemundo\Admin\Com\Title\AdminSubtitle;use Nemundo\Admin\Com\Title\AdminTitle;use Nemundo\Com\Html\Hyperlink\SiteHyperlink;use Nemundo\Core\Time\Second;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Html\Block\ContentDiv;use Nemundo\Html\Block\Div;use Nemundo\Html\Block\Hr;use Nemundo\Html\Paragraph\Paragraph;use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;use Nemundo\Srf\Com\Breadcrumb\SrfBreadcrumb;use Nemundo\Srf\Content\TvEpisode\TvEpisodeContentType;use Nemundo\Srf\Content\TvShow\TvShowContentType;use Nemundo\Srf\Data\Episode\EpisodeReader;use Nemundo\Srf\Data\Show\ShowReader;use Nemundo\Srf\Parameter\EpisodeParameter;use Nemundo\Srf\Parameter\ShowParameter;use Nemundo\Srf\Site\SrfEpisodeItemSite;use Nemundo\Srf\Template\SrfTemplate;class ShowPage extends SrfTemplate{    public function getContent()    {        $showId = (new ShowParameter())->getValue();        $showRow=(new ShowReader())->getRowById($showId);        $showType = new TvShowContentType($showId);  // new SrfShowContentType($showId);        $episodeReader = new EpisodeReader();        $episodeReader->filter->andEqual($episodeReader->model->showId, $showId);        $episodeReader->addOrder($episodeReader->model->dateTime, SortOrder::DESCENDING);        $breadcrumb=new SrfBreadcrumb($this);        $breadcrumb->showRow=$showRow;        $title = new AdminTitle($this);        $title->content = $showType->getSubject();        foreach ($episodeReader->getData() as $episodeRow) {            $item = new AdminItemContainer($this);            $item->hover=true;            $hyperlink = new SiteHyperlink($item);            $hyperlink->showSiteTitle=false;            //$hyperlink->content = $episodeRow->title;            $hyperlink->site = clone(SrfEpisodeItemSite::$site);            $hyperlink->site->addParameter(new EpisodeParameter($episodeRow->id));            $title = new AdminItemTitle($hyperlink);  // new AdminSubtitle($this);           $title->content=$episodeRow->title;            $div = new AdminItemSmall($item);  // new ContentDiv($this);            $div->content = $episodeRow->dateTime->getShortDateTimeLeadingZeroFormat();            $div = new AdminItemSmall($item);  // new ContentDiv($this);            $div->content =  (new Second( $episodeRow->length))->getText();            //$div->content = 'Length: ' . $episodeRow->length;            //$div = new Div($layout->col2);            //$div->content = 'Length: ' . (new Second( $episodeRow->length))->getHourMinute();            //$div->content = 'Length: ' . $episodeRow->length;            $p = new AdminItemText($item);  // new Paragraph($this);            $p->content = $episodeRow->description;            //$episodeType =new TvEpisodeContentType($episodeRow->id);            //$shareButton = new Div($layout->col2);            /*$favoriteButton=new FavoriteButton($shareButton);            $favoriteButton->contentType = $episodeType;*/            /*$dashboard=new DashboardSaveForm($shareButton);            $dashboard->contentType = $episodeType;*/            /*$form = new StreamSaveForm($layout->col2);            $form->contentId = $episodeType->getContentId();*/            //(new Hr($this));        }        /*        $table = new AdminBootstrapTable($this);        $reader = new ShowReader();        $reader->model->loadMediaType();        $header = new AdminTableHeader($table);        $header->addEmpty();        $header->addText($reader->model->show->label);        $header->addText($reader->model->description->label);        $header->addText($reader->model->mediaType->media->label);        $header->addText($reader->model->srfId->label);        $header->addText($reader->model->crawler->label);        foreach ($reader->getData() as $showRow) {            $row = new AdminTableRow($table);            $img = new BootstrapResponsiveImage($row);            $img->src = $showRow->image->getUrl();            $img->width = 300;            $row->addText($showRow->show);            $row->addText($showRow->description);            $row->addText($showRow->mediaType->media);            $row->addText($showRow->srfId);            $row->addYesNo($showRow->crawler);        }*/        return parent::getContent();    }}