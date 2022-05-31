import AbstimmungResultatTable from "../Table/AbstimmungResultatTable.js";
import DivContainer from "../../../../html/Content/Div.js";
import GemeindeAutocomplete from "../../../Gemeinde/Com/Autocomplete/GemeindeAutocomplete.js";

export default class AbstimmungContainer extends DivContainer {


    render() {


        let gemeinde = new GemeindeAutocomplete(this);
        gemeinde.onWordChange = function (value) {

            resultat.gemeindeId = value;
            resultat.reloadData();

        };
        gemeinde.render();


        let resultat = new AbstimmungResultatTable(this);
        //resultat.widthPercent=100;
        resultat.widthPixel=700;
        resultat.render();


    }


}