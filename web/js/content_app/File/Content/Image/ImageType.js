import ImageForm from "./ImageForm.js";
import ImageView from "./ImageView.js";
import ContentType from "../../../../content/ContentType.js";
import ImageSearch from "./ImageSearch.js";

export default class ImageType extends ContentType {

    loadContentType() {

        this.id = "7e9bcfda-c76a-43b2-96e7-6525f090d4ae";
        this.label = "Image";
        this.form = ImageForm;
        this.view = ImageView;
        this.search = ImageSearch;

    }

}