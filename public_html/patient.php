<!-- 19890826-T558
 Chris Gkalfas
 4ME302 - Foundations of Computational Media - HT17
Final-Assignment
 -->

<?php
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. 
//Link: http://php.net/manual/en/function.require-once.php
require_once __DIR__ . '/header.php';
?>

<!-- HTML code that is displayed in the page -->
<head>
  	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <!-- Title of the page to the browser tab -->
      <title>Patient Page</title>
      <meta charset="utf-8">
</head>

      <body> 
      <!-- Header Title -->
      <h1 class="head">eHealth PD Application</h1>    
        <h2 class="head2"> Welcome to Patient Page </h2>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
             <div class="collapse navbar-collapse" id="navbarNav">
          		<ul class="navbar-nav pull-right">
              	<a href="logout.php" class="btn btn-info btn-md" role="button">Logout</a>
              </ul>
            </div>
        </nav>
       
        <div class = "container">
          <div class = "row">
          <form>
            <input type="text" name="search" placeholder="Search..">
          </form>
          </div>
        </div>
        
        <div class="container">
          <div class="row">	
            <script src="chart.js"></script>
            <div id="chart_div"></div>
          </div>
        </div>
        
        <!-- Youtube Videos with iframe tag -->
        <div class="frame">
        <h3 class="head3"> These are videos exercises for you! </h3>  
        <iframe width="420" height="345" src="https://www.youtube.com/embed/JW9iXay1_Ig" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/Ez2GeaMa4c8" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/09eH35bR6tQ" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/9MbE87yfswg" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/ZaVDs5DPnsA" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="345" src="https://www.youtube.com/embed/KNWqyKluZgg" frameborder="0" allowfullscreen></iframe>
        </div>
      </body>

<?php include_once 'footer.php' ?>