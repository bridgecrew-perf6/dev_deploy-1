<?phpnamespace Nemundo\App\ModelDesigner\Com\Form;use Nemundo\App\ModelDesigner\ModelDesignerConfig;use Nemundo\Com\Container\LibraryTrait;use Nemundo\Core\Path\Path;use Nemundo\Core\Type\Text\Text;use Nemundo\Dev\ProjectBuilder\ProjectBuilder;use Nemundo\Package\Bootstrap\Form\BootstrapForm;use Nemundo\Package\Bootstrap\FormElement\BootstrapTextBox;use Nemundo\Project\Project;class ProjectForm extends BootstrapForm{    use LibraryTrait;    /**     * @var BootstrapTextBox     */    private $project;    public function getContent()    {        $this->project = new BootstrapTextBox($this);        $this->project->label = 'Project';        $this->project->validation = true;        return parent::getContent();    }    protected function onSubmit()    {        $projectLabel = $this->project->getValue();        $projectName = (new Text($projectLabel))->changeToLowercase()->getValue();        $projectPath = (new Path(ModelDesignerConfig::$projectPath))->addPath($projectName)->getPath();        $project = new Project();        $project->projectName = $projectLabel;        $project->namespace = $projectLabel;        $project->path = $projectPath;        $builder = new ProjectBuilder();        $builder->project = $project;        $builder->createWebEnvironment = false;        $builder->createProject();    }}