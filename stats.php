<?php
include("includes/init.php");
$current_page_id="STATS";
?>
<!-- the csv stats is cited from website, I display citation below table, I use php read function to load data and display them on my page -->
<!-- define a array to select some column data from csv data -->
    <?php
    $attrArray = array(0=>"Season",2=>"Team",23=>"Rebound",24=>"Assist",25=>"Steal",26=>"Block",29=>"Points");
    $file = fopen("dataset/lebronStats.csv","r");
    while($data = fgetcsv($file)){
      $data_list[]=$data;
    }
    fclose($file);
    // create a new array which will be stored in table
    for($x=1;$x<count($data_list);$x++){
      $seasonArray;
      foreach($attrArray as $index=>$attr){
        $seasonArray[$attr]=$data_list[$x][$index];
      }
      $season_list[]=$seasonArray;

    }
// define functions to store each season's data to table conviently using php
    function print_data_for_eachseason($seasonArray){
      $season="";
      foreach($seasonArray as $index=>$attr){
        $season.= "<td>".$attr."</td>";

      }
      return $season;
    }


    function print_data_for_season($season_list){
      $all="";
      foreach($season_list as $index=>$seasonArray){
        $all.= "<tr>".print_data_for_eachseason($seasonArray)."</tr>";
      }
      return $all;
    }
    ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Stats</title>
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/font.css" rel="stylesheet">
  <link href="css/mainpage.css" rel="stylesheet">
  <link href="css/stats.css" rel="stylesheet">
  <script src="scripts/mainstyle.js"></script>
</head>
<body>
  <?php include("includes/header.php"); ?>
  <div class="container stats-container">

    <h1>King's Stats</h1>

    <p class="page-description text-center">Career Stats Table</p>

    <div id="table">
      <table>
        <tr>
          <?php
          foreach($attrArray as $index=>$attr){
            echo "<th>".$attr."</th>";
          }
          ?>
        </tr>
        <?php
        echo print_data_for_season($season_list);
        ?>

      </table>
      <span class="citation">(The stats is extracted from csv. from:<a href="https://www.basketball-reference.com/players/j/jamesle01.html">https://www.basketball-reference.com/players/j/jamesle01.html</a>)</span>
    </div>

  </div>

  <?php include("includes/footer.php");?>
</body>
</html>
