import ContentAction from "../../../../content/Action/ContentAction.js";
import DownloadActionView from "./DownloadActionView.js";


export default class DownloadAction extends ContentAction {

    constructor() {

        super();

        this.label = "Download";
        this.view = DownloadActionView;

    }

}