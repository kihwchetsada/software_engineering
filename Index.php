<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรเจค</title>
    <link rel="stylesheet" href="css/se.css" /> 
    <style>
        .container {
            display: grid;
            place-items: center; /* จัดแนวทั้งแนวนอนและแนวตั้ง */
            height: 20;   /*     สูงเต็มความสูงของหน้าต่าง */
            padding: auto;   
            margin: 10;    
        }
    </style>
</head>
<body>
    <h1>เส้นทางวิกฤต</h1>
    <form>
       <table>
        <thead>
            <tr>
                <td>กิจกรรม</td>
                <td>กิจกรรมที่ต้องทำ</td>
                
            </tr>
            <tr>
                <td>A</td>
                <td>-</td>
            </tr>
            <tr>
                <td>B</td>
                <td>A</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
        </thead>
       </table>
       <img src="img/view.jpg" alt="Centered Image" > 
    </form>
    <form>
        <br><br><br><br><br>
    <div class="container">
  <!--   <img src="img/view.jpg" alt="Centered Image" > -->
    </div>
    <table class="card">
        <thead>
            <tr>
                <th>กิจกรรม</th>
                <th>ระยะเวลา (วัน)</th>
                <th>ES (Early Start)</th>
                <th>EF (Early Finish)</th>
                <th>LS (Late Start)</th>
                <th>LF (Late Finish)</th>
                <th>stack</th>
                <th>a</th>
                <th>m</th>
                <th>b</th>
                <th>T</th>
                <th>𝜎^2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A</td>
                <td><input type="number" name="duration_A" class="input"></td>
                <td><input type="number" name="es_A" class="input"></td>
                <td><input type="number" name="ef_A" class="input"></td>
                <td><input type="number" name="ls_A" class="input"></td>
                <td><input type="number" name="lf_A" class="input"></td>
                <td><input type="number" name="stack_A" class="input"></td>
                <td><input type="number" name="lf_A" class="input"></td>

            </tr>
            <tr>
                <td>B</td>
                <td><input type="number" name="duration_B" class="input"></td>
                <td><input type="number" name="es_B" class="input"></td>
                <td><input type="number" name="ef_B" class="input"></td>
                <td><input type="number" name="ls_B" class="input"></td>
                <td><input type="number" name="lf_B" class="input"></td>
            </tr>
            <tr>
                <td>C</td>
                <td><input type="number" name="duration_C" class="input"></td>
                <td><input type="number" name="es_C" class="input"></td>
                <td><input type="number" name="ef_C" class="input"></td>
                <td><input type="number" name="ls_C" class="input"></td>
                <td><input type="number" name="lf_C" class="input"></td>
            </tr>
            <tr>
                <td>D</td>
                <td><input type="number" name="duration_D" class="input"></td>
                <td><input type="number" name="es_D" class="input"></td>
                <td><input type="number" name="ef_D" class="input"></td>
                <td><input type="number" name="ls_D" class="input"></td>
                <td><input type="number" name="lf_D" class="input"></td>
            </tr>
            <tr>
                <td>E</td>
                <td><input type="number" name="duration_E" class="input"></td>
                <td><input type="number" name="es_E" class="input"></td>
                <td><input type="number" name="ef_E" class="input"></td>
                <td><input type="number" name="ls_E" class="input"></td>
                <td><input type="number" name="lf_E" class="input"></td>
            </tr>
            <tr>
                <td>F</td>
                <td><input type="number" name="duration_F" class="input"></td>
                <td><input type="number" name="es_F" class="input"></td>
                <td><input type="number" name="ef_F" class="input"></td>
                <td><input type="number" name="ls_F" class="input"></td>
                <td><input type="number" name="lf_F" class="input"></td>
            </tr>
            <tr>
                <td>G</td>
                <td><input type="number" name="duration_G" class="input"></td>
                <td><input type="number" name="es_G" class="input"></td>
                <td><input type="number" name="ef_G" class="input"></td>
                <td><input type="number" name="ls_G" class="input"></td>
                <td><input type="number" name="lf_G" class="input"></td>
            </tr>
            <tr>
                <td>H</td>
                <td><input type="number" name="duration_H" class="input"></td>
                <td><input type="number" name="es_H" class="input"></td>
                <td><input type="number" name="ef_H" class="input"></td>
                <td><input type="number" name="ls_H" class="input"></td>
                <td><input type="number" name="lf_H" class="input"></td>
            </tr>
            <tr>
                <td>I</td>
                <td><input type="number" name="duration_I" class="input"></td>
                <td><input type="number" name="es_I" class="input"></td>
                <td><input type="number" name="ef_I" class="input"></td>
                <td><input type="number" name="ls_I" class="input"></td>
                <td><input type="number" name="lf_I" class="input"></td>
            </tr>
            <tr>
                <td>J</td>
                <td><input type="number" name="duration_J" class="input"></td>
                <td><input type="number" name="es_J" class="input"></td>
                <td><input type="number" name="ef_J" class="input"></td>
                <td><input type="number" name="ls_J" class="input"></td>
                <td><input type="number" name="lf_J" class="input"></td>
            </tr>
            <tr>
                <td>K</td>
                <td><input type="number" name="duration_K" class="input"></td>
                <td><input type="number" name="es_K" class="input"></td>
                <td><input type="number" name="ef_K" class="input"></td>
                <td><input type="number" name="ls_K" class="input"></td>
                <td><input type="number" name="lf_K" class="input"></td>
            </tr>
            <tr>
                <td>L</td>
                <td><input type="number" name="duration_L" class="input"></td>
                <td><input type="number" name="es_L" class="input"></td>
                <td><input type="number" name="ef_L" class="input"></td>
                <td><input type="number" name="ls_L" class="input"></td>
                <td><input type="number" name="lf_L" class="input"></td>
            </tr>
            <tr>
                <td>M</td>
                <td><input type="number" name="duration_M" class="input"></td>
                <td><input type="number" name="es_M" class="input"></td>
                <td><input type="number" name="ef_M" class="input"></td>
                <td><input type="number" name="ls_M" class="input"></td>
                <td><input type="number" name="lf_M" class="input"></td>
            </tr>
            <tr>
                <td>N</td>
                <td><input type="number" name="duration_N" class="input"></td>
                <td><input type="number" name="es_N" class="input"></td>
                <td><input type="number" name="ef_N" class="input"></td>
                <td><input type="number" name="ls_N" class="input"></td>
                <td><input type="number" name="lf_N" class="input"></td>
            </tr>
            <tr>
                <td>O</td>
                <td><input type="number" name="duration_O" class="input"></td>
                <td><input type="number" name="es_O" class="input"></td>
                <td><input type="number" name="ef_O" class="input"></td>
                <td><input type="number" name="ls_O" class="input"></td>
                <td><input type="number" name="lf_O" class="input"></td>
            </tr>
        </tbody>
    </table>
    </form>
</body>
<footer>
<button> Click Me! </button>

 

</footer>
</html>
