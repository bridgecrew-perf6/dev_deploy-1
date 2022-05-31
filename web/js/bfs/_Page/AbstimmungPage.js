import PageContainer from "../../framework/Page/PageContainer.js";
import ResultatComparisonTable from "../Com/Table/ResultatComparisonTable.js";
import H3Container from "../../html/Title/H3.js";
import GeoLevelListBox from "../Com/ListBox/GeoLevelListBox.js";
import KantonListBox from "../Com/ListBox/KantonListBox.js";
import FlexLayout from "../../framework/Com/Layout/FlexLayout.js";
import AbstimmungContainer from "../Com/Container/AbstimmungContainer.js";
import IconPageContainer from "../../framework/Page/IconPageContainer.js";

export default class _AbstimmungPage extends IconPageContainer {


    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "Eidgenössische Abstimmungen";
        this.pageIcon="bank";

    }


    render() {

        let container = new AbstimmungContainer(this);
        container.render();

    }

}
