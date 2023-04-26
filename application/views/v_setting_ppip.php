
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Setting Portofolio DAPENBI IP</p>
                    <div class="flex items-center gap-4">
                      <a href="<?= base_url() ?>setting-portofolio-ppip/tambah" class="btn btn-md btn-secondary">
                        <i data-lucide="plus-circle" class="mr-2"></i>
                        Tambah Jenis Investasi
                      </a>
                      <a href="<?= base_url() ?>setting/ppip_hitung_nilai" class="btn btn-md btn-secondary" id="hitungNilai">
                        <i data-lucide="activity" class="mr-2"></i>
                        Hitung Nilai
                      </a>
                    </div>
                  </div>
                  <p class="font-medium">Silahkan pilih jenis investasi terlebih dahulu.</p>
                  <select id="jenis_investasi" class="form-select mt-2" aria-label="Default select example" style="width:50%;">
                        <option disabled selected>Jenis Investasi</option>
                        <?php foreach ($opsi as $key) { ?>
                          <option value="<?= $key['id'] ?>"><?= $key['nama_portofolio'] ?></option>  
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
                      <div class="table-responsive">
                        <table class="table table-hover table-bordered" style="width:100%">
                          <thead>
                              <tr>
                                <th>Pilihan Investasi</th>
                                <th colspan="2" class="text-center">Aksi</th>
                              </tr>
                              <tr>
                                <th>
                                  <input id="namaPortofolio" type="text" name="nama_portofolio" class="form-control" placeholder="Masukkan Nama" >
                                </th>
                                <th colspan="2" class="text-center">
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
                                <th>Informasi</th>
                                <th>Investasi</th>
                                <th>Likuiditas</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>
                                  Return Portofolio PPIP
                                  <p class="text-xs" style="font-style: italic;">Nilai ini akan diperbarui setelah tombol <strong>Hitung Nilai</strong> di tekan.</p>
                                </td>
                                <td>
                                  <div class="input-group">
                                    <input id="return_portofolio_tranche_investasi" type="number" step="any" name="return_portofolio_tranche_investasi" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group">
                                    <input id="return_portofolio_tranche_likuiditas" type="number" step="any" name="return_portofolio_tranche_likuiditas" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  Risiko Pasar Portofolio PPIP
                                  <p class="text-xs" style="font-style: italic;">Nilai ini akan diperbarui setelah tombol <strong>Hitung Nilai</strong> di tekan.</p>
                                </td>
                                <td>
                                  <div class="input-group">
                                    <input type="number" step="any" id="resiko_portofolio_tranche_investasi" name="resiko_portofolio_tranche_investasi" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group">
                                    <input type="number" step="any" id="resiko_portofolio_tranche_likuiditas" name="resiko_portofolio_tranche_likuiditas" class="form-control" placeholder="Masukkan Nilai"  readonly>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="3" class="font-medium text-center">Komposisi Investasi</td>
                              </tr>
                              <tr>
                                <td>Saham</td>
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
                                <td>Pendapatan Tetap</td>
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
                                <td>Deposito</td>
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
                                <td>Saham</td>
                                <td>
                                  <div class="input-group">
                                    <input type="number" step="any" id="return_saham" name="return_saham" class="form-control" placeholder="Masukkan Nilai"  required>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Pendapatan Tetap</td>
                                <td>
                                  <div class="input-group">
                                    <input type="number" step="any" id="return_pendapatan_tetap" name="return_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Deposito</td>
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
                                <td>Saham</td>
                                <td>
                                  <div class="input-group">
                                    <input type="number" step="any" id="resiko_saham" name="resiko_saham" class="form-control" placeholder="Masukkan Nilai"  required>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Pendapatan Tetap</td>
                                <td>
                                  <div class="input-group">
                                    <input type="number" step="any" id="resiko_pendapatan_tetap" name="resiko_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                                    <div class="input-group-text">%</div>
                                  </div>
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Deposito</td>
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
                                <td>Saham - Pendapatan Tetap</td>
                                <td>
                                  <input type="number" step="any" id="korelasi_saham_pendapatan_tetap" name="korelasi_saham_pendapatan_tetap" class="form-control" placeholder="Masukkan Nilai"  required>
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Saham - Deposito</td>
                                <td>
                                  <input type="number" step="any" id="korelasi_saham_deposito" name="korelasi_saham_deposito" class="form-control" placeholder="Masukkan Nilai"  required>
                                </td>
                                <td></td>
                              </tr>
                              <tr>
                                <td>Pendapatan Tetap - Deposito</td>
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

      myForm.action = "<?= base_url() ?>setting/ppip_edit/"+data.id;
      namaPortofolio.value = data.nama_portofolio;

      for (var i = 0; i < flag.options.length; i++) {
        var option = flag.options[i];
        if (option.value === data.flag.toString()) {
          option.selected = true;
          break;
        }
      }


      // Nilai Variabel
      const nilai = data;
      delete data.id;
      delete data.nama_portofolio;
      delete data.created_at;
      delete data.flag;

      for (var key in nilai) {
        var value = nilai[key];
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
      xhr.open("GET", "<?= base_url() ?>setting/ppip_by_id/"+select.value);
      xhr.send();
    });
  </script>

<script>
document.getElementById('hitungNilai').addEventListener('click', function(event) {
  event.preventDefault();
  Swal.fire({
      title: "Konfirmasi Pilihan Anda",
      text: "Hitung Nilai Setting PPIP?",
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