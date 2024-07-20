<?php
    include "koneksi.php";
    
    $sql = "SELECT * FROM login";
    $result = $konek->query($sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $no = 1;
   ?> 
<table border="1">
    <tr>
        <th>email</th>
        <th>password</th>
    </tr>

    <?php 
    foreach($data as $row){ ?>

    <tr>

        <td><?= $row['email'] ?></td>
        <td><?= $row['password'] ?></td>
        <td> 
            <a href="hapus.php?password=<?= $row['password'] ?>"><button>Hapus</button></a>
        </td>
    </tr>
      
    <?php
    $no++;
    }
    ?>

   </table>