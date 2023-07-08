<?php require_once __DIR__ . "/../header.php"?>
<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý
      Sản Phẩm</span>
  </p>


  <table class="text-center min-w-full">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[50px] py-[12px]">STT</td>
      <td class="w-[150px]">Tên Sản Phẩm</td>
      <td class="w-[150px]">Giá</td>
      <td class="w-[100px]">Ảnh</td>
      <td class="w-[100px]">Mô Tả</td>
      <td class="w-[100px]">Lượt Xem</td>
      <td class="w-[130px]">Danh Mục</td>

      <td colspan="2" class="text-[white] text-[20px]"> <a href="/add-sanpham"><i
            class="fa-solid fa-cart-plus"></i>
        </a>
      </td>

    </tr>
    <?php foreach ( $sanpham as $sanpham):?>
    <tr>
      <td><?=$sanpham->id_sanpham?></td>
      <td><?=$sanpham->name_sanpham?></td>
      <td><?=number_format($sanpham->price_sanpham)?> VNĐ</td>
      <td class="py-[20px]"><img src="image/<?=$sanpham->img_sanpham?>" alt=""width="100"height="100"></td>
      <td>
        <p style="
     width: 250px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;"><?=$sanpham->description_sanpham?></p>
      </td>
      <td><?=$sanpham->view_sanpham?></td>
      <td><?=$sanpham->id_danhmuc?></td>
      <td class="w-[30px]">
        <p class="bg-[blue] text-white px-[5px] py-[3px] rounded-md"><a href="/update-sanpham?id=<?=$sanpham->id_sanpham?>"><i
              class="fa-solid fa-pen-to-square"></i></a></p>
      </td>
      <td class="w-[30px]">
        <p class="ml-[10px] bg-[red] text-white px-[5px] py-[3px] rounded-md"> <a
            href="/delete-sanpham?id=<?=$sanpham->id_sanpham?>" onclick="return confirm('Bạn có muốn xóa không?')"><i class="fa-solid fa-trash"></i></a></p>
      </td>
    </tr>
    <?php endforeach ?>
    <script>
    function confirmDelete(deleUrl) {
      if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")) {
        document.location = deleUrl;
      }
    }
    </script>


  </table>
</article>

<!-- END Product -->

</div>
</div>


</body>

</html>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>