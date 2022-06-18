import BootstrapButton from "../../../../framework/Bootstrap/Button/BootstrapButton.js";
import FeedImportService from "../../Service/FeedImportService.js";
import BootstrapSpinner from "../../../../framework/Bootstrap/Spinner/BootstrapSpinner.js";
import BodyContainer from "../../../../html/Document/Body.js";

export default class FeedImportButton extends BootstrapButton {

    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Feed Import";
        this.onClick = function () {

            let spinner=new BootstrapSpinner(new BodyContainer());

            let service = new FeedImportService();
            service.onFinished=function () {
              spinner.removeContainer();
            };
            service.sendRequest();

        };

    }

}