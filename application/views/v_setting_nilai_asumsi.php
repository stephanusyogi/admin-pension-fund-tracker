
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Setting DAPENBI Nilai Asumsi</p>
                    <div class="flex items-center gap-4">
                      <a href="<?= base_url() ?>setting-nilai-asumsi/simpan" class="btn btn-md btn-secondary">
                        Simpan
                      </a>
                    </div>
                  </div>
                  <hr class="my-5">
                  <div class="table-responsive ">
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <td>#</td>
                          <td>Nilai</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kenaikan Gaji per tahun</td>
                          <td><input type="number" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                      <tbody>
                        <tr>
                          <td>Kenaikan PhDP per tahun</td>
                          <td><input type="number" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Iuran PPIP (% dari gaji)</td>
                          <td><input type="number" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Dasar pembayaran Iuran Personal</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Inflasi jangka panjang</td>
                          <td><input type="number" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->

<script>
  $(".hapus-investasi").on("click", function (e) {
      e.preventDefault();
      const href = $(this).attr("href");

      Swal.fire({
          title: "Konfirmasi Pilihan Anda",
          text: "Apakah anda yakin dengan pilihan anda?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Hapus Investasi",
          cancelButtonText: "Batalkan",
      }).then((result) => {
          if (result.isConfirmed) {  
            document.location.href = href;
          }
      }); 
  });
</script>