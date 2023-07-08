<?php require_once __DIR__ . "/../header.php"?>
<article class="h-full ml-14 mt-[20px] mb-10 md:ml-64 text-black">
  <p class="ml-[10px] mb-[30px] "><span class="text-gray-500"><i class="fa-solid fa-house"></i> Trang Chủ ></span>
    <span>Quản Lý
      Lịch Hẹn</span>
  </p>

  <table class="text-center min-w-full ">
    <tr class="bg-[red] text-[white] hover:bg-[red] border-b">
      <td class="w-[50px] py-[12px]">STT</td>
      <td class="w-[330px]">Tên Khách Hàng</td>
      <td class="w-[300px]">SDT Khách Hàng</td>
      <td class="w-[290px]">Email Khách Hàng</td>
      <td class="w-[250px]">Ngày Hẹn</td>
      <td class="w-[250px]">Giờ Hẹn</td>
      <td class="w-[250px]">Xe Muốn Xem</td>
      <td class="w-[250px]">Ghi Chú</td>
      <td class="w-[250px]">Trạng Thái</td>
      <td></td>
      <td></td>
    </tr>
    <?php foreach ($lichhen as $lichhen): ?>
 <tr>
      <td><?=$lichhen->id_lichhen?></td>
      <td><?=$lichhen->name_taikhoan?></td>
      <td><?=$lichhen->phone_taikhoan?></td>
      <td><?=$lichhen->email_taikhoan?></td>
      <td><?=$lichhen->date_lichhen?></td>
      <td><?=$lichhen->hours_lichhen?></td>
      <td><?=$lichhen->name_sanpham?></td>
      <td><?=$lichhen->description_lichhen?></td>
      <td><?=$lichhen->name_trangthai?></td>
      
    <td class="w-[50px]  py-[20px] ">
    <td class="w-[50px]  py-[20px] ">
   <p class="ml-[10px] bg-[red] text-white px-[5px]rounded-md"> <a
        href="/edit-lichhen?id=<?=$lichhen->id_lichhen?>"><i class="fa-solid fa-calendar"></i></a></p>
    </td>
    </tr>
   <?php endforeach; ?>



  </table>
</article>

<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}
</style>