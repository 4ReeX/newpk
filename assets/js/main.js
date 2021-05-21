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

$('.hidenHover').hover(
  function() {
       $('.hidenHover').toggleClass('openHover');
  }
);



   
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


   



var myLen = $('.menu-s').find('.nav-item').length;
console.log(myLen);
var menuheight = $('.menu-s').height();
console.log(menuheight);
var setHeight = menuheight / (myLen + 1);
console.log(setHeight);
$('.menu-s .nav-item').height(setHeight + "px");







function closePotok() {
$('#createPotok').hide('fast');
$('#link1').css("filter", "blur(0px)");
$('#link2').css("filter", "blur(0px)");
$('#link1').attr("disabled", false);
$('#link2').attr("disabled", false);
};

function link1() {
    location.href = "poluchenie_ssilok.php"
};
function link2(){
        location.href = "offers.php"
};
function clickMe() {
        $(".linkToCopy").val("http://s2s.affimob.com/click?key=eromix&offer_id=11694&tmpl=eromix274&partner_id=125198&source_id=0&pt_id=%7BPK%7D");

};
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
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






$(window).on("load resize", function(event) { 
var pulHeight = $('#createNewsForm').outerHeight();
console.log(pulHeight);
$('#pulTableBody').height(pulHeight - 20 + "px");

});

// timeline - блок с горизонтальным скроллом
var timeline = document.getElementById('newsCar');
timeline.onmousedown = () => {
  let pageX = 0;

  document.onmousemove = e => {
    if (pageX !== 0) {
      timeline.scrollLeft = timeline.scrollLeft + (pageX - e.pageX);
    }
    pageX = e.pageX;
  };

  // заканчиваем выполнение событий
  timeline.onmouseup = () => {
    document.onmousemove = null;
    timeline.onmouseup = null;
  };

  // отменяем браузерный drag
  timeline.ondragstart = () => {
    return false;
  };
};




/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
  


  var $table = $('#table')
  var $remove = $('#remove')
  var selections = []

  function getIdSelections() {
    return $.map($table.bootstrapTable('getSelections'), function (row) {
      return row.id
    })
  }

  function responseHandler(res) {
    $.each(res.rows, function (i, row) {
      row.state = $.inArray(row.id, selections) !== -1
    })
    return res
  }

  function detailFormatter(index, row) {
    var html = []
    $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>')
    })
    return html.join('')
  }

  function operateFormatter(value, row, index) {
    return [
      '<a class="like" href="javascript:void(0)" title="Like">',
      '<i class="fa fa-heart"></i>',
      '</a>  ',
      '<a class="remove" href="javascript:void(0)" title="Remove">',
      '<i class="fa fa-trash"></i>',
      '</a>'
    ].join('')
  }

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like action, row: ' + JSON.stringify(row))
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function totalTextFormatter(data) {
    return 'Total'
  }

  function totalNameFormatter(data) {
    return data.length
  }

  function totalPriceFormatter(data) {
    var field = this.field
    return '$' + data.map(function (row) {
      return +row[field].substring(1)
    }).reduce(function (sum, i) {
      return sum + i
    }, 0)
  }

  function initTable() {
    $table.bootstrapTable('destroy').bootstrapTable({
      height: 550,
      locale: $('#locale').val(),
      columns: [
        [{
          field: 'state',
          checkbox: true,
          rowspan: 2,
          align: 'center',
          valign: 'middle'
        }, {
          title: 'Item ID',
          field: 'id',
          rowspan: 2,
          align: 'center',
          valign: 'middle',
          sortable: true,
          footerFormatter: totalTextFormatter
        }, {
          title: 'Item Detail',
          colspan: 3,
          align: 'center'
        }],
        [{
          field: 'name',
          title: 'Item Name',
          sortable: true,
          footerFormatter: totalNameFormatter,
          align: 'center'
        }, {
          field: 'price',
          title: 'Item Price',
          sortable: true,
          align: 'center',
          footerFormatter: totalPriceFormatter
        }, {
          field: 'operate',
          title: 'Item Operate',
          align: 'center',
          clickToSelect: false,
          events: window.operateEvents,
          formatter: operateFormatter
        }]
      ]
    })
    $table.on('check.bs.table uncheck.bs.table ' +
      'check-all.bs.table uncheck-all.bs.table',
    function () {
      $remove.prop('disabled', !$table.bootstrapTable('getSelections').length)

      // save your data, here just save the current page
      selections = getIdSelections()
      // push or splice the selections if you want to save all data selections
    })
    $table.on('all.bs.table', function (e, name, args) {
      console.log(name, args)
    })
    $remove.click(function () {
      var ids = getIdSelections()
      $table.bootstrapTable('remove', {
        field: 'id',
        values: ids
      })
      $remove.prop('disabled', true)
    })
  }

  $(function() {
    initTable()

    $('#table').change(initTable)
  })

  function payform() {
    window.location = "fin.php";
  };



