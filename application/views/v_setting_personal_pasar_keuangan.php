
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Setting DAPENBI Personal Keuangan</p>
                    <div class="flex items-center gap-4">
                      <a href="<?= base_url() ?>setting-portofolio-personal-pasar-keuangan/tambah" class="btn btn-md btn-secondary">
                        <i data-lucide="plus-circle" class="mr-2"></i>
                        Tambah Jenis Investasi
                      </a>
                      <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#instrumen-modal-preview" class="btn btn-md btn-secondary">
                        <i data-lucide="settings" class="mr-2"></i>
                        Buka/Tutup Instrumen
                      </a>
                      <a href="<?= base_url() ?>setting-portofolio-personal-pasar-keuangan/hitung" class="btn btn-md btn-secondary">
                        <i data-lucide="activity" class="mr-2"></i>
                        Hitung Nilai
                      </a>
                      <div id="instrumen-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h2 class="font-medium text-base mr-auto">Buka/Tutup Instrumen</h2>
                                  </div>
                                  <div class="modal-body">
                                    <h2 class="font-base text-sm mr-auto mb-2">Setting ini akan diaplikasikan pada perhitungan selanjutnya.</h2>
                                    <table class="table table-bordered" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Jenis Aset</th>
                                          <th class="text-center">Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Saham</td>
                                          <td class="text-center">
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                  <input id="saham_buka" class="form-check-input" type="radio" name="saham" value="true">
                                                  <label class="form-check-label" for="saham_buka">Buka</label>
                                                </div>
                                                <div class="form-check mr-2">
                                                  <input id="saham_tutup" class="form-check-input" type="radio" name="saham" value="false">
                                                  <label class="form-check-label" for="saham_tutup">Tutup</label>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Pendapatan Tetap</td>
                                          <td class="text-center">
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                  <input id="pendapatan_tetap_buka" class="form-check-input" type="radio" name="pendapatan_tetap" value="true">
                                                  <label class="form-check-label" for="pendapatan_tetap_buka">Buka</label>
                                                </div>
                                                <div class="form-check mr-2">
                                                  <input id="pendapatan_tetap_tutup" class="form-check-input" type="radio" name="pendapatan_tetap" value="false">
                                                  <label class="form-check-label" for="pendapatan_tetap_tutup">Tutup</label>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Deposito</td>
                                          <td class="text-center">
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                  <input id="deposito_buka" class="form-check-input" type="radio" name="deposito" value="true">
                                                  <label class="form-check-label" for="deposito_buka">Buka</label>
                                                </div>
                                                <div class="form-check mr-2">
                                                  <input id="deposito_tutup" class="form-check-input" type="radio" name="deposito" value="false">
                                                  <label class="form-check-label" for="deposito_tutup">Tutup</label>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Reksa Dana Saham</td>
                                          <td class="text-center">
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_saham_buka" class="form-check-input" type="radio" name="reksadana_saham" value="true">
                                                  <label class="form-check-label" for="reksadana_saham_buka">Buka</label>
                                                </div>
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_saham_tutup" class="form-check-input" type="radio" name="reksadana_saham" value="false">
                                                  <label class="form-check-label" for="reksadana_saham_tutup">Tutup</label>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Reksa Dana Pendapatan Tetap</td>
                                          <td class="text-center">
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_pendapatan_tetap_buka" class="form-check-input" type="radio" name="reksadana_pendapatan_tetap" value="true">
                                                  <label class="form-check-label" for="reksadana_pendapatan_tetap_buka">Buka</label>
                                                </div>
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_pendapatan_tetap_tutup" class="form-check-input" type="radio" name="reksadana_pendapatan_tetap" value="false">
                                                  <label class="form-check-label" for="reksadana_pendapatan_tetap_tutup">Tutup</label>
                                                </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Reksa Dana Pasar Uang</td>
                                          <td class="text-center">
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_pasar_uang_buka" class="form-check-input" type="radio" name="reksadana_pasar_uang" value="true">
                                                  <label class="form-check-label" for="reksadana_pasar_uang_buka">Buka</label>
                                                </div>
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_pasar_uang_tutup" class="form-check-input" type="radio" name="reksadana_pasar_uang" value="false">
                                                  <label class="form-check-label" for="reksadana_pasar_uang_tutup">Tutup</label>
                                                </div>
                                            </div>
                                          </td>
                                        </tr> 
                                        <tr>
                                          <td>Reksa Dana Campuran</td>
                                          <td class="text-center">
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_campuran_buka" class="form-check-input" type="radio" name="reksadana_campuran" value="true">
                                                  <label class="form-check-label" for="reksadana_campuran_buka">Buka</label>
                                                </div>
                                                <div class="form-check mr-2">
                                                  <input id="reksadana_campuran_tutup" class="form-check-input" type="radio" name="reksadana_campuran" value="false" checked>
                                                  <label class="form-check-label" for="reksadana_campuran_tutup">Tutup</label>
                                                </div>
                                            </div>
                                          </td>
                                        </tr> 
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                    <a href="<?= base_url() ?>setting-portofolio-personal-pasar-keuangan" type="button" class="btn btn-primary w-20">Simpan</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <p class="font-medium">Silahkan pilih jenis investasi terlebih dahulu.</p>
                  <select id="jenis_investasi" class="form-select mt-2" aria-label="Default select example" style="width:50%;">
                        <option disabled selected>Jenis Investasi</option>
                        <option>Konvensional Reguler</option>
                        <option>Konvensional Reguler</option>
                        <option>Konvensional Reguler</option>
                  </select>
                  <hr class="my-10">
                  <div class="table-responsive ">
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                          <tr>
                            <th colspan="4">Pilihan Investasi</th>
                            <th class="text-center">Aksi</th>
                          </tr>
                          <tr>
                            <th colspan="4">-</th>
                            <th class="text-center">
                              <div class="flex items-center justify-center gap-4">
                                <a href="<?= base_url() ?>setting-portofolio-personal-pasar-keuangan/edit/1" class="btn btn-sm btn-warning">
                                  <i data-lucide="edit" class="mr-2"></i>
                                  Edit
                                </a>
                                <a href="<?= base_url() ?>setting-portofolio-personal-pasar-keuangan/delete" class="hapus-investasi btn btn-sm btn-danger">
                                  <i data-lucide="trash" class="mr-2"></i>
                                  Hapus
                                </a>
                              </div>
                            </th>
                          </tr>
                          <tr>
                            <th colspan="2">Capital Market Expectation</th>
                            <th>Tranche Investasi 1</th>
                            <th>Tranche Investasi 2</th>
                            <th>Tranche Likuidtas</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td colspan="2">Return Portofolio Personal</td>
                          <td>8.02%</td>
                          <td>7.82%</td>
                          <td>4%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Risiko Pasar Portofolio Personal</td>
                          <td>13.21%</td>
                          <td>12.05%</td>
                          <td>0.13%</td>
                        </tr>
                        <tr>
                          <th colspan="5" class="text-center">Komposisi Investasi</th>
                        </tr>
                        <tr>
                          <td colspan="2">Saham</td>
                          <td>50%</td>
                          <td>30%</td>
                          <td>0%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap</td>
                          <td>20%</td>
                          <td>30%</td>
                          <td>0%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Deposito</td>
                          <td>5%</td>
                          <td>5%</td>
                          <td>50%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksadana Saham</td>
                          <td>20%</td>
                          <td>30%</td>
                          <td>0%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksadana Pendapatan Tetap</td>
                          <td>5%</td>
                          <td>5%</td>
                          <td>0%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksadana Pasar Uang</td>
                          <td>0%</td>
                          <td>0%</td>
                          <td>50%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksadana Campuran</td>
                          <td>0%</td>
                          <td>0%</td>
                          <td>0%</td>
                        </tr>
                        <tr>
                          <th colspan="5" class="text-center">Asumsi Return Investasi  - Personal pada Pasar Keuangan</th>
                        </tr>
                        <tr>
                          <td colspan="2">Saham</td>
                          <td>8.76%</td>
                          <td>8.76%</td>
                          <td>8.76%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap</td>
                          <td>6.75%</td>
                          <td>6.75%</td>
                          <td>6.75%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Deposito</td>
                          <td>4%</td>
                          <td>4%</td>
                          <td>4%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Saham</td>
                          <td>8.76%</td>
                          <td>8.76%</td>
                          <td>8.76%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Pendapatan Tetap</td>
                          <td>6.75%</td>
                          <td>6.75%</td>
                          <td>6.75%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Pasar Uang</td>
                          <td>4%</td>
                          <td>4%</td>
                          <td>4%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Campuran</td>
                          <td>7.5%</td>
                          <td>7.5%</td>
                          <td>7.5%</td>
                        </tr>
                        <tr>
                          <th colspan="5" class="text-center">Asumsi Return Investasi  - Personal pada Pasar Keuangan</th>
                        </tr>
                        <tr>
                          <td colspan="2">Saham</td>
                          <td>17.57%</td>
                          <td>17.57%</td>
                          <td>17.57%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap</td>
                          <td>11.54%</td>
                          <td>11.54%</td>
                          <td>11.54%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Deposito</td>
                          <td>0.13%</td>
                          <td>0.13%</td>
                          <td>0.13%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Saham</td>
                          <td>17.57%</td>
                          <td>17.57%</td>
                          <td>17.57%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Pendapatan Tetap</td>
                          <td>11%</td>
                          <td>11%</td>
                          <td>11%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Pasar Uang</td>
                          <td>0.13%</td>
                          <td>0.13%</td>
                          <td>0.13%</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Campuran</td>
                          <td>15%</td>
                          <td>15%</td>
                          <td>15%</td>
                        </tr>
                        <tr>
                          <th colspan="5" class="text-center">Asumsi korelasi antar aset  - Personal pada Pasar Keuangan</th>
                        </tr>
                        <tr>
                          <td colspan="2">Saham - Pendapatan Tetap</td>
                          <td>0.33</td>
                          <td>0.33</td>
                          <td>0.33</td>
                        </tr>
                        <tr>
                          <td colspan="2">Saham - Deposito</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td colspan="2">Saham - Reksa Dana Saham</td>
                          <td>0.9</td>
                          <td>0.9</td>
                          <td>0.9</td>
                        </tr>
                        <tr>
                          <td colspan="2">Saham - Reksa Dana Pendapatan Tetap</td>
                          <td>0.33</td>
                          <td>0.33</td>
                          <td>0.33</td>
                        </tr>
                        <tr>
                          <td colspan="2">Saham - Reksa Dana Pasar Uang</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td colspan="2">Saham - Reksa Dana Campuran</td>
                          <td>0.12</td>
                          <td>0.12</td>
                          <td>0.12</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap - Deposito</td>
                          <td>0.01</td>
                          <td>0.01</td>
                          <td>0.01</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Saham</td>
                          <td>0.22</td>
                          <td>0.22</td>
                          <td>0.22</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Pendapatan Tetap</td>
                          <td>0.9</td>
                          <td>0.9</td>
                          <td>0.9</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Pasar Uang</td>
                          <td>0.01</td>
                          <td>0.01</td>
                          <td>0.01</td>
                        </tr>
                        <tr>
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Campuran</td>
                          <td>0.22</td>
                          <td>0.22</td>
                          <td>0.22</td>
                        </tr>
                        <tr>
                          <td colspan="2">Deposito - Reksa Dana Saham</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td colspan="2">Deposito - Reksa Dana Pendapatan Tetap</td>
                          <td>0.12</td>
                          <td>0.12</td>
                          <td>0.12</td>
                        </tr>
                        <tr>
                          <td colspan="2">Deposito - Reksa Dana Pasar Uang</td>
                          <td>0.99</td>
                          <td>0.99</td>
                          <td>0.99</td>
                        </tr>
                        <tr>
                          <td colspan="2">Deposito - Reksa Dana Campuran</td>
                          <td>0.22</td>
                          <td>0.22</td>
                          <td>0.22</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Saham - Reksa Dana Pendapatan Tetap</td>
                          <td>0.33</td>
                          <td>0.33</td>
                          <td>0.33</td>
                        </tr>
                        <tr>
                          <td colspan="2">Saham - Reksa Dana Saham</td>
                          <td>0.9</td>
                          <td>0.9</td>
                          <td>0.9</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Saham - Reksa Dana Pasar Uang</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Saham - Reksa Dana Campuran</td>
                          <td>0.22</td>
                          <td>0.22</td>
                          <td>0.22</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Pendapatan Tetap - Reksa Dana Pasar Uang</td>
                          <td>0.01</td>
                          <td>0.01</td>
                          <td>0.01</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Pendapatan Tetap - Reksa Dana Campuran</td>
                          <td>0.22</td>
                          <td>0.22</td>
                          <td>0.22</td>
                        </tr>
                        <tr>
                          <td colspan="2">Reksa Dana Pasar Uang - Reksa Dana Campuran</td>
                          <td>0.22</td>
                          <td>0.22</td>
                          <td>0.22</td>
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