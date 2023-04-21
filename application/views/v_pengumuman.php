
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Data Master Pengumuman</p>
                    <div class="flex items-center gap-4" style="justify-content:space-between;">
                      <a class="btn btn-md btn-success" href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-pengumuman">
                        Tambah Pengumuman
                      </a>
                      <div id="add-pengumuman" class="modal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content modal-xl">
                                  <div class="modal-header">
                                      <h2 class="font-medium text-base mr-auto">Tambah Pengumuman</h2>
                                  </div> <!-- END: Modal Header -->
                                  <div class="modal-body p-10">
                                    <form action="<?= base_url() ?>pengumuman/add" method="post">
                                      <div class="mb-2">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input id="judul" name="judul" type="text" class="form-control" required>
                                      </div>
                                      <div class="mb-2">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required></textarea>
                                        </div>
                                      <div class="text-right">
                                        <button type="submit" class="btn btn-succes btn-sm">Simpan</button>
                                      </div>
                                    </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-10">
                  <div class="table-responsive ">
                    <table class="table table-hover table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Deskripsi</th>
                          <th>Created At</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if($data_pengumuman){ 
                        $i = 1; 
                        foreach ($data_pengumuman['data'] as $row) { ?>
                        <tr>
                          <td><?= $i; ?></td>
                          <td><?= $row['judul']; ?></td>
                          <td><?= $row['deskripsi']; ?></td>
                          <td><?= $row['created_at']; ?></td>
                          <td>
                            <div class="flex gap-4">
                              <a href="<?= base_url() ?>pengumuman/delete/<?= $row['id'] ?>" class="btn btn-sm btn-danger hapus-akun">Hapus</a>
                              <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#modal-ubah<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                            <div id="modal-ubah<?= $row['id'] ?>" class="modal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form class="modal-content modal-lg" method="post" action="<?= base_url() ?>pengumuman/update/<?= $row['id'] ?>">
                                        <!-- BEGIN: Modal Header -->
                                        <div class="modal-header">
                                            <h2 class="font-medium text-base mr-auto">Ubah Pengumuman</h2>
                                        </div> <!-- END: Modal Header -->
                                        <!-- BEGIN: Modal Body -->
                                        <div class="modal-body">
                                          <div class="mb-2">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input id="judul" name="judul" type="text" class="form-control" value="<?= $row['judul']; ?>" required>
                                          </div>
                                          <div class="mb-2">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required><?= $row['deskripsi']; ?></textarea>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                                          <button type="submit" class="btn btn-primary w-20">Simpan</button>
                                        </div> <!-- END: Modal Footer -->
                                    </form>
                                </div>
                            </div> <!-- END: Modal Content -->
                          </td>
                        </tr>
                      <?php $i++; } ?>
                      <?php }else{ ?>
                        <tr>
                            <td colspan="5" style="text-align:center;"><p style="color:grey;font-size:18px;">Data Belum Tersedia</p></td>
                        </tr>
                      <?php } ?>
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
  document.querySelector('.hapus-akun').addEventListener('click', function(e) {
    e.preventDefault();
    const url = this.getAttribute('href');
    Swal.fire({
          title: "Konfirmasi Pilihan Anda",
          text: "Apakah anda yakin dengan pilihan anda?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Hapus Pengumuman?",
          cancelButtonText: "Kembali",
      }).then((result) => {
          if (result.isConfirmed) {  
            window.location.href = this.getAttribute('href');
          }
      });
  });
  
</script>
