import ContentForm from "../../../../content/ContentForm.js";
import BootstrapTextBox from "../../../../framework/Bootstrap/Form/BootstrapTextBox.js";


export default class FeedForm extends ContentForm {

    _feedUrl;

    constructor(parentContainer) {

        super(parentContainer);
        this.serviceName = "feed-post";

    }


    render() {

        this._feedUrl = new BootstrapTextBox(this);
        this._feedUrl.label = "Feed Url"
        this._feedUrl.name = "feed_url";
        this._feedUrl.validation=true;
        this._feedUrl.val

        this.renderSubmitButton();

    }


    validateForm() {

        let value = true;


        if (this._feedUrl.value ==="") {

            this._feedUrl.errorMessage="Keine Eingabe";
            value = false;

        }



        return value;


    }


}