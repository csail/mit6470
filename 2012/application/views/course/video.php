<!-- Title / Page Headline -->
<h1 class="headline center"><strong>Video Lectures</strong></h1>

<div class="hr"></div>

<div class="video-js-box">
  <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
  <video id="example_video_1" class="video-js" width="640" height="264" controls="controls" preload="auto" poster="http://video-js.zencoder.com/oceans-clip.png">
	
    <source src="<?php echo URL::site('assets/videos/web_overview/Introduction.mp4'); ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
    <!-- <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm; codecs="vp8, vorbis"' />
    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg; codecs="theora, vorbis"' /> -->
    <!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
    <object id="flash_fallback_1" class="vjs-flash-fallback" width="640" height="264" type="application/x-shockwave-flash"
      data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
      <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
      <param name="allowfullscreen" value="true" />
      <param name="flashvars" value='config={"playlist":["http://video-js.zencoder.com/oceans-clip.png", {"url": "http://video-js.zencoder.com/oceans-clip.mp4","autoPlay":false,"autoBuffering":true}]}' />
      <!-- Image Fallback. Typically the same as the poster image. -->
      <img src="http://video-js.zencoder.com/oceans-clip.png" width="640" height="264" alt="Poster Image"
        title="No video playback capabilities." />
    </object>
  </video>
  <!-- Download links provided for devices that can't play video in the browser. -->
  <p class="vjs-no-video"><strong>Download Video:</strong>
    <a href="assets/web_overview/Introduction.mp4">MP4</a>,
    <a href="http://video-js.zencoder.com/oceans-clip.webm">WebM</a>,
    <a href="http://video-js.zencoder.com/oceans-clip.ogv">Ogg</a><br>
    <!-- Support VideoJS by keeping this link. -->
    <a href="http://videojs.com">HTML5 Video Player</a> by VideoJS
  </p>
</div>
