<?php require_once __DIR__ . "/../header.php"?>
<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form action="edit-taikhoan" method="post" class="grid " style="padding: 0px 50px;"
    enctype="multipart/form-data">
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="hidden" name="id_taikhoan" value="<?=$taikhoan->id_taikhoan?>">

    <p class="text-[20px] ">Tên Tài Khoản</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_taikhoan" value="<?=$taikhoan->name_taikhoan?>">
    <p class="text-[20px] ">Mật Khẩu</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="pass_taikhoan" value="<?=$taikhoan->pass_taikhoan?>">
    <p class="text-[20px] ">Email</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="email_taikhoan" value="<?=$taikhoan->email_taikhoan?>">

    <p class="text-[20px]  ">Số Điện Thoại</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="number" name="phone_taikhoan" value="<?=$taikhoan->phone_taikhoan?>">
    <p class="text-[20px] ">Quyền</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="number"min="0" max="2" name="role" value="<?=$taikhoan->role?>">

    <br>

    <button class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]" type="submit">Sửa Tài Khoản</button>

  </form>

</article>

</body>


</html>