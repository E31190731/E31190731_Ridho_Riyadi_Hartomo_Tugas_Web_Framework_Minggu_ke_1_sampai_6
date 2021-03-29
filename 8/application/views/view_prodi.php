<!DOCTYPE html>
<html>
    <head>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            td {
                padding: 10px;
            }
        </style>
    </head>
    <body>
        Daftar Angkatan
        <table>
            <tr>
                <td>No</td>
                <td>Tahun</td>
            </tr>
			<?php 
				foreach ($prodi as $row) {
					echo "
                    <tr>
                        <td>" . $row['no'] . "</td>
                        <td>" . $row['prodi'] . "</td>
                        <td>" . $row['ket'] . "</td>
                    </tr>";
				}
			?>
		</table>
    </body>
</html>