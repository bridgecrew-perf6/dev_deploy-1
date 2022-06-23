import DivContainer from "../../../html/Content/Div.js";

export default class OpenLayersMap extends DivContainer {

    _map = null;

    render() {

        let local = this;

        local._map = new ol.Map({
            target: this._htmlElement,
            view: new ol.View({
                center: ol.proj.fromLonLat([8.39109452649979, 46.90517550899792]),
                zoom: 10
            })
        });

    }


    renderMap() {

        this._map.render();

    }



    set zoom(value) {

        this._map.getView().setZoom(value);
        //this._map.getView().setZoom(this._map.getView().getZoom() + 1);

    }


    zoomPlus() {
        this._map.getView().setZoom(this._map.getView().getZoom() + 1);
    }






    // setCenter
    center(lat, lon) {

        //this._map.getView().setCenter(ol.proj.fromLonLat([lat,lon]));

        /*this._map.setView(new ol.View({
            center: ol.proj.transform([lat, lon])
        }));*/



        /*view: new ol.View({
            center: ol.proj.fromLonLat([8.39109452649979, 46.90517550899792]),
            zoom: 10
        })*/


    }


    addLayer(layer) {

        this._map.addLayer(layer);
        return this;

    }

}