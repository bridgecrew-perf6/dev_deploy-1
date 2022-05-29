<?phpnamespace Nemundo\App\WebService\Request;use Nemundo\Core\Base\AbstractBase;use Nemundo\Core\Debug\Debug;use Nemundo\Core\Log\LogMessage;// AbstractWebServiceabstract class AbstractWebServicePostRequest extends AbstractWebService{  //  public $webServiceLabel;//    protected $url;    private $postData = [];    private $filenameList = [];    /*abstract protected function loadWebService();    public function __construct() {        $this->loadWebService();    }*/    protected function addValue($key, $value)    {        $this->postData[$key] = $value;        return $this;    }    protected function addFile($key, $filename)    {        $this->filenameList[$key] = $filename;        return $this;    }    public function sendRequest()    {        $crl = curl_init($this->url);        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);        curl_setopt($crl, CURLINFO_HEADER_OUT, true);        curl_setopt($crl, CURLOPT_POST, true);        $postData = $this->postData;        foreach ($this->filenameList as $key=>$filename) {            $postData[$key]= curl_file_create($filename);        }        curl_setopt($crl, CURLOPT_POSTFIELDS, $postData);        $result = curl_exec($crl);        if ($result === false) {            (new LogMessage())->writeError('Curl error: ' . curl_error($crl));        }        curl_close($crl);        return $result;    }}