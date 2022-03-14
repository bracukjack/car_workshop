</div>

<!-- Javascript -->
<script src="{{url('/')}}/assets/bundles/libscripts.bundle.js"></script>    
<script src="{{url('/')}}/assets/bundles/vendorscripts.bundle.js"></script>

<script src="{{url('/')}}/assets/bundles/c3.bundle.js"></script>
<script src="{{url('/')}}/assets/bundles/chartist.bundle.js"></script>
<script src="{{url('/')}}/assets/vendor/toastr/toastr.js"></script>

<script src="{{url('/')}}/assets/bundles/mainscripts.bundle.js"></script>
<script src="{{url('/')}}/assets/js/index.js"></script>


<!-- datatables -->
<script src="{{url('/')}}/assets/bundles/datatablescripts.bundle.js"></script>
<script src="{{url('/')}}/assets/js/pages/tables/jquery-datatable.js"></script>

<!-- select -->
<script src="{{url('/')}}/assets/vendor/select2/js/select2.full.min.js"></script>
<!-- select element script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>

</body>
</html>