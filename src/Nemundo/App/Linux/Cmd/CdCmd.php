<?phpnamespace Nemundo\App\Linux\Cmd;class CdCmd extends AbstractCmd{    public $path;    public function getCmd()    {        $this->addCommandLine('cd ' . $this->path);        return parent::getCmd();    }}