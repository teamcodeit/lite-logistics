<?php require_once("modal.php"); ?>
<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#"></a>.</strong> All rights reserved | Team CodeIt
</footer>


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/datatables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="../../js/owl.carousel.min.js"></script>

<script src="plugins/select2/select2.full.min.js"></script>

<!-- include summernote -->

<script type="text/javascript" src="dist/js/summernote-bs4.js"></script>

<script type="text/javascript" src="dist/js/popper.min.js"></script>


<script>
    $(function () {

        $(".select2").select2();


        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });


    $(document).ready(function () {
        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'print',
                text: '<i class="fa fa-print"></i> Print',
                title: $('h1').text()
            },
                {
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf-o"></i> PDF',
                    title: $('h1').text()
                },
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i> Excel',
                    title: $('h1').text()
                }]
        });
    });


    /* $(document).ready(function() {
       $('#example2').DataTable( {
         dom: 'Bfrtip',
         buttons: [{
           extend: 'print',
           text: '<i class="fa fa-print"></i> Print',
           title: $('h1').text()
         },
         {
           extend: 'pdf',
           text: '<i class="fa fa-file-pdf-o"></i> PDF',
           title: $('h1').text()
         },
         {
           extend: 'excel',
           text: '<i class="fa fa-file-excel-o"></i> Excel',
           title: $('h1').text()
         }]
       });
     });
     */
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#select_all').on('click', function () {
            if (this.checked) {
                $('.checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function () {
                    this.checked = false;
                });
            }
        });

        $('.checkbox').on('click', function () {
            if ($('.checkbox:checked').length == $('.checkbox').length) {
                $('#select_all').prop('checked', true);
            } else {
                $('#select_all').prop('checked', false);
            }
        });


        $('#product_hscode').on('change', function () {
            var id = $('#product_hscode').val();
            $("#result").val(id);
        });

    });
</script>


<script>
    $(".alert-success").fadeTo(5000, 1000).slideUp(5000, function () {
        $(".alert-success").slideUp(5000);
    });


    $(".alert-danger").fadeTo(5000, 1000).slideUp(5000, function () {
        $(".alert-danger").slideUp(5000);
    });


    $(".alert-info").fadeTo(5000, 1000).slideUp(5000, function () {
        $(".alert-info").slideUp(5000);
    });

</script>


<script type="text/javascript">
    $(function () {
        $('.summernote').summernote({
            height: 200
        });
    });
</script>


<script type="text/javascript">
    var locations = [
        ['Tin can Island', 6.434379, 3.345003, 4],
        ['PTML Terminal Tincan island, Lagos', 6.435802, 3.334755, 5],
        ['Tincan island, Lagos', 6.434578, 3.356198, 3],
        ['Lagos Port Complex', 6.457106, 3.370788, 2],
        ['Associated Port & Marine Development Company', 6.445419, 3.356139, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14.71,
        center: new google.maps.LatLng(6.4457577, 3.3472199),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
</script>

</body>
</html>
