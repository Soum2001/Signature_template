<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="{{url('assets/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
<script src="{{url('assets/js/template.js')}}"></script>
<script src="assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.2/codemirror.min.js">
</script>
<script type="text/javascript" src="assets/js/magicscroll.js"></script>
<script type="text/javascript">
    var MagicScrollOptions = {};
    MagicScrollOptions = {
        onReady: function () {
            console.log('onReady', arguments[0]);
        },
        onStop: function () {
            console.log('onStop', arguments[0]);
        },
        onItemHover: function () {
            console.log('onItemHover', arguments[0]);
        },
        onItemOut: function () {
            console.log('onItemOut', arguments[0]);
        },
        onMoveStart: function () {
            console.log('onMoveStart', arguments[0]);
        },
        onMoveEnd: function () {
            console.log('onMoveEnd', arguments[0]);
        }
    };
</script>
<!-- JavaScript Bundle with Popper -->

<!-- jQuery -->

</body>

</html>