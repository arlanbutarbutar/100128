<footer class="footer secondary-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <p>Copyright © <?= date("Y") ?> <a style="cursor: pointer;" onclick="window.open('https://netmedia-framecode.com', '_blank')">Netmedia Framecode</a> . All rights reserved. Powered By APRILIANA ROFIYANI MI DEDE</p>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</footer><!-- end second footer -->
</div><!-- end wrapper -->

<!-- jQuery Files -->
<script src="<?= $baseURL ?>assets/js/jquery.min.js"></script>
<script src="<?= $baseURL ?>assets/js/bootstrap.min.js"></script>
<script src="<?= $baseURL ?>assets/js/parallax.js"></script>
<script src="<?= $baseURL ?>assets/js/animate.js"></script>
<script src="<?= $baseURL ?>assets/js/owl.carousel.js"></script>
<script src="<?= $baseURL ?>assets/js/custom.js"></script>
<script src="<?= $baseURL ?>assets/js/jquery-3.5.1.min.js"></script>
<script src="<?= $baseURL ?>assets/datatable/datatables.js"></script>
<script>
  const messageSuccess = $(".message-success").data("message-success");
  const messageInfo = $(".message-info").data("message-info");
  const messageWarning = $(".message-warning").data("message-warning");
  const messageDanger = $(".message-danger").data("message-danger");

  if (messageSuccess) {
    Swal.fire({
      icon: "success",
      title: "Berhasil Terkirim",
      text: messageSuccess,
    })
  }

  if (messageInfo) {
    Swal.fire({
      icon: "info",
      title: "For your information",
      text: messageInfo,
    })
  }
  if (messageWarning) {
    Swal.fire({
      icon: "warning",
      title: "Peringatan!!",
      text: messageWarning,
    })
  }
  if (messageDanger) {
    Swal.fire({
      icon: "error",
      title: "Kesalahan",
      text: messageDanger,
    })
  }
</script>
<script>
  $(document).ready(function() {
    $("#datatable").DataTable();
  });
</script>