<?phpnamespace Nemundo\Meteo;use Nemundo\Project\AbstractProject;class MeteoProject extends AbstractProject{    protected function loadProject()    {        $this->project = 'Meteo';        $this->projectName = 'meteo';        $this->path = __DIR__;        $this->namespace = __NAMESPACE__;        $this->modelPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR;    }}