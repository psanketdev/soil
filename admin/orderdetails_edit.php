<?php
include('header.php');
include('config.php');
include('functions.php');
$id = $_GET['id'];
$OrderID = $_GET['OrderID'];
$VendorID = $_GET['VendorID'];
$tablename = 'orderdetails';
$pagename = 'orderdetails_edit.php';
$listpage = 'Orders_edit.php?id='.$OrderID.'&VendorID='. $VendorID;
$FinalPrefix = "Edit";
$IDSpecific = "X";
?>

<div class="container-fluid">
    
     <?php include('breadcrums.php');?>

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
        $orderdetails = selectsingle($id, $tablename);
        }
        ?>
        <form method = "post" action = "edit_php.php">
        <input type="hidden"  class="form-control" id="tablename" value = "<?php echo $tablename; ?>" name = "tablename">
        <?php $url = $pagename; ?>
        <input type="hidden"  class="form-control" id="url" value = "<?php echo $url; ?>" name = "url">
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Sr">Sr</label>
                  <input readonly type="text"  class="form-control" id="Sr" placeholder="Sr" value = "<?php echo $orderdetails[Sr]; ?>" name = "id">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="OrderID">OrderID</label>
                  <input readonly type="text"  class="form-control" id="OrderID" placeholder="OrderID" value = "<?php echo $OrderID; ?>" name = "OrderID">
                </div>
                
       </div>
       
      <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProdcutID">ProdcutID</label>
                  <input readonly type="text"  class="form-control" id="ProdcutID" placeholder="ProdcutID" value = "<?php echo $orderdetails[ProdcutID]; ?>" name = "ProdcutID">
                </div>
                
       </div> 
       
        <div class="form-row">
            
                <div class="form-group col-md-6">
                  <label for="ProductName">ProductName</label>
                  <select class="form-control" id="ProductName" placeholder="ProductName" name = "ProductName">
                       <option value="<?php echo $orderdetails[ProductName];?>"><?php echo $orderdetails[ProductName];  ?></option>
                       <?php
            
$result = "SELECT * FROM `products`";
  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
            <option value="<?php echo $row['ProdctName'];  ?>"><?php echo $row['ProdctName'];  ?></option>
<?php 
}
?>
                  </select>
                </div>
                
                  
                <div class="form-group col-md-6">
                  <label for="Stockiu">Available Stock</label>
                  <input type="hidden"  class="form-control" id="Stock" placeholder="" value = "" name = "Stock">
                  <input type="hidden"  class="form-control" id="OStock" placeholder="" value = "" name = "OStock">
                  <input readonly type="text"  class="form-control" id="Stockiu" placeholder="" value = "" name = "Stockiu">
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                    <label for="Quantity">
                       <font id="p">
₹ <?php echo $orderdetails[UnitCost]; ?> / <?php echo $orderdetails[Per]; ?> <?php echo $orderdetails[Unit]; ?>
                       </font>
                    <input readonly type="hidden"   id="UnitCost" placeholder="UnitCost" value = "<?php echo $orderdetails[UnitCost]; ?>" name = "UnitCost">
                    
                    <input readonly type="hidden"   id="Per" placeholder="Per" value = "<?php echo $orderdetails[Per]; ?>" name = "Per"> 
                    <input readonly type="hidden" id="Unit" placeholder="Unit" value = "<?php echo $orderdetails[Unit]; ?>" name = "Unit"> </label><br>
                  <label for="Quantity">Quantity <font id="QuantityW"> </font></label><br>
                  <input type="button" onclick="decrementValue()" value="-" />
                  <input oninput="UpdateValue()" type="text"  class="" id="Quantity" placeholder="Quantity" value = "<?php echo $orderdetails[Quantity]; ?>" name = "Quantity" width="80%">
                  <input type="button" onclick="incrementValue()" value="+" />




                </div>
                
       </div>
        
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Cost">Cost</label>
                
                  <input type="text"  class="form-control" id="Cost" placeholder="Cost" value = "<?php echo $orderdetails[Cost]; ?>" name = "Cost">
                </div>
                
       </div>
       
       <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="ProductStatus">ProductStatus</label>
                  
                  <?php
                    formfieldprepare($Users[UserCategory], $tablename, 'ProductStatus', 'ProductStatus', 'ProductStatus', 'select', '')
                  ?>
                  
                  
                </div>
                
       </div>
        <div class="form-row">
            
                <div class="form-group col-md-12">
                  <label for="Settled">Settled</label>
                  <input type="text"  class="form-control" id="Settled" placeholder="Settled" value = "<?php echo $orderdetails[Settled]; ?>" name = "Settled">
                </div>
                
       </div>
       
        <input readonly type="hidden" id="AdditionalQuery" value = "" name = "AdditionalQuery"> </label><br>
        <?php 
            $CreatedAt = $orderdetails[CreatedAt];
            $ChangedAt = $orderdetails[ChangedAt];
            include('admindata.php'); 
        ?>
        <input type ="submit" class="btn btn-primary">
</form>
        


  
</div>

<?php
include('footer.php');
?>


<script>

function incrementValue()
{
    var fee = document.getElementById('UnitCost').value ;
    
    var value = parseInt(document.getElementById('Quantity').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<40){
        value++;
        tfee = fee * value ;
            document.getElementById('Quantity').value = value;
            document.getElementById('Cost').value = tfee;
             document.getElementById('Cost').value = tfee;
             
             
      var valNum = document.getElementById("Stock").value
      valNum = valNum - 1;
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
  document.getElementById("Stockiu").value = n +" "+ unit;        
  document.getElementById("Stock").value = valNum;
             unit = document.getElementById("Unit").value;
         var qntytmp = value;
                var finalw = qntytmp*per;
                if (unit == 'gm' | unit == 'ml' ) 
                {
                    if (finalw >= 1000)
                    {
                        finalw = finalw/1000;
                        if (unit == 'gm'){
                            unit = 'Kg';
                        }
                        
                        if (unit == 'ml'){
                            unit = 'L';
                        }
                    }
                }
                var ntmp = finalw.toFixed(3);
                document.getElementById("QuantityW").innerHTML= ntmp+' '+unit;    
    }
}
function decrementValue()
{
     var fee = document.getElementById('UnitCost').value ;
   var value = parseInt(document.getElementById('Quantity').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
         tfee = fee * value ;
      
            document.getElementById('Quantity').value = value;
            document.getElementById('Cost').value = tfee;
             document.getElementById('Cost').value = tfee;
             
             var valNum = document.getElementById("Stock").value;
             var valNum = parseInt(valNum);
      valNum = valNum+1;
    var unit = document.getElementById("Unit").value;
    var per = document.getElementById("Per").value;
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
  document.getElementById("Stockiu").value = n +" "+ unit;        
  document.getElementById("Stock").value = valNum;
  
  unit = document.getElementById("Unit").value;
         var qntytmp = value;
                var finalw = qntytmp*per;
                if (unit == 'gm' | unit == 'ml' ) 
                {
                    if (finalw >= 1000)
                    {
                        finalw = finalw/1000;
                        if (unit == 'gm'){
                            unit = 'Kg';
                        }
                        
                        if (unit == 'ml'){
                            unit = 'L';
                        }
                    }
                }
                var ntmp = finalw.toFixed(3);
                document.getElementById("QuantityW").innerHTML= ntmp+' '+unit;   
  
    }

}


function UpdateValue()
{
    var fee = document.getElementById('UnitCost').value ;
    
    var value = document.getElementById('Quantity').value;
    value = isNaN(value) ? 0 : value;
    if(value<40){
    
        tfee = fee * value ;
            document.getElementById('Quantity').value = value;
            document.getElementById('Cost').value = tfee;
             document.getElementById('Cost').value = tfee;
             
             
           var  valuetmp = value - 1;
         var valNum = document.getElementById("OStock").value
      valNum = valNum - valuetmp ;
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
  document.getElementById("Stockiu").value = n +" "+ unit;        
  document.getElementById("Stock").value = valNum;
  
  
  unit = document.getElementById("Unit").value;
         var qntytmp = value;
                var finalw = qntytmp*per;
                if (unit == 'gm' | unit == 'ml' ) 
                {
                    if (finalw >= 1000)
                    {
                        finalw = finalw/1000;
                        if (unit == 'gm'){
                            unit = 'Kg';
                        }
                        
                        if (unit == 'ml'){
                            unit = 'L';
                        }
                    }
                }
                var ntmp = finalw.toFixed(3);
                document.getElementById("QuantityW").innerHTML= ntmp+' '+unit;   
             
    }
}




    $(document).ready(function(){
        
        
        var ProductName = document.getElementById('ProductName').value;

        $.ajax({
            url: 'getproducts.php',
            type: 'post',
            data: {ProductName:ProductName},
            dataType: 'json',
            success: function(result) { //we got the response
             alert('Successfully called');
         },
         error: function(jqxhr, status, exception) {
             alert('Exception:', exception);
         },
            success:function(response){

                var len = response.length;
                var cost = response[0]['Cost'];
                var UnitCost = response[0]['Cost'];
                var unit = response[0]['Unit'];
                var per = response[0]['Per'];
                var stock = response[0]['Stock'];
                var ProdcutID = response[0]['ProdcutID'];
                 $('#UnitCost').val(UnitCost); 
                 $('#Unit').val(unit); 
                 $('#Per').val(per); 
                  $('#ProdcutID').val(ProdcutID); 
                 $('#Stock').val(stock); 
                 $('#OStock').val(stock);
                $('#p').html("₹ " + UnitCost +" / "+per+" "+unit);
                var valNum = stock;
                var unit = unit;
                var per = per;
                var num = valNum*per;
                var n = num;
                
                var num = valNum*per;
                if (unit == 'gm' | unit == 'ml' ) 
                {
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
                
                
                $('#Stockiu').val(n+" "+unit); 
                unit = document.getElementById("Unit").value;
                var qntytmp = document.getElementById("Quantity").value;
                var finalw = qntytmp*per;
                if (unit == 'gm' | unit == 'ml' ) 
                {
                    if (finalw >= 1000)
                    {
                        finalw = finalw/1000;
                        if (unit == 'gm'){
                            unit = 'Kg';
                        }
                        
                        if (unit == 'ml'){
                            unit = 'L';
                        }
                    }
                }
                var ntmp = finalw.toFixed(3);
                document.getElementById("QuantityW").innerHTML= ntmp+' '+unit;
            }
    
        });

    $("#ProductName").change(function(){
        
        var ProductName = $(this).val();

        $.ajax({
            url: 'getproducts.php',
            type: 'post',
            data: {ProductName:ProductName},
            dataType: 'json',
            success: function(result) { //we got the response
             alert('Successfully called');
         },
         error: function(jqxhr, status, exception) {
             alert('Exception:', exception);
         },
            success:function(response){

                var len = response.length;
                var cost = response[0]['Cost'];
                var UnitCost = response[0]['Cost'];
                var unit = response[0]['Unit'];
                var per = response[0]['Per'];
                var stock = response[0]['Stock'];
                var ProdcutID = response[0]['ProdcutID'];
                 $('#Cost').val(cost); 
                 $('#UnitCost').val(UnitCost); 
                 $('#Unit').val(unit); 
                 $('#Per').val(per); 
                  $('#ProdcutID').val(ProdcutID); 
                 $('#Stock').val(stock-1); 
                 $('#OStock').val(stock-1); 
                 $('#Quantity').val(1);
                $('#p').html("₹ " + UnitCost +" / "+per+" "+unit);
                var valNum = stock-1;
                var unit = unit;
                var per = per;
                var num = valNum*per;
                var n = num;
                
                var num = valNum*per;
                if (unit == 'gm' | unit == 'ml' ) 
                {
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
                
                
                $('#Stockiu').val(n+" "+unit); 
                unit = document.getElementById("Unit").value;
                var qntytmp = 1;
                var finalw = qntytmp*per;
                if (unit == 'gm' | unit == 'ml' ) 
                {
                    if (finalw >= 1000)
                    {
                        finalw = finalw/1000;
                        if (unit == 'gm'){
                            unit = 'Kg';
                        }
                        
                        if (unit == 'ml'){
                            unit = 'L';
                        }
                    }
                }
                var ntmp = finalw.toFixed(3);
                document.getElementById("QuantityW").innerHTML= ntmp+' '+unit;
            }
    
        });
        
    
    });
    
    

});

</script>
