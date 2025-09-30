<?php
session_start();

// ----------------------
// Konfigurasi login
// ----------------------
$USERNAME_TRUE = 'admin';
$PASSWORD_TRUE = '12345';
$MAX_ATTEMPTS = 3;

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}
$login_message = '';
$action = $_POST['action'] ?? '';

// --- Logic ---
if ($action === 'login') {
    if ($_SESSION['login_attempts'] >= $MAX_ATTEMPTS) {
        $login_message = "Akun diblokir karena melebihi $MAX_ATTEMPTS percobaan.";
    } else {
        $u = $_POST['username'] ?? '';
        $p = $_POST['password'] ?? '';
        if ($u === $USERNAME_TRUE && $p === $PASSWORD_TRUE) {
            $_SESSION['logged_in'] = true;
            $_SESSION['login_attempts'] = 0;
            $login_message = "Login berhasil. Selamat datang, $u!";
        } else {
            $_SESSION['login_attempts']++;
            $sisa = $MAX_ATTEMPTS - $_SESSION['login_attempts'];
            $login_message = ($_SESSION['login_attempts'] >= $MAX_ATTEMPTS)
                ? "Login gagal. Akun diblokir setelah $MAX_ATTEMPTS percobaan."
                : "Login gagal. Sisa percobaan: $sisa.";
        }
    }
}
if (isset($_POST['logout'])) unset($_SESSION['logged_in']);
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Demo Interaktif PHP Berwarna</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
body{font-family:Arial,Helvetica,sans-serif;background:#f4f6f9;margin:0;padding:20px}
h1{text-align:center;color:#1e293b;margin-bottom:20px}
section{padding:15px;border-radius:12px;margin-bottom:20px;color:#fff}
section h2{margin-top:0}
.result{background:rgba(255,255,255,0.85);color:#111;padding:10px;border-radius:8px;margin-top:10px;max-height:250px;overflow:auto}
.ok{color:#16a34a;font-weight:bold}
.warning{color:#dc2626;font-weight:bold}
footer{margin-top:30px;text-align:center;font-size:0.85em;color:#555}
input,textarea,select{padding:6px;border-radius:6px;border:1px solid #ccc}
button{background:#2563eb;color:#fff;border:none;padding:6px 12px;border-radius:6px;cursor:pointer}
button:hover{background:#1d4ed8}
table{border-collapse:collapse;width:100%}
td,th{border:1px solid #ddd;padding:6px;text-align:center}
tr:nth-child(even){background:#f1f5f9}
tr:nth-child(odd){background:#e2e8f0}
tr:first-child{background:#334155;color:#fff}
form.inline{display:flex;flex-wrap:wrap;gap:8px;align-items:center}
</style>
</head>
<body>
<h1> Demo Interaktif — Perulangan & Kontrol PHP</h1>

<!-- SECTION 1 -->
<section style="background:#3b82f6">
  <h2>1) Perulangan 100 → 1000</h2>
  <form method="post" class="inline">
    <input type="hidden" name="action" value="range">
    <label>Step: <input type="number" name="step" value="<?= htmlspecialchars($_POST['step'] ?? 1) ?>" min="1"></label>
    <button type="submit">Tampilkan</button>
  </form>
  <?php if ($action==='range'): ?>
    <div class="result">
      <?php
        $step = max(1,intval($_POST['step']??1));
        for ($i=100;$i<=1000;$i+=$step) echo $i." ";
      ?>
    </div>
  <?php endif; ?>
</section>

<!-- SECTION 2 -->
<section style="background:#10b981">
  <h2>2) Tabel Perkalian</h2>
  <form method="post" class="inline">
    <input type="hidden" name="action" value="mult">
    <label>Baris: <input type="number" name="rows" value="<?= htmlspecialchars($_POST['rows'] ?? 5) ?>" min="1" max="12"></label>
    <label>Kolom: <input type="number" name="cols" value="<?= htmlspecialchars($_POST['cols'] ?? 5) ?>" min="1" max="12"></label>
    <button type="submit">Buat</button>
  </form>
  <?php if ($action==='mult'): ?>
    <div class="result">
      <table>
        <tr><th>&times;</th>
          <?php for($c=1;$c<=$_POST['cols'];$c++):?><th><?= $c ?></th><?php endfor; ?>
        </tr>
        <?php for($r=1;$r<=$_POST['rows'];$r++): ?>
        <tr><th><?= $r ?></th>
          <?php for($c=1;$c<=$_POST['cols'];$c++): ?><td><?= $r*$c ?></td><?php endfor; ?>
        </tr>
        <?php endfor; ?>
      </table>
    </div>
  <?php endif; ?>
</section>

<!-- SECTION 3 -->
<section style="background:#f59e0b">
  <h2>3) Grade Nilai</h2>
  <form method="post">
    <input type="hidden" name="action" value="grades">
    <textarea name="grades_input"><?= htmlspecialchars($_POST['grades_input'] ?? '95,82,70,60,45') ?></textarea>
    <br><button type="submit">Proses</button>
  </form>
  <?php if ($action==='grades'): ?>
    <div class="result">
      <ul>
      <?php
        $vals=array_map('trim',explode(',',$_POST['grades_input']));
        foreach($vals as $v){
          if(!is_numeric($v)){echo "<li>$v → <span class='warning'>bukan angka</span></li>";continue;}
          $n=intval($v);
          $g=($n>=90?"A":($n>=75?"B":($n>=60?"C":"D")));
          echo "<li>Nilai $n → Grade <strong>$g</strong></li>";
        }
      ?>
      </ul>
    </div>
  <?php endif; ?>
</section>

<!-- SECTION 4 -->
<section style="background:#ef4444">
  <h2>4) Login (maks <?= $MAX_ATTEMPTS ?>x)</h2>
  <?php if($login_message): ?>
    <p class="<?= strpos($login_message,'berhasil')!==false?'ok':'warning' ?>"><?= $login_message ?></p>
  <?php endif; ?>
  <?php if(!empty($_SESSION['logged_in'])): ?>
    <p class="ok">✅ Anda sudah login sebagai <b><?= $USERNAME_TRUE ?></b></p>
    <form method="post"><button name="logout">Logout</button></form>
  <?php else: ?>
    <?php if($_SESSION['login_attempts']>=$MAX_ATTEMPTS): ?>
      <p class="warning">Akun diblokir 🚫</p>
    <?php else: ?>
      <form method="post" class="inline">
        <input type="hidden" name="action" value="login">
        <label>Username: <input type="text" name="username" required></label>
        <label>Password: <input type="password" name="password" required></label>
        <button type="submit">Login</button>
      </form>
      <p>Sisa percobaan: <?= $MAX_ATTEMPTS-$_SESSION['login_attempts'] ?></p>
    <?php endif; ?>
  <?php endif; ?>
</section>

<footer>🌐 Demo Tugas PHP — Perulangan & Kontrol — dengan warna</footer>
</body>
</html>
<?php
// Tangkap input nilai dari form
$nilai = isset($_POST['nilai']) ? (int)$_POST['nilai'] : null;
$hasil_grade = "";
$hasil_switch = "";
$hasil_for = "";
$hasil_while = "";

// Logika grade jika ada input
if ($nilai !== null) {
    // IF ELSE 5 grade
    if ($nilai >= 80 && $nilai <= 100) {
        $hasil_grade = "Nilai Anda $nilai → Grade <b style='color:green'>A</b>";
    } elseif ($nilai >= 61 && $nilai <= 79) {
        $hasil_grade = "Nilai Anda $nilai → Grade <b style='color:blue'>B</b>";
    } elseif ($nilai >= 51 && $nilai <= 60) {
        $hasil_grade = "Nilai Anda $nilai → Grade <b style='color:orange'>C</b>";
    } elseif ($nilai >= 41 && $nilai <= 50) {
        $hasil_grade = "Nilai Anda $nilai → Grade <b style='color:brown'>D</b>";
    } elseif ($nilai >= 0 && $nilai <= 40) {
        $hasil_grade = "Nilai Anda $nilai → Grade <b style='color:red'>E</b>";
    } else {
        $hasil_grade = "Nilai tidak valid!";
    }

    // SWITCH untuk contoh
    switch ($nilai) {
        case 100:
            $hasil_switch = "Nilai yang dipilih 100";
            break;
        case 90:
            $hasil_switch = "Nilai yang dipilih 90";
            break;
        case 80:
            $hasil_switch = "Nilai yang dipilih 80";
            break;
        default:
            $hasil_switch = "Nilai tidak terdaftar di SWITCH";
            break;
    }

    // FOR loop contoh
    for ($i = 1; $i <= 5; $i++) {
        $hasil_for .= "Looping FOR ke : " . $i . "<br>";
    }

    // WHILE loop contoh
    $j = 1;
    while ($j <= 5) {
        $hasil_while .= "Looping WHILE ke : " . $j . "<br>";
        $j++;
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Program Grade Interaktif</title>
<style>
body{font-family:Arial,Helvetica,sans-serif;background:#f4f6f9;margin:0;padding:20px;}
h1{text-align:center;color:#1e293b;}
form{display:flex;flex-direction:column;align-items:center;gap:10px;margin-bottom:20px;}
input[type=number]{padding:8px;border-radius:6px;border:1px solid #ccc;width:200px;text-align:center;}
button{background:#2563eb;color:#fff;border:none;padding:8px 16px;border-radius:6px;cursor:pointer;}
button:hover{background:#1d4ed8;}
.section{background:#fff;padding:15px;margin:10px auto;max-width:600px;border-radius:12px;box-shadow:0 2px 6px rgba(0,0,0,0.1);}
.result{margin-top:10px;padding:10px;background:#f9fafb;border-left:5px solid #2563eb;border-radius:6px;}
hr{margin:20px 0;border:none;border-top:1px solid #ddd;}
</style>
</head>
<body>
<h1>Program Grade Interaktif</h1>

<div class="section">
  <h2>Masukkan Nilai Anda</h2>
  <form method="post">
    <input type="number" name="nilai" placeholder="Masukkan nilai 0 - 100" required min="0" max="100" value="<?= htmlspecialchars($nilai ?? '') ?>">
    <button type="submit">Cek Grade</button>
  </form>
</div>

<?php if ($nilai !== null): ?>
<div class="section">
  <h2>Hasil Penilaian</h2>
  <div class="result"><?= $hasil_grade ?></div>
</div>

<div class="section">
  <h2>Contoh SWITCH</h2>
  <div class="result"><?= $hasil_switch ?></div>
</div>

<div class="section">
  <h2>Contoh FOR</h2>
  <div class="result"><?= $hasil_for ?></div>
</div>

<div class="section">
  <h2>Contoh WHILE</h2>
  <div class="result"><?= $hasil_while ?></div>
</div>
<?php endif; ?>

</body>
</html>
