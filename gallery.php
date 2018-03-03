<?php
include("includes/init.php");
$current_page_id="GALLERY";
?>
<!-- in this page, all gallery pictures are cited from google, shoes pictures are cited from Nike. I display the citation with link below each picture on my page -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Gallery</title>
  <script src="scripts/mainstyle.js"></script>
  <script src="scripts/shoephoto.js"></script>
  <link href="css/mainpage.css" rel="stylesheet">
  <link href="css/gallery-bio.css" rel="stylesheet">
  <link rel="stylesheet" href="css/photoslide.css">
  <link href="css/font.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>
  <?php include("includes/header.php"); ?>
  <div class="container gallery-container">

    <h1>King's Gallery</h1>

    <p class="page-description text-center">All pictures are cited from google</p>

    <div id="lbj-gallery">

      <div class="gallery-row row1">

        <div >
          <a class="lightbox" href="/image/lebron1.jpg">
            <img src="/image/lebron6.jpg" alt="lebron6.jpg">
          </a>
          <span class="citation">(This image is cited from Google:<a href="https://i.ytimg.com/vi/VfQ0TENMSmc/maxresdefault.jpg">https://i.ytimg.com/vi/VfQ0TENMSmc/maxresdefault.jpg</a>)</span>
        </div>
      </div>
      <div class="gallery-row row2">
        <div id="row2-left" class="picture" >
          <a class="lightbox" href="./image/lebron2.jpg">
            <img src="/image/lebron2.jpg" alt="lebron2.jpg">
          </a>
          <span class="citation">(This image is cited from Google:<a href="https://sneakernews.com/wp-content/uploads/2017/09/leborn-james-favorite-shoes.jpg">https://sneakernews.com/wp-content/uploads/2017/09/leborn-james-favorite-shoes.jpg</a>)</span>
        </div>
        <div id="row2-right" class="picture">
          <a class="lightbox" href="/image/lebron7.jpg">
            <img src="/image/lebron7.jpg" alt="lebron7.jpg">
          </a>
          <span class="citation">(This image is cited from Google:<a href="https://i.ytimg.com/vi/nZt68J09SXY/maxresdefault.jpg">https://i.ytimg.com/vi/nZt68J09SXY/maxresdefault.jpg</a>)</span>
        </div>
        <div class="clear"></div>
      </div>

      <div class="gallery-row row3">
        <div id="row3-left">
          <a class="lightbox" href="/image/lebron1.jpg">
            <img src="/image/lebron1.jpg" alt="lebron1.jpg">
          </a>
          <span class="citation">(This image is cited from Google:<a href="https://ssli.ulximg.com/image/740x493/gallery/1484677618_26a033cb6eece957a9e1d4611f473410.jpg/733d3b0906adc3d9e345c79b160cbcd2/1484677618_e2b57eb7779be50e35ecbd8d1800e500.jpg">https://ssli.ulximg.com/image/740x493/gallery/1484677618_26a033cb6eece957a9e1d4611f473410.jpg/733d3b0906adc3d9e345c79b160cbcd2/1484677618_e2b57eb7779be50e35ecbd8d1800e500.jpg</a>)</span>
        </div>
        <div id="row3-right1">
          <a class="lightbox" href="/image/lebron8.jpg">
            <img src="/image/lebron8.jpg" alt="lebron8.jpg">
          </a>
          <span class="citation">(This image is cited from Google:<a href="http://n.sinaimg.cn/sinacn/20170922/3830-fymfcih2476958.jpg">http://n.sinaimg.cn/sinacn/20170922/3830-fymfcih2476958.jpg</a>)</span>
        </div>
        <div id="row3-right2">
          <a class="lightbox" href="/image/lebron3.jpg">
            <img src="/image/lebron3.jpg" alt="lebron3.jpg">
          </a>
          <span class="citation">(This image is cited from:<a href="http://hoopeduponline.com/wp-content/uploads/2012/05/lebron_james_dw.jpg">http://hoopeduponline.com/wp-content/uploads/2012/05/lebron_james_dw.jpg</a>)</span>
        </div>
        <div class="clear"></div>
      </div>


    </div>
    <h1>King's Shoes (A DECADE IN THE MAKING)</h1>

    <p class="page-description text-center">The “LeBron James: A Decade in the Making” interactive experience details the first decade in LeBron’s on court evolution, highlighting the signature shoes that have been there every step of the way. The interactive experience also looks ahead to the next decade of this superstar athlete’s journey using the LEBRON 11 as the starting point.

In 2013, LeBron James became only the second Nike Basketball athlete to have 11 signature shoes to his name. Fit for a king, LeBron’s shoes have served as a showcase for some of Nike's most progressive innovations, including basketball-specific Air Max cushioning, the first full-length visible Nike Zoom unit, dynamic Flywire technology, Nike Hyperposite technology and much more.

As the 2013 – 2014 season gets set to start, LeBron continues to evolve and improve his game. Coming off a pinnacle season with his 48-point performance in the playoffs, his fourth MVP, second Finals MVP and championship ring, LeBron continues to transform the global game of basketball.
<span class="citation">(The text is cited from Nike news:<a href="https://news.nike.com/news/lebron-james-a-decade-in-the-making">https://news.nike.com/news/lebron-james-a-decade-in-the-making</a>)</span>
</p>


  </div>
  <div id="shoe">
    <div class="slide" id="slide">
      <div class="image" id="image">

        <img src="/image/shoe_front_1.jpg"  style="display: block" alt="shoe-front-1.jpg"/>
        <img src="/image/shoe_front_2.jpg" alt="shoe_front_2.jpg"/>
        <img src="/image/shoe_front_3.jpg" alt="shoe_front_3.jpg"/>
        <img src="/image/shoe_front_4.jpg" alt="shoe_front_4.jpg"/>
        <img src="/image/shoe_front_5.jpg"  alt="shoe_front_5.jpg"/>
        <img src="/image/shoe_front_6.jpg" alt="shoe_front_6.jpg"/>
        <img src="/image/shoe_front_7.jpg" alt="shoe_front_7.jpg"/>
        <img src="/image/shoe_front_8.jpg" alt="shoe_front_8.jpg"/>
        <img src="/image/shoe_front_9.jpg"  alt="shoe_front_9.jpg"/>
        <img src="/image/shoe_front_10.jpg" alt="shoe_front_10.jpg"/>
        <img src="/image/shoe_front_11.jpg" alt="shoe_front_11.jpg"/>

      </div>
      <div class="icon" id="icon">
        <ul>
          <li><a href="javascript:;"  class="active" >1</a></li>
          <li><a href="javascript:;">2</a></li>
          <li><a href="javascript:;">3</a></li>
          <li><a href="javascript:;">4</a></li>
          <li><a href="javascript:;">5</a></li>
          <li><a href="javascript:;">6</a></li>
          <li><a href="javascript:;">7</a></li>
          <li><a href="javascript:;">8</a></li>
          <li><a href="javascript:;">9</a></li>
          <li><a href="javascript:;">10</a></li>
          <li><a href="javascript:;">11</a></li>
        </ul>
      </div>
      <div class="navigation left">
        <i class="material-icons left" >L</i>
      </div>
      <div class="navigation right">
        <i class="material-icons right" >R</i>
      </div>
    </div>
    <span class="citation">(These images are cited from Nike news:<a href="https://news.nike.com/news/lebron-james-a-decade-in-the-making">https://news.nike.com/news/lebron-james-a-decade-in-the-making</a>)</span>
  </div>

  <?php include("includes/footer.php");?>
</body>
</html>
