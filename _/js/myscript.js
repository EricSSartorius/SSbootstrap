$(function(){var a=window.location.hash;a&&$('ul.nav a[href="'+a+'"]').tab("show"),$("#monday.accordion-body").addClass("in"),$("#artists #tuesday.accordion-body").addClass("in"),$("#artists #wednesday.accordion-body").addClass("in"),$("#artists #thursday.accordion-body").addClass("in"),$("#artists #friday.accordion-body").addClass("in"),$(".aboutthemembers img").addClass("img-circle"),$("aside.photosfromlastyear img").addClass("img-thumbnail"),$(".memberinfo .photogrid img").addClass("img-circle"),$("#home a:contains('Home')").parent().addClass("active"),$("#about a:contains('About')").parent().addClass("active"),$("#members a:contains('Members')").parent().addClass("active"),$("#blog a:contains('Blog')").parent().addClass("active"),$("#events a:contains('Events')").parent().addClass("active"),$("#booking a:contains('Booking')").parent().addClass("active"),$("ul.nav li.dropdown").hover(function(){$(".dropdown-menu",this).fadeIn()},function(){$(".dropdown-menu",this).fadeOut("fast")}),$("[data-toggle='tooltip']").tooltip({animation:!0}),$(".modalphotos img").on("click",function(){$("#modal").modal({show:!0});var a=this.src.substr(0,this.src.length-7)+".jpg";$("#modalimage").attr("src",a),$("#modalimage").on("click",function(){$("#modal").modal("hide")})})});