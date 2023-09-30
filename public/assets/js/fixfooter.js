// フッターを最下部に固定
$(function () {
    let $ftr = $('footer');
    if (window.innerHeight > $ftr.ofset().top + $ftr.outerHeight()) {
        $ftr.attr({ 'style': 'positon:fixed;top' + (window.innerHeight - $ftr.outerHeight()) + 'px;' });
    }
});