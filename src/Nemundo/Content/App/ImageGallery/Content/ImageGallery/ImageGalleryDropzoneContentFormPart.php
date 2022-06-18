<?phpnamespace Nemundo\Content\App\ImageGallery\Content\ImageGallery;use Nemundo\Content\App\ImageGallery\Site\ImageGalleryUploadSite;use Nemundo\Content\Form\AbstractContentFormPart;use Nemundo\Html\Form\Input\AcceptFileType;use Nemundo\Html\Paragraph\Paragraph;use Nemundo\Model\Data\Property\File\FileProperty;use Nemundo\Package\Bootstrap\FormElement\BootstrapFileUpload;use Nemundo\Package\Bootstrap\FormElement\BootstrapTextBox;use Nemundo\Package\Dropzone\DropzoneUploadForm;class ImageGalleryDropzoneContentFormPart extends AbstractContentFormPart{    /**     * @var ImageGalleryContentType     */    public $contentType;    /**     * @var BootstrapTextBox     */  //  private $imageGallery;    /**     * @var DropzoneUploadForm     */    private $upload;    protected function loadContainer()    {        parent::loadContainer(); // TODO: Change the autogenerated stub        /*$this->imageGallery = new BootstrapTextBox($this);        $this->imageGallery->label = 'Image Gallery';        $this->imageGallery->validation = true;*/        $p=new Paragraph($this);        $p->content='dropzone';        $this->upload = new DropzoneUploadForm($this);  // new BootstrapFileUpload($this);$this->upload->uploadSite=ImageGalleryUploadSite::$site;        //$this->upload->label = 'Image';        $this->upload->acceptedFileType= AcceptFileType::IMAGE;        //$this->upload->acceptFileType = AcceptFileType::IMAGE;        //$this->upload->multiUpload = true;    }    /*    protected function loadUpdateForm()    {        $row = $this->contentType->getDataRow();        $this->imageGallery->value = $row->imageGallery;        $table=new AdminTable($this);        $imageReader=new ImageReader();        $imageReader->filter->andEqual($imageReader->model->galleryId,$this->contentType->getDataId());        foreach ($imageReader->getData() as $imageRow) {            $row=new TableRow($table);            $img=new BootstrapResponsiveImage($row);            $img->src = $imageRow->image->getImageUrl($imageRow->model->imageAutoSize400);            /*            $site=clone(ImageDeleteSite::$site);            $site->addParameter(new ImageParameter($imageRow->id));            $row->addIconSite($site);*/    /*    }    }*/    public function saveData()    {        $this->contentType->imageGallery = '';  //$this->imageGallery->getValue();        $this->contentType->saveType();       /* foreach ($this->upload->getMultiFileRequest() as $fileRequest) {            $this->contentType->addImage((new FileProperty())->fromFileRequest($fileRequest));        }*/        return $this->contentType->getContentId();    }}