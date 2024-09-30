

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <!-- Header Section -->
    <?php include "headerHotel.html";?>
    <!-- End Header Section-->
    <?php 
include "connect.php"

?>
<div class="shadow-lg mx-auto w-[60rem] mt-5 pt-2">
            <h1 class="font-bold text-2xl text-center">RESERVED ROOM</h1>
            <div class="w-[60rem] mb-8 overflow-hidden rounded-lg shadow-md mt-5">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                  <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-2 py-3">No</th>
                      <th class="px-2 py-3">Nama Lengkap</th>
                      <th class="px-2 py-3">No Identitas</th>
                      <th class="px-2 py-3">No HP</th>
                      <th class="px-2 py-3">Jenis Kamar</th>
                      <th class="px-2 py-3">Check_in</th>
                      <th class="px-2 py-3">Check_out</th>
                      <th class="px-2 py-3">Jumlah</th>
                      <th class="px-2 py-3">Total</th>
                    </tr>
                  </thead>
                  <?php
                    $sql = "SELECT * FROM tbl_penyewa inner join tbl_jenis_kamar on tbl_penyewa.id_kamar = tbl_jenis_kamar.id_kamar";
                    $result = $db->query($sql);
                    $no = 1;
                    
                    foreach ($result as $row) {
                    ?>
                
                <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-2 py-3">
                        <div class="flex items-center text-sm">
                            <?= $no++; ?>
                          <div>
                            <p class="font-semibold"></p>

                          </div>
                        </div>
                      </td>
                      <td class="px-2 py-3 text-sm">
                      <?= $row['nama']; ?>
                      </td>
                      <td class="px-2 py-3 text-xs">
                        <span
                          class="px-2 py-1 text-md leading-tight rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        <?= $row['no_identitas']; ?>
                        </span>
                      </td>
                      <td class="px-2 py-3 text-sm">
                      <?= $row['no_hp']; ?>
                      </td>
                      <td class="px-2 py-3 text-xs">
                        <span
                          class="px-2 py-1 text-md leading-tight rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        <?= $row['jenis_kamar']; ?>
                        </span>
                      </td>
                      <td class="px-2 py-3 text-xs">
                        <span
                          class="px-2 py-1 text-md leading-tight rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        <?= $row['cekin']; ?>
                        </span>
                      </td>
                      <td class="px-2 py-3 text-xs">
                        <span
                          class="px-2 py-1 text-md leading-tight rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        <?= $row['cekout']; ?>
                        </span>
                      </td>
                      <td class="px-2 py-3 text-xs">
                        <span
                          class="px-2 py-1 text-md leading-tight rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        <?= $row['jumlah']; ?>
                        </span>
                      </td>
                      <td class="px-2 py-3 text-xs">
                        <span
                          class="px-2 py-1 text-md leading-tight rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        Rp. <?= number_format($row['total']); ?>
                        </span>
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
</div>
  </body>
</html>

</body>
</html>
