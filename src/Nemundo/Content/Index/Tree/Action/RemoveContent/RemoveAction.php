<?phpnamespace Nemundo\Content\Index\Tree\Action\RemoveContent;use Nemundo\Content\Action\AbstractAction;use Nemundo\Content\Index\Tree\Data\Tree\TreeDelete;class RemoveAction extends AbstractAction{    public $treeId;    protected function loadAction()    {        $this->actionLabel= 'Remove Content';        // TODO: Implement loadContentType() method.    }    public function onAction()    {        // problem parentId !!!        // problem multi child        // delete by tree        /*        $delete = new TreeDelete();        $delete->filter->andEqual($delete->model->childId, $this->actionContentId);        $delete->delete();        */        (new TreeDelete())->deleteById($this->treeId);        //parent::onAction(); // TODO: Change the autogenerated stub    }}