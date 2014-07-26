$(window).load(function(){
	startAnimation();
	var delayOut = .5;
	function startAnimation(){
		var tl = new TimelineLite();
		
		tl.from($("#introHeader"), .75, {css:{top:50, autoAlpha:0}},"introHeader");
		tl.from($(".dev-text"), .75, {css:{top:355,autoAlpha:0}},"introHeader");
		
		tl.from($("#htmlIntroText"), .75, {css:{left:-100, autoAlpha:0}},"frame-1");
		tl.from($("#introBackgroundOne"), .75, {css:{autoAlpha:0}},"frame-1");
		tl.to($(".intro-text, #introHeader"),1, {css:{color:"#fff", textShadow:"0px 0px 10px #000000;"}},"frame-1");

			tl.to($(".intro-background-container"), 2, {});

		tl.to($("#htmlIntroText"), .75, {css:{left:100, autoAlpha:0}},"frame-2");
		tl.from($("#phpIntroText"), .75, {css:{left:-100, autoAlpha:0}}, "-=.5","frame-2");
		tl.from($("#introBackgroundTwo"), 1, {css:{autoAlpha:0}},"frame-2");
		tl.to($(".intro-text, #introHeader"),1, {css:{color:"#000", textShadow:"none"}},"frame-2");
		
			tl.to($("#introBackgroundOne"), 2, {css:{autoAlpha:0}});

		tl.to($("#phpIntroText"), .75, {css:{left:100, autoAlpha:0}},"frame-3");
		tl.from($("#flashIntroText"), .75, {css:{left:-100, autoAlpha:0}}, "-=.5","frame-3");
		tl.from($("#introBackgroundThree"), 1, {css:{autoAlpha:0}},"frame-3");
		tl.to($(".intro-text, #introHeader"),1, {css:{color:"#fff", textShadow:"0px 0px 10px #000000;"}},"frame-3");
		
			tl.to($("#introBackgroundTwo"), 2, {css:{autoAlpha:0}});
			
		tl.to($("#flashIntroText"), .75, {css:{left:100, autoAlpha:0}},"frame-4");
		tl.from($("#mmIntroText"), .75, {css:{left:-100, autoAlpha:0}}, "-=.5","frame-4");
		tl.to($("#introBackgroundThree"), 1, {css:{autoAlpha:0}},"frame-4");
		tl.to($(".intro-text, #introHeader"),1, {css:{textShadow:"none"}},"frame-4");
	}
});