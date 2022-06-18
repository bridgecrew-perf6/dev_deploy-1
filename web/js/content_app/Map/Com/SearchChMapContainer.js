import DivContainer from "../../../html/Content/Div.js";


//SearchChMap (orginal object)
export default class SearchChMapContainer extends DivContainer {

    _map;

    constructor(parentContainer) {

        super(parentContainer);

        this.id = "mapcontainer";

        this._map = new SearchChMap();


    }


    loadMap() {
        this._map = new SearchChMapContainer();
    }


    set zoom(value) {

        this._map.set({zoom: value});

    }


    set ort(value) {

        this._map.set({center: value});

    }


    coordinate(lat, lon) {

        this._map.set({center: [lat, lon]});

    }


    render() {




    }



}