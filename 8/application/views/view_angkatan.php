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
            foreach ($Angkatan as $row) {
                echo "
                    <tr>
                        <td>" . $row['no'] . "</td>
                        <td>" . $row['tahun'] . "</td>
                    </tr>
                ";
            }
            ?>
        </table>
    </body>
</html>