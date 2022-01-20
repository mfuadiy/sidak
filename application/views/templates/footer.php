<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; I-Kept <?= date('Y'); ?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Klik "Logout" jika anda ingin mengakhiri session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>


<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();

    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });


  $('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeaccess'); ?>",
      type: 'post',
      data: {
        menuId: menuId,
        roleId: roleId
      },
      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
      }
    })
  });


  $('.simadu').on('click', function() {
    const nopen = $(this).data('nopen');
    const simadu = $(this).data('simadu');
    document.location.href = "<?= base_url('datul/updateSimadu/'); ?>" + nopen;

    $.ajax({
      url: "<?= base_url('datul/updateSimadu'); ?>",
      method: 'POST',
      data: {
        nopen: nopen,
        simadu: simadu
      },

      success: function() {
        document.location.href = "<?= base_url('datul/detail/'); ?>" + nopen;
      }
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTableUser').DataTable();
  });
</script>


<script type="text/javascript">
  $(document).ready(function() {
    $(".add-more").click(function() {
      var html = $(".copy").html();
      $(".after-add-more").after(html);
    });

    // saat tombol remove dklik control group akan dihapus 
    $("body").on("click", ".remove", function() {
      $(this).parents(".control-group").remove();
    });
  });
</script>


<!-- INSTASCAN -->
<script type="text/javascript">
  let scanner = new Instascan.Scanner({
    video: document.getElementById('preview')
  });
  scanner.addListener('scan', function(content) {
    //alert(content);
    $("#scan").val(content);
  });

  Instascan.Camera.getCameras().then(function(cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[0]);
    } else {
      console.error('No Camera Found');
    }
  }).catch(function(e) {
    console.error(e);
  });
</script>


<!-- QRCODE SCAN HTML -->

<script type="text/javascript">
  var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", {
      fps: 10,
      qrbox: 250
    });

  function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
    $("#npk").val(`${decodedText}`, decodedResult);
    document.getElementById("pilih").removeAttribute("disabled", 0);
  }

  function onScanError(errorMessage) {
    // handle on error condition, with error message
  }

  var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", {
      fps: 10,
      qrbox: 250
    });
  html5QrcodeScanner.render(onScanSuccess, onScanError);

  const html5QrCode = new Html5Qrcode( /* element id */ "reader");
  // File based scanning
  const fileinput = document.getElementById('qr-input-file');
  fileinput.addEventListener('change', e => {
    if (e.target.files.length == 0) {
      // No file selected, ignore 
      return;
    }

    const imageFile = e.target.files[0];
    // Scan QR Code
    html5QrCode.scanFile(imageFile, true)
      .then(decodedText => {
        // success, use decodedText
        console.log(decodedText);
      })
      .catch(err => {
        // failure, handle it.
        console.log(`Error scanning file. Reason: ${err}`)
      });
  });
</script>

<style type="text/css">
  .wrapper {
    background-color: pink;
  }
</style>

</body>

</html>