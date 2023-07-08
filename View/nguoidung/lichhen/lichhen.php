
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đặt Lịch Lái Thử Ô Tô</title>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/public/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  z-index: 1;
  color: black;
  list-style: none;

}

.dropdown-content p {
  text-align: center;
  width: 170px;
  height: 60px;
  font-weight: bold;
}

.dropdown:hover .dropdown-content {
  display: block;
  transition-duration: 700ms;
}






.subnav-content {
  display: none;
  position: absolute;
  text-align: center;
  background-color: black;
  width: 100px;

  z-index: 1;
  transition-duration: 3s;

}



.subnav:hover .subnav-content {
  display: block;


}
</style>

<body>
  <header>
    <div class="flex justify-between h-[90px] leading-[90px]">
      <a href="#"><img src="image/logo.png" alt="" class="w-[150px] h-[90px] object-contain "></a>
      <nav class="">
        <ul id="menu"
          class="flex md:gap-[35px] hidden  fixed top-0 left-0 flex flex-col justify-center items-center bg-[blue]  w-full h-screen md:bg-transparent md:relative md:h-auto md:flex-row  md:flex z-50">
          <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transition"><a href="/">TRANG
              CHỦ</a></li>
         <!-- <div class="subnav">
            <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transiton"><a
                href="#">SẢN PHẨM</a></li>
          </div> -->
          <button id="dropdownDefault" data-dropdown-toggle="dropdown"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button"><a href="/fullsp">SẢN PHẨM</a><svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg></button>
          <!-- Dropdown menu -->
          <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
            <?php foreach ( $danhmuc as $danhmuc1):?>
            <li>
                <a href="#"
                  class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?=$danhmuc1->name_danhmuc?></a>

              </li>
              <?php endforeach?>
            </ul>
          </div>


          <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transiton"><a href="#">LIÊN HỆ</a></li>
          <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transition"><a href="#">GIỚI THIỆU</a>
          </li>
          <li class="text-[19px] md:hover:text-[blue] text-white md:text-black transition"><a href="#">DỊCH VỤ HẬU
              MÃI</a></li>

          <div class="text-[20px] md:hidden text-white">
            <a href="index.php?action=dangky"> <i class="fa-solid fa-user "><span class="pl-[15px]">Tài
                  Khoản Mobile</span></i></a>
          </div>
        </ul>
      </nav>

      <!-- Form search topnav -->
      <div class="text-[20px] hidden md:block md:flex md:items-center md:gap-[25px]">
        <form class="flex items-center" action="index.php?action=sanpham" method="post">
          <!-- <input
            class="relative flex-auto min-w-0 block w-full px-3 py-[5px] text-base font-normal text-gray-700 bg-white bg-clip-padding border border-gray-300  transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            type="text" name="kyw" placeholder="Tìm Kiếm Sản Phẩm..." required>
          <button
            class="btn inline-block px-6 py-3 bg-black text-white font-medium text-xs leading-tight uppercase  shadow-md hover:bg-[red]  hover:shadow-lg rounded-tr-md rounded-br-md   focus:shadow-lg focus:outline-none focus:ring-0 active: shadow-lg transition duration-150  flex items-center"
            type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i>
          </button> -->

          <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <input type="text" name="kyw" id="default-search"
              class="block w-full p-4 pl-10 pr-24 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
              placeholder="............." required>
            <button type="submit" name="timkiem"
              class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tìm
              kiếm</button>
          </div>
        </form>
        <?php
          if (isset($_SESSION['auth'])):
           
           ?>
        <div class=" dropdown ">
          <span class="mr-[60px]"> <a class="hover:text-[blue] " href="#"> <i class="fa-solid fa-user "><span
                  class="pl-[5px]"></span></i>
                  <?php echo $_SESSION["auth"]->name_taikhoan ?></a></span>

          <div class="dropdown-content ">
            <a href="/quenmatkhau">
              <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer">Quên mật khẩu</p>
            </a>
            <?php
            if ($_SESSION["auth"]->role == "1"):
            ?>
            <a href="/admin">
              <p class="hover:bg-[black] hover:text-white  text-[15px] cursor-pointer">Đăng nhập admin</p>
            </a>
            <?php endif ?>
            <hr>
            <a href="/dangxuat">
              <p class="hover:bg-[black] hover:text-white text-[15px] cursor-pointer"><i
                  class="fa-solid fa-right-to-bracket"></i> Đăng Xuất</p>
            </a>
          </div>
        </div>
      </div>
        <div class=" dropdown ">
          
      </div>
      
    </div>

    <?php else : ?>
    <div class="antialiased">
      <div class="group inline-block relative">
        <button
          class="text-gray-700 font-semibold py-4 px-10 rounded inline-flex items-center text-lg"
        >
          <span class="mr-1">Tài khoản</span>
          <svg
            class="fill-current h-4 w-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </button>
        <ul
          class="absolute hidden text-gray-700 pt-1 group-hover:block transiton z-10 text-base">
          <li class="">
            <a
            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
            href="/dangnhap"
            ><i class="fa-solid fa-right-to-bracket px-2"></i>Đăng nhập</a>
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="/dangky"
              ><i class="fa-solid fa-user-plus px-2"></i>Đăng kí</a>
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="/logout"
              ><i class="fa-solid fa-user-plus px-2"></i>Đăng Xuất</a>
          </li>
          <li class="">
          </li>
        </ul>
      </div>
    </div>
    <?php endif; ?>
    </div>
    <div id="menu-icon" class="md:hidden z-50 ml-[60px] text-[20px] ">
      <i class="fa-solid fa-bars border-[2px] py-3 px-3 "></i>
    </div>

    </div>
  </header>
<?php
    
    if (isset($_SESSION['auth'])):
     
     ?>
<p class="ml-[10px] mb-[30px] text-center text-[20px]"><span class="text-gray-500"><i
      class="fa-solid fa-bell"></i></span>
  <span>Lịch Hẹn Của <span class="text-[red] font-bold"><?php echo $_SESSION["auth"]->name_taikhoan ?></span></span>
</p>
<?php endif;?>
<table class="text-center min-w-full ">
  <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
    <td class="w-[330px]  py-[12px]">Tên Của Bạn</td>

    <td class="w-[250px]">Ngày Hẹn</td>
    <td class="w-[250px]">Giờ Hẹn</td>
    <td class="w-[250px]">Xe Bạn Muốn Lái Thử</td>
    <td class="w-[250px]">Ghi Chú</td>
    <td class="w-[250px]">Trạng Thái Lịch Hẹn</td>
    <td></td>
    <td></td>
  </tr>
  <?php foreach ($lichhen as $lichhen):?>
 <tr>
      <td class="py-[20px]"><?=$lichhen->name_taikhoan?></td>
     
      <td><?=$lichhen->date_lichhen?></td>
      <td><?=$lichhen->hours_lichhen?></td>
      <td><?=$lichhen->name_sanpham?></td>
      <td><?=$lichhen->description_lichhen?></td>
      <td><?=$lichhen->name_trangthai?></td>
      
      </tr>
      <?php endforeach; ?>
</table>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>
<footer class="text-center lg:text-left bg-gray-100 text-gray-600">
  <div class="flex justify-center items-center lg:justify-between p-6 border-b border-gray-300">
    <div class="mr-12 hidden lg:block">
      <span>Kết Nối Với Chúng Tôi Qua Các Kênh:</span>
    </div>
    <div class="flex justify-center">
      <a href="#!" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="w-2.5" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path fill="currentColor"
            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
          </path>
        </svg>
      </a>
      <a href="#!" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="w-4" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor"
            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
          </path>
        </svg>
      </a>
      <a href="#!" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" class="w-3.5" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
          <path fill="currentColor"
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
          </path>
        </svg>
      </a>
      <a href="#!" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="w-3.5" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor"
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
          </path>
        </svg>
      </a>
      <a href="#!" class="mr-6 text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="w-3.5" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor"
            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
          </path>
        </svg>
      </a>
      <a href="#!" class="text-gray-600">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="w-4" role="img"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
          <path fill="currentColor"
            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
          </path>
        </svg>
      </a>
    </div>
  </div>
  <div class="mx-6 py-5 text-center md:text-left">
    <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="">
        <h6 class="uppercase
            font-semibold
            mb-4
            flex
            items-center
            justify-center
            md:justify-start
          ">
          <img src="image/logo.png" alt="" class="w-[200px]">
        
        </h6>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">CÔNG TY THƯƠNG MẠI VÀ DỊCH VỤ VINFAST</a>
        </p>
        <img src="image/bo-cong-thuongaa-600x227.png" alt="" class="w-[150px]">
      </div>
      <div class="">
        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
          Danh Mục
        </h6>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">VỀ VINFAST</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">VỀ VINGROUP</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">CỘNG ĐỒNG VINFAST TOÀN CẦU</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">TIN TỨC</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">ƯU ĐÃI</a>
        </p>

      </div>
      <div class="">
        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
          Hệ sinh thái
        </h6>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">Vinhomes</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">Vinmec</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">Vsmart</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">Vinpearl</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">Chính Sách Bảo Mật</a>
        </p>
        <p class="mb-4">
          <a href="#!" class="text-gray-600">Chính Sách Bảo Mật</a>
        </p>
      </div>
      <div class="">
        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
          Liên Hệ
        </h6>
        <p class="flex items-center justify-center md:justify-start mb-4">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home" class="w-4 mr-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path fill="currentColor"
              d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
            </path>
          </svg>
          Trịnh Văn Bô, Nam Từ Liêm , Hà Nội
        </p>
        <p class="flex items-center justify-center md:justify-start mb-4">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="w-4 mr-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
            </path>
          </svg>
         chuyenvmph20182@fpt.edu.vn
        </p>
        <p class="flex items-center justify-center md:justify-start mb-4">
          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" class="w-4 mr-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
            </path>
          </svg>
          + 0941.999.318
        </p>

      </div>
    </div>
  </div>
  <div class="text-center p-6 bg-gray-200">
    <span>© 2023 Copyright:</span>
    <a class="text-gray-600 font-semibold" href="#">Vương Mạnh Chuyền</a>
  </div>
</footer>
</body>

<script>
const menuIcon = document.querySelector('#menu-icon');
const menu = document.querySelector('#menu');

let isOpen = true;
menuIcon.addEventListener('click', function() {
  if (isOpen == true) {
    menu.classList.toggle('hidden');
  } else {
    menu.classList.toggle('hidden');
    isOpen == true;
  }
});
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
let defaultTransform = 0;

function goNext() {
  defaultTransform = defaultTransform - 398;
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);

function goPrev() {
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
  else defaultTransform = defaultTransform + 398;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);
</script>

</html>