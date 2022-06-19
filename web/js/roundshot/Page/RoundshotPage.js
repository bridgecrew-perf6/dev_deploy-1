import IconPageContainer from "../../framework/Page/IconPageContainer.js";
import RoundshotContainer from "../Com/Container/RoundshotContainer.js";


export default class RoundshotPage extends IconPageContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "Roundshot";
        this.pageIcon = "camera";

    }


    render() {


        let container = new RoundshotContainer(this);
        container.render();


        /*let roundshot = new RoundshotListBox(this);
        roundshot.render();*/


        /*
                let search=new SearchTextBox(this);
                search.onSearchChange=function () {
                  div.query=search.value;
                  div.reloadData();
                };
                search.render();

                let div=new RoundshotScrollDiv(this);
                div.paginationLimit=10;
                div.showLoader=false;
                div.render();*/


        /*  roundshot.loadData();

          roundshot.onChange = function (id) {

              //view.loadFromId(id);

          };*/

        //let view = new RoundshotView(this);

    }

}