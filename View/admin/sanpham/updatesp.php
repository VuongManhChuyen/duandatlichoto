<?php require_once __DIR__ . "/../header.php"?>
<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">
  <form action="update-sanpham" method="post" class="grid " style="padding: 0px 50px;"
    enctype="multipart/form-data">
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="hidden" name="id_sanpham" value="<?=$sanpham->id_sanpham?>">
    <p class="text-[20px] ">Tên Sản Phẩm</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="text" name="name_sanpham" value="<?=$sanpham->name_sanpham?>">
    <p class="text-[20px] ">Giá Sản Phẩm</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="number" name="price_sanpham" value="<?=$sanpham->price_sanpham?>">
    <p class="text-[20px] ">Up Ảnh Mới</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="file" name="img_sanpham">
    <p class="text-[20px] ">Ảnh Cũ</p>
    <img src="image/<?=$sanpham->img_sanpham?>" alt="">

    <p class="text-[20px] ">Mô Tả</p>
    <textarea name="description_sanpham"
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      name="" id="" cols="30" rows="10">
     <?=$sanpham->description_sanpham?>
    </textarea>


    <p class="text-[20px]  hidden">Lượt Xem</p>
    <input
      class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
      type="hidden" name="view_sanpham" value="<?=$sanpham->view_sanpham?>" readonly>
    <p class="text-[20px] ">Danh Mục</p>
    <select
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      name="id_danhmuc" required>     
            <?php foreach ($danhmuc as $danhmuc): ?>
            <option value="<?=$danhmuc->id_danhmuc ?>"
            <?=($danhmuc->id_danhmuc === $sanpham->id_danhmuc) ? 'selected' : ''?>
            ><?=$danhmuc->name_danhmuc?></option>
            <?php endforeach ?>
    </select>

    <br>

    <button class="bg-[red] text-white mt-[20px] px-5 py-2 cursor-pointer hover:bg-[blue]" type="submit">Sửa Sản Phẩm</button>

  </form>

</article>

</body>


</html>