
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Setting DAPENBI LifeCycle Fund</p>
                    <div class="flex items-center gap-4">
                      <a href="<?= base_url() ?>setting-komposisi-investasi-lifecycle-fund/tambah" class="btn btn-md btn-secondary">
                        <i data-lucide="plus-circle" class="mr-2"></i>
                        Tambah Jenis Investasi
                      </a>
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
                                <a href="<?= base_url() ?>setting-komposisi-investasi-lifecycle-fund/edit/1" class="btn btn-sm btn-warning">
                                  <i data-lucide="edit" class="mr-2"></i>
                                  Edit
                                </a>
                                <a href="<?= base_url() ?>setting-komposisi-investasi-lifecycle-fund/delete" class="hapus-investasi btn btn-sm btn-danger">
                                  <i data-lucide="trash" class="mr-2"></i>
                                  Hapus
                                </a>
                              </div>
                            </th>
                          </tr>
                          <tr>
                            <th colspan="2">Komposisi Investasi Life Cycle Fund</th>
                            <th>Tranche Investasi 1 (sebelum memasuki Tranche Investasi 2)</th>
                            <th>Tranche Investasi 2 (5 tahun menjelang memasuki Tranche Likuiditas)</th>
                            <th>Tranche Likuiditas (2 tahun menjelang Pensiun)</th>
                          </tr>
                      </thead>
                      <tbody>
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