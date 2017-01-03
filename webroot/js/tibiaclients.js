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
					var content = " navbar-fixed-top navbar-inverse";
					document.getElementById(this.elements[i]).className = document.getElementById(this.elements[i]).className.replace( /(?:^|\s)navbar-static-top(?!\S)/g , '' );
					if (!document.getElementById(this.elements[i]).className.match(content)) {
						 document.getElementById(this.elements[i]).className += content;
					}
				}

				this.flagAdd = false;
			}
		},

		remove: function() {
			for(var i=0; i < this.elements.length; i++) {
				var content = " navbar-static-top";
				document.getElementById(this.elements[i]).className = document.getElementById(this.elements[i]).className.replace( /(?:^|\s)navbar-fixed-top navbar-inverse(?!\S)/g , '' );
				if (!document.getElementById(this.elements[i]).className.match(content)) {
					document.getElementById(this.elements[i]).className += content;
				}
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
			$('#back-to-top').fadeIn();
		} else {
			myNavBar.remove();
			$('#back-to-top').fadeOut();
		}
	}

	/**
	 * bind to the document scroll detection
	 */
	window.onscroll = function(e) {
		offSetManager();		
	}
	
	$('#back-to-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 700);

		return false;
	});

	/**
	 * We have to do a first detectation of offset because the page
	 * could be load with scroll down set.
	 */
	offSetManager();
});
