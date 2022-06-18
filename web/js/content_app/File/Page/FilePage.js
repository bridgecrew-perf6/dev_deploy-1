import PageContainer from "../../../framework/Page/PageContainer.js";
import FileUploadForm from "../Com/Form/FileUploadForm.js";

export default class FilePage extends PageContainer {


    loadPage() {

        this.pageTitle = "File";

    }


    render() {

        let upload = new FileUploadForm(this);
        upload.serviceName="file-upload";
        upload.render();

    }

}