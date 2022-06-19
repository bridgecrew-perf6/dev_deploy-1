import AppType from "../../../framework/App/Type/AppType.js";
import SrfLivestreamContainer from "./SrfLivestreamContainer.js";

export default class SrfLivestreamApp extends AppType {

    constructor() {

        super();

        this.app="Srf Livestream";
        this.appIcon="paperclip";
        this.appContainer=new SrfLivestreamContainer();

    }

}