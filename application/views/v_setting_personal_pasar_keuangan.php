<?php 
  function check_status_aset($first_status, $second_status){
    if ($second_status === null) {
      if (!$first_status) {
        return '<p class="text-sm" style="color: red;font-style: italic;">Aset Ditutup</p>';
      } else {
        return '';
      }
    } else {
      if (!$first_status) {
        return '<p class="text-sm" style="color: red;font-style: italic;">Aset Ditutup</p>';
      }elseif (!$second_status) {
        return '<p class="text-sm" style="color: red;font-style: italic;">Aset Ditutup</p>';
      }else {
        return '';
      }
    }
  }
?>
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
                        Buka/Tutup Aset
                      </a>
                      <a href="<?= base_url() ?>setting/personal_pasar_keuangan_hitung_nilai" class="btn btn-md btn-secondary" id="hitungNilai">
                        <i data-lucide="activity" class="mr-2"></i>
                        Hitung Nilai
                      </a>
                      <div id="instrumen-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog">
                              <form class="modal-content" action="<?= base_url() ?>setting/bukatutup_aset" method="post">
                                  <div class="modal-header">
                                      <h2 class="font-medium text-base mr-auto">Buka/Tutup Aset</h2>
                                  </div>
                                  <div class="modal-body">
                                    <h2 class="font-base text-sm mr-auto mb-2">Setting ini akan diaplikasikan pada perhitungan <strong>"Hitung Nilai"</strong> selanjutnya.</h2>
                                    <table class="table table-bordered" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Jenis Aset</th>
                                          <th class="text-center">Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($data_aset as $key) { ?>
                                          <tr>
                                            <td><?= $key['jenis_aset'] ?></td>
                                            <td class="text-center">
                                              <div class="flex flex-col sm:flex-row mt-2">
                                                  <div class="form-check mr-2">
                                                    <input id="<?= str_replace(" ", "_", $key['jenis_aset']) ?>_buka" class="form-check-input" type="radio" name="<?= $key['id'] ?>" value="1" <?= $key['dibuka'] ? 'checked' : '' ?>>
                                                    <label class="form-check-label" for="saham_buka" >Buka</label>
                                                  </div>
                                                  <div class="form-check mr-2">
                                                    <input id="<?= str_replace(" ", "_", $key['jenis_aset']) ?>_tutup" class="form-check-input" type="radio" name="<?= $key['id'] ?>" value="0" <?= !$key['dibuka'] ? 'checked' : '' ?>>
                                                    <label class="form-check-label" for="saham_tutup">Tutup</label>
                                                  </div>
                                              </div>
                                            </td>
                                          </tr>
                                        <?php } ?>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                    <button type="submit" class="btn btn-primary w-20">Simpan</a>
                                  </div>
                                </form>
                          </div>
                      </div>
                    </div>
                  </div>
                  <p class="font-medium">Silahkan pilih jenis investasi terlebih dahulu.</p>
                  <select id="jenis_investasi" class="form-select mt-2" aria-label="Default select example" style="width:50%;">
                    <option disabled selected>Jenis Investasi</option>
                    <?php foreach ($opsi as $key) { ?>
                      <option value="<?= $key['id'] ?>"><?= $key['nama'] ?></option>  
                    <?php } ?>
                  </select>
                  <hr class="my-10">
                  <div id="containerBeforeSelected">
                    <div class="text-center">
                      <p class="text2xl font-base">Silahkan Pilih Terlebih Dahulu</p>
                    </div>
                  </div>
                  <div id="containerAfterSelected" style="display:none;">
                    <form id="myForm" method="post">
                      <div class="table-responsive ">
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                              <tr>
                                <th colspan="3">Pilihan Investasi</th>
                                <th colspan="3" class="text-center">Aksi</th>
                              </tr>
                              <tr>
                                <th colspan="3">
                                  <input id="namaPortofolio" type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                                </th>
                                <th colspan="3" class="text-center">
                                    <div class="flex items-center justify-center gap-6">
                                      <div class="form-check">
                                        <select class="form-select" name="flag" id="flag" aria-label=".form-select-sm example">
                                            <option value="0">Investasi Ditutup</option>
                                            <option value="1">Investasi Dibuka</option>
                                        </select>
                                      </div>
                                      <button type="submit" class="btn btn-primary">
                                        Simpan Perubahan
                                      </button>
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
                              <td colspan="2">
                                Return Portofolio Personal
                                <p class="text-xs" style="font-style: italic;">Nilai ini akan diperbarui setelah tombol <strong>Hitung Nilai</strong> di tekan.</p>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input id="return_portofolio_personal_t1" type="number" step="any" name="return_portofolio_personal_t1" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input id="return_portofolio_personal_t2" type="number" step="any" name="return_portofolio_personal_t2" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input id="return_portofolio_personal_t3" type="number" step="any" name="return_portofolio_personal_t3" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                Risiko Pasar Portofolio Personal
                                <p class="text-xs" style="font-style: italic;">Nilai ini akan diperbarui setelah tombol <strong>Hitung Nilai</strong> di tekan.</p>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input id="resiko_pasar_portofolio_personal_t1" type="number" step="any" name="resiko_pasar_portofolio_personal_t1" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input id="resiko_pasar_portofolio_personal_t2" type="number" step="any" name="resiko_pasar_portofolio_personal_t2" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input id="resiko_pasar_portofolio_personal_t3" type="number" step="any" name="resiko_pasar_portofolio_personal_t3" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="5" class="text-center">Komposisi Investasi</th>
                            </tr>
                            <tr>
                              <td colspan="2">Saham</td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="saham_t1" name="saham_t1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="saham_t2" name="saham_t2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="saham_t3" name="saham_t3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap</td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="pendapatan_tetap_t1" name="pendapatan_tetap_t1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="pendapatan_tetap_t2" name="pendapatan_tetap_t2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="pendapatan_tetap_t3" name="pendapatan_tetap_t3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Deposito</td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="deposito_t1" name="deposito_t1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="deposito_t2" name="deposito_t2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="deposito_t3" name="deposito_t3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksadana Saham</td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_saham_t1" name="reksadana_saham_t1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_saham_t2" name="reksadana_saham_t2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_saham_t3" name="reksadana_saham_t3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksadana Pendapatan Tetap</td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_pendapatan_tetap_t1" name="reksadana_pendapatan_tetap_t1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_pendapatan_tetap_t2" name="reksadana_pendapatan_tetap_t2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_pendapatan_tetap_t3" name="reksadana_pendapatan_tetap_t3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksadana Pasar Uang</td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_pasar_uang_t1" name="reksadana_pasar_uang_t1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_pasar_uang_t2" name="reksadana_pasar_uang_t2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_pasar_uang_t3" name="reksadana_pasar_uang_t3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksadana Campuran</td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_campuran_t1" name="reksadana_campuran_t1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_campuran_t2" name="reksadana_campuran_t2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="reksadana_campuran_t3" name="reksadana_campuran_t3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="5" class="text-center">Asumsi Return Investasi  - Personal pada Pasar Keuangan</th>
                            </tr>
                            <tr>
                              <td colspan="2">Saham <?= check_status_aset($status_aset['saham'] , null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_s_tranche1" name="return_s_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_s_tranche2" name="return_s_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_s_tranche3" name="return_s_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap  <?= check_status_aset($status_aset['pendapatan_tetap'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_pt_tranche1" name="return_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_pt_tranche2" name="return_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_pt_tranche3" name="return_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Deposito  <?= check_status_aset($status_aset['deposito'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_d_tranche1" name="return_d_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_d_tranche2" name="return_d_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_d_tranche3" name="return_d_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Saham  <?= check_status_aset($status_aset['reksa_dana_saham'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_s_tranche1" name="return_r_s_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_s_tranche2" name="return_r_s_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_s_tranche3" name="return_r_s_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Pendapatan Tetap  <?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_pt_tranche1" name="return_r_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_pt_tranche2" name="return_r_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_pt_tranche3" name="return_r_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Pasar Uang  <?= check_status_aset($status_aset['reksa_dana_pasar_uang'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_pu_tranche1" name="return_r_pu_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_pu_tranche2" name="return_r_pu_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_pu_tranche3" name="return_r_pu_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Campuran <?= check_status_aset($status_aset['reksa_dana_campuran'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_c_tranche1" name="return_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_c_tranche2" name="return_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="return_r_c_tranche3" name="return_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="5" class="text-center">Asumsi Resiko Investasi  - Personal pada Pasar Keuangan</th>
                            </tr>
                            <tr>
                              <td colspan="2">Saham <?= check_status_aset($status_aset['saham'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_s_tranche1" name="resiko_s_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_s_tranche2" name="resiko_s_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_s_tranche3" name="resiko_s_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap <?= check_status_aset($status_aset['pendapatan_tetap'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_pt_tranche1" name="resiko_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_pt_tranche2" name="resiko_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_pt_tranche3" name="resiko_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Deposito <?= check_status_aset($status_aset['deposito'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_d_tranche1" name="resiko_d_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_d_tranche2" name="resiko_d_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_d_tranche3" name="resiko_d_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Saham <?= check_status_aset($status_aset['reksa_dana_saham'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_s_tranche1" name="resiko_r_s_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_s_tranche2" name="resiko_r_s_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_s_tranche3" name="resiko_r_s_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Pendapatan Tetap <?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_pt_tranche1" name="resiko_r_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_pt_tranche2" name="resiko_r_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_pt_tranche3" name="resiko_r_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Pasar Uang <?= check_status_aset($status_aset['reksa_dana_pasar_uang'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_pu_tranche1" name="resiko_r_pu_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_pu_tranche2" name="resiko_r_pu_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_pu_tranche3" name="resiko_r_pu_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Campuran <?= check_status_aset($status_aset['reksa_dana_campuran'], null) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_c_tranche1" name="resiko_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_c_tranche2" name="resiko_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="resiko_r_c_tranche3" name="resiko_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="5" class="text-center">Asumsi korelasi antar aset  - Personal pada Pasar Keuangan</th>
                            </tr>
                            <tr>
                              <td colspan="2">Saham - Pendapatan Tetap <?= check_status_aset($status_aset['saham'], $status_aset['pendapatan_tetap']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_pt_tranche1" name="korelasi_s_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_pt_tranche2" name="korelasi_s_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_pt_tranche3" name="korelasi_s_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Saham - Deposito <?= check_status_aset($status_aset['saham'], $status_aset['deposito']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_d_tranche1" name="korelasi_s_d_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_d_tranche2" name="korelasi_s_d_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_d_tranche3" name="korelasi_s_d_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Saham - Reksa Dana Saham <?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_saham']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_s_tranche1" name="korelasi_s_r_s_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_s_tranche2" name="korelasi_s_r_s_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_s_tranche3" name="korelasi_s_r_s_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Saham - Reksa Dana Pendapatan Tetap <?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korealsi_s_r_pt_tranche1" name="korealsi_s_r_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korealsi_s_r_pt_tranche2" name="korealsi_s_r_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korealsi_s_r_pt_tranche3" name="korealsi_s_r_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Saham - Reksa Dana Pasar Uang <?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_pasar_uang']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_pu_tranche1" name="korelasi_s_r_pu_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_pu_tranche2" name="korelasi_s_r_pu_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_pu_tranche3" name="korelasi_s_r_pu_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Saham - Reksa Dana Campuran <?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_campuran']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_c_tranche1" name="korelasi_s_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_c_tranche2" name="korelasi_s_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_s_r_c_tranche3" name="korelasi_s_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap - Deposito <?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['deposito']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_d_tranche1" name="korelasi_pt_d_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_d_tranche2" name="korelasi_pt_d_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_d_tranche3" name="korelasi_pt_d_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap - Reksa Dana Saham <?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_saham']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korealsi_pt_r_s_tranche1" name="korealsi_pt_r_s_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korealsi_pt_r_s_tranche2" name="korealsi_pt_r_s_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korealsi_pt_r_s_tranche3" name="korealsi_pt_r_s_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap - Reksa Dana Pendapatan Tetap <?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_pt_tranche1" name="korelasi_pt_r_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_pt_tranche2" name="korelasi_pt_r_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_pt_tranche3" name="korelasi_pt_r_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap - Reksa Dana Pasar Uang <?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_pasar_uang']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_pu_tranche1" name="korelasi_pt_r_pu_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_pu_tranche2" name="korelasi_pt_r_pu_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_pu_tranche3" name="korelasi_pt_r_pu_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Pendapatan Tetap - Reksa Dana Campuran <?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_campuran']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_c_tranche1" name="korelasi_pt_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_c_tranche2" name="korelasi_pt_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_pt_r_c_tranche3" name="korelasi_pt_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Deposito - Reksa Dana Saham <?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_saham']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_s_tranche1" name="korelasi_d_r_s_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_s_tranche2" name="korelasi_d_r_s_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_s_tranche3" name="korelasi_d_r_s_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Deposito - Reksa Dana Pendapatan Tetap <?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_pt_tranche1" name="korelasi_d_r_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_pt_tranche2" name="korelasi_d_r_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_pt_tranche3" name="korelasi_d_r_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Deposito - Reksa Dana Pasar Uang <?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_pasar_uang']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_pu_tranche1" name="korelasi_d_r_pu_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_pu_tranche2" name="korelasi_d_r_pu_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_pu_tranche3" name="korelasi_d_r_pu_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Deposito - Reksa Dana Campuran <?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_campuran']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_c_tranche1" name="korelasi_d_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_c_tranche2" name="korelasi_d_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_d_r_c_tranche3" name="korelasi_d_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Saham - Reksa Dana Pendapatan Tetap <?= check_status_aset($status_aset['reksa_dana_saham'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_pt_tranche1" name="korelasi_r_s_r_pt_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_pt_tranche2" name="korelasi_r_s_r_pt_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_pt_tranche3" name="korelasi_r_s_r_pt_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Saham - Reksa Dana Pasar Uang <?= check_status_aset($status_aset['reksa_dana_saham'], $status_aset['reksa_dana_pasar_uang']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_pu_tranche1" name="korelasi_r_s_r_pu_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_pu_tranche2" name="korelasi_r_s_r_pu_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_pu_tranche3" name="korelasi_r_s_r_pu_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Saham - Reksa Dana Campuran <?= check_status_aset($status_aset['reksa_dana_saham'], $status_aset['reksa_dana_campuran']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_c_tranche1" name="korelasi_r_s_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_c_tranche2" name="korelasi_r_s_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_s_r_c_tranche3" name="korelasi_r_s_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Pendapatan Tetap - Reksa Dana Pasar Uang <?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], $status_aset['reksa_dana_pasar_uang']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pt_r_pu_tranche1" name="korelasi_r_pt_r_pu_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pt_r_pu_tranche2" name="korelasi_r_pt_r_pu_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pt_r_pu_tranche3" name="korelasi_r_pt_r_pu_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Pendapatan Tetap - Reksa Dana Campuran <?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], $status_aset['reksa_dana_campuran']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pt_r_c_tranche1" name="korelasi_r_pt_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pt_r_c_tranche2" name="korelasi_r_pt_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pt_r_c_tranche3" name="korelasi_r_pt_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">Reksa Dana Pasar Uang - Reksa Dana Campuran <?= check_status_aset($status_aset['reksa_dana_pasar_uang'], $status_aset['reksa_dana_campuran']) ?></td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pu_r_c_tranche1" name="korelasi_r_pu_r_c_tranche1" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pu_r_c_tranche2" name="korelasi_r_pu_r_c_tranche2" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                              <td>
                                <div class="input-group">
                                  <input type="number" step="any" id="korelasi_r_pu_r_c_tranche3" name="korelasi_r_pu_r_c_tranche3" class="form-control" placeholder="Masukkan Nilai"  required>
                                  <div class="input-group-text">%</div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->

<script>
    function setDataToPage(data){
      const myForm = document.getElementById("myForm"),
      namaPortofolio = document.getElementById("namaPortofolio"),
      flag = document.getElementById("flag"),
      optionFlag = document.createElement("option");

      myForm.addEventListener('submit', function(e) {
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
                myForm.submit();
              }
          });
      });

      myForm.action = "<?= base_url() ?>setting/personal_pasar_keuangan_edit/"+data.id;
      namaPortofolio.value = data.nama;

      for (var i = 0; i < flag.options.length; i++) {
        var option = flag.options[i];
        if (option.value === data.flag.toString()) {
          option.selected = true;
          break;
        }
      }

      // Nilai Variabel
      const nilai_lifecycle = data.komposisi_investasi[0];
      const nilai_personal_keuangan = data;
      // Delete
      delete nilai_personal_keuangan.id;
      delete nilai_personal_keuangan.nama;
      delete nilai_personal_keuangan.created_at;
      delete nilai_personal_keuangan.flag;
      delete nilai_personal_keuangan.komposisi_investasi;

      delete nilai_lifecycle.id;
      delete nilai_lifecycle.id_setting_portofolio_personal_admin;
      delete nilai_lifecycle.nama;
      delete nilai_lifecycle.created_at;
      delete nilai_lifecycle.flag;

      for (var key in nilai_personal_keuangan) {
        var value = nilai_personal_keuangan[key];
        eval("var " + key + " = " + value + ";");
        document.getElementById(key).value = value;
      }
    
      console.log(nilai_lifecycle)
      for (var key in nilai_lifecycle) {
        var value = nilai_lifecycle[key];
        eval("var " + key + " = " + value + ";");
        document.getElementById(key).value = value;
      }
    }
    const select = document.getElementById('jenis_investasi');
    const container = document.getElementById("container");
    select.addEventListener('change', function() {
      document.getElementById("containerBeforeSelected").style.display = "none";
      document.getElementById("containerAfterSelected").style.display = "block";
      var xhr = new XMLHttpRequest();
      xhr.withCredentials = true;
      xhr.addEventListener("readystatechange", function() {
        if(this.readyState === 4) {
          let data = xhr.response;
          let response = JSON.parse(data);
          setDataToPage(response)
        }
      });
      xhr.open("GET", "<?= base_url() ?>setting/personal_pasar_keuangan_by_id/"+select.value);
      xhr.send();
    });
  </script>
  
<script>
document.getElementById('hitungNilai').addEventListener('click', function(event) {
  event.preventDefault();
  Swal.fire({
      title: "Konfirmasi Pilihan Anda",
      text: "Hitung Nilai Setting Personal Keuangan?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Hitung",
      cancelButtonText: "Batal",
  }).then((result) => {
      if (result.isConfirmed) {  
        window.location.href = event.target.href;
      }
  });
});
</script>