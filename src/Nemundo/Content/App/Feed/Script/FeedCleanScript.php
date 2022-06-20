<?phpnamespace Nemundo\Content\App\Feed\Script;use Nemundo\App\Script\Type\AbstractConsoleScript;use Nemundo\Content\App\Feed\Application\FeedApplication;use Nemundo\Content\App\Feed\Content\Feed\FeedContentType;use Nemundo\Content\App\Feed\Content\Item\ArticleContentType;use Nemundo\Content\App\Feed\Data\Feed\FeedReader;use Nemundo\Content\App\Feed\Data\FeedItem\FeedItemReader;use Nemundo\Content\Builder\IndexBuilder;use Nemundo\Content\Index\Search\Action\SearchIndexAction;class FeedCleanScript extends AbstractConsoleScript{    protected function loadScript()    {        $this->scriptName = 'feed-clean';    }    public function run()    {        /*$reader = new FeedItemReader();        foreach ($reader->getData() as $feedItemRow) {            $content =new FeedItemContentType($feedItemRow->id);            //(new SearchIndexAction())->deleteAction($content);            //$content->deleteType();            (new IndexBuilder())->deleteIndex($content);        }        $reader = new FeedReader();        foreach ($reader->getData() as $feedItemRow) {            $content= new FeedContentType($feedItemRow->id);            //(new SearchIndexAction())->deleteAction($content);            //$content->deleteType();            (new IndexBuilder())->deleteIndex($content);        }*/        (new FeedApplication())->reinstallApp();    }}