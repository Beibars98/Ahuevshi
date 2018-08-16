$(function() {

    $(".scroll").click(function () {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination - 1}, 800);
        return false;
    });

	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});

	//E-mail Ajax Send
	$("#letterback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/dist/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Ваш запрос будет обработан в ближайшее время!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("#callback").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/dist/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Ваш запрос будет обработан в ближайшее время!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	$(".reviews-one").click(function() {
		$("a").removeClass("active");
		$(".reviews-one").addClass("active");
		$(".reviews-content").addClass("hidden");
		$('.reviews-one-content').fadeIn('slideToggle')
		$(".reviews-one-content").removeClass("hidden");
	});

	$(".reviews-two").click(function() {
		$("a").removeClass("active");
		$(".reviews-two").addClass("active");
		$(".reviews-content").addClass("hidden");
		$('.reviews-two-content').fadeIn('slideToggle')
		$(".reviews-two-content").removeClass("hidden");
	});

	$(".reviews-three").click(function() {
		$("a").removeClass("active");
		$(".reviews-three").addClass("active");
		$(".reviews-content").addClass("hidden");
		$('.reviews-three-content').fadeIn('slideToggle')
		$(".reviews-three-content").removeClass("hidden");
	});

	$(".reviews-four").click(function() {
		$("a").removeClass("active");
		$(".reviews-four").addClass("active");
		$(".reviews-content").addClass("hidden");
		$('.reviews-four-content').fadeIn('slideToggle')
		$(".reviews-four-content").removeClass("hidden");
	});

	$('.section-brands').slick({
	  slidesToShow: 5,
	  slidesToScroll: 1,
	});

	$('.section-reviews-certificates').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	});

	$('.section-reviews-slider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  dots: true,
	});

});
