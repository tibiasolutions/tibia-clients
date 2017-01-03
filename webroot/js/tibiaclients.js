$(document).ready(function(){
	var myNavBar = {

		flagAdd: true,

		elements: [],

		init: function (elements) {
			this.elements = elements;
		},

		add : function() {
			if(this.flagAdd) {
				for(var i=0; i < this.elements.length; i++) {
					document.getElementById(this.elements[i]).className = document.getElementById(this.elements[i]).className.replace( /(?:^|\s)navbar-static-top(?!\S)/g , '' );
					document.getElementById(this.elements[i]).className += " navbar-fixed-top navbar-inverse";
					$('.cd-top').addClass('cd-fade-out');
				}
				this.flagAdd = false;
			}
		},

		remove: function() {
			for(var i=0; i < this.elements.length; i++) {
				document.getElementById(this.elements[i]).className = document.getElementById(this.elements[i]).className.replace( /(?:^|\s)navbar-fixed-top navbar-inverse(?!\S)/g , '' );
				document.getElementById(this.elements[i]).className += " navbar-static-top";
			}
			this.flagAdd = true;
		}

	};

	/**
	 * Init the object. Pass the object the array of elements
	 * that we want to change when the scroll goes down
	 */
	myNavBar.init(  [
		"header",
	]);

	/**
	 * Function that manage the direction
	 * of the scroll
	 */
	function offSetManager(){

		var yOffset = 110,
			offset_opacity = 1200,
			currYOffSet = window.pageYOffset;

		if(yOffset < currYOffSet) {
			myNavBar.add();
		} else {
			myNavBar.remove();
		}

		( currYOffSet > yOffset ) ? $('.cd-top').addClass('cd-is-visible') : $('.cd-top').removeClass('cd-is-visible cd-fade-out');
		if (currYOffSet > offset_opacity ) { 
			$('.cd-top').addClass('cd-fade-out');
		}
	}

	/**
	 * bind to the document scroll detection
	 */
	window.onscroll = function(e) {
		offSetManager();		
	}
	
	$('.cd-top').click(function () {
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, 700
		);
	});

	/**
	 * We have to do a first detectation of offset because the page
	 * could be load with scroll down set.
	 */
	offSetManager();
});
