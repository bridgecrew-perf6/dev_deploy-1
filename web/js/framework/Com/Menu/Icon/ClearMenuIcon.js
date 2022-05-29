import MenuIcon from "../../../Menu/MenuIcon.js";

export default class ClearMenuIcon extends MenuIcon {

    constructor(parentContainer = null) {
        super(parentContainer);
        this.icon = "x-lg";
        this.label = "Clear";
    }

}