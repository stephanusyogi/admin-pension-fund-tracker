
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <form id="myForm" class="col-span-12 mt-8" action="<?= base_url() ?>setting/ppip_add_action" method="post">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <div class="mb-2">
                      <p class="text-xl font-semibold">Formulir Jenis Investasi Baru DAPENBI IP</p>
                      <p class="text-sm" style="font-style: italic;color: red;">(*) Wajib Diisi.</p>
                    </div>
                    <div class="flex items-center gap-4">
                      <button type="submit" class="btn btn-md btn-success">
                        Simpan
                      </button>
                    </div>
                  </div>
                  <hr class="my-10">
                  <div class="table-responsive ">
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th>Pilihan Investasi <span style="color: red;">(*)</span></th>
                            <th colspan="2"><input type="text" class="form-control" placeholder="Masukkan Nama Investasi" name="nama_portofolio"></th>
                          </tr>
                          <tr>
                            <th>Informasi</th>
                            <th>Investasi</th>
                            <th>Likuiditas</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="3" class="font-medium text-center">Komposisi Investasi</td>
                        </tr>
                        <tr>
                          <td>Saham <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="tranche_investasi_saham" name="tranche_investasi_saham" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="tranche_likuiditas_saham" name="tranche_likuiditas_saham" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Pendapatan Tetap <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="tranche_investasi_pendapatan_tetap" name="tranche_investasi_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                            </td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="tranche_likuiditas_pendapatan_tetap" name="tranche_likuiditas_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Deposito <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="tranche_investasi_deposito" name="tranche_investasi_deposito" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="tranche_likuiditas_deposito" name="tranche_likuiditas_deposito" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="3" class="font-medium text-center">Asumsi Return Investasi</td>
                        </tr>
                        <tr>
                          <td>Saham <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="return_saham" name="return_saham" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Pendapatan Tetap <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="return_pendapatan_tetap" name="return_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Deposito <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="return_deposito" name="return_deposito" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td colspan="3" class="font-medium text-center">Asumsi Risiko Investasi</td>
                        </tr>
                        <tr>
                          <td>Saham <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="resiko_saham" name="resiko_saham" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Pendapatan Tetap <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="resiko_pendapatan_tetap" name="resiko_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Deposito <span style="color: red;">(*)</span></td>
                          <td>
                            <div class="input-group">
                              <input type="number" step="any" id="resiko_deposito" name="resiko_deposito" class="form-control" placeholder="Masukkan Nilai"  required>
                              <div class="input-group-text">%</div>
                            </div>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td colspan="3" class="font-medium text-center">Korelasi Antar Aset Investasi</td>
                        </tr>
                        <tr>
                          <td>Saham - Pendapatan Tetap <span style="color: red;">(*)</span></td>
                          <td>
                            <input type="number" step="any" id="korelasi_saham_pendapatan_tetap" name="korelasi_saham_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Saham - Deposito <span style="color: red;">(*)</span></td>
                          <td>
                            <input type="number" step="any" id="korelasi_saham_deposito" name="korelasi_saham_deposito" class="form-control" placeholder="Masukkan Nilai"  required>
                          </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Pendapatan Tetap - Deposito <span style="color: red;">(*)</span></td>
                          <td>
                            <input type="number" step="any" id="korelasi_pendapatan_tetap_deposito" name="korelasi_pendapatan_tetap_deposito" class="form-control" placeholder="Masukkan Nilai"  required>
                          </td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </form>
            </div>
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
          confirmButtonText: "Simpan",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>