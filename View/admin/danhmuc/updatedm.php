<?php require_once __DIR__ . "/../header.php"?>
<article class="h-full ml-14 mt-14 mb-10 md:ml-64 text-black">

  <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <form action="/update-danhmuc" method="POST">
        <label class="">Mã loại</label> <br>
        <input
          class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          name="id_danhmuc"type="hidden" value="<?= $danhmuc->id_danhmuc?>">
        <br>
        <label for="">Danh mục</label> <br>
        <input
          class="bg-gray-200 appearance-none border-2 border-gray-200 rounded py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
          type="text" name="name_danhmuc" value="<?= $danhmuc->name_danhmuc?>">
        <br><br>
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline "
          type="submit"  class="btn-update">Cập Nhập</button>
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
    </body>

</html>