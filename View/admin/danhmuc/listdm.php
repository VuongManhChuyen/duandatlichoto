<?php require_once __DIR__ . "/../header.php"?>
<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black ">
<p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý Danh Mục</span>
  </p>
  
<div class="ml-[20px] mt-[30px]">
<a href="/add-danhmuc"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-[20px]">
    Thêm Mới
</a>
      <table class="shadow-2xl  text-center  md:mt-[20px]">
        <thead>
          <tr class="bg-[red] text-[white] hover:bg-[red] -b">
            <th class="w-[50px] py-[12px]">ID</th>
            <th class="w-[150px] ">Tên</th>
            <th colspan="3">Quản trị</th>

          </tr>
        </thead>
    <?php foreach ($danhmuc as $danhmuc):?>
        <tbody>

          <tr class="">
            <td class="">
            <?=$danhmuc->id_danhmuc  ?>
            </td>
            <td class="">
              <?=$danhmuc->name_danhmuc  ?>
            </td>
            <td class="pr-[15px] py-[10px] px-[20px]">
              <p
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a href="update-danhmuc?id=<?=$danhmuc->id_danhmuc?>"><i
                    class="fa-solid fa-pen-to-square"></i></a>
              </p>
            </td>
            <td>
            <td class="pr-[15px]">
              <p
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a 
                 href="/delete-danhmuc?id=<?=$danhmuc->id_danhmuc ?>" onclick="return confirm('Bạn có muốn xóa không?')"><i
                    class="fa-solid fa-trash"></i></a>
              </p>

            </td>
            </td>
          </tr>
        </tbody>
    
<?php endforeach ?>
      </table>

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
    </body>

</html>