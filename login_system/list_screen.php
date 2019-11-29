<?php
  require "header_new.php";
 ?>

 <main>
   <div style="margin: 20px">
     <p class="lead"> 計画検索・一覧画面 </p>
   </div>

   <style>
       .item1 { grid-area: sda1; }
       .item2 { grid-area: sda2; }
       .item3 { grid-area: sda3; }
       .item4 { grid-area: sda4; }
       .item5 { grid-area: sda5; }
       .item6 { grid-area: sda6; }
       .item7 { grid-area: sda7; }
       .item8 { grid-area: sda8; }
       .item9 { grid-area: blankspace; }

       .grid-container {
         display: grid;
         grid-template:
           'sda1 sda2 sda3 sda4 blankspace blankspace blankspace'
           'sda5 sda6 sda7 sda8 blankspace blankspace blankspace';

       }

       .grid-container > div {
         background-color: rgba(255, 255, 255, 0.8);
         text-align: center;
         padding: 10px 0;
         font-size: 15px;
       }
       </style>

   <div class="grid-container">
       <div class="item1">年</div>
       <div class="item2">
           <input type="number" name="quantity" min="1960" max="2030" style="width: 200px; ">
       </div>
       <div class="item3">月</div>
       <div class="item4">
           <input type="number" name="quantity" min="1" max="12" style="width: 200px; ">
       </div>
       <div class="item5">事業</div>
       <div class="item6">
           <input type="number" name="quantity" style="width: 200px; ">
       </div>
       <div class="item7">社員名	</div>
       <div class="item8">
           <input type="number" name="quantity" style="width: 200px; ">
       </div>
       <div class="item9"></div>
     </div>

   <div class="table-responsive" style="font-size: 15px;">
     <table class="table table-hover">
       <thead>
         <tr class="table-primary">
           <th scope="col">No.</th>
           <th scope="col">年</th> <!-- year -->
           <th scope="col">月</th> <!-- month -->
           <th scope="col">事業名称</th> <!-- business name -->
           <th scope="col">計画金額</th> <!-- plan amount -->
           <th scope="col">実績金額</th> <!-- actual amount -->
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">1</th>
           <td>test</td>
           <td>test1</td>
           <td>test2</td>
           <td>test3</td>
           <td>test4</td>
         </tr>
       </tbody>
     </table>
   </div>
 </main>

<?php
  require "footer.php";
?>
