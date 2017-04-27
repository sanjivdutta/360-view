var myVar;
var oldID = 1;
var newID = 1;
var timeInterval = 0;
var timer;

AFRAME.registerComponent('isvr-photosphere-menu-thumb', {

    init: function() {

      this.el.addEventListener('mouseenter', this.enter.bind(this));
      this.el.addEventListener('mouseleave',this.leave.bind(this));
      //this.el.addEventListener('mousedown',this.onClick.bind(this));
    },

    // onClick: function(evt) {
    //   newID = this.el.getAttribute('data-image-id');
    //   this.change(this,newID);
    //   console.log("Got Click");
    // },

    // onClick: function(evt) {
    //   var position = this.el.getAttribute('position');
    //   /* prevent immediate selection of image after menu appears */
    //   if (this.el.parentEl.getAttribute('visible') && position.z == 0.5) {
    //     var id = this.el.getAttribute('data-image-id');
    //     id = '#img-photosphere-' + id;
    //      keep menu if material is the same 
    //     if (document.querySelector('#photosphere').getAttribute('material').src != id) {
    //       document.querySelector('#photosphere-menu').setAttribute('visible', false);
    //       document.querySelector('#cursor').setAttribute('visible', false);
    //       document.querySelector('#photosphere').setAttribute('material', 'src', id);
    //     }
    //   }
    // },

    enter: function(evt) {
      newID = this.el.getAttribute('data-image-id');
      clearTimeout(myVar);

      //--- Reset TimeInterval ---
      clearInterval(timer);
      timeInterval = 0;

      myVar = setTimeout(this.change.bind(this,newID),2000);
    },

    leave: function(evt){
      clearTimeout(myVar);
      
      //-- Stop Loader ---
      clearInterval(timer);
      timeInterval = 0;
    },

    change: function(evt){
     var id = this.el.getAttribute('data-image-id');
    if (this.el.parentEl.getAttribute('visible')  ) {
      id = '#img-photosphere-' + id;
      /* keep menu if material is the same */
      if (document.querySelector('#photosphere').getAttribute('material').src != id) {
        varid = newID;
        document.querySelector('#photosphere-menu').setAttribute('visible', false);
        document.querySelector('#photosphere-menu2').setAttribute('visible', false);
        document.querySelector('#photosphere-menu3').setAttribute('visible', false);
        document.querySelector('#photosphere-menu4').setAttribute('visible', false);
        document.querySelector('#photosphere-menu5').setAttribute('visible', false);
        document.querySelector('#photosphere-menu6').setAttribute('visible', false);
		document.querySelector('#photosphere-menu7').setAttribute('visible', false);
		document.querySelector('#photosphere-menu8').setAttribute('visible', false);
		/*document.querySelector('#photosphere-menu9').setAttribute('visible', false);
		document.querySelector('#photosphere-menu10').setAttribute('visible', false);
		document.querySelector('#photosphere-menu11').setAttribute('visible', false);
		document.querySelector('#photosphere-menu12').setAttribute('visible', false);
		document.querySelector('#photosphere-menu13').setAttribute('visible', false);
		document.querySelector('#photosphere-menu14').setAttribute('visible', false);
		document.querySelector('#photosphere-menu15').setAttribute('visible', false);
		document.querySelector('#photosphere-menu16').setAttribute('visible', false);
		document.querySelector('#photosphere-menu17').setAttribute('visible', false);
		document.querySelector('#photosphere-menu18').setAttribute('visible', false);
		document.querySelector('#photosphere-menu19').setAttribute('visible', false);
		document.querySelector('#photosphere-menu20').setAttribute('visible', false);
		document.querySelector('#photosphere-menu22').setAttribute('visible', false);
		document.querySelector('#photosphere-menu23').setAttribute('visible', false);
		document.querySelector('#photosphere-menu24').setAttribute('visible', false);*/
        document.querySelector('#photosphere').setAttribute('material', 'src', id);
        
        handleMenu();
      }
    }
  },

    update: function(oldData) {
    },

    remove: function() {
    }

});
