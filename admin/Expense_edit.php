<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$tablename = 'Expense';
$pagename = 'Expense_edit.php';
$listpage = 'Expense.php';
$FinalPrefix ="Edit";

?>
<div class="container-fluid">
   
<?php include('breadcrums.php');?>

<div class="row" onload="weightConverter()">
    <div class="col-sm">

   

<?php include('messages.php'); ?>
        
        <?php
        
        if($id==0)
        {
            
        }
        else
        {
        
/*        $result = "SELECT * FROM `".$tablename."` WHERE `ProductID`= $id";
        $data = mysqli_query($DBcon,$result);
        $i = 1;
        $products = mysqli_fetch_array($data);*/
        $Expense = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Sr">Sr</label>
                  <input readonly type="text"  class="form-control" id="Sr" placeholder="Sr" value = "<?php echo $Expense[Sr]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ExpenseTitle">ExpenseTitle</label>
                  <input type="text"  class="form-control" id="ExpenseTitle" placeholder="ExpenseTitle" value = "<?php echo $Expense[ExpenseTitle]; ?>" name = "ExpenseTitle">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ExpenseNote">ExpenseNote</label>
                  <input type="text"  class="form-control" id="ExpenseNote" placeholder="ExpenseNote" value = "<?php echo $Expense[ExpenseNote]; ?>" name = "ExpenseNote">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ExpenseCost">ExpenseCost</label>
                  <input type="text"  class="form-control" id="ExpenseCost" placeholder="ExpenseCost" value = "<?php echo $Expense[ExpenseCost]; ?>" name = "ExpenseCost">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ExpenseDate">ExpenseDate</label>
                  <input type="date"  class="form-control" id="ExpenseDate" placeholder="ExpenseDate" value = "<?php echo $Expense[ExpenseDate]; ?>" name = "ExpenseDate">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                 
                  <input type="hidden"  class="form-control" id="Bill" placeholder="Bill" value = "<?php echo $Expense[Bill]; ?>" name = "Bill">
                </div>
                
       </div>

       
        <input type ="submit" class="btn btn-primary">
</form>
 </div>
    <div class="col-sm">
        
        <?php 
        $Folder = "Bill";
        $fieldname = 'Bill';
        $Value = $Expense[Bill];
        imageupdate($Value, $URL, $Folder, $id, $tablename, $pagename, $fieldname);
        ?>
        
    </div>
  
</div>

<?php
include('footer.php');
?>

<script>

window.onload = function() {
  weightConverter();
};

function weightConverter() {
    var valNum = document.getElementById("Stock").value
    var unit = document.getElementById("Unit").value
    var per = document.getElementById("Per").value
    var num = valNum*per;
    if (unit == 'gm' | unit == 'ml' ) {
        if (num >= 1000)
        {
            num = num/1000;
            if (unit == 'gm'){
                unit = 'Kg';
            }
            
            if (unit == 'ml'){
                unit = 'L';
            }
        }
    }
    var n = num.toFixed(3);
  document.getElementById("Stockiu").value= n +" "+ unit;
}
</script>
