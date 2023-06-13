
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
          <form id="myForm" class="grid grid-cols-12 gap-6" action="<?= base_url() ?>setting/nilai_asumsi_add_action/<?= $data['id'] ?>" method="post">
              <div class="col-span-12 mt-8">
                <div class="flex items-center" style="justify-content: space-between;">
                  <p class="text-xl font-semibold mb-2">Setting DAPENBI Nilai Asumsi</p>
                  <div class="flex items-center gap-4">
                    <button type="submit" class="btn btn-md btn-secondary">
                      Simpan
                    </button>
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
                        <td>
                          <div class="input-group">
                            <input type="number" step="0.01" name="kenaikan_gaji" class="form-control" placeholder="Masukkan Nilai" value="<?= $data['kenaikan_gaji'] ? round($data['kenaikan_gaji'],2) : '' ?>" required>
                            <div class="input-group-text">%</div>
                          </div>
                        </td>
                      </tr>
                    <tbody>
                      <tr>
                        <td>Kenaikan PhDP per tahun</td>
                        <td>
                          <div class="input-group">
                            <input type="number" step="0.01" name="kenaikan_phdp" class="form-control" placeholder="Masukkan Nilai" value="<?= $data['kenaikan_phdp'] ? round($data['kenaikan_phdp'],2) : '' ?>" required>
                            <div class="input-group-text">%</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Iuran PPIP (% dari gaji)</td>
                        <td>
                          <div class="input-group">
                            <input type="number" step="0.01" name="iuran_ppip" class="form-control" placeholder="Masukkan Nilai" value="<?= $data['iuran_ppip'] ? round($data['iuran_ppip'],2) : '' ?>" required>
                            <div class="input-group-text">%</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Dasar pembayaran Iuran Personal</td>
                        <td><input type="text" name="dasar_pembayaran_iuran_personal" class="form-control" placeholder="Masukkan Nilai" value="<?= $data['dasar_pembayaran_iuran_personal'] ? $data['dasar_pembayaran_iuran_personal'] : '' ?>" required readonly></td>
                      </tr>
                      <tr>
                        <td>Inflasi jangka panjang (%)</td>
                        <td>
                          <div class="input-group">
                            <input type="number" step="0.01" name="inflasi_jangka_panjang" class="form-control" placeholder="Masukkan Nilai" value="<?= $data['inflasi_jangka_panjang'] ? round($data['inflasi_jangka_panjang'],2) : '' ?>" required>
                            <div class="input-group-text">%</div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
          </form>
        </div>
    </div>
</div>
<!-- END: Content -->
<script>     
  const form = document.getElementById('myForm'); 
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    Swal.fire({
          title: "Konfirmasi Pilihan Anda",
          text: "Apakah anda yakin dengan pilihan anda?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Simpan Perubahan",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>
