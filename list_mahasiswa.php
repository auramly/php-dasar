<?php
// array data mahasiswa
$data = [
    [1, "D212111001", "Aliftia"],
    [2, "D212111002", "Cahya"],
    [3, "D212111003", "Dasimah"],
    [4, "D212111004", "Desi"],
    [5, "D212111005", "Dewi"],
    [6, "D212111006", "Gita"],
    [7, "D212111007", "Ikhlas"],
    [8, "D212111008", "Intan"],
    [9, "D212111009", "Islah"],
    [10, "D212111010", "Kenia"]
];

// menampilkan tabel
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr><th>No</th><th>NIM</th><th>Nama</th></tr>";

foreach ($data as $row) {
    echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
          </tr>";
}
echo "</table>";
?>