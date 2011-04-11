<?php

// Add mediabox style sheet
$GLOBALS['TL_CSS'][] = TL_PLUGINS_URL . 'plugins/mediabox/css/mediabox.css?'. MEDIABOX .'|screen';

?>

<script src="<?php echo TL_PLUGINS_URL; ?>plugins/mediabox/js/mediabox.js?<?php echo MEDIABOX; ?>"></script>
<script>
Mediabox.scanPage = function() {
  var links = $$('a').filter(function(el) {
    return el.rel && el.rel.test(/^lightbox/i);
  });
  $$(links).mediabox({/* Put custom options here */}, null, function(el) {
    var rel0 = this.rel.replace(/[[]|]/gi,' ');
    var relsize = rel0.split(' ');
    return (this == el) || ((this.rel.length > 8) && el.rel.match(relsize[1]));
  });
};
window.addEvent('domready', Mediabox.scanPage);
</script>
