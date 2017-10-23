<?php
    require_once __DIR__ . '/header.php';
?>

<!-- HTML code that is displayed in the page -->
<head>
  	  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
      <!-- Title of the page to the browser tab -->
      <title>Physician Page</title>
      <meta charset="utf-8">
</head>

    <body> 
      <!-- Header Title -->
      <h1 class="head">eHealth PD Application</h1>    
        <h2 class="head2"> Welcome to Physician Page </h2>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
             <div class="collapse navbar-collapse" id="navbarNav">
          		<ul class="navbar-nav pull-right">
              	<a href="logout.php" class="btn btn-info btn-md" role="button">Logout</a>
              </ul>
            </div>
        </nav>
        
        <!-- Data Table -->
        <div class="container">
                <h2>Data Table</h2>
                <p>Health Data about the patients</p>            
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <tr class="info">
        			  <th colspan="3">Physician Info</th>
        			  <th colspan="6">Patient Info</th>
    				</tr>
                    <tr>
                      <th>Physician ID</th>
                      <th>Physician Email</th>
                      <th>Organization</th>
      			      <th>Patient ID</th>
                      <th>Email</th>
                      <th>Test Session</th>
                      <th>Test Type</th>
                      <th>Test ID</th>
                      <th>Patient Raw Data</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>doc@hospital.com</td>
                      <td>Hospital</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                      <td><a href="http://vhost11.lnu.se:20090/assig2/data1.csv">data1</a></td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>doc@hospital.com</td>
                      <td>Hospital</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>2</td>
                      <td>2</td>
                      <td>1</td>
                      <td><a href="http://vhost11.lnu.se:20090/assig2/data2.csv">data2</a></td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>doc@hospital.com</td>
                      <td>Hospital</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>3</td>
                      <td>1</td>
                      <td>2</td>
                      <td><a href="http://vhost11.lnu.se:20090/assig2/data3.csv">data3</a></td>
                    </tr>
                     <tr>
                      <td>1</td>
                      <td>doc@hospital.com</td>
                      <td>Hospital</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>4</td>
                       <td>2</td>
                       <td>2</td>
                       <td><a href="http://vhost11.lnu.se:20090/assig2/data4.csv">data4</a></td>
                    </tr>
                     <tr>
                      <td>1</td>
                      <td>doc@hospital.com</td>
                      <td>Hospital</td>
                      <td>4</td>
                      <td>y@happyemail.com</td>
                      <td>5</td>
                      <td>1</td>
                      <td>3</td>
                       <td><a href="http://vhost11.lnu.se:20090/assig2/data5.csv">data5</a></td>
                    </tr>
                     <tr>
                      <td>1</td>
                      <td>doc@hospital.com</td>
                      <td>Hospital</td>
                      <td>4</td>
                      <td>y@happyemail.com</td>
                      <td>6</td>
                      <td>2</td>
                      <td>3</td>
                      <td><a href="http://vhost11.lnu.se:20090/assig2/data6.csv">data6</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
       <div class = "container"> 
      	<div class="row" align="center"> 
            <input type="button" class="btn btn-info btn-lg" value="Click to show Patient 1, Data 1" onclick="data1()" />
            <input type="button" class="btn btn-info btn-lg" value="Click to show Patient 1, Data 3" onclick="data3()" />
            <input type="button" class="btn btn-info btn-lg" value="Click to show Patient 2, Data 5" onclick="data5()" />
      	</div>
      </div>
      
     
      <div class="container">
        <div class="row" align="center">   
      		<!-- for Data 1 -->
          <div id="data1">
            <div id="data1Spiral"></div>
            <div id="data1Xtime"></div>
            <div id="data1Ytime"></div>
          </div>
            <!-- for Data 3 -->
          <div id="data3">
            <div id="data3Spiral"></div>
            <div id="data3Xtime"></div>
            <div id="data3Ytime"></div>
          </div>
            <!-- for Data 5 -->
          <div id="data5">
            <div id="data5Spiral"></div>
            <div id="data5Xtime"></div>
            <div id="data5Ytime"></div>
          </div>

       </div>
      </div>
      
       <div class = "container"> 
      	<div class="row" align="center"> 
            <input type="button" class="btn btn-danger btn-lg" value="Click to close Patient Data" onclick="dissapear()" />
      	</div>
      </div>
		
      
      <script src="plotly.js"></script> 
      
      
  </body>
<?php include 'footer.php' ?>