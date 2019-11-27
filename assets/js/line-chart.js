google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Nurse', 'Day Shift', 'Night Shift'],
        ['Tugkan',  30,      10],
        ['Emir',  20,      20],
        ['Idris',  24,       16],
        ['Ilayda',  10,      30]
    ]);

    var options = {
        title: 'Day-Night Shift Compare',
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
}