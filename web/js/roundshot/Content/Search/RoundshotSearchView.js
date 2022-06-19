import ContentView from "../../../content/ContentView.js";
import RoundshotContainer from "../../Com/Container/RoundshotContainer.js";


export default class RoundshotSearchView extends ContentView {
    
    
    onData(data) {

        let container = new RoundshotContainer(this);
        container.render();



        
    }

}