/**
*	Site-specific configuration settings for Highslide JS
*/
hs.graphicsDir = 'highslide/graphics/';
hs.outlineType = 'custom';
hs.dimmingOpacity = 0.5;
hs.captionEval = 'this.a.title';


// Add the slideshow controller
hs.addSlideshow({
	slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: false,
	overlayOptions: {
		opacity: '0.75',
		position: 'bottom center',
		offsetX: '0',
		offsetY: '-10',
		hideOnMouseOut: true
	}
});

// Finnish language strings
hs.lang = {
	cssDirection: 'ltr',
	loadingText: 'Lataa...',
	loadingTitle: 'Keskeytä',
	focusTitle: 'Tuo esille',
	fullExpandTitle: 'Suurenna täysikokoiseksi',
	creditsText: 'Moottorina <i>Highslide JS</i>',
	creditsTitle: 'Avaa Highslide JS kotisivu',
	previousText: 'Edellinen',
	nextText: 'Seuraava',
	moveText: 'Siirrä',
	closeText: 'Sulje',
	closeTitle: 'Sulje (esc)',
	resizeTitle: 'Muuta kokoa',
	playText: 'Aloita',
	playTitle: 'Aloita esitys (välilyönti)',
	pauseText: 'Tauko',
	pauseTitle: 'Tauko esityksessä (välilyönti)',
	previousTitle: 'Edellinen (nuoli vasemmalle)',
	nextTitle: 'Seuraava (nuoli oikealle)',
	moveTitle: 'Siirrä',
	fullExpandText: 'Täysikokoinen',
	number: 'Kuva %1 / %2',
	restoreTitle: 'Kilauta sulkeaksesi, paina ja raahaa siirtääksesi. Valitse edellinen tai seuraava nuolilla.'
};

// gallery config object
var config1 = {
	slideshowGroup: 'group1',
	transitions: ['expand', 'crossfade']
};
