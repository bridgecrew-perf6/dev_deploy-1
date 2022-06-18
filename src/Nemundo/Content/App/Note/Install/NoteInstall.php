<?phpnamespace Nemundo\Content\App\Note\Install;use Nemundo\App\Application\Setup\ApplicationSetup;use Nemundo\App\WebService\Setup\ServiceRequestSetup;use Nemundo\Content\App\Note\Application\NoteApplication;use Nemundo\Content\App\Note\Content\Note\NoteContentType;use Nemundo\Content\App\Note\Data\NoteModelCollection;use Nemundo\Content\App\Note\Service\NoteDeleteService;use Nemundo\Content\App\Note\Service\NoteListService;use Nemundo\Content\App\Note\Service\NotePostService;use Nemundo\Content\Setup\ContentTypeSetup;use Nemundo\Model\Setup\ModelCollectionSetup;use Nemundo\App\Application\Type\Install\AbstractInstall;class NoteInstall extends AbstractInstall{    public function install()    {        (new ApplicationSetup())->addApplication(new NoteApplication());        (new ModelCollectionSetup())->addCollection(new NoteModelCollection());        (new ContentTypeSetup(new NoteApplication()))            ->addContentType(new NoteContentType());        (new ServiceRequestSetup(new NoteApplication()))            ->addService(new NoteListService())            ->addService(new NotePostService())            ->addService(new NoteDeleteService())        ;    }}