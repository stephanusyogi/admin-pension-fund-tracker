
<!-- BEGIN: Content -->
<div class="content">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 mt-8">
                  <div class="flex items-center" style="justify-content: space-between;">
                    <p class="text-xl font-semibold mb-2">Excel Export Data</p>
                  </div>
                  <hr class="my-5">
                   <ul class="nav nav-tabs" role="tablist">
                    <li id="aktivitas-tombol-tab" class="nav-item flex-1" role="presentation">
                      <button class="nav-link w-full py-2 active" data-tw-toggle="pill" data-tw-target="#aktivitas-tombol" type="button" role="tab" aria-controls="aktivitas-tombol" aria-selected="true" > Aktivitas Tombol Users </button>
                    </li>
                    <li id="data-profil-users-tab" class="nav-item flex-1" role="presentation">
                      <button class="nav-link w-full py-2" data-tw-toggle="pill" data-tw-target="#data-profil-users" type="button" role="tab" aria-controls="data-profil-users" aria-selected="false" > Data Profil Users </button>
                    </li>
                    <li id="data-investasi-users-tab" class="nav-item flex-1" role="presentation">
                      <button class="nav-link w-full py-2" data-tw-toggle="pill" data-tw-target="#data-investasi-users" type="button" role="tab" aria-controls="data-investasi-users" aria-selected="false" > Data Investasi Users </button>
                    </li>
                    <li id="data-setting-users-tab" class="nav-item flex-1" role="presentation">
                      <button class="nav-link w-full py-2" data-tw-toggle="pill" data-tw-target="#data-setting-users" type="button" role="tab" aria-controls="data-setting-users" aria-selected="false" > Data Setting Users </button>
                    </li>
                    <li id="data-dashboard-users-tab" class="nav-item flex-1" role="presentation">
                      <button class="nav-link w-full py-2" data-tw-toggle="pill" data-tw-target="#data-dashboard-users" type="button" role="tab" aria-controls="data-dashboard-users" aria-selected="false" > Data Dashboard Users </button>
                    </li>
                    <li id="data-kuisioner-users-tab" class="nav-item flex-1" role="presentation">
                      <button class="nav-link w-full py-2" data-tw-toggle="pill" data-tw-target="#data-kuisioner-users" type="button" role="tab" aria-controls="data-kuisioner-users" aria-selected="false" > Data Kuisioner Users </button>
                    </li>
                  </ul>
                  <div class="tab-content border-l border-r border-b">
                    <div id="aktivitas-tombol" class="tab-pane leading-relaxed p-5 active" role="tabpanel" aria-labelledby="aktivitas-tombol"> 
                      <form action="#" method="post">
                        <div class="grid grid-cols-2 gap-6">
                          <div>
                            <label for="regular-form-1" class="form-label">Kategori Tarikan:</label>
                            <select class="form-select" aria-label=".form-select-sm example" name="kategori_aktivitas" required>
                                <option selected disabled>Pilih Kategori Aktivitas</option>
                                <option value="activity_login">Aktivitas Login Aplikasi</option>
                                <option value="activity_update_kuisioner">Aktivitas Submit & Update Kuisioner</option>
                                <option value="activity_update_biodata">Aktivitas Submit & Update Biodata Pengguna</option>
                                <option value="activity_update_tracking_data">Aktivitas Submit & Update Tracking Data Pengguna</option>
                                <option value="activity_setting_ppip">Aktivitas Submit & Update Setting Portofolio PPIP</option>
                                <option value="activity_setting_personal_keuangan">Aktivitas Submit & Update Setting Personal Keuangan</option>
                                <option value="activity_setting_treatment_pembayaran">Aktivitas Submit & Update Setting Treatment Pembayaran Setelah Pensiun</option>
                                <option value="activity_ubah_password">Aktivitas Ubah Password</option>
                            </select>
                          </div>
                          <div>
                            <label for="" class="form-label">Periode Tarikan:</label>
                            <div class="grid grid-cols-2 gap-4">
                              <input id="" type="date" class="form-control">
                              <input id="" type="date" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-success"><i data-lucide="download"></i> Download</button>
                        </div>
                      </form>
                    </div>
                    <div id="data-profil-users" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="data-profil-users">
                      <form action="#" method="post">
                        <div class="grid grid-cols-2 gap-6">
                          <div>
                            <label>Status Flag Data Profil Users:</label>
                            <div class="form-check mt-2">
                              <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans"> 
                              <label class="form-check-label" for="radio-switch-1">Tampilkan Hanya Data Profil Users Terbaru</label> 
                            </div>
                            <div class="form-check mt-2">
                              <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                              <label class="form-check-label" for="radio-switch-2">Tampilkan Seluruh Riwayat Data Profil Users</label> 
                            </div>
                          </div>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-success"><i data-lucide="download"></i> Download</button>
                        </div>
                      </form>
                    </div>
                    <div id="data-investasi-users" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="data-investasi-users">
                      <form action="#" method="post">
                        <div class="grid grid-cols-2 gap-6">
                          <div>
                            <label>Status Flag Data Investasi Users:</label>
                            <div class="form-check mt-2">
                              <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans"> 
                              <label class="form-check-label" for="radio-switch-1">Tampilkan Hanya Data Investasi Users Terbaru</label> 
                            </div>
                            <div class="form-check mt-2">
                              <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                              <label class="form-check-label" for="radio-switch-2">Tampilkan Seluruh Riwayat Data Investasi Users</label> 
                            </div>
                          </div>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-success"><i data-lucide="download"></i> Download</button>
                        </div>
                      </form>
                    </div>
                    <div id="data-setting-users" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="data-setting-users">
                      <form action="#" method="post">
                        <div class="grid grid-cols-2 gap-6">
                          <div>
                            <label>Status Flag Data Setting Users:</label>
                            <div class="form-check mt-2">
                              <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans"> 
                              <label class="form-check-label" for="radio-switch-1">Tampilkan Hanya Data Setting Users Terbaru</label> 
                            </div>
                            <div class="form-check mt-2">
                              <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                              <label class="form-check-label" for="radio-switch-2">Tampilkan Seluruh Riwayat Setting Investasi Users</label> 
                            </div>
                          </div>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-success"><i data-lucide="download"></i> Download</button>
                        </div>
                      </form>
                    </div>
                    <div id="data-dashboard-users" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="data-dashboard-users">
                      <form action="#" method="post">
                        <div class="grid grid-cols-2 gap-6">
                          <div>
                            <label>Status Flag Data Dashboard Users:</label>
                            <div class="form-check mt-2">
                              <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans"> 
                              <label class="form-check-label" for="radio-switch-1">Tampilkan Hanya Data Dashboard Users Terbaru</label> 
                            </div>
                            <div class="form-check mt-2">
                              <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                              <label class="form-check-label" for="radio-switch-2">Tampilkan Seluruh Riwayat Dashboard Investasi Users</label> 
                            </div>
                          </div>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-success"><i data-lucide="download"></i> Download</button>
                        </div>
                      </form>
                    </div>
                    <div id="data-kuisioner-users" class="tab-pane leading-relaxed p-5" role="tabpanel" aria-labelledby="data-kuisioner-users">
                      <form action="#" method="post">
                        <div class="grid grid-cols-2 gap-6">
                          <div>
                            <label>Status Flag Data Kuisioner Users:</label>
                            <div class="form-check mt-2">
                              <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans"> 
                              <label class="form-check-label" for="radio-switch-1">Tampilkan Hanya Data Kuisioner Users Terbaru</label> 
                            </div>
                            <div class="form-check mt-2">
                              <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                              <label class="form-check-label" for="radio-switch-2">Tampilkan Seluruh Riwayat Kuisioner Investasi Users</label> 
                            </div>
                          </div>
                        </div>
                        <div class="mt-5">
                          <button type="submit" class="btn btn-success"><i data-lucide="download"></i> Download</button>
                        </div>
                      </form>
                    </div>
                  </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->
