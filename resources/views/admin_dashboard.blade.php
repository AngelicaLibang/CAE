 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('layouts/admin_navbar')
        <script src="js/admin.js"></script>
        <link rel="stylesheet" href="css/admin.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <title>Admin Dashboard</title>
            <!-- Include Chart.js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <style>
                #text-chart{
                    padding-left: -10%;
                }
                #content {
                    display: flex;
                    padding: 20px;
                    padding-left: 18%;
                }
                .chart-container {
                    width: 50%; /* Set width to 30% */
                    margin-right: 20px; /* Add some spacing between the chart and the table */
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid #dddddd;
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <div id="content">
                <div class="chart-container">
                    <h1 id="text-chart">Admin Dashboard</h1>
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <br>
                {{-- <div class="student-list">
                   <h2>List of Students</h2>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>15</td>
                            <td>9th</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>16</td>
                            <td>10th</td>
                        </tr>

                    </table>
                </div> --}}
            </div>

            <script>
                // Sample data for the line chart
                var lineData = {
                    labels: ['1st Year', '2nd Year', '3rd Year', '4th Year'],
                    datasets: [{
                        label: 'School Population',
                        data: [305, 570, 725, 400],
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderWidth: 3
                    }]
                };

                // Get the canvas element
                var ctx = document.getElementById('myChart').getContext('2d');

                // Create the line chart
                var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: lineData,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>

        </body>
        </html>
