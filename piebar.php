<?php
 include "dbsiakad.php";              
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where jenis_kelamin='L' and status_aktivitas = 'A' ";
            $query2 = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where jenis_kelamin='P' and status_aktivitas = 'A' ";
            
            
            $sql = mysqli_query($connect, $query); 
            $sql2 = mysqli_query($connect, $query2); 
          

            $data = mysqli_fetch_array($sql);
            $data2 = mysqli_fetch_array($sql2);


  ?>

<canvas id="pChart" width="400" height="400"></canvas>
<script>
    var pieCanvas = document.getElementById("pChart");

var genData = {
    labels: [
        "Laki-laki",
        "Perempuan"
    ],
    datasets: [
        {
            data: [
            
            <?php
                echo $data['jumlah']; ?>,
            <?php                        
                echo $data2['jumlah']; ?>

            ],
            backgroundColor: [
                "#FF6384",
                "#8463FF"
            ]
        }]
};

var pieChart = new Chart(pieCanvas, {
  type: 'pie',
  data: genData
});

</script>