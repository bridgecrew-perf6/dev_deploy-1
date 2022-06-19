import AppType from "../../framework/App/Type/AppType.js";
import SrfAppContainer from "./SrfAppContainer.js";

export default class SrfApp extends AppType {

    constructor() {
        super();

        this.app = "Srf";
        this.appIcon = "tv";
        this.appContainer = new SrfAppContainer();

    }

}