<div class="card-body">
    <h5 class="text-muted">Mahasiswa Aktif </h5>
        <div class="metric-value d-inline-block">

          <?php
           include "dbsiakad.php";              
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where status_aktivitas = 'A' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql); ?>
             <h1 class="mb-1"><?php echo $data['jumlah']; ?> Orang</h1>
                                      
        </div>

        <?php
            include "dbsiakad.php";              
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where status_aktivitas = 'A' and nim_mhs like '%2016%' ";
            $query2 = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where status_aktivitas = 'A' and nim_mhs like '%2017%' ";
            $query3 = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where status_aktivitas = 'A' and nim_mhs like '%2018%' ";
            
            $sql = mysqli_query($connect, $query); 
            $sql2 = mysqli_query($connect, $query2); 
            $sql3 = mysqli_query($connect, $query3); 

            $data = mysqli_fetch_array($sql);
            $data2 = mysqli_fetch_array($sql2);
            $data3 = mysqli_fetch_array($sql3);

            $hasil = number_format(($data3['jumlah']-$data2['jumlah'])/$data2['jumlah']*100,2);

            if ($hasil < 0) { ?>  
                <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                <span><i class="fa fa-fw fa-arrow-down"></i></span><span>
            <?php
                } else { ?>
                <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>
            <?php
                } ?>
            
            <?php 
                echo $hasil;
            ?>%

                </span><br>
            <span><i></i></span><span>
             <?php
                $tgl=date('d-m-Y');
                echo $tgl;
            ?></span>
        </div>
    </div>

<canvas id="you2Chart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('you2Chart');
var you2Chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2016', '2017', '2018'],
        datasets: [{
            label: 'Jumlah Mahasiwa aktif pertahun',
            data: [
            
            <?php
                echo $data['jumlah']; ?>,
            <?php                        
                echo $data2['jumlah']; ?>,
            <?php
                echo $data3['jumlah']; ?>
            ],
      
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>