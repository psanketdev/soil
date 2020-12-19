<?php
include('toolheader.php');
include('config.php');
$pagename = "products.php";
?>
<br><br><br><br>

<div class="container">
    <div>
        <div style = "text-align: left; width:50%">
        <h2>Maintain Pages</h2>
         </div>
    
    <div style = "text-align: right;">
        
    <a href = "products_edit.php?id=0"><button class="btn btn-primary"><i class="far fa-plus-square"></i> Create</button></a>
        </div>
  </div>
  <?php include('messages.php'); ?>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>sr.</th>
        <th>Col1</th>
        <th>Col2</th>
        <th>Col3</th>
        <th>Col4</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="myTable">
        
        <?php
            
$result = "SELECT * FROM `products`";
  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr>
        <td><?php echo $sr; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><a href="products_edit.php?id=<?php echo $row[0]; ?>">--></td></a>
      </tr>
      <?php
      $sr = $sr+1;
}
      ?>
     
    </tbody>
  </table>
  
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>