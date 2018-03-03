<?php
include("includes/init.php");
$current_page_id="BIOGRAPHY";
?>
<!-- in this page, documentation and pictures are cited from website, I display the citation with link on my page -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Biography</title>

  <link href="css/font-awesome.css" rel="stylesheet">
  <script src="scripts/mainstyle.js"></script>
  <link href="css/mainpage.css" rel="stylesheet">
  <link href="css/gallery-bio.css" rel="stylesheet">
  <link href="css/font.css" rel="stylesheet">
</head>
<body>
  <?php include("includes/header.php"); ?>
  <div class="bio-container">
    <h1>King's Biography</h1>
    <div class="bio-row row1">
        <h1>Who is Lebron James</h1>
        <p class="page-description text-center">LeBron Raymone James (born December 30, 1984) is an American basketball player with the Cleveland Cavaliers. James first garnered national attention as the top high school basketball player in the country. With his unique combination of size, athleticism and court vision, he became one of the premier players in the NBA. After leading the Miami Heat to titles in 2012 and 2013, he returned to Cleveland and helped the franchise claim its first championship in 2016.
          <span class="citation">(The text is cited from: <a href="https://www.biography.com/people/lebron-james-399748">https://www.biography.com/people/lebron-james-399748</a>)</span>
        </p>
    </div>
    <div class="gallery-row row2">
      <div class="align">
        <div id="row2-left" class="left" >
          <h1>LeBron James Career Stats and Points</h1>
          <p class="page-description text-center">In January 2018, at age 33, LeBron James surpassed Kobe Bryant as the youngest player to accumulate 30,000 career points and became the seventh player in NBA history to achieve that milestone. The feat put him just more than 8,000 points shy of Kareem Abdul-Jabbar's all-time record of 38,387 points.  LeBron James was selected for the NBA All-Star Game for the first time in 2005, a feat he would repeat 12 years in a row. In January 2018, the NBA announced that James and Milwaukee Bucks forward Giannis Antetokounmpo top the list to make the 2018 All-Star Game.
            In 2006, James was named the Most Valuable Player in the NBA All-Star Game, a feat he would repeat in 2008. James has also been named NBA MVP four times, in seasons 2008-09, 2009-10, 2011-12 and 2012-13.
            <span class="citation">(The right image is cited from google: <a href="https://images.fineartamerica.com/images-medium-large-5/lebron-james-jean-p-losier.jpg">https://images.fineartamerica.com/images-medium-large-5/lebron-james-jean-p-losier.jpg</a>)</span>
            <span class="citation">(The text is cited from: <a href="https://www.biography.com/people/lebron-james-399748">https://www.biography.com/people/lebron-james-399748</a>)</span>

          </p>
        </div>
      </div>
      <div id="row2-right" class="right">
        <img src="/image/lebron-painting1.png" alt="lebron-painting1.png"/>
      </div>
      <div class="clear"></div>

    </div>
    <div class="gallery-row row3">
      <div id="row3-left" class="left">
        <img src="/image/lebron-painting2.png" alt="lebron-painting2.png"/>
      </div>
      <div class="align">
        <div id="row3-right" class="right">
          <h1>LeBron James Net Worth and Salary</h1>
          <p class="page-description text-center">As of June 2017 LeBron James’ net worth is $86 million, according to Forbes magazine. In 2003, LeBron James signed several endorsement deals, including a deal with Nike for $90 million that could net him over $1 billion over his lifetime. Other endorsements include Intel, Verizon, Coca-Cola, Beats by Dre and Kia Motors. In the 2016-17 season, James earned a $31 million salary, making him the third player to do so after Michael Jordan and Kobe Bryant. He’s also a co-owner of the production company SpringHill Entertainment and has invested in Blaze Pizza.<span class="citation">(The left image is cited from google: <a href="http://www.paintingandprints.com/painting-images/large-images/1357133245_lebron%20james100.jpg">http://www.paintingandprints.com/painting-images/large-images/1357133245_lebron%20james100.jpg</a>)</span>
            <span class="citation">(The text is cited from: <a href="https://www.biography.com/people/lebron-james-399748">https://www.biography.com/people/lebron-james-399748</a>)</span></p>

          </div>
        </div>
        <div class="clear"></div>
      </div>

    </div>
    <?php include("includes/footer.php");?>
  </body>
  </html>
