<?phpnamespace Nemundo\Content\Action;use Nemundo\Admin\Com\Form\AbstractAdminForm;use Nemundo\Content\Type\AbstractContentType;use Nemundo\Package\Bootstrap\Form\BootstrapForm;abstract class AbstractActionForm extends AbstractAdminForm{    /**     * @var AbstractContentType     */    public $content;    public function getContent()    {        return parent::getContent(); // TODO: Change the autogenerated stub    }}