<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up | CAFESTUFF</title>
  <link rel="stylesheet" href="../src/style/style.css" />
</head>
<nav class="bg-stone-800/90 backdrop-blur-sm fixed top-0 z-10 w-full p-4 text-white">
  <div class="relative flex justify-center md:justify-between items-center mx-auto max-w-4xl">
    <div class="nav_brand flex justify-center items-center gap-3">
      <img src="../src/assets/image/cafestuff.png" alt="logo" class="w-6" />
      <h1 class="sm:text-2xl text-xl font-extrabold">CAFESTUFF</h1>
    </div>
    <img class="absolute right-0 w-9 md:hidden cursor-pointer" src="../src/assets/icons/burger_menu.png" alt="burger_menu" id="burger_menu" />
    <div id="sidebar" class="list_item text-sm font-medium fixed md:static md:bg-transparent bg-stone-800/90 w-[70%] h-screen md:h-auto top-[60px] right-0 hidden md:flex md:flex-row flex-col md:justify-end justify-center items-center gap-7">
      <ul class="flex flex-col md:flex-row text-center gap-7">
        <li>
          <a class="hover:scale-110 text-sm inline-block" href="../index.html">Dashboard</a>
        </li>
        <li>
          <a class="hover:scale-110 text-sm inline-block" href="produk.php]">Sewa Barang</a>
        </li>
        <li>
          <a class="hover:scale-110 text-sm inline-block" href="keranjang.php]">Keranjang</a>
        </li>
      </ul>
      <div class="btn flex md:flex-row flex-col md:flex-wrap text-center gap-7">
        <a class="bg-yellow-400 hover:bg-transparent hover:text-yellow-400 transition-all ease-in-out duration-150 border-2 border-yellow-400 px-3 py-1 rounded-sm text-stone-800 font-semibold" href="signup.php]">Sign Up</a>
        <a class="px-3 py-1 text-yellow-400 hover:bg-yellow-400 hover:text-stone-800 font-semibold transition-all ease-in-out duration-150 border-2 border-yellow-400 rounded-sm" href="login.php]">Login</a>
      </div>
    </div>
  </div>
</nav>

<body class="font-poppins">
  <main class="w-full min-h-screen bg-yellow-100 grid place-items-center">
    <form action="#" method="post" class="flex flex-col my-28 w-4/5 md:w-5/12 bg-stone-700 text-white p-6 rounded-md shadow-lg">
      <div class="flex w-full mb-3 text-center font-semibold justify-between">
        <a href="login.html" class="w-full block rounded-sm p-2">LOGIN</a>
        <a href="signup.html" class="w-full block bg-yellow-500 text-stone-700 rounded-sm p-2">SIGN UP</a>
      </div>
      <h1 class="text-center font-extrabold text-2xl">SIGNUP USERS</h1>
      <p class="text-center text-xs my-3">Silahkan login dengan akun anda!</p>
      <label for="nama" class="flex flex-col mt-5 mb-3">
        <span class="font-semibold">Nama</span>
        <link rel="stylesheet" href="style.css" />
        <input type="text" class="p-2 text-white text-xs bg-white/30 rounded-sm outline-none ring-2 ring-stone-400" name="nama" id="nama" placeholder="Daftarkan nama anda ..." />
      </label>
      <label for="username" class="flex flex-col mb-3">
        <span class="font-semibold">Username</span>
        <input type="text" class="p-2 text-white text-xs bg-white/30 rounded-sm outline-none ring-2 ring-stone-400" name="username" id="username" placeholder="Daftarkan username anda ..." />
      </label>
      <label for="password" class="flex flex-col mb-3">
        <span class="font-semibold">Password</span>
        <input type="password" class="p-2 text-white text-xs bg-white/30 rounded-sm outline-none ring-2 ring-stone-400" name="password" id="password" max='8' placeholder="Daftarkan password anda ..." />
      </label>
      <label for="alamat" class="flex flex-col mb-3">
        <span class="font-semibold">Alamat</span>
        <input type="text" class="p-2 text-white text-xs bg-white/30 rounded-sm outline-none ring-2 ring-stone-400" name="alamat" id="alamat" placeholder="Daftarkan alamat anda ..." />
      </label>
      <button type="submit" name="signup" class="w-full mt-3 p-3 bg-stone-900 rounded font-bold">
        Sign up
      </button>
      <a href="login.php" class="text-center text-xs mt-2 text-yellow-500 italic underline">Sudah Punya akun? Login sekarang.</a>
    </form>
  </main>
  <footer class="bg-stone-700 p-3 text-sm text-center text-white">
    <p class="font-semibold">Copyright &copy; 2023 by Mallexibra</p>
  </footer>
  <?php
  include '../src/model/conDB.php';

  if (isset($_POST['signup'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $alamat = htmlspecialchars($_POST['alamat']);

    $query = "INSERT INTO user (nama, username, password, alamat) VALUES ('$nama', '$username', '$password', '$alamat')";
    var_dump($query);
    if (mysqli_query($mysqli, $query)) {
      echo "<script>window.location.href= 'login.php'</script>";
      exit();
    } else {
      echo "Error: " . mysqli_error($mysqli);
    }
  }

  ?>
  <script src="../src/style/script.js"></script>
</body>

</html>