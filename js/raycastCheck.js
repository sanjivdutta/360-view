
AFRAME.registerComponent('collider-check', {
  dependencies: ['raycaster'],
  
	init: function () {
		this.el.addEventListener('raycaster-intersected', function () {
			console.log('Player hit something!');
		});

		this.el.addEventListener('mousedown',this.onClick.bind(this));
	},
     
	onClick: function(evt) {
	  console.log("Got Click");
	}
});