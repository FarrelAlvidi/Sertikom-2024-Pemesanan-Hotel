<?php
include "connect.php";
session_start();
$sukses = false;
$gagal = false;
$login_message = "";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * from tbl_admin where username = '$username' ";

    $hasil = $db->query($sql);

    $data = $hasil->fetch_assoc();

    if ($hasil->num_rows > 0) {
        if($data["password"] == $password){
            $_SESSION["username"] = $data["username"];
            header("location: admin.php?page=dashboard");
        }else{
            $gagal = true;
        }
        
      } else {
        $login_message = "akun tidak ditemukan";
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
        </style>
</head>
<body class="">
<?php if ($gagal) {
           
           ?>
            <div role="alert">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Gagal
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>Password Tidak Sesuai, Harap Ulang Kembali</p>
                </div>
            </div>
   
           <?php }
           ?>
<div class="w-3/4 h-[32rem] shadow-2xl rounded-xl mx-auto mt-24 flex justify-between">
    
    <div class="p-8">

        <h4 class="font-semibold text-lg"><span class="text-purple-600">Expro</span>Hotel</h4>
        <h1 class="font-semibold text-2xl ml-32 text-purple-600 mt-10 text-center">Log in to Your Account</h1>
        <hr class="ml-32 mt-3">
        <form action="" method="POST" autocomplete="off" class="ml-32 text-center">
        <i class="fa-solid fa-user absolute mt-14 ml-3 text-slate-400"></i>
            <input type="text" placeholder="Username" name="username" class="pl-10 pr-4 mt-10 w-72 p-3 bg-slate-100"> <br>
            <i class="fa-solid fa-lock absolute mt-10 ml-3 text-slate-400"></i>
            <input type="password" placeholder="Password" name="password" class="pl-10 pr-4 mt-6 w-72 p-3 bg-slate-100"> <br>
            <input type="checkbox" class=" mt-5"> <label class="text-sm ">Remember me</label> <a href="#" class="ml-6 underline text-black text-sm font-semibold">Forgot Password?</a><br>

            <input type="submit" name="submit" class="mt-5 w-72 p-3 text-white bg-purple-600">
        </form>
    </div>
    <div class="bg-purple-600 h-auto w-2/5 rounded-lg text-center">
        <img src="logo1.png " class="mx-auto mt-32">
        <h1 class="text-3xl font-bold text-white">Expro Hotel</h1>
    </div>

</div>











    <!-- <div class="flex justify-center">
        <div class="absolute bg-pink-300 rounded-full text-center w-96 h-96 top-[20%] blur-[40px]">
            
        </div>

        <div class="absolute text-white p-5 rounded-2xl mt-36 bg-[white]/40 backdrop-blur-[150px] h-96">
        
        <h1 class=" text-2xl font-semibold text-center ">LOGIN</h1>
            <form action="" method="POST" autocomplete="off">
            
                <input type="text" placeholder="Username" name="username" class="border-2 border-white rounded-full mt-5 p-3 px-4 w-80 font-semibold bg-[white]/40 backdrop-blur-[150px]"> <br>
                <input type="password" placeholder="Password" name="password" class="border-2 border-white rounded-full mt-8 p-3 px-4 w-80 font-semibold bg-[white]/40 backdrop-blur-[150px]"> <br>
                <input type="checkbox" class="ml-2 mt-4"> <label class="text-md">Remember me</label> <a href="#" class="ml-5 underline text-white font-semibold">Forgot Password?</a><br>
                <?php echo $login_message; ?>
                <input type="submit" name="submit" class="border-2 rounded-full mt-5 p-2 px-4 w-80 font-semibold text-white bg-slate-600">
            </form>
        </div>
    </div> -->
</body>
</html>