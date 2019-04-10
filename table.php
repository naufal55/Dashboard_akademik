   <canvas id="myChart"></canvas>

                    <script type="text/javascript">
                     var ctx = document.getElementById("myChart").getContext('2d');
                     
                    var prodilalu = {
                      label: 'Rata-rata IPK perprodi 2016',
                      data: [<?php include 'hitungipk.php';  ?>],
                      backgroundColor: 'rgba(0, 99, 132, 0.6)',
                      borderColor: 'rgba(0, 99, 132, 1)',
                      yAxisID: "y-axis-density"
                    };
                     
                    var prodisekarang = {
                      label: 'Rata-rata IPK perprodi 2017',
                      data: [ <?php include 'hitungipk2.php';  ?>],
                      backgroundColor: 'rgba(99, 132, 0, 0.6)',
                      borderColor: 'rgba(99, 132, 0, 1)',
                      yAxisID: "y-axis-gravity"
                    };
                     
                    var prodi = {
                      labels: ["PAI","PBA","SAA","AFI","IQT","PMH","HES","AGRO","TI","TIP","HI","ILKOM","MB","EI","FARMASI","GIZI","K3"],
                      datasets: [prodilalu, prodisekarang]
                    };
                     
                    var chartOptions = {
                      scales: {
                        xAxes: [{
                          barPercentage: 1,
                          categoryPercentage: 0.6
                        }],
                        yAxes: [{
                          id: "y-axis-density"
                        }, {
                          id: "y-axis-gravity"
                        }]
                      }
                    };
                     
                    var barChart = new Chart(ctx, {
                      type: 'bar',
                      data: prodi,
                      options: chartOptions
                    }); 

                    </script>