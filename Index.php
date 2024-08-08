<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรเจค</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="number"] {
            width: 90%;
            padding: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h1>เส้นทางวิกฤต</h1>
    
    <table>
        <thead>
            <tr>
                <th>กิจกรรม</th>
                <th>ระยะเวลา (วัน)</th>
                <th>ES (Early Start)</th>
                <th>EF (Early Finish)</th>
                <th>LS (Late Start)</th>
                <th>LF (Late Finish)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A</td>
                <td><input type="number" name="duration_A"></td>
                <td><input type="number" name="es_A"></td>
                <td><input type="number" name="ef_A"></td>
                <td><input type="number" name="ls_A"></td>
                <td><input type="number" name="lf_A"></td>
            </tr>
            <tr>
                <td>B</td>
                <td><input type="number" name="duration_B"></td>
                <td><input type="number" name="es_B"></td>
                <td><input type="number" name="ef_B"></td>
                <td><input type="number" name="ls_B"></td>
                <td><input type="number" name="lf_B"></td>
            </tr>
            <tr>
                <td>C</td>
                <td><input type="number" name="duration_C"></td>
                <td><input type="number" name="es_C"></td>
                <td><input type="number" name="ef_C"></td>
                <td><input type="number" name="ls_C"></td>
                <td><input type="number" name="lf_C"></td>
            </tr>
            <tr>
                <td>D</td>
                <td><input type="number" name="duration_D"></td>
                <td><input type="number" name="es_D"></td>
                <td><input type="number" name="ef_D"></td>
                <td><input type="number" name="ls_D"></td>
                <td><input type="number" name="lf_D"></td>
            </tr>
            <tr>
                <td>E</td>
                <td><input type="number" name="duration_E"></td>
                <td><input type="number" name="es_E"></td>
                <td><input type="number" name="ef_E"></td>
                <td><input type="number" name="ls_E"></td>
                <td><input type="number" name="lf_E"></td>
            </tr>
            <tr>
                <td>F</td>
                <td><input type="number" name="duration_F"></td>
                <td><input type="number" name="es_F"></td>
                <td><input type="number" name="ef_F"></td>
                <td><input type="number" name="ls_F"></td>
                <td><input type="number" name="lf_F"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
