<?php
//The require_once statement is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again. 
//Link: http://php.net/manual/en/function.require-once.php
require_once __DIR__ . '/header.php';
?>
<!-- HTML code that is displayed in the page and some Bootstrap Scripts -->
<head>
  	  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
      <!-- Title of the page to the browser tab -->
      <title>Researcher Page</title>
      <meta charset="utf-8">
</head>

      <body> 
      <!-- Header Title -->
      <h1 class="head">eHealth PD Application</h1>    
        <h2 class="head2"> Welcome to Researcher Page </h2>
          <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
               <div class="collapse navbar-collapse" id="navbarNav">
          		<ul class="navbar-nav pull-right">
              	<a href="logout.php" class="btn btn-info btn-md" role="button">Logout</a>
              </ul>
            </div>
          </nav>
        
              <div class="container">
                <h2>Data Table</h2>
                <p>Health Data about the patients</p>            
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <tr class="info">
        			  <th colspan="3">Researcher Info</th>
        			  <th colspan="6">Patient Info</th>
    				</tr>
                    <tr>
                      <th>Researcher ID</th>
                      <th>Researcher Email</th>
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
                      <td>2</td>
                      <td>res@uni.se</td>
                      <td>LNU University</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>1</td>
                      <td>1</td>
                      <td>1</td>
                      <td><a href="http://vhost11.lnu.se:20090/assig2/data1.csv">data1</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>res@uni.se</td>
                      <td>LNU University</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>2</td>
                      <td>2</td>
                      <td>1</td>
                      <td><a href="http://vhost11.lnu.se:20090/assig2/data2.csv">data2</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>res@uni.se</td>
                      <td>LNU University</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>3</td>
                      <td>1</td>
                      <td>2</td>
                      <td><a href="http://vhost11.lnu.se:20090/assig2/data3.csv">data3</a></td>
                    </tr>
                     <tr>
                      <td>2</td>
                      <td>res@uni.se</td>
                      <td>LNU University</td>
                      <td>3</td>
                      <td>x@gmail.com</td>
                      <td>4</td>
                       <td>2</td>
                       <td>2</td>
                       <td><a href="http://vhost11.lnu.se:20090/assig2/data4.csv">data4</a></td>
                    </tr>
                     <tr>
                      <td>2</td>
                      <td>res@uni.se</td>
                      <td>LNU University</td>
                      <td>4</td>
                      <td>y@happyemail.com</td>
                      <td>5</td>
                      <td>1</td>
                      <td>3</td>
                       <td><a href="http://vhost11.lnu.se:20090/assig2/data5.csv">data5</a></td>
                    </tr>
                     <tr>
                      <td>2</td>
                      <td>res@uni.se</td>
                      <td>LNU University</td>
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
         <div class="row">
            <h3 class="head2"> Patient 1 Location</h3> 
               <iframe
                  width="800"
                  height="450"
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCIBgS08CDxudWSoCu4trp-4cmFAj4lsjY
                    &q=59.6567,16.6709&zoom=8" allowfullscreen>
              </iframe>
        	</div>
        </div>
       
        <div class="container">
         <div class="row">
         <h3 class="head2"> Patient 1 Data Chart 1</h3>
          <input type="button" class="btn btn-info btn-lg" value="Click to show Patient 1, Data 1" onclick="data1()" />
             <div id="data5">
              <div id="data1Spiral"></div>
              <div id="data1Xtime"></div>
              <div id="data1Ytime"></div>
            </div>
            <div class="row" align="center"> 
            <input type="button" class="btn btn-danger btn-lg" value="Click to close Patient Data" onclick="dissapear()" />
      		</div>
          </div>
        </div>
        
        <div class="container">
          <div class="row">
         <h3 class="head2"> Patient 1 Data Chart 2</h3>
          <input type="button" class="btn btn-info btn-lg" value="Click to show Patient 2, Data 3" onclick="data3()" />
           <div id="data3">
            <div id="data3Spiral"></div>
            <div id="data3Xtime"></div>
            <div id="data3Ytime"></div>
           </div>
             <div class="row" align="center"> 
              <input type="button" class="btn btn-danger btn-lg" value="Click to close Patient Data" onclick="dissapear()" />
          	</div>
        </div>
        </div>
         
        
       <div class = "container">
         <div class="row">
         <h3 class="head2"> Patient 2 Location</h3>
         <iframe
            width="800"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCIBgS08CDxudWSoCu4trp-4cmFAj4lsjY
              &q=57.3365,12.5164&zoom=8" allowfullscreen>
        </iframe>
	    </div>
        </div>
       
        
		<div class="container">
          <div class="row">
         <h3 class="head2"> Patient 2 Data Chart 1</h3>
          <input type="button" class="btn btn-info btn-lg" value="Click to show Patient 2, Data 5" onclick="data5()" />
           <div id="data5">
            <div id="data5Spiral"></div>
            <div id="data5Xtime"></div>
            <div id="data5Ytime"></div>
          </div>
            <div class="row" align="center"> 
            <input type="button" class="btn btn-danger btn-lg" value="Click to close Patient Data" onclick="dissapear()" />
      	</div>

          </div>
        </div>
        
        
        <div class="container">
            <iframe src="http://www.sumopaint.com/paint/?target=http://www.sumopaint.com/act/save.php" width="100%" height="300"></iframe>
        </div>
      
      
       <script src="plotly.js"></script> 
      
        
   </body>
<?php include_once 'footer2.php' ?>