$(document).ready(function(){
    s = new slider("._slider");
})
let carou = -350;
var slider = function(id){
    self=this;
    this.div = $(id);
    this.slider=this.div.find(".elsection");
    this.prec = this.div.find('._slider_prev');
    this.suiv = this.div.find('._slider_next')
    this.largeurCache = 350;
    this.largeur=0;
    this.div.find(".profiles").each(function(){
        self.largeur+=$(this).width();
        self.largeur+=parseInt($(this).css("padding-left"));
        self.largeur+=parseInt($(this).css("padding-right"));
        self.largeur+=parseInt($(this).css("margin-left"));
        self.largeur+=parseInt($(this).css("margin-right"));
    })
    this.saut = this.largeurCache;
    this.nbEtape = Math.ceil(this.largeur/this.saut - (this.largeurCache*2)/this.saut);
    this.courant=0
    this.suiv.click(function(){
        if(self.courant<=self.nbEtape){
            self.courant++
            self.slider.animate({
                left: -self.courant*self.saut
            },500)
        }
    })
    this.prec.click(function(){
        if(self.courant>0){
            self.courant--;
            self.slider.animate({
                left: -self.courant*self.saut
            },500)
        }
    })
}