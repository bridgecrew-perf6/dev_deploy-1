<?phpnamespace Nemundo\App\WebService\Page;use Nemundo\Admin\Com\Form\AdminSearchForm;use Nemundo\Admin\Com\Table\AdminTable;use Nemundo\Admin\Com\Table\AdminTableHeader;use Nemundo\Admin\Com\Table\Row\AdminTableRow;use Nemundo\App\Application\Com\ListBox\ApplicationListBox;use Nemundo\App\WebService\Data\ServiceRequest\ServiceRequestReader;use Nemundo\Com\Template\AbstractTemplateDocument;use Nemundo\Web\Parameter\UrlParameter;class WebServicePage extends AbstractTemplateDocument{    public function getContent()    {        $row = new AdminSearchForm($this);        $application = new ApplicationListBox($row);        $application->submitOnChange = true;        $application->searchMode = true;        $table = new AdminTable($this);        $reader = new ServiceRequestReader();        $reader->model->loadApplication();        $reader->addOrder($reader->model->uniqueName);        if ($application->hasValue()) {            $reader->filter->andEqual($reader->model->applicationId, $application->getValue());        }        $header = new AdminTableHeader($table);        $header->addText($reader->model->uniqueName->label);        $header->addText($reader->model->phpClass->label);        $header->addText($reader->model->application->label);        foreach ($reader->getData() as $serviceRequestRow) {            $row = new AdminTableRow($table);            $row->addText($serviceRequestRow->uniqueName);            $row->addText($serviceRequestRow->phpClass);            $row->addText($serviceRequestRow->application->application);            $parameter = new UrlParameter($serviceRequestRow->uniqueName);            $parameter->parameterName = 'service';            /* $site = clone(ServiceRequestSite::$site);             $site->addParameter($parameter);             $row->addSite($site);*/        }        /*                $form = new SearchForm($this);                $row=new BootstrapRow($form);                $application=new ApplicationListBox($row);                $application->submitOnChange=true;                $application->searchMode=true;                $reader=new WebServiceReader();                $reader->addOrder($reader->model->webService);                if ($application->hasValue()) {                    $reader->filter->andEqual($reader->model->applicationId,$application->getValue());                }                foreach ($reader->getData() as $webServiceRow) {                    /** @var AbstractWebService $webService */        /*       $webService = new $webServiceRow->phpClass();               $info = new WebServiceInformation($this);               $info->webService = $webService;           }*/        return parent::getContent();    }}