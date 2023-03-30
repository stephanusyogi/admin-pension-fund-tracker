
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="table-responsive ">
                    <table id="table-master" class="table datatable table-hover table-bordered" style="width:100%">
                      <thead>
                          <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal Registrasi</th>
                            <th>Account</th>
                            <th>Kuisioner</th>
                            <th>Informasi Profil Peserta</th>
                          </tr>
                      </thead>
                      <tbody>
                            <?php 
                            $no = 1;
                            if ($data_user["data"]["data"]) {
                            foreach ($data_user["data"]["data"] as $key) { ?>
                              <tr class="-intro-x text-center">
                                <td><?= $no ?></td>
                                <td><?= $key["nama"] ?></td>
                                <td>
                                  <?= $key["email"] ?>
                                  <br>
                                  <?php if($key["email_verified_at"]): ?>
                                    <button class="btn btn-sm btn-success">Verified</button>
                                  <?php else: ?>
                                    <button class="btn btn-sm btn-warning">Not Verified Yet</button>
                                  <?php endif; ?>
                                </td>
                                <td><?= $key["tgl_registrasi"] ?></td>
                                <td><a href="#" class="btn btn-sm btn-secondary">Lihat Detail Akun</a></td>
                                <td><a href="#" class="btn btn-sm btn-secondary">Lihat Kuisoner Peserta</a></td>
                                <td><a href="#" class="btn btn-sm btn-secondary">Lihat Profil Peserta</a></td>
                              </tr>
                            <?php $no++; } } ?>
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
  $('#table-master').dataTable( {
      "ordering": false,
      searching: false, 
      paging: false, 
      info: false
    } );
  });
</script>