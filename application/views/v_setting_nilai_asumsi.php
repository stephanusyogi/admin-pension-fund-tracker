
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Setting DAPENBI Nilai Asumsi</p>
                    <div class="flex items-center gap-4">
                      <a href="<?= base_url() ?>setting-nilai-asumsi/tambah" class="btn btn-md btn-secondary">
                        <i data-lucide="plus-circle" class="mr-2"></i>
                        Tambah Jenis Investasi
                      </a>
                      <!-- <a href="#" class="btn btn-md btn-secondary">
                        <i data-lucide="settings" class="mr-2"></i>
                        Buka/Tutup Instrumen
                      </a> -->
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
                            <th>Pilihan Investasi</th>
                            <th class="text-center">Aksi</th>
                          </tr>
                          <tr>
                            <th>-</th>
                            <th class="text-center">
                              <div class="flex items-center justify-center gap-4">
                                <a href="<?= base_url() ?>setting-nilai-asumsi/edit/1" class="btn btn-sm btn-warning">
                                  <i data-lucide="edit" class="mr-2"></i>
                                  Edit
                                </a>
                                <a href="<?= base_url() ?>setting-nilai-asumsi/delete" class="hapus-investasi btn btn-sm btn-danger">
                                  <i data-lucide="trash" class="mr-2"></i>
                                  Hapus
                                </a>
                              </div>
                            </th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Kenaikan Gaji per tahun</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Iuran PPIP (% dari gaji)</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Tambahan Iuran Mandiri PPIP</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Dasar pembayaran Iuran Personal</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Jumlah Pembayaran Iuran Personal</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Kenaikan Iuran Personal</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Inflasi jangka panjang</td>
                          <td></td>
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