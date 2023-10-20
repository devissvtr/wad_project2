<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1 Week 5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container text-center mt-5">
        <div class="kalkulator p-3">
            <h2 class="judul">WAD Project 2</h2>
            <form method="get">
                <div class="input-group mb-3">
                    <label for="inputangka" class="brand">Masukkan Angka Pertama :</label>
                    <input type="number" name="a" class="bil form-control">
                </div>
                <div class="input-group mb-3">
                    <label for="inputangka" class="brand">Masukkan Angka Kedua :</label>
                    <input type="number" name="b" class="bil form-control">
                </div>
                <div class="operator-group mb-3">
                    <label class="brand">Pilih Operator</label>
                    <select class="opt" name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                        <option value="**">**</option>
                    </select>
                </div>
                <div class="text-center mb-3">
                    <button type="button" onclick="location.href = '?clear'" class="tombol btn btn-secondary">Clear</button>
                    <button type="submit" class="tombol btn btn-primary">Hitung</button>
                </div>
            </form>
        
        <?php
        if ($_GET):
            $a = (double) @$_GET['a'];
            $b = (double) @$_GET['b'];
            $operator = @$_GET['operator'];
            $hasil = 0;
            
            switch ($operator) {
                case '+':
                    $hasil = $a + $b;
                    break;
                case '-':
                    $hasil = $a - $b;
                    break;
                case '*':
                    $hasil = $a * $b;
                    break;
                case '/':
                    if ($b != 0) {
                        $hasil = $a / $b;
                    } else {
                        echo "<div class='result'>Pembagian dengan 0 tidak valid</div>";
                    }
                    break;
                case '%':
                    if ($b != 0) {
                        $hasil = $a % $b;
                    } else {
                        echo "<div class='result'>Modulo dengan 0 tidak valid</div>";
                    }
                    break;
                case '**':
                    $hasil = $a ** $b;
                    break;
            }
        ?>
        <div class="result">
            <p>Hasil:</p>
            <strong><?php echo $hasil ?></strong>
        </div>
        <?php
            endif;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>