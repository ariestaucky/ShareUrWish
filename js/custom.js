$.ajax({
	url:
		"https://newsapi.org/v2/top-headlines?country=id&apiKey=e89fef4307d04b84ab5afff5ad294813",
	type: "GET",
	dataType: "json",
	success: function(data) {
		var response = "";
		var indicator = "";
		for (var i = 0; i < data.articles.length; i++) {
			response +=
				'<div class="carousel-item"><div class="card border-0 rounded-0 text-light overflow zoom"><div class="position-relative"><div class="ratio_left-cover-1 image-wrapper"><a href="' +
				data.articles[i].url +
				'"><img class="img-fluid custom-image" src="' +
				data.articles[i].urlToImage +
				'"></a></div><div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow"><a href="' +
				data.articles[i].url +
				'"><h2 class="h4 post-title text-white my-1 custom-txt">' +
				data.articles[i].title +
				'</h2></a><div class="news-meta custom-txt"><span class="news-author">by <a class="text-white font-weight-bold" href="' +
				data.articles[i].url +
				'">' +
				data.articles[i].author +
				'</a></span><span class="news-date">' +
				" " +
				data.articles[i].publishedAt +
				"</span></div></div></div></div></div>";
			indicator +=
				'<li data-target="#myCarousel" data-slide-to="' + i + '"></li>';
		}
		$("#news").append(response);
		$("#indicators").append(indicator);
		$(".carousel-item")
			.first()
			.addClass("active");
		$(".carousel-indicators > li")
			.first()
			.addClass("active");
		$("#myCarousel").carousel();
	}
});

// set endpoint and your API access key
endpoint = "live";
access_key = "a6b2ee79bc0d91d3e270e7bf624410d1";
symbols = "BTC, BCH, BTG, ETH, DASH, DOGE, LTC, XRP, XMR, XLM";

// get the most recent exchange rates via the "live" endpoint:
$.ajax({
	url:
		"http://api.coinlayer.com/api/" +
		endpoint +
		"?access_key=" +
		access_key +
		"&symbols=" +
		symbols,
	dataType: "jsonp",
	success: function(json) {
		var crypto = "";
		$.each(json.rates, function(index, item) {
			crypto +=
				'<a class="h6 font-weight-light text-custom mr-4" href="#"><span class="position-relative mx-2 badge badge-success rounded-0">' +
				index +
				"</span> $" +
				item +
				"</a>";
		});
		$("#scrool").append(crypto);
	}
});

function myFunction(x) {
	x.classList.toggle("change");
}

$(function() {
	$(".dropdown-toggle").on("click", function(event) {
		$(".dropdown-menu").slideToggle();
		event.stopPropagation();
	});

	$(".dropdown-menu").on("click", function(event) {
		event.stopPropagation();
	});

	$(window).on("click", function() {
		$(".dropdown-menu").slideUp();
	});
});

var checkbox = document.querySelector("input[name=theme]");
if (checkbox) {
	initTheme();

	checkbox.addEventListener("change", function() {
		if (this.checked) {
			trans();
			document.documentElement.setAttribute("data-theme", "dark");
			localStorage.setItem("checkbox", "dark"); // save theme selection
		} else {
			trans();
			document.documentElement.setAttribute("data-theme", "light");
			localStorage.removeItem("checkbox");
		}
	});

	function initTheme() {
		var darkThemeSelected =
			localStorage.getItem("checkbox") !== null &&
			localStorage.getItem("checkbox") === "dark";
		// update checkbox
		checkbox.checked = darkThemeSelected;
		// update body data-theme attribute
		darkThemeSelected
			? document.documentElement.setAttribute("data-theme", "dark")
			: document.documentElement.removeAttribute("data-theme");
	}

	let trans = () => {
		document.documentElement.classList.add("color-theme-in-transition");
		window.setTimeout(() => {
			document.documentElement.classList.remove("color-theme-in-transition");
		}, 1000);
	};
}
