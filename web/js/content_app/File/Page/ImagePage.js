import AdminButton from "../../../framework/AdminButton.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import StatusInformation from "../../../framework/Information/StatusInformation.js";
import LoaderContainer from "../../../framework/Com/Loader/Loader.js";
import IconPageContainer from "../../../framework/Page/IconPageContainer.js";
import ImageSearchContainer from "../Com/Container/ImageSearchContainer.js";
import ImageFileUploadForm from "../Com/Form/ImageFileUploadForm.js";
import HyperlinkContainer from "../../../html/Hyperlink/Hyperlink.js";
import DisplayStyle from "../../../html/Style/Display.js";
import FlexDirection from "../../../html/Style/Flex/FlexDirection.js";

export default class ImagePage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.pageTitle = "Image";
        this.pageIcon = "image";

    }


    render() {

        let form = new ImageFileUploadForm(this);
        form.onUpload = function () {
            container.loadData();
        };
        form.render();

        let hyperlink = new HyperlinkContainer(this);
        hyperlink.text = "Download All Images";
        hyperlink.href = "/app/file/image/image-download-zip";
        hyperlink.download = "image.zip";


        let btn = new AdminButton(this);
        btn.label = "Delete All";
        btn.onClick = function () {

            let loader = new LoaderContainer();
            container.addContainer(loader);

            let request = new ServiceRequest("image-delete-all")
            request.onFinished = function () {

                loader.removeContainer();

                let information = new StatusInformation();
                information.showInformation("Deleting finished");

                container.emptyContainer();

            };

            request.sendRequest();

        };


        let container = new ImageSearchContainer(this);   // new ImageContainer(this);  // new ImageFileContainer(this);
        //container.heightPixel = 500;  // heightPercent=100;
        //container.maxWidthPixel=400;
        container.display=DisplayStyle.FLEX;
        container.flexDirection=FlexDirection.ROW;
        container.flexWrap=true;
        container.widthPercent=100;
        container.render();


    }


}