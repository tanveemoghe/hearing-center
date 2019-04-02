/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 


	
// Sidebar
function init_sidebar() {
// TODO: This is some kind of easy fix, maybe we can improve this
var setContentHeight = function () {
	// reset height
	$RIGHT_COL.css('min-height', $(window).height());

	var bodyHeight = $BODY.outerHeight(),
		footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
		leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
		contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

	// normalize content
	contentHeight -= $NAV_MENU.height() + footerHeight;

	$RIGHT_COL.css('min-height', contentHeight);
};

  $SIDEBAR_MENU.find('a').on('click', function(ev) {
	  console.log('clicked - sidebar_menu');
        var $li = $(this).parent();

        if ($li.is('.active')) {
            $li.removeClass('active active-sm');
            $('ul:first', $li).slideUp(function() {
                setContentHeight();
            });
        } else {
            // prevent closing menu if we are on child menu
            if (!$li.parent().is('.child_menu')) {
                $SIDEBAR_MENU.find('li').removeClass('active active-sm');
                $SIDEBAR_MENU.find('li ul').slideUp();
            }else
            {
				if ( $BODY.is( ".nav-sm" ) )
				{
					$SIDEBAR_MENU.find( "li" ).removeClass( "active active-sm" );
					$SIDEBAR_MENU.find( "li ul" ).slideUp();
				}
			}
            $li.addClass('active');

            $('ul:first', $li).slideDown(function() {
                setContentHeight();
            });
        }
    });

// toggle small or large menu 
$MENU_TOGGLE.on('click', function() {
		console.log('clicked - menu toggle');
		
		if ($BODY.hasClass('nav-md')) {
			$SIDEBAR_MENU.find('li.active ul').hide();
			$SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
		} else {
			$SIDEBAR_MENU.find('li.active-sm ul').show();
			$SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
		}

	$BODY.toggleClass('nav-md nav-sm');

	setContentHeight();

	$('.dataTable').each ( function () { $(this).dataTable().fnDraw(); });
});

	// check active menu
	$SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

	$SIDEBAR_MENU.find('a').filter(function () {
		return this.href == CURRENT_URL;
	}).parent('li').addClass('current-page').parents('ul').slideDown(function() {
		setContentHeight();
	}).parent().addClass('active');

	// recompute content when resizing
	$(window).smartresize(function(){  
		setContentHeight();
	});

	setContentHeight();

	// fixed sidebar
	if ($.fn.mCustomScrollbar) {
		$('.menu_fixed').mCustomScrollbar({
			autoHideScrollbar: true,
			theme: 'minimal',
			mouseWheel:{ preventDefault: true }
		});
	}
};
// Sidebar

// /view cat main
$(document).ready(function() {
    var table = $('#view_cat_main').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );


// /City management
$(document).ready(function() {
    var table = $('#city_management').DataTable( {
        responsive: true,
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );


// /view Sub category 
$(document).ready(function() {
    var table = $('#view_sub_cat').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );

/// Dashboard Recent Partner 
$(document).ready(function() {
    var table = $('#dashboard_recent_partner').DataTable( {
        responsive: true,
		"bPaginate": false,
		"bFilter": false,
		"bInfo": false
    } );
} );

/// Dashboard Recent Partner 
$(document).ready(function() {
    var table = $('#dashboard_recent_orders').DataTable( {
        responsive: true,
		"bPaginate": false,
		"bFilter": false,
		"bInfo": false
    } );
} );

/// Dashboard Recent Partner 
$(document).ready(function() {
    var table = $('#dashboard_recent_register').DataTable( {
        responsive: true,
		"bPaginate": false,
		"bFilter": false,
		"bInfo": false
    } );
} );

/// Dashboard Recent Partner 
$(document).ready(function() {
    var table = $('#dashboard_recent_interested').DataTable( {
        responsive: true,
		"bPaginate": false,
		"bFilter": false,
		"bInfo": false
    } );
} );

/// Dashboard Recent Order 
$(document).ready(function() {
    var table = $('#dashboard_recent_order').DataTable( {
        responsive: true,
		"bPaginate": false,
		"bFilter": false,
		"bInfo": false
    } );
} );






// /view Sub Sub category 
$(document).ready(function() {
    var table = $('#sub_sub_category').DataTable( {
       rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );


// /view_banner
$(document).ready(function() {
    var table = $('#view_banner').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );

// View Customer Table

$(document).ready(function() {
    var table = $('#view_customer_table').DataTable( {
        responsive: true,
		dom: 'Bfrtip',
		"order": [[ 0, 'desc' ]],
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );

// View Customer Table

$(document).ready(function() {
    var table = $('#view__services_request').DataTable( {
        responsive: true,
		dom: 'Bfrtip',
		"order": [[ 0, 'desc' ]],
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );


$(document).ready(function() {
    var table = $('#datatable-buttons').DataTable( {
        responsive: true,
		dom: 'Bfrtip',
		"order": [[ 0, 'desc' ]],
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );


/// Dashboard Recent Order 
$(document).ready(function() {
    var table = $('#short_view_services_request').DataTable( {
        responsive: true,
		"bPaginate": false,
		"bFilter": false,
		"bInfo": false
    } );
} );


/// Dashboard Recent Order 
$(document).ready(function() {
    var table = $('#short_view_order_history').DataTable( {
        responsive: true,
		"bPaginate": true,
		"bFilter": true,
		"bInfo": true
    } );
} );

 $(document).ready(function() {
  var table =  $('#short_view_order_history').DataTable();    
      $('#dropdown1').on('change', function () {
                     table.columns(5).search( this.value ).draw();
                 } );
     $('#dropdown2').on('change', function () {
                     table.columns(7).search( this.value ).draw();
                 } );
 });

$(document).ready(function() {
   var table =  $('#short_view_order_history').DataTable();    
     $('#dropdown1').on('change', function () {
                    table.columns(5).search( this.value ).draw();
                } );
    $('#dropdown2').on('change', function () {
                    table.columns(7).search( this.value ).draw();
                } );
	$('#dropdown3').on('change', function () {
                    table.columns(8).search( this.value ).draw();
                } );
});


$(document).ready(function() {
    var table = $('#view_order_details').DataTable( {
        responsive: true,
		dom: 'Bfrtip',
		"order": [[ 0, 'desc' ]],
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );

$(document).ready(function() {
   var table =  $('#view_order_details').DataTable();    
     $('#dropdown1').on('change', function () {
                    table.columns(2).search( this.value ).draw();
                } );
    $('#dropdown2').on('change', function () {
                    table.columns(6).search( this.value ).draw();
                } );
	$('#dropdown3').on('change', function () {
                    table.columns(3).search( this.value ).draw();
     } );
	$('#dropdown4').on('change', function () {
                    table.columns(5).search( this.value ).draw();
     } );
});


$(document).ready(function() {
    var table = $('#planhistory').DataTable( {
        responsive: true,
		dom: 'Bfrtip',
		"order": [[ 0, 'desc' ]],
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );

// products_list

$(document).ready(function() {
    var table = $('#products_list').DataTable( {
        responsive: true,
		dom: 'Bfrtip',
		"order": [[ 0, 'desc' ]],
        buttons: [
            'copy', 'csv', 'print'
        ]
    } );
} );

// Js include files

   $(function(){
      $("#header").load("header.html"); 
    });
	
// Js check all
 $(document).ready(function () {
    $("#ckbCheckAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
    
    $(".checkBoxClass").change(function(){
        if (!$(this).prop("checked")){
            $("#ckbCheckAll").prop("checked",false);
        }
    });
});


    $('img.gallery').on('click', function () {
        var image = $(this).attr('src');
        //alert(image);
        $('#myModal').on('show.bs.modal', function () {
            $(".showimage").attr("src", image);
        });
    });


$(document).ready(function() {
    $('#invitationtable').DataTable();
} );

$(document).ready(function() {
    $('#invitationoffer').DataTable();
} );

/**Select all Services**/
$('#select_service_cat_all').click(function() {
    $('#add_service_cat option').prop('selected', true);
});

$('#deselect_service_cat_all').click(function() {
    $('#add_service_cat option').prop('selected', false);
});

/**Select all Product Category**/
$('#select_pro_cat_all').click(function() {
    $('#add_pro_cat option').prop('selected', true);
});

$('#deselect_pro_cat_all').click(function() {
    $('#add_pro_cat option').prop('selected', false);
});


$(function() {
  var loc = window.location.href; // returns the full URL
  if(/dashboard.html/.test(loc)) {
    $('#partner_item').addClass('active');
  };
  if(/edit-main-category.html/.test(loc)) {
    $('#category_item').addClass('active');
  };
  if(/edit-sub-category.html/.test(loc)) {
    $('#category_item').addClass('active');
  };
  if(/edit-sub-sub-category.html/.test(loc)) {
    $('#category_item').addClass('active');
  };
  
  if(/edit-partner.html/.test(loc)) {
    $('#partner_item').addClass('active');
  };
  if(/edit-customer.html/.test(loc)) {
    $('#customer_item').addClass('active');
  };
  if(/edit-product-category.html/.test(loc)) {
    $('#product_item').addClass('active');
  }
});


var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});

// offer by buttons

$(document).ready(function(){

    $('input[type="radio"]').click(function(){

        var inputValue = $(this).attr("value");

        var targetBox = $("." + inputValue);

        $(".offerbybox").not(targetBox).hide();

        $(targetBox).show();

    });

});



function init_sidebar(){var a=function(){$RIGHT_COL.css("min-height",$(window).height());var a=$BODY.outerHeight(),b=$BODY.hasClass("footer_fixed")?-10:$FOOTER.height(),c=$LEFT_COL.eq(1).height()+$SIDEBAR_FOOTER.height(),d=a<c?c:a;d-=$NAV_MENU.height()+b,$RIGHT_COL.css("min-height",d)};$SIDEBAR_MENU.find("a").on("click",function(b){var c=$(this).parent();c.is(".active")?(c.removeClass("active active-sm"),$("ul:first",c).slideUp(function(){a()})):(c.parent().is(".child_menu")?$BODY.is(".nav-sm")&&($SIDEBAR_MENU.find("li").removeClass("active active-sm"),$SIDEBAR_MENU.find("li ul").slideUp()):($SIDEBAR_MENU.find("li").removeClass("active active-sm"),$SIDEBAR_MENU.find("li ul").slideUp()),c.addClass("active"),$("ul:first",c).slideDown(function(){a()}))}),$MENU_TOGGLE.on("click",function(){$BODY.hasClass("nav-md")?($SIDEBAR_MENU.find("li.active ul").hide(),$SIDEBAR_MENU.find("li.active").addClass("active-sm").removeClass("active")):($SIDEBAR_MENU.find("li.active-sm ul").show(),$SIDEBAR_MENU.find("li.active-sm").addClass("active").removeClass("active-sm")),$BODY.toggleClass("nav-md nav-sm"),a()}),$SIDEBAR_MENU.find('a[href="'+CURRENT_URL+'"]').parent("li").addClass("current-page"),$SIDEBAR_MENU.find("a").filter(function(){return this.href==CURRENT_URL}).parent("li").addClass("current-page").parents("ul").slideDown(function(){a()}).parent().addClass("active"),
//$(window).smartresize(function(){a()}),
a(),$.fn.mCustomScrollbar&&$(".menu_fixed").mCustomScrollbar({autoHideScrollbar:!0,theme:"minimal",mouseWheel:{preventDefault:!0}})};
$(document).ready(function(){init_sidebar()});

var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
    $BODY = $('body'),
    $MENU_TOGGLE = $('#menu_toggle'),
    $SIDEBAR_MENU = $('#sidebar-menu'),
    $SIDEBAR_FOOTER = $('.sidebar-footer'),
    $LEFT_COL = $('.left_col'),
    $RIGHT_COL = $('.right_col'),
    $NAV_MENU = $('.nav_menu'),
    $FOOTER = $('footer');
	