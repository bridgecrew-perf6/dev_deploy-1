<?phpnamespace Nemundo\Content\App\Share\Action\PrivateShare;use Nemundo\Content\Action\AbstractActionForm;use Nemundo\Core\Validation\ValidationType;use Nemundo\Package\Bootstrap\FormElement\BootstrapHtmlEditor;use Nemundo\Package\Bootstrap\FormElement\BootstrapTextBox;class PrivateShareActionForm extends AbstractActionForm{    /**     * @var BootstrapTextBox     */    private $email;    /**     * @var BootstrapHtmlEditor     */    private $message;    public function getContent()    {        $this->email = new BootstrapTextBox($this);        $this->email->label = 'eMail';        $this->email->validation = true;        $this->email->validationType = ValidationType::IS_EMAIL;        $this->message = new BootstrapHtmlEditor($this);        $this->message->label = 'Message';        return parent::getContent();    }    protected function onSubmit()    {        $action = new PrivateShareAction();        $action->email = $this->email->getValue();        $action->message = $this->message->getValue();        $action->onAction($this->content);    }}