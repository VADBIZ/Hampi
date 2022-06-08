function getURLVar(key) {
	var value = [];

	var query = String(document.location).split('?');

	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');

			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}

		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}

$(document).ready(function() {
    $(window).keyup(function(e){
	    var target = $('.compare input:focus');
	    if (e.keyCode == 9 && $(target).length){
		    $(target).parent().addClass('focused');
	    }
    });
 
    $('.compare input').focusout(function(){
	    $(this).parent().removeClass('focused');
    });
  
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();

		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});

	// Currency
	$('#form-currency .currency-select').on('click', function(e) {
		e.preventDefault();

		$('#form-currency input[name=\'code\']').val($(this).attr('name'));

		$('#form-currency').submit();
	});

	// Language
	$('#form-language .language-select').on('click', function(e) {
		e.preventDefault();

		$('#form-language input[name=\'code\']').val($(this).attr('name'));

		$('#form-language').submit();
	});

	/* Search */
	$('#search input[name=\'search\']').parent().find('button').on('click', function() {
		var url = $('base').attr('href') + 'index.php?route=product/search';

		var value = $('header #search input[name=\'search\']').val();

		if (value) {
			url += '&search=' + encodeURIComponent(value);
		}

		location = url;
	});

	$('#search input[name=\'search\']').on('keydown', function(e) {
		if (e.keyCode == 13) {
			$('header #search input[name=\'search\']').parent().find('button').trigger('click');
		}
	});

	// Menu
	$('#menu .dropdown-menu').each(function() {
		var menu = $('#menu').offset();
		var dropdown = $(this).parent().offset();

		var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 10) + 'px');
		}
	});

	// Product List
	$('#list-view').click(function() {
		$('#content .product-grid > .clearfix').remove();

		$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
		$('#grid-view').removeClass('active');
		$('#list-view').addClass('active');

		localStorage.setItem('display', 'list');
	});

	// Product Grid
	$('#grid-view').click(function() {
		// What a shame bootstrap does not take into account dynamically loaded columns
		var cols = $('#column-right, #column-left').length;

		if (cols == 2) {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols == 1) {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		} else {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}

		$('#list-view').removeClass('active');
		$('#grid-view').addClass('active');

		localStorage.setItem('display', 'grid');
	});

	if (localStorage.getItem('display') == 'list') {
		$('#list-view').trigger('click');
		$('#list-view').addClass('active');
	} else {
		$('#grid-view').trigger('click');
		$('#grid-view').addClass('active');
	}

	// Checkout
	$(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
		if (e.keyCode == 13) {
			$('#collapse-checkout-option #button-login').trigger('click');
		}
	});

	// tooltips on hover
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

	// Makes tooltips work on ajax generated content
	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});
});

	 function XFormatPrice(_number) 
	{
		var decimal=0;
		var separator=' ';
		var decpoint = '.';
		var format_string = '# ₽';

		var r=parseFloat(_number)

		var exp10=Math.pow(10,decimal);// приводим к правильному множителю
		r=Math.round(r*exp10)/exp10;// округляем до необходимого числа знаков после запятой

		rr=Number(r).toFixed(decimal).toString().split('.');

		b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);

		r=(rr[1]?b+ decpoint +rr[1]:b);
		return format_string.replace('#', r);
	} 
// Cart add remove functions
var cart = {
	'add': function(product_id, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/add',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				$('.alert-dismissible, .text-danger').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {
					console.log(json);
					$(".header").find(".header__icons-cart").each(function(){
						$(this).find(".cart-total").html(json['total']);
					});
					$.toast({
					  text: "Товар успешно добавлен в корзину!",
					  showHideTransition: 'plain',
					  icon: 'info',
					  position: 'bottom-right',
					  loaderBg: '#ffffff',
						hideAfter: 1000,
						bgColor: '#FF9B3C',
						textColor: 'white'
					});
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'update': function(key, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/editTest',
			type: 'post',
			data: 'key=' + key + '&count=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				console.log(json);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				console.log(ajaxOptions);
			}
		});
	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				$(".cart__body-item[data-id='"+key+"']").remove();
								$.toast({
					  text: "Товар успешно удален из корзины!",
					  showHideTransition: 'plain',
					  icon: 'info',
					  position: 'bottom-right',
					  loaderBg: '#ffffff',
						bgColor: '#FF9B3C',
						textColor: 'white',
						hideAfter: 1000
					});
				var sumPrice = 0;
				$(".cart__body-item").each(function(){
					var currPriceText = $(this).find(".cart__body-total").text().replace(/\s+/g, ''),
						currPrice = parseInt(currPriceText);
					sumPrice = sumPrice + currPrice;
				});
				
				var countCart = $(".cart__body-item").length;
				 $(".cart-total").text(countCart);

				$(".cart__tools-value").text(XFormatPrice(sumPrice));
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var voucher = {
	'add': function() {

	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					$('#cart > button').html('<i class="fa fa-shopping-cart"></i><sup id="cart-total">' + json['total'] + '</sup> Корзина');
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var wishlist = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=account/wishlist/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {
//					$('body').after('<div class="alert alert-success popup__overlay"><div class="popup"><div class="acn-notification"><button type="button" class="close" data-dismiss="alert">&times;</button>' + json['success'] + ' </div></div></div>');
//                  setTimeout(function(){$('.popup__overlay').remove(); }, 3000);
				$.toast({
				  text: "Товар успешно добавлен в избранное!",
				  showHideTransition: 'plain',
				  icon: 'info',
				  position: 'bottom-right',
				  loaderBg: '#ffffff',
					hideAfter: 1000,
					bgColor: '#FF9B3C',
					textColor: 'white'
				});
					
					$(".header").find(".header__icons-likes").each(function(){
						$(this).find(".header__icons_likes-count").html(json['total']);
					});
				}
                
				//$('html, body').animate({ scrollTop: 0 }, 'slow');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
}

//управляем сравнением
$(document).ready(function(){
	$(".compareSwitch").click(function(){
		var parentCommpare = $(this).closest(".category__product-compare"),
			productID  = $(this).attr("data-productID");
		if (parentCommpare.find("input[type='checkbox']").is(":checked")) {
			compare.remove(productID);
		} else {
			compare.add(productID);
		}
	});
});

var compare = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=product/compare/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['success']) {
					$.toast({
					  text: "Товар успешно добавлен в сравнение!",
					  showHideTransition: 'plain',
					  icon: 'info',
					  position: 'bottom-right',
						hideAfter: 1000,
					  loaderBg: '#ffffff',
						bgColor: '#FF9B3C',
						textColor: 'white'
					});
					$(".header").find(".header__icons-compare").each(function(){
						$(this).find(".header__icons_compare-count").html(json['total']);
					});
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function(product_id) {
		$.ajax({
			url: 'index.php?route=product/compare/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				console.log(json);
				$.toast({
					  text: "Товар успешно удален из сравнения!",
					  showHideTransition: 'plain',
					  icon: 'info',
					  position: 'bottom-right',
					  loaderBg: '#ffffff',
					hideAfter: 1000,
						bgColor: '#FF9B3C',
						textColor: 'white'
					});
				$(".header").find(".header__icons-compare").each(function(){
						$(this).find(".header__icons_compare-count").html(json['total']);
					});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
	e.preventDefault();

	$('#modal-agree').remove();

	var element = this;

	$.ajax({
		url: $(element).attr('href'),
		type: 'get',
		dataType: 'html',
		success: function(data) {
			html  = '<div id="modal-agree" class="modal">';
			html += '  <div class="modal-dialog">';
			html += '    <div class="modal-content">';
			html += '      <div class="modal-header">';
			html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
			html += '      </div>';
			html += '      <div class="modal-body">' + data + '</div>';
			html += '    </div>';
			html += '  </div>';
			html += '</div>';

			$('body').append(html);

			$('#modal-agree').modal('show');
		}
	});
});

// Autocomplete */
(function($) {
	$.fn.autocomplete = function(option) {
		return this.each(function() {
			this.timer = null;
			this.items = new Array();

			$.extend(this, option);

			$(this).attr('autocomplete', 'off');

			// Focus
			$(this).on('focus', function() {
				this.request();
			});

			// Blur
			$(this).on('blur', function() {
				setTimeout(function(object) {
					object.hide();
				}, 200, this);
			});

			// Keydown
			$(this).on('keydown', function(event) {
				switch(event.keyCode) {
					case 27: // escape
						this.hide();
						break;
					default:
						this.request();
						break;
				}
			});

			// Click
			this.click = function(event) {
				event.preventDefault();

				value = $(event.target).parent().attr('data-value');

				if (value && this.items[value]) {
					this.select(this.items[value]);
				}
			}

			// Show
			this.show = function() {
				var pos = $(this).position();

				$(this).siblings('ul.dropdown-menu').css({
					top: pos.top + $(this).outerHeight(),
					left: pos.left
				});

				$(this).siblings('ul.dropdown-menu').show();
			}

			// Hide
			this.hide = function() {
				$(this).siblings('ul.dropdown-menu').hide();
			}

			// Request
			this.request = function() {
				clearTimeout(this.timer);

				this.timer = setTimeout(function(object) {
					object.source($(object).val(), $.proxy(object.response, object));
				}, 200, this);
			}

			// Response
			this.response = function(json) {
				html = '';

				if (json.length) {
					for (i = 0; i < json.length; i++) {
						this.items[json[i]['value']] = json[i];
					}

					for (i = 0; i < json.length; i++) {
						if (!json[i]['category']) {
							html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
						}
					}

					// Get all the ones with a categories
					var category = new Array();

					for (i = 0; i < json.length; i++) {
						if (json[i]['category']) {
							if (!category[json[i]['category']]) {
								category[json[i]['category']] = new Array();
								category[json[i]['category']]['name'] = json[i]['category'];
								category[json[i]['category']]['item'] = new Array();
							}

							category[json[i]['category']]['item'].push(json[i]);
						}
					}

					for (i in category) {
						html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

						for (j = 0; j < category[i]['item'].length; j++) {
							html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
						}
					}
				}

				if (html) {
					this.show();
				} else {
					this.hide();
				}

				$(this).siblings('ul.dropdown-menu').html(html);
			}

			$(this).after('<ul class="dropdown-menu"></ul>');
			$(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));

		});
	}
})(window.jQuery);


$(document).ready(function(){
	$(".category__filter").click(function(){
		$("body").append("<div class='overlay__filter'></div>");
		$("html").toggleClass("stopScroll");
		$("body").toggleClass("stopScroll");
		$(".category__side").toggleClass("open");
	});
	$(".ocf-close").click(function(){
		$("body").find(".overlay__filter").remove();
		$("html").removeClass("stopScroll");
		$("body").toggleClass("stopScroll");
		$(".category__side").removeClass("open");
	});
	$(".category__sort-wrapper").click(function(){
		$(this).toggleClass("open");
	});
	$(document).mouseup( function(e){
		var div = $( ".category__sort-wrapper" );
		if ( !div.is(e.target)
		    && div.has(e.target).length === 0 ) {
			div.removeClass("open");
		}
	});
	$(".ocf-filter-header").click(function(){
		$(this).closest(".ocf-filter").toggleClass("ocf-open");
	});
	
//masks
	function initPhoneMask(fieldId) {
		$(fieldId).attr("maxlength", "14");
		$.mask.definitions['9']='';
		$.mask.definitions['d']='[0-9]';
		$(fieldId).mask("+7 (ddd) ddd-dd-dd");
//		$(fieldId).intlTelInput({
//			  utilsScript:'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.min.js',
//			  defaultCountry: 'auto',
//			  autoHideDialCode:false,
//		//       autoPlaceholder:"aggressive",
//			  placeholderNumberType:"MOBILE",
//			  preferredCountries:['ru','by', 'kz', 'am', 'kg', 'uz'],
//			  separateDialCode:true,
//			  customPlaceholder:function(selectedCountryPlaceholder,selectedCountryData){
//			  return '+'+selectedCountryData.dialCode+' '+selectedCountryPlaceholder.replace(/[0-9]/g,'_');
//			  },
//		});
//		$(fieldId).on("close:countrydropdown",function(e,countryData){
//		  $(this).val('');
//		  $(this).mask($(this).attr('placeholder').replace(/[_]/g,'d'));
//		});
  	}
  	$(".mask,input[type='tel']").each(function(){
    	initPhoneMask($(this));
  	});
});

	function toolsCartFix(){
		if ($(".cart__tools").length > 0) {
			if ($(window).width() > 1200) {
				var box = $('.cart__tools');
				var headerHeight = $(".header").css("height");
				var top = box.offset().top - parseFloat(box.css('marginTop').replace(/auto/, 0));
				$(window).scroll(function(){
					var windowpos = $(window).scrollTop();
					if(windowpos < top) {
						box.css('position', 'static');
					} else {
						box.css('position', 'fixed');
						box.css('width', '270px');
						box.css('top', headerHeight);
					}
				});
			} else {
				var box = $('.cart__tools');
				box.css('position', 'static');
			}
		}
	}

	$( window ).resize(function() {
		toolsCartFix();
	});
	$( document ).ready(function() {
        toolsCartFix();
    });

//содержание статьи
$(document).ready(function(){
	$("body").on('click', '#toc [href*="#"]', function(e){
		var fixed_offset = $(".header").outerHeight(true);
		$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
		e.preventDefault();
	});
	
	$(function() {
		var curlvl;
		/*startlvl = 2; - для Blogger*/
		var startlvl = 0;
		var prevlvl = startlvl;
		/*toc - наш контейнер*/
		var lst = $("#toc");
		/*решил вынести заголовок Содержания сюда - и управлять проще и индексироваться не будет.*/
		var tmp2 = $("<h3>Содержание</h3>");
		lst.append(tmp2);
		/*текущий полный URL - актуально если у вас не работают якорные ссылки из-за тега base, задающий относительность урлов.*/
		var href1 = window.location.href;
		/*вырезаем якоря в URL - так решил проблему зацикливания на якорях. пример зацикливания: site.ru/ ... /page#title1#title2 ...*/
		var href2 = href1.replace(window.location.hash, "");
		if(typeof lst !== "undefined") {
			/*.text_read h1, .text_read h2, .text_read h3, .text_read h4 - указываете свой путь к заголовкам.*/
			$(".text_read h1, .text_read h2, .text_read h3, .text_read h4").each(function(i) {
				var current = $(this);
				current.attr("id", "title" + i);
				for(curlvl = parseInt(current.prop("tagName").substring(1)); curlvl > prevlvl; prevlvl++) {
					var tmp = $("<ul></ul>");
					if(prevlvl == startlvl)
						lst.append(tmp);
					else {
						var last_li = $("#toc li").last();
						last_li.append(tmp);
					}
					if (curlvl > prevlvl + 1)
						tmp.append("<li style=\"list-style-type: none\"></li>");
					lst = tmp;
				}
				while(curlvl < prevlvl) {
					lst = lst.parent().parent();
					prevlvl--;
				}
				/*убираем двоеточие в конце заголовка для ссылки в оглавлении:*/
				curder=current.html();
				if (curder.charAt(curder.length - 1) == ':') {
					curder = curder.substr(0, curder.length - 1);
				}
				/*href2 - исправляет проблему с тегом base и зацикливанием якорей; itemprop='url' - элемент микроразметки; curder - анкор без двоеточия в конце подстроки:*/
				lst.append("<li><a id='link" + i + "' itemprop='url' href='" + href2 + "#title" + i + "' title='" + current.html() + "'>" + curder + "</a></li>");
			});
		}
	});
	var siteUp = $('.siteUp');	
	$(window).scroll (function () {
		if ($(this).scrollTop () > 300) {
			siteUp.addClass("show");
		} else {
			siteUp.removeClass("show");
		}
	});	 
	siteUp.on('click', function(){
		$('body, html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});		
});

//табы для сравнения
$(document).ready(function(){
	$(".comparePage__section").eq(0).addClass("active");
	$(".comparePage__menu-item").eq(0).addClass("active");
	$(".comparePage__menu-item").click(function(e){
		e.preventDefault();
		$(".comparePage__menu-item").removeClass("active");
		$(this).addClass("active");
		var whatSection = $(this).attr("href");
		$(".comparePage__section").removeClass("active");
		$(whatSection).addClass("active");
	});
});

//одновременный скролл двух блоков
$(document).ready(function(){
	$('.comparePage__head-wrap').scroll(function() {
		$(".compagePage__body-wrap").scrollLeft($(this).scrollLeft());
		$("html,body").off("scroll");
	});
	$('.compagePage__body-wrap').scroll(function() {
		$(".comparePage__head-wrap").scrollLeft($(this).scrollLeft());
		$("html,body").off("scroll");
	});
});

// set a block variable if we are over another element that scrolls
// if ie would support e.target for scrolling this wouldn't be needed
var blockScroll = false;
$(".comparePage__head-wrap,comparePage__body-wrap").on("mouseenter mouseleave", function (e) {
  blockScroll = e.type === "mouseenter";
})

function scrollFunc (e) {
  // stop if the target is a .scroller and also
  // if there is an indication that a vertical scroll was done
  if (blockScroll || ("wheelDeltaX" in e && e.wheelDeltaX != 0) || e.shiftKey) return;
  // prevent default scrolling (no jumps)
  e.preventDefault();
  // get ammount of scrolling
  var scroll = "wheelDelta" in e ? -e.wheelDelta : (e.detail * 2);
  // use scroll y for scroll x
  window.scrollBy( scroll, 0 );
}

// try attaching the method like the borwser needs it
// this event isn't covered by jquery so I had to do it manually
if (document.addEventListener) { // W3C sort of
  document.addEventListener( "DOMMouseScroll", scrollFunc, false );
  document.addEventListener( "mousewheel", scrollFunc, false );
} else if (document.attachEvent) { // IE way
  document.attachEvent("onmousewheel", scrollFunc);
} else {
  document.onmousewheel = scrollFunc;
}

$.fn.isHScrollable = function () {
    return this[0].scrollWidth > this[0].clientWidth;
};

$.fn.isVScrollable = function () {
    return this[0].scrollHeight > this[0].clientHeight;
};

$.fn.isScrollable = function () {
    return this[0].scrollWidth > this[0].clientWidth || this[0].scrollHeight > this[0].clientHeight;
};
function compareArrow(){
	var compareHeadWrap = $(".comparePage__head-wrap"),
		compareWrap		= $(".comparePage__wrap");
	if (compareWrap.length > 0 && compareHeadWrap.isScrollable()) {
		compareWrap.addClass("scroll");
	} else {
		compareWrap.removeClass("scroll");
	}
}
$(document).ready(compareArrow);
$(window).resize(compareArrow);