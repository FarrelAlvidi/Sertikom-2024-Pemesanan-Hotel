<?php 
include "connect.php"

?>


    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      <!-- Desktop sidebar -->

      <!-- Mobile sidebar -->
      <!-- Backdrop -->


      <div class="flex flex-col flex-1 w-full">
          <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Jenis Kamar
            </h2>
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="https://github.com/estevanmaito/windmill-dashboard"
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>Star this project on GitHub</span>
              </div>
              <span>View more &RightArrow;</span>
            </a>

            <!-- With avatar -->

            <div>
              <a href="admin.php?page=jeniskamar&aksi=tambah" class="bg-purple-600 p-2 rounded-lg text-white font-semibold text-sm  ">Tambah Data Admin</a>
            </div>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs mt-5">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                  <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">No</th>
                      <th class="px-4 py-3">Jenis Kamar</th>
                      <th class="px-4 py-3">Harga</th>
                      <th class="px-4 py-3">Keterangan</th>
                      <th class="px-4 py-3">Action</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  <?php
                    $sql = "SELECT * FROM tbl_jenis_kamar";
                    $result = $db->query($sql);
                    $no = 1;

                    foreach ($result as $row) {
                    ?>
                
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <?= $no++; ?>
                          <div>
                            <p class="font-semibold"></p>

                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <?= $row['jenis_kamar']; ?>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 text-md leading-tight rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        <?= number_format($row['harga']); ?>
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <?= $row['keterangan']; ?>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <a class="bg-green-400 p-1 px-2 text-white rounded-md font-semibold" href="admin.php?page=jeniskamar&id=<?= $row['id_kamar']; ?>">Edit</a>
                      
                      </td>
                      <td class="px-4 py-3 text-sm">
                      <a class="bg-red-400 p-1 px-2 text-white rounded-md font-semibold" href="hapusKamar.php?id=<?= $row['id_kamar']?>">Hapus</a>
                      
                      </td>

                    </tr>
            <?php 
            }
            ?>
          </tbody>

                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
