
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Formulir Jenis Investasi Baru DAPENBI Nilai Asumsi</p>
                    <div class="flex items-center gap-4">
                      <a href="<?= base_url() ?>setting-nilai-asumsi" class="btn btn-md btn-success">
                        Simpan
                      </a>
                    </div>
                  </div>
                  <hr class="my-10">
                  <div class="table-responsive ">
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th>Pilihan Investasi</th>
                            <th><input type="text" class="form-control" placeholder="Masukkan Nama Investasi"></th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kenaikan Gaji per tahun</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Iuran PPIP (% dari gaji)</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Tambahan Iuran Mandiri PPIP</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Dasar pembayaran Iuran Personal</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Jumlah Pembayaran Iuran Personal</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Kenaikan Iuran Personal</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
                        </tr>
                        <tr>
                          <td>Inflasi jangka panjang</td>
                          <td><input type="text" class="form-control" placeholder="Masukkan Nilai"></td>
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