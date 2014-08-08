/*
 * Created by Arck.io
 */
(function ($) {

	$.fn.outerHTML = function(s) {
	    return s
	        ? this.before(s).remove()
	        : jQuery("<p>").append(this.eq(0).clone()).html();
	};


	$(document).ready(function() {

					var base_url = window.location.protocol+"//"+window.location.host;
					var embed_box = $('#embed-code');
					var autor = $('.field-name-field-autor .field-item')[0].innerText;
					var image_code = $('<img>');
					var p_code = $('<p>');
					var a_pic_code = $('<a>');
					var a_fuente_code = $('<a>');
					var styles = $('#image-styles');
					var title = $('h1')[1].innerText;
					var url = window.location.protocol + "//" + window.location.host + window.location.pathname;		

					a_pic_code.attr('href', url)
															.html(title);

					a_fuente_code.attr('href', base_url)
																		.html('Aventure Colombia');
																		
					p_code.append(a_pic_code);
					if (autor) {
						p_code.append(', por ' + autor);
					}
					p_code.append(' / Fuente: ');
					p_code.append(a_fuente_code);

					styles.change(function () {
						image_code.attr('src', $(this).val())
								 			.attr('title', title);
						embed_box.val(image_code.outerHTML() + p_code.outerHTML()).select();
					});

					var first_option = styles.children(":first");

					image_code.attr('src', first_option.val())
							 			.attr('title', title);
					embed_box.val(image_code.outerHTML() + p_code.outerHTML()).select();

					// Select all embed code
					embed_box.click(function() {
						$(this).select();
					});

				});

})(jQuery);
