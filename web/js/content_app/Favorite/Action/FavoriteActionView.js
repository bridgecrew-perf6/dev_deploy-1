import ContentView from "../../../content/ContentView.js";
import FontAwesomeIconContainer from "../../../framework/FontAwesome/Icon.js";
import FavoriteAction from "./FavoriteAction.js";
import ActionView from "../../../content/Action/ActionView.js";
import FavoriteButton from "../Com/Button/FavoriteButton.js";

export default class FavoriteActionView extends ActionView {   // ContentView {

    render() {

        let local = this;

        let btn = new FavoriteButton(this);
        btn.contentId=this.contentId;
        btn.render();


        /*
        let icon = new FontAwesomeIconContainer(this);
        icon.icon = "star";
        icon.onClick = function () {

            let action = new FavoriteAction();
            action.onAction(local.contentId);

        };*/

    }

}