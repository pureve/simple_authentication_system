<?php
  require "header_new.php";
 ?>

 <main>
   <div class="table-responsive" style="font-size: 10px;">
       <table class="table table-hover">
         <thead>
           <tr class="table-primary">
             <th scope="col">ＮＯ</th>
             <th scope="col" width="15%" style="text-align: center;">項目名</th>
             <th scope="col">必須</th>
             <th scope="col">数字</th>
             <th scope="col">日付</th>
             <th scope="col">半角</th>
             <th scope="col">長さ</th>
             <th scope="col" width="40%" style="text-align: center;">内容</th>
             <th scope="col" width="19%" style="text-align: center;">エラー内容</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th scope="row">1</th>
             <td>検索入力項目</td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td>検索ボタンクリック：１つも入力された値がない場合、エラー</td>
             <td>１つ以上入力してください</td>
           </tr>
           <tr>
               <th scope="row">2</th>
               <td>検索結果一覧</td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td>エクセル出力ボタンクリック：１件もデータがない場合、エラー</td>
               <td>検索後、再度行ってください</td>
             </tr>
         </tbody>
       </table>
     </div>

 </main>

<?php
  require "footer.php";
?>
