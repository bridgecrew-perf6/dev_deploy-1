
export default class _ImageWidget extends AdminWidget {



    set imageUrl(value) {

        let img = new AdminImage(this);
        img.label = this.widgetTitle;
        img.widthPercent = 100;
        img.src = value;
        img.imageLarge = value;
        img.render();

    }

}