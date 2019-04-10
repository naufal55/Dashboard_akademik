<style>
 #bro {
  height: 300px; 
  min-width: 500px; 
  max-width: 1000px; 
  margin: 0 auto; 
 }
 </style>

<script>
    $(function() {    
    var data = [
        {
            "hc-key": "id-3700",
            "value": 0
        },
        {
            // Aceh
            "hc-key": "id-ac",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '06' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Sumatera Utara
            "hc-key": "id-su",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '07' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Sumatera Barat
            "hc-key": "id-sb",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '08' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Riau
            "hc-key": "id-ri",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '09' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Kepulauan Riau
            "hc-key": "id-kr",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '33' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Jambi
            "hc-key": "id-ja",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '10' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Bengkulu
            "hc-key": "id-be",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '26' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Sumatera Selatan
            "hc-key": "id-sl",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '11' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Bangka Belitung
            "hc-key": "id-bb",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '30' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Lampung
            "hc-key": "id-1024",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '12' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Banten
            "hc-key": "id-bt",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '28' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Jakarta
            "hc-key": "id-jk",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '01' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Jawa Barat
            "hc-key": "id-jr",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '02' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Jawa Tengah
            "hc-key": "id-jt",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '03' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Jawa Timur
            "hc-key": "id-ji",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '05' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Yogyakarta
            "hc-key": "id-yo",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '04' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Bali
            "hc-key": "id-ba",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '22' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Nusa Tenggara Barat
            "hc-key": "id-nb",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '23' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Nusa Tenggara Timur
            "hc-key": "id-nt",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '24' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Kalimantan Barat
            "hc-key": "id-kb",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '13' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Kalimantan Timur
            "hc-key": "id-ki",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '16' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Kalimantan Tengah
            "hc-key": "id-kt",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '14' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Kalimantan Selatan
            "hc-key": "id-ks",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '15' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Sulawesi Utara
            "hc-key": "id-sw",
            "value": 0
        },
        {
            // Sulawesi Tengah
            "hc-key": "id-st",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '18' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Gorontalo
            "hc-key": "id-go",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '31' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Sulawesi Barat
            "hc-key": "id-sr",
            "value": 0
        },
        
        {
            // Sulawesi Selatan
            "hc-key": "id-se",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '19' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
         {
            //sulawesi tenggara
            "hc-key": "id-sg",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '20' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Maluku Utara
            "hc-key": "id-la",
            "value": 0
        },
        {
            // Maluku
            "hc-key": "id-ma",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '21' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        },
        {
            // Papua Barat
            "hc-key": "id-ib",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '32' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        }, 
        {
            // Papua Barat
            "hc-key": "id-pa",
            "value": <?php 
            include "dbsiakad.php";
            $query = "SELECT count(*) AS jumlah FROM simak_mastermahasiswa where asal_propinsi = '25' ";
            $sql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sql);
            echo $data['jumlah'];
             ?>
        }
    ];

    // Initiate the chart
    $('#bro').highcharts('Map', {
        legend: {
            enabled: false
          },


        title : {
            text : 'Jumlah Mahasiswa Darussalam Gontor'
        },

        subtitle : {
            text : '(Sumber : Sistem Akademik UNIDA Gontor)'
        },

        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'top'
            }
        },
        series : [{
            data : data,
            mapData: Highcharts.maps['countries/id/id-all'],
            joinBy: 'hc-key',
            name: 'Jumlah Mahasiswa',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            },
            tooltip: {
                    valueSuffix: ' orang'
                }
        }]
    });
});
</script>