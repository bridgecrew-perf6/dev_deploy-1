import FontAwesomeIconContainer from "./Icon.js";


export default class IconButton extends FontAwesomeIconContainer {

    constructor(parentContainer = null) {

        super(parentContainer);
        this.addCssClass("icon-button");


    }


}