$(function(){var a=window.location.hash;a&&$('ul.nav a[href="'+a+'"]').tab("show"),$("#monday.accordion-body").addClass("in"),$("#artists #tuesday.accordion-body").addClass("in"),$("#artists #wednesday.accordion-body").addClass("in"),$("#artists #thursday.accordion-body").addClass("in"),$("#artists #friday.accordion-body").addClass("in"),$(".aboutthemembers img").addClass("img-circle"),$("aside.photosfromlastyear img").addClass("img-thumbnail"),$(".memberinfo .photogrid img").addClass("img-circle"),$("#home a:contains('HOME')").parent().addClass("active"),$("#about a:contains('ABOUT')").parent().addClass("active"),$("#members a:contains('MEMBERS')").parent().addClass("active"),$("#blog a:contains('GALLERY')").parent().addClass("active"),$("#booking a:contains('BOOKING')").parent().addClass("active"),$("ul.nav li.dropdown").hover(function(){$(".dropdown-menu",this).fadeIn()},function(){$(".dropdown-menu",this).fadeOut("fast")}),$("[data-toggle='tooltip']").tooltip({animation:!0}),$(".modalphotos img").on("click",function(){$("#modal").modal({show:!0});var a=this.src.substr(0,this.src.length-7)+".jpg";$("#modalimage").attr("src",a),$("#modalimage").on("click",function(){$("#modal").modal("hide")})})});