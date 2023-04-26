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
              <form id="myForm" class="col-span-12 mt-8" action="<?= base_url() ?>setting/personal_pasar_keuangan_add_action" method="post">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <div class="mb-2">
                      <p class="text-xl font-semibold">Formulir Jenis Investasi Baru DAPENBI Personal Keuangan</p>
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
                            <th colspan="3">Pilihan Investasi <span style="color: red;">(*)</span></th>
                            <th colspan="3" class="text-center"><input id="namaPortofolio" type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required></th>
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
                          <th colspan="5" class="text-center">Komposisi Investasi</th>
                        </tr>
                        <tr>
                          <td colspan="2">Saham <span style="color: red;">(*)</span></td>
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
                          <td colspan="2">Pendapatan Tetap <span style="color: red;">(*)</span></td>
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
                          <td colspan="2">Deposito <span style="color: red;">(*)</span></td>
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
                          <td colspan="2">Reksadana Saham <span style="color: red;">(*)</span></td>
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
                          <td colspan="2">Reksadana Pendapatan Tetap <span style="color: red;">(*)</span></td>
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
                          <td colspan="2">Reksadana Pasar Uang <span style="color: red;">(*)</span></td>
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
                          <td colspan="2">Reksadana Campuran <span style="color: red;">(*)</span></td>
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
                          <td colspan="2">Saham <span style="color: red;">(*)</span> <?= check_status_aset($status_aset['saham'] , null) ?></td>
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
                          <td colspan="2">Pendapatan Tetap <span style="color: red;">(*)</span>  <?= check_status_aset($status_aset['pendapatan_tetap'], null) ?></td>
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
                          <td colspan="2">Deposito <span style="color: red;">(*)</span><?= check_status_aset($status_aset['deposito'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Saham <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_saham'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Pasar Uang <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_pasar_uang'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_campuran'], null) ?></td>
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
                          <td colspan="2">Saham <span style="color: red;">(*)</span><?= check_status_aset($status_aset['saham'], null) ?></td>
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
                          <td colspan="2">Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['pendapatan_tetap'], null) ?></td>
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
                          <td colspan="2">Deposito <span style="color: red;">(*)</span><?= check_status_aset($status_aset['deposito'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Saham <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_saham'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Pasar Uang <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_pasar_uang'], null) ?></td>
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
                          <td colspan="2">Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_campuran'], null) ?></td>
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
                          <td colspan="2">Saham - Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['saham'], $status_aset['pendapatan_tetap']) ?></td>
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
                          <td colspan="2">Saham - Deposito <span style="color: red;">(*)</span><?= check_status_aset($status_aset['saham'], $status_aset['deposito']) ?></td>
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
                          <td colspan="2">Saham - Reksa Dana Saham <span style="color: red;">(*)</span><?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_saham']) ?></td>
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
                          <td colspan="2">Saham - Reksa Dana Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
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
                          <td colspan="2">Saham - Reksa Dana Pasar Uang <span style="color: red;">(*)</span><?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_pasar_uang']) ?></td>
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
                          <td colspan="2">Saham - Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['saham'], $status_aset['reksa_dana_campuran']) ?></td>
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
                          <td colspan="2">Pendapatan Tetap - Deposito <span style="color: red;">(*)</span><?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['deposito']) ?></td>
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
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Saham <span style="color: red;">(*)</span><?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_saham']) ?></td>
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
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
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
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Pasar Uang <span style="color: red;">(*)</span><?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_pasar_uang']) ?></td>
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
                          <td colspan="2">Pendapatan Tetap - Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['pendapatan_tetap'], $status_aset['reksa_dana_campuran']) ?></td>
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
                          <td colspan="2">Deposito - Reksa Dana Saham <span style="color: red;">(*)</span><?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_saham']) ?></td>
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
                          <td colspan="2">Deposito - Reksa Dana Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
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
                          <td colspan="2">Deposito - Reksa Dana Pasar Uang <span style="color: red;">(*)</span><?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_pasar_uang']) ?></td>
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
                          <td colspan="2">Deposito - Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['deposito'], $status_aset['reksa_dana_campuran']) ?></td>
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
                          <td colspan="2">Reksa Dana Saham - Reksa Dana Pendapatan Tetap <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_saham'], $status_aset['reksa_dana_pendapatan_tetap']) ?></td>
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
                          <td colspan="2">Reksa Dana Saham - Reksa Dana Pasar Uang <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_saham'], $status_aset['reksa_dana_pasar_uang']) ?></td>
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
                          <td colspan="2">Reksa Dana Saham - Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_saham'], $status_aset['reksa_dana_campuran']) ?></td>
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
                          <td colspan="2">Reksa Dana Pendapatan Tetap - Reksa Dana Pasar Uang <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], $status_aset['reksa_dana_pasar_uang']) ?></td>
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
                          <td colspan="2">Reksa Dana Pendapatan Tetap - Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_pendapatan_tetap'], $status_aset['reksa_dana_campuran']) ?></td>
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
                          <td colspan="2">Reksa Dana Pasar Uang - Reksa Dana Campuran <span style="color: red;">(*)</span><?= check_status_aset($status_aset['reksa_dana_pasar_uang'], $status_aset['reksa_dana_campuran']) ?></td>
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
          confirmButtonText: "Simpan",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            form.submit();
          }
      });
  });
</script>