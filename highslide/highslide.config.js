/**
*	Site-specific configuration settings for Highslide JS
*/
hs.graphicsDir = '/wp-content/themes/nodoka/highslide/graphics/';
hs.showCredits = false;
hs.outlineType = 'custom';
hs.fadeInOut = true;
hs.easing = 'linearTween';
hs.captionEval = 'this.thumb.alt';
hs.registerOverlay({
	html: '<div class="close-simple-white" onclick="return hs.close(this)" title="閉じる"></div>',
	position: 'top right',
	useOnHtml: true,
	fade: 2 // fading the semi-transparent overlay looks bad in IE
});


// Japanese language strings
hs.lang = {
	cssDirection: 'ltr',
	loadingText: 'Loading...',
	loadingTitle: 'クリックでキャンセル',
	focusTitle: 'クリックで手前に表示',
	fullExpandTitle: '元のサイズで表示 (f キー)',
	creditsText: 'Powered by <i>Highslide JS</i>',
	creditsTitle: 'Go to the Highslide JS homepage',
	previousText: '戻る',
	nextText: '進む',
	moveText: '移動',
	closeText: '閉じる',
	closeTitle: '閉じる (esc キー)',
	resizeTitle: 'リサイズ',
	playText: '再生',
	playTitle: 'スライドショー開始 (スペースキー)',
	pauseText: '停止',
	pauseTitle: 'スライドショー停止 (スペースキー)',
	previousTitle: '戻る (← キー)',
	nextTitle: '進む (→ キー)',
	moveTitle: '移動',
	fullExpandText: '元のサイズ',
	number: 'Image %1 of %2',
	restoreTitle: 'クリックで閉じます。ドラッグで動かせます。矢印キーで前後の画像へ移動します。'
};
