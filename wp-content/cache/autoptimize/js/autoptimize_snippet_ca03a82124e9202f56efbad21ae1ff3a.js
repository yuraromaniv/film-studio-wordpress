window.vimeography=window.vimeography||{};(function(utilities,$,undefined){utilities.enable_byline=0;utilities.enable_title=0;utilities.enable_portrait=0;utilities.enable_autoplay=0;utilities.enable_api=1;utilities.player_id='';utilities.get_gallery=function(id){return $('#vimeography-gallery-'+id);};utilities.enable_playlist=function(gallery_id){$gallery=utilities.get_gallery(gallery_id);$gallery.on('vimeography/video/ready',function(){var player=$('#'+utilities.player_id)[0];$f(player).addEvent('ready',function(player_id){var froogaloop=$f(player_id);froogaloop.addEvent('finish',function(player_id){var gallery=utilities.get_gallery(gallery_id);gallery.trigger('vimeography/playlist/next');});});});};utilities.get_video=function(link){var endpoint='https://vimeo.com/api/oembed.json';var url=endpoint
+'?url='+encodeURIComponent(link)
+'&byline='+utilities.enable_byline
+'&title='+utilities.enable_title
+'&portrait='+utilities.enable_portrait
+'&autoplay='+utilities.enable_autoplay
+'&api='+utilities.enable_api
+'&player_id='+'vimeography'+Math.floor(Math.random()*999999)
+'&callback=?';return $.getJSON(url);};utilities.set_video_id=function(html){var regex=/player_id=(vimeography\d+)/g;var match=regex.exec(html);var iframe=$(html).filter('iframe')[0];utilities.player_id=match[1];iframe.id=utilities.player_id;return iframe;};utilities.add_fancybox_class=function(html){var iframe=$(html).filter('iframe')[0];iframe.className='fancybox-iframe';return iframe;};}(window.vimeography.utilities=window.vimeography.utilities||{},jQuery));