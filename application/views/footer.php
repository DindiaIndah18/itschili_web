<footer class="footer">
    <div class="container-fluid">
        <p class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="">Its Chilli Dev</a>, made with love for a better live
        </p>
    </div>
</footer>
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url() ?>assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url() ?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?php echo base_url() ?>assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url() ?>assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url() ?>assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="<?php echo base_url() ?>assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?php echo base_url() ?>assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?php echo base_url() ?>assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url() ?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url() ?>assets/js/fullcalendar.min.js"></script>

<!-- TagsInput Plugin -->
<script src="<?php echo base_url() ?>assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url() ?>assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() ?>assets/js/demo.js"></script>
<script src="<?php echo base_url() ?>/../assets/js/highcharts.js"></script>
<script>
Highcharts.chart('container', {
  chart: {
      type: 'line'
  },
  title: {
      text: 'Grafik Harga Cabai Per Hari'
  },
  subtitle: {
      text: 'Source:Survei Pasar'
  },
  xAxis: {
      categories: <?php echo $tgl ?>
  },
  yAxis: {
      title: {
          text: 'Harga (Rp)'
      }
  },
  plotOptions: {
      line: {
          dataLabels: {
              enabled: true
          },
          enableMouseTracking: false
      }
  },
  series: <?php echo $datas ?>
});
</script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Cari Data",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        /*table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });*/

        // Delete a record
        /*table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });*/

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>

</html>
