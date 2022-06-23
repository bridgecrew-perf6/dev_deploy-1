import DivContainer from "../../../html/Content/Div.js";

export default class AdminSubtitle extends DivContainer {

    render() {
        super.render();
        this.addCssClass("admin-subtitle");
    }


}