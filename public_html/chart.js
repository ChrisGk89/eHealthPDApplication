//https://developers.google.com/chart/interactive/docs/gallery/barchart
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMaterial);

function drawMaterial() {
      var data = google.visualization.arrayToDataTable([
        ['Exercise', 'Patient 1', 'Patient 2'],
        ['Spiral 1', 22.45, 31.22],
        ['Spiral 2', 14.272, 0],
        ['Tap 1', 19.52, 19.46],
        ['Tap 2', 19.57, 0],
      ]);

      var materialOptions = {
        chart: {
          title: 'Exercises Metadata'
        },
        hAxis: {
          title: 'Seconds',
          minValue: 0,
        },
        vAxis: {
          title: 'Exercises'
        },
        bars: 'horizontal'
      };
      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
      materialChart.draw(data, materialOptions);
    }