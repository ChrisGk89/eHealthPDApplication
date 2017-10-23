  // for Data 1 https://plot.ly/javascript/line-charts/#line-and-scatter-plot
  Plotly.d3.csv('data1.csv', function(rows){
    var traceSpiral = {
      mode: 'markers',                      // draw markers without line
       type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['X'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['Y'];
      }),
    };
    var layoutSpiral = {
      title: 'Patient1, Data1, Spiral Exercise',
      xaxis: {title: "X"},		 // set the x axis title 
      yaxis: {title: "Y"},       // set the y axis title  
      margin: {                           // update the left, bottom, right, top margin
        l: 50, b: 50, r: 50, t: 50
      }
    };
    
    
    
    var traceXtime = {                    
      mode: 'lines',// connect points with lines
      type: 'scatter',// set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['time'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['X'];
      }),
    };
    var layoutXtime = {
      title: 'Patient1, Data1, Time of Drawing and X',
      xaxis: {title: "time"},			  // set the x axis title 
      yaxis: {title: "X"},                // set the y axis title
      margin: {                           // update the left, bottom, right, top margin
        l: 50, b: 50, r: 50, t: 50
      }
    };
    
    
     var traceYtime = {
      mode: 'lines',                      // connect points with line
      type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['time'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['Y'];
      }),
    };
    var layoutYtime = {
      title: 'Patient1, Data1, Time of Drawing and Y',
      xaxis: {title: "time"},		// set the x axis title 
      yaxis: {title: "Y"},          // set the y axis title
      margin: {                           // update the left, bottom, right, top margin
        l: 50, b: 50, r: 50, t: 50
      }
    };
    Plotly.plot(document.getElementById('data1Spiral'), [traceSpiral], layoutSpiral);
    Plotly.plot(document.getElementById('data1Xtime'), [traceXtime], layoutXtime);
    Plotly.plot(document.getElementById('data1Ytime'), [traceYtime], layoutYtime);
});
   
   

// plots for Data 3 https://plot.ly/javascript/line-charts/#line-and-scatter-plot
   Plotly.d3.csv('data3.csv', function(rows){
    var traceSpiral = {
      mode: 'markers',                    //draw markers without line
      type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['X'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['Y'];
      }),
    };
    var layoutSpiral = {
      title: 'Patient1, Data3, Spiral Exercise',
      xaxis: {title: "X"},		 // set the x axis title 
      yaxis: {title: "Y"},       // set the y axis title 
      color: 'green',
      margin: {                           // update the left, bottom, right, top margin
        l: 50, b: 50, r: 50, t: 50
      }
    };
    var traceXtime = {
      mode: 'lines',                      // connect points with line
      type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['time'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['X'];
      }),
    };
    var layoutXtime = {
      title: 'Patient1, Data3, Time of Drawing and X',
      xaxis: {title: "time"},
      yaxis: {title: "X"},       // set the y axis title
      color: 'green',
      margin: {                           // update the left, bottom, right, top margin
        l: 50, b: 50, r: 50, t: 50
      }
    };
     var traceYtime = {
      mode: 'lines',                      // connect points with line
      type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['time'];
      }),
      y: rows.map(function(row){          // set the x-data
        return row['Y'];
      }),
    };
    var layoutYtime = {
      title: 'Patient1, Data3, Time of Drawing and Y',
      xaxis: {title: "time"},	 // set the x axis title
      yaxis: {title: "Y"},       // set the y axis title
      color: 'green',
      margin: {                           // update the left, bottom, right, top margin
        l: 50, b: 50, r: 50, t: 50
      }
    };
    Plotly.plot(document.getElementById('data3Spiral'), [traceSpiral], layoutSpiral);
    Plotly.plot(document.getElementById('data3Xtime'), [traceXtime], layoutXtime);
    Plotly.plot(document.getElementById('data3Ytime'), [traceYtime], layoutYtime);
});



// plots for Data 5 https://plot.ly/javascript/line-charts/#line-and-scatter-plot
Plotly.d3.csv('data5.csv', function(rows){
  
    var traceSpiral = {
      mode: 'markers',                    //draw markers without line
      type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['X'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['Y'];
      }),
    };
    var layoutSpiral = {
      title: 'Patient2, Data5, Spiral Exercise',
      xaxis: {title: "X"},				  // set the x axis title 
      yaxis: {title: "Y"},       		  // set the y axis title     
      margin: {                           // update the left, bottom, right, top margin
        l: 50, b: 50, r: 50, t: 50
      }
    };
  
  
    var traceXtime = {
      mode: 'lines',                      // connect points with line
      type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['time'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['X'];
      }),
    };
    var layoutXtime = {
      title: 'Patient2, Data5, Time of Drawing and X',
      xaxis: {title: "time"},			  //set the x axis title
      yaxis: {title: "X"},       		  // set the y axis title
      margin: {                           // adding the margin of the left, bottom, right, top
        l: 50, b: 50, r: 50, t: 50
      }
    };
  
    
  	var traceYtime = {
      mode: 'lines',                      // connect points with line
      type: 'scatter',                    // set the chart type
      x: rows.map(function(row){          // set the x-data
        return row['time'];
      }),
      y: rows.map(function(row){          // set the y-data
        return row['Y'];
      }),
      
      
    };
    var layoutYtime = {
      title: 'Patient2, Data5, Time of Drawing and Y',
      xaxis: {title: "time"},	 		  // set the y axis title
      yaxis: {title: "Y"},       		  // set the y axis title
      margin: {                           // adding the margin of the left, bottom, right, top 
        l: 50, b: 50, r: 50, t: 50
      }
    };
  	//Plotly.newPlot('myDiv', data, layout);
    Plotly.plot(document.getElementById('data5Spiral'), [traceSpiral], layoutSpiral,);
    Plotly.plot(document.getElementById('data5Xtime'), [traceXtime], layoutXtime,);
    Plotly.plot(document.getElementById('data5Ytime'), [traceYtime], layoutYtime,);
}); 
  
  //
  function data1() {
    //https://www.w3schools.com/jsref/prop_style_visibility.asp
    //https://www.w3schools.com/css/css_display_visibility.asp
    //We use display:none against visibility:hidden because we don't want to take up the same space as when appears
    document.getElementById('data1Spiral').style.display = "block";
    document.getElementById('data1Xtime').style.display = "block";
    document.getElementById('data1Ytime').style.display = "block";
    document.getElementById('data3Spiral').style.display = "none";
    document.getElementById('data3Xtime').style.display = "none";
    document.getElementById('data3Ytime').style.display = "none";
    document.getElementById('data5Spiral').style.display = "none";
    document.getElementById('data5Xtime').style.display = "none";
    document.getElementById('data5Ytime').style.display = "none";    
    }
  
  function data3() {
    //https://www.w3schools.com/jsref/prop_style_visibility.asp
    //https://www.w3schools.com/css/css_display_visibility.asp
    //We use display:none against visibility:hidden because we don't want to take up the same space as when appears
    document.getElementById('data1Spiral').style.display = "none";
    document.getElementById('data1Xtime').style.display = "none";
    document.getElementById('data1Ytime').style.display = "none";
    document.getElementById('data3Spiral').style.display = "block";
    document.getElementById('data3Xtime').style.display = "block";
    document.getElementById('data3Ytime').style.display = "block";
    document.getElementById('data5Spiral').style.display = "none";
    document.getElementById('data5Xtime').style.display = "none";
    document.getElementById('data5Ytime').style.display = "none";
    }
  
  function data5() {
    //https://www.w3schools.com/jsref/prop_style_visibility.asp
    //https://www.w3schools.com/css/css_display_visibility.asp
    //We use display:none against visibility:hidden because we don't want to take up the same space as when appears
    document.getElementById('data3Spiral').style.display = "none";
    document.getElementById('data3Xtime').style.display = "none";
    document.getElementById('data3Ytime').style.display = "none";
    document.getElementById('data5Spiral').style.display = "none";
    document.getElementById('data5Xtime').style.display = "none";
    document.getElementById('data5Ytime').style.display = "none";
    document.getElementById('data5Spiral').style.display = "block";
    document.getElementById('data5Xtime').style.display = "block";
    document.getElementById('data5Ytime').style.display = "block";
    }
	function dissapear(){
    //https://www.w3schools.com/jsref/prop_style_visibility.asp
    //https://www.w3schools.com/css/css_display_visibility.asp
    //We use display:none against visibility:hidden because we don't want to take up the same space as when appears
    document.getElementById('data1Spiral').style.display = "none";
    document.getElementById('data1Xtime').style.display = "none";
    document.getElementById('data1Ytime').style.display = "none";
    document.getElementById('data3Spiral').style.display = "none";
    document.getElementById('data3Xtime').style.display = "none";
    document.getElementById('data3Ytime').style.display = "none";
    document.getElementById('data5Spiral').style.display = "none";
    document.getElementById('data5Xtime').style.display = "none";
    document.getElementById('data5Ytime').style.display = "none";    
    }