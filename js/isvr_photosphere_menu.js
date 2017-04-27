var varid = 1;

    //===== Function to create diferent menus for each room ===
    function handleMenu() {
      console.log("varid"+varid);
      //--- OutsideView ---
      document.querySelector('#cursor').setAttribute('visible', true);
      
      if(varid == 1){
        //console.log("varid"+varid + "In ENTRANCE");
        document.getElementsByName('OutsideView')[0].setAttribute('visible',true);
      }
      //--- Entrance ---
      else if(varid == 2) {
       /// console.log("varid"+varid + "In LivingRoom");
        document.getElementsByName('Entrance')[0].setAttribute('visible',true);
      }

      //--- LivingRoom ---
      else if(varid == 3) {
        //console.log("varid"+varid + "In DiningRoom");
        document.getElementsByName('LivingRoom')[0].setAttribute('visible',true);
      }

      //--- DiningRoom ---
      else if(varid == 4) {
        //console.log("varid"+varid + "In Kitchen");
        document.getElementsByName('DiningRoom')[0].setAttribute('visible',true);
      }

      //--- Pool ---
      else if(varid == 5) {
        //console.log("varid"+varid + "In Bedroom");
        document.getElementsByName('Pool')[0].setAttribute('visible',true);
      }

      //--- Kitchen ---
      else if(varid == 6) {
        //console.log("varid"+varid + "In Washroom");
        document.getElementsByName('Kitchen')[0].setAttribute('visible',true);
      }
	  
	   //--- OtherDining ---
      else if(varid == 7) {
        //console.log("varid"+varid + "In Washroom");
        document.getElementsByName('OtherDining')[0].setAttribute('visible',true);
      }
	  
	    //--- MasterBedroom ---
      else if(varid == 8) {
        //console.log("varid"+varid + "In Washroom");
        document.getElementsByName('MasterBedroom')[0].setAttribute('visible',true);
      }
	    //--- OtherPoolArea ---
      else if(varid == 9) {
        document.getElementsByName('OtherPoolArea')[0].setAttribute('visible',true);
      }
	     //--- MasterBedRoomBathroom ---
      else if(varid == 10) {
        document.getElementsByName('MasterBedRoomBathroom')[0].setAttribute('visible',true);
      }
	   //--- FirstFloorLiving ---
      else if(varid == 11) {
        document.getElementsByName('FirstFloorLiving')[0].setAttribute('visible',true);
      }
	   //--- FirstFloorLiving2 ---
      else if(varid == 12) {
        document.getElementsByName('FirstFloorLiving2')[0].setAttribute('visible',true);
      }
	    //--- ParentsBedRoom ---
      else if(varid == 13) {
        document.getElementsByName('ParentsBedRoom')[0].setAttribute('visible',true);
      }
	     //--- ParentsBathroom ---
      else if(varid == 14) {
        document.getElementsByName('ParentsBathroom')[0].setAttribute('visible',true);
      }
	  //--- ChildrenRoom ---
      else if(varid == 15) {
        document.getElementsByName('ChildrenRoom')[0].setAttribute('visible',true);
      }
	    //--- ChildrenRoom2 ---
      else if(varid == 16) {
        document.getElementsByName('ChildrenRoom2')[0].setAttribute('visible',true);
      }
	    //--- ChildrenBathroom ---
      else if(varid == 17) {
        document.getElementsByName('ChildrenBathroom')[0].setAttribute('visible',true);
      }
	    //--- ChildrenMezzanine ---
      else if(varid == 18) {
        document.getElementsByName('ChildrenMezzanine')[0].setAttribute('visible',true);
      }
	    //--- BarArea ---
      else if(varid == 19) {
        document.getElementsByName('BarArea')[0].setAttribute('visible',true);
      }
	    //--- GuestRoom ---
      else if(varid == 20) {
        document.getElementsByName('GuestRoom')[0].setAttribute('visible',true);
      }
	    //--- HomeTheatre ---
      else if(varid == 22) {
        document.getElementsByName('HomeTheatre')[0].setAttribute('visible',true);
      }
	    //--- OpenTerrace ---
      else if(varid == 23) {
        document.getElementsByName('OpenTerrace')[0].setAttribute('visible',true);
      }
	     //--- Terrace ---
      else if(varid == 24) {
        document.getElementsByName('Terrace')[0].setAttribute('visible',true);
      }
    }

AFRAME.registerComponent('isvr-photosphere-menu', {

    init: function() {

      //window.addEventListener('touchstart', this.onClick.bind(this));
      window.addEventListener('keyup', this.onKeyup.bind(this)); 

      this.yaxis = new THREE.Vector3(0, 1, 0);
      this.zaxis = new THREE.Vector3(0, 0, 1);

      this.pivot = new THREE.Object3D();
      this.el.object3D.position.set(0, document.querySelector('#camera').object3D.getWorldPosition().y, -4);

      this.el.sceneEl.object3D.add(this.pivot);
      this.pivot.add(this.el.object3D);

      handleMenu();
    },

    onKeyup: function (evt) {
      /* space bar */
      // if (evt.keyCode == '32') {
      //   this.handleMenu();
      // }
    },

    update: function(oldData) {
    },

    remove: function() {
    }

});


