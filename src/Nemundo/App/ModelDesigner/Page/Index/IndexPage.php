<?phpnamespace Nemundo\App\ModelDesigner\Page\Index;use Nemundo\Admin\Com\Table\AdminLabelValueTable;use Nemundo\Admin\Com\Title\AdminTitle;use Nemundo\App\ModelDesigner\Com\Breadcrumb\ModelDesignerBreadcrumb;use Nemundo\App\ModelDesigner\Com\Form\IndexForm;use Nemundo\App\ModelDesigner\Com\Form\IndexTypeForm;use Nemundo\App\ModelDesigner\Com\Table\IndexTypeBootstrapTable;use Nemundo\App\ModelDesigner\Parameter\AppParameter;use Nemundo\App\ModelDesigner\Parameter\IndexParameter;use Nemundo\App\ModelDesigner\Parameter\ModelParameter;use Nemundo\App\ModelDesigner\Parameter\ProjectParameter;use Nemundo\App\ModelDesigner\Site\Index\IndexNewSite;use Nemundo\App\ModelDesigner\Site\Index\IndexSite;use Nemundo\App\ModelDesigner\Site\ModelSite;use Nemundo\App\ModelDesigner\Template\ModelDesignerTemplate;use Nemundo\Dev\App\Factory\DefaultTemplateFactory;use Nemundo\Package\Bootstrap\Layout\BootstrapTwoColumnLayout;class IndexPage extends ModelDesignerTemplate{    public function getContent()    {        $project = (new ProjectParameter())->getProject();        $app = (new AppParameter())->getApp($project);        $model = (new ModelParameter())->getModel($app);        $index = (new IndexParameter())->getIndex($model);        //$page = (new DefaultTemplateFactory())->getDefaultTemplate();        $breadcrumb = new ModelDesignerBreadcrumb($this);        $breadcrumb->addProject($project);        $breadcrumb->addApp($app);        $breadcrumb->addModel($model);        $breadcrumb->addActiveItem(IndexSite::$site->title);  // $this->title);        $layout = new BootstrapTwoColumnLayout($this);        $table = new AdminLabelValueTable($layout->col1);        $table->addLabelValue('Index Label', $index->indexLabel);        $table->addLabelValue('Index Type', $index->indexType);        $table->addLabelValue('Index Name', $index->indexName);        $form = new IndexTypeForm($layout->col1);        $form->app = $app;        $form->model = $model;        $form->index = $index;        $form->redirectSite = IndexSite::$site;        $form->redirectSite->addParameter(new ProjectParameter());        $form->redirectSite->addParameter(new AppParameter());        $form->redirectSite->addParameter(new ModelParameter());        $form->redirectSite->addParameter(new IndexParameter());        $table = new IndexTypeBootstrapTable($layout->col1);        $table->index = $index;        return parent::getContent(); // TODO: Change the autogenerated stub    }}