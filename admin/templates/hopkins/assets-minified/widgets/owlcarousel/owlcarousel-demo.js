$(document).ready(function(){$(".owl-carousel-1").owlCarousel({lazyLoad:!0,items:4,navigation:!0,navigationText:["<i class='glyph-icon icon-angle-left'></i>","<i class='glyph-icon icon-angle-right'></i>"]}),$(".owl-carousel-2").owlCarousel({lazyLoad:!0,itemsCustom:[[0,2],[450,4],[600,7],[700,9],[1e3,10],[1200,12],[1400,13],[1600,15]],navigation:!0,navigationText:["<i class='glyph-icon icon-angle-left'></i>","<i class='glyph-icon icon-angle-right'></i>"]}),$(".owl-carousel-3").owlCarousel({lazyLoad:!0,autoPlay:3e3,items:2,stopOnHover:!0,navigation:!0,navigationText:["<i class='glyph-icon icon-angle-left'></i>","<i class='glyph-icon icon-angle-right'></i>"],paginationSpeed:1e3,goToFirstSpeed:2e3,singleItem:!1,autoHeight:!0,transitionStyle:"goDown"}),$(".next").click(function(){owl.trigger("owl.next")}),$(".prev").click(function(){owl.trigger("owl.prev")}),$(".owl-slider-1").owlCarousel({lazyLoad:!0,autoPlay:3e3,stopOnHover:!0,navigation:!0,navigationText:["<i class='glyph-icon icon-angle-left'></i>","<i class='glyph-icon icon-angle-right'></i>"],paginationSpeed:1e3,goToFirstSpeed:2e3,singleItem:!0,autoHeight:!0,transitionStyle:"goDown"}),$(".owl-slider-2").owlCarousel({lazyLoad:!0,autoPlay:3e3,stopOnHover:!0,navigation:!0,navigationText:["<i class='glyph-icon icon-angle-left'></i>","<i class='glyph-icon icon-angle-right'></i>"],paginationSpeed:1e3,goToFirstSpeed:2e3,singleItem:!0,autoHeight:!0,transitionStyle:"fade"}),$(".owl-slider-3").owlCarousel({lazyLoad:!0,autoPlay:3e3,stopOnHover:!0,navigation:!0,navigationText:["<i class='glyph-icon icon-angle-left'></i>","<i class='glyph-icon icon-angle-right'></i>"],paginationSpeed:1e3,goToFirstSpeed:2e3,singleItem:!0,autoHeight:!1}),$(".owl-slider-4").owlCarousel({lazyLoad:!0,autoPlay:3e3,stopOnHover:!0,navigation:!0,navigationText:["<i class='glyph-icon icon-angle-left'></i>","<i class='glyph-icon icon-angle-right'></i>"],paginationSpeed:1e3,goToFirstSpeed:2e3,singleItem:!0,autoHeight:!1}),$(".owl-slider-5").owlCarousel({lazyLoad:!0,autoPlay:3e3,stopOnHover:!0,navigation:!1,paginationSpeed:1e3,goToFirstSpeed:2e3,singleItem:!0,autoHeight:!0,transitionStyle:"slide"})});