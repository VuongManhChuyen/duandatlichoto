<?php require_once __DIR__ . "/../header.php"?>

<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black ">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý Danh Mục</span>
  </p>
  <div class=" items-center ">
    <div class="ml-[20px]">
      <form method="POST" action="/add-danhmuc" method="post" enctype="multipart/form-data">
        <label class="">ID</label> <br>
        <input type="hidden"
          class="shadow appearance-none  rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="id_danhmuc" value="" readonly>
        <br>
        <label for="">Tên Danh mục</label> <br>
        <input
          class="bg-gray-200 appearance-none -2 -gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:-purple-500 border"
          type="
          text" name="name_danhmuc" placeholder="Danh mục" required> <br>
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-[20px]"
          type="submit" class="btn-insert">Thêm
          mới</button>
      </form>
    </div>



  </div>
</article>
<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>