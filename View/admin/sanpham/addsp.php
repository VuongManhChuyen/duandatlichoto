<?php require_once __DIR__ . "/../header.php"?>
<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form action="/add-sanpham" method="post" class="grid " style="padding: 0px 50px;" enctype="multipart/form-data">
    <p class="text-[20px] ">Tên Sản Phẩm</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_sanpham">
    <p class="text-[20px] ">Giá Sản Phẩm</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="number" name="price_sanpham">

    <p class="text-[20px] ">Ảnh</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="file" name="img_sanpham">
    <p class="text-[20px] ">Mô Tả</p>
    <textarea name="description_sanpham"
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      name="" id="" cols="30" rows="10">
    </textarea>
    <p class="text-[20px]  hidden">Lượt Xem</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="hidden" name="view_sanpham" readonly>
    <p class="text-[20px] ">Danh Mục</p>
    <select name="id_danhmuc" id=""class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <?php foreach ($danhmuc as $danhmuc): ?>               
            <option value="<?=$danhmuc->id_danhmuc ?>"><?= $danhmuc->name_danhmuc?></option>
            <?php endforeach ?>
        </select>

    <br>

    <button onclick="assignPage()" class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]">Thêm Sản Phẩm</button>

  </form>

</article>

</body>


</html>