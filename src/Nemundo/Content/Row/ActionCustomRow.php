<?phpnamespace Nemundo\Content\Row;use Nemundo\Content\Action\AbstractAction;use Nemundo\Content\Data\ContentAction\ContentActionReader;use Nemundo\Content\Data\ContentAction\ContentActionRow;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Content\Type\AbstractContentType;// Nemundo\Content\Row\ActionCustomRowclass ActionCustomRow extends ContentActionRow{    //public function getAction(AbstractContentType $content=null)public function getAction()    {        //$content = (new ContentParameter())->getContent(false);        $actionRow = (new ContentActionReader())->getRowById($this->id);        /** @var AbstractAction $action */        $action = new $actionRow->phpClass();        //$action = new $actionRow->phpClass($content);        return $action;    }}