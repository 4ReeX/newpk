$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	});

	jQuery('.selectpicker').selectpicker;


	

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	$('.equal-height').matchHeight({
		property: 'max-height'
	});

	// var chartsheight = $('.flotRealtime2').height();
	// $('.traffic-chart').css('height', chartsheight-122);


	// Counter Number
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 3000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});

// Search Trigger
  $('#SearchToggle').on('click', function(event) {
    var windowWidth = $(window).width();
      $('#SearchBlock').toggleClass('open-search');
      $('#SearchBlock').toggleClass('active');
       $('#SearchToggle').toggleClass('openSearchActivate');  
    }); 

 $(".customize-table").on('click', function(event) {
      $('#createPotok').toggleClass('display-none');
    });

     
    
jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
});
jQuery(document).ready(function() {
jQuery(".standardSelect").chosen({
    disable_search_threshold: 10,
    no_results_text: "Oops, nothing found!",
    width: "100%"
});
});
 


/*$('.hidenHover').hover(
  function() {
       $('.hidenHover').toggleClass('openHover');
  }
);*/



	 
	// Menu Trigger
	$('#menuToggle').on('click', function(event) {
		var windowWidth = $(window).width();   		 
		if (windowWidth<768) { 
			$('body').removeClass('open'); 
			$('footer').removeClass('open');
			if (windowWidth<768){ 
				$('#left-panel').slideToggle(); 
			} else {
				$('#left-panel').toggleClass('open-menu');  
			} 
		} else {
			$('body').toggleClass('open');
			$('footer').toggleClass('open');
			$('#left-panel').toggleClass('open-menu');  
		} 
			 
	}); 

	 
var MyWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var BrowsWidth = document.documentElement.clientWidth;
var MobilePadding = 40;
var FinalWidth = BrowsWidth - MobilePadding;


	// Load Resize 
	$(window).on("load resize", function(event) { 
		jQuery('.chtitle').text(document.title);
		var windowWidth = $(window).width();  		 
		if (windowWidth<768) {
			$('body').addClass('small-device'); 
			//document.getElementById('fullWidth').style.width = MyWidth + "px";
      		document.getElementById('fullWidth').style.width = FinalWidth + "px";
      		document.getElementById('fullWidth2').style.width = FinalWidth + "px";
      		document.getElementById('menuToggle').style.marginLeft = "-20px";
      		
		} else {
			$('body').removeClass('small-device');  
			$('#menuToggle').css("margin-left", "0px")
		} 
		
	});

  	
});

function test() {
if (document.getElementById('d1').value == "1") {
    $('#createPotok').show('fast');
    $('#link1').css("filter", "blur(3px)");
    $('#link2').css("filter", "blur(3px)");
    $('#link1').attr("disabled", true);
    $('#link2').attr("disabled", true);
}

};


function closePotok() {
$('#createPotok').hide('fast');
$('#link1').css("filter", "blur(0px)");
$('#link2').css("filter", "blur(0px)");
$('#link1').attr("disabled", false);
$('#link2').attr("disabled", false);
};

function link1() {
    location.href = "poluchenie_ssilok.php"
}
function link2(){
        location.href = "offers.php"
}
function clickMe() {
        $(".linkToCopy").val("http://s2s.affimob.com/click?key=eromix&offer_id=11694&tmpl=eromix274&partner_id=125198&source_id=0&pt_id=%7BPK%7D");

}
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}

function openTabs1() {
    $('#first').show('fast');
    $('#second').hide('fast');
    $('#third').hide('fast');
};

function openTabs2() {
    $('#first').hide('fast');
    $('#second').show('fast');
    $('#third').hide('fast');
};

function openTabs3() {
    $('#first').hide('fast');
    $('#second').hide('fast');
    $('#third').show('fast');
};



function myFunction2() {
var x = document.getElementById("http2");
if (x.innerHTML === "https://") {
x.innerHTML = "http://";
} else {
x.innerHTML = "https://";
}
};

function myFunction() {
var x = document.getElementById("http");
if (x.innerHTML === "https://") {
x.innerHTML = "http://";
} else {
x.innerHTML = "https://";
}
};






var CardW = document.getElementById('CardW');
var MyWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var BrowsWidth = document.documentElement.clientWidth;
if ($(window).width() < 768) {
    //document.getElementById('fullWidth').style.width = MyWidth + "px";
    CardW.style.PPwidth = BrowsWidth + "px";
    CardW.style.maxWidth = "100%";
    CardW.style.minWidth = "100%";

};
var MyWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var BrowsWidth = document.documentElement.clientWidth;
var MobilePadding = 40;
var FinalWidth = BrowsWidth - MobilePadding;
if ($(window).width() < 1024) {
//document.getElementById('fullWidth').style.width = MyWidth + "px";
document.getElementById('fullWidth').style.width = FinalWidth + "px";
document.getElementById('fullWidth').style.maxWidth = "100%";
document.getElementById('fullWidth').style.minWidth = "100%";
};

var MyWidth1 = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var BrowsWidth1 = document.documentElement.clientWidth;
var MobilePadding = 40;
var FinalWidth1 = BrowsWidth1 - MobilePadding;
if ($(window).width() < 1024) {
//document.getElementById('fullWidth').style.width = MyWidth + "px";
document.getElementById('fullWidth1').style.width = FinalWidth1 + "px";
document.getElementById('fullWidth1').style.maxWidth = "100%";
document.getElementById('fullWidth1').style.minWidth = "100%";
};
$(function () {
    
        // Mobiscroll Date & Time initialization
        $('#demo-mobile').mobiscroll().date({
            display: 'bubble'   // Specify display mode like: display: 'bottom' or omit setting to use default
        });
    
        // Mobiscroll Date & Time initialization
        $('#demo-desktop').mobiscroll().date({
            display: 'bubble',  // Specify display mode like: display: 'bottom' or omit setting to use default
            touchUi: false      // More info about touchUi: https://docs.mobiscroll.com/4-8-3/datetime#opt-touchUi
        });
    
    });

    $(window).on("load resize", function(event) { 
    var windowWidthS = $(window).width();      
    if (windowWidthS<1381) {
      $('#blockInputOperators').addClass('col-lg-4'); 
      $('#blockInputOffers').addClass('col-lg-4');
      $('#blockInputSpace').css("display", "none");
      $('#blockInputPresets').addClass('col-lg-4');
      $('body').addClass('open');
      $('#blockInputDatapicker').addClass('col-lg-3');
      $('#blockInputPeriod').removeClass('col-lg-4');
      $('#blockInputPeriod').addClass('col-lg-3');

    } else {
      $('#blockInputOperators').removeClass('col-lg-4'); 
      $('#blockInputOffers').removeClass('col-lg-4');
      $('#blockInputSpace').css("display", "block");
      $('#blockInputPresets').removeClass('col-lg-4');
      $('body').removeClass('open');

    } 
    
  });


function redSmLink() {
  location.href = 'smarts.php';
};


function goToUserPhp() {
  location.href = 'user.php';
}

function closeSmallModal() {
$('body').toggleClass('modal-open');
$('#smallModal').toggleClass('show');
$('modal').setAttribute("aria-hidden", "true");
}


function closeMassEditModal() {
$('body').toggleClass('modal-open');
$('#ModalMassEdit').toggleClass('show');
$('modal').setAttribute("aria-hidden", "true");
}




$('.list-group-item').on('click', function(event) {
        $(this).toggleClass("active");
    });