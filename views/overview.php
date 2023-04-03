
<?php require_once("../controller/script.php"); ?>

<div class="row">

<!-- Tab panes -->
<div class="col-md-12 mt-3">
  <h2>Dokumen Digital Tradisi Mama Sirih Pinang Pada Suku Dawan</h2>
  <div class="col-9">
    <div class="card border-0 rounded-0 mt-3">
      <div class="card-body">
        <p style="font-size: 16px;">Pembuatan dokumen digital ini bertujuan untuk memudahkan remaja atau anak muda jaman sekarang yang tidak mau melihat secara langsung proses adat istiadat, mereka biasa mengetahui dari kegiatan-kegiatan tradisi mama sirih pinang.</p>
      </div>
    </div>
  </div>
</div>

</div>

<script src="../assets/datatable/datatables.js"></script>
<script>
  $(document).ready(function() {
    $("#datatable").DataTable();
  });
</script>
<script>
  (function() {
    function scrollH(e) {
      e.preventDefault();
      e = window.event || e;
      let delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
      document.querySelector(".table-responsive").scrollLeft -= (delta * 40);
    }
    if (document.querySelector(".table-responsive").addEventListener) {
      document.querySelector(".table-responsive").addEventListener("mousewheel", scrollH, false);
      document.querySelector(".table-responsive").addEventListener("DOMMouseScroll", scrollH, false);
    }
  })();
</script>
