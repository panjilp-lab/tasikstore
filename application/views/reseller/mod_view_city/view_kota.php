<?php
  echo "<option value=''>- Pilih -</option>";
  foreach ($kota as $row2){
      echo "<option value='$row2[kota_id]'>$row2[nama_kota]</option>";
  }