
<?php
include('config.php');
include('header.php');
?>


<?php
$pagename = "Orders.php";
$tablename ="Orders";
$FinalPrefix ="";
?>

<div class="container-fluid">
    
    <?php include('breadcrums.php');?>
  <?php include('messages.php'); ?>
  
  
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="float:left">Orders
              <?php
                if(isset($_GET['date']))
                {
                       echo " for date " .    $_GET['date'];              
                }
              ?>
              </h6>
              <a href = "Orders_edit.php?id=0">
              <h6 class="m-0 font-weight-bold text-primary" style="float:right"><i class="far fa-plus-square"></i> Create</h6>
              </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
        <th></th>
        <th>sr.</th>
        <th>OrderID</th>
        <th>Date</th>
        <th>CustomerName</th>
        <th>TotalAmount</th>
        <th>PaymentStatus</th>
        <th>PaymentMode</th>
        <th>OrderStatus</th>
        
      </tr>
                  </thead>
                  <!--<tfoot>
                    <tr>
        <th>sr.</th>
        <th>OrderID</th>
        <th>Date</th>
        <th>CustomerName</th>
        <th>TotalAmount</th>
        <th>PaymentStatus</th>
        <th>PaymentMode</th>
        <th>Action</th>
      </tr>
                  </tfoot>-->
                  <tbody>
                    <?php
            
//$result = "SELECT * FROM `Orders` ORDER BY `Date` DESC";

$date = $_GET['date'];
 $UserCategory = $_SESSION['UserCategory'];
            $UserID = $_SESSION['UserID'];
            if($UserCategory=="SuperAdmin")
            {   
                if(isset($_GET['date']))
                {
                    $result = "SELECT * FROM `OrderSummary` WHERE `Date` = '$date' GROUP BY `OrderID`, `VendorID` ORDER BY `Date` DESC, `OrderID` ";
                    //echo $result;
                }
                else
                {
                     $result = "SELECT * FROM `OrderSummary` GROUP BY `OrderID`, `VendorID` ORDER BY `Date` DESC, `OrderID` ";
                }
               
            }
            else{
                if(isset($_GET['date']))
                {
                     $result = "SELECT * FROM `OrderSummary` WHERE `VendorID` = $UserID AND `Date` = $date GROUP BY `OrderID`, `VendorID` ORDER BY `Date` DESC, `OrderID` ";
                }
                else
                {
                $result = "SELECT * FROM `OrderSummary` WHERE `VendorID` = $UserID GROUP BY `OrderID`, `VendorID` ORDER BY `Date` DESC, `OrderID` ";
                }
            }



  
$data = mysqli_query($DBcon,$result);
$sr = 1;
while($row = mysqli_fetch_array($data))
{
            ?>
      <tr>
          <td><a href="Orders_edit.php?id=<?php echo $row['OrderID']; ?>&VendorID=<?php echo $row['VendorID']; ?>"><i class="far fa-edit"></td></a>
        <td><?php echo $sr; ?></td>
        
        <td>
            <button type="button" class="btn btn-primary openBtn" value="<?php echo $row['OrderID']; ?>/<?php echo $row['VendorID']; ?>" data-toggle="modal" data-target="#myModal">
            <?php echo $row['OrderID']; ?>
            </button>
        </td>
        
        <td><?php echo $row['Date']; ?></td>
        <td><?php echo $row['CustomerName']; ?></td>
        <td><?php 
        $OrderID = $row['OrderID'];
        $result1 = "SELECT SUM(Cost) FROM `orderdetails` WHERE `Orderid` = $OrderID";
        $data1 = mysqli_query($DBcon,$result1);
        $row1 = mysqli_fetch_array($data1);
        echo $row1[0]; 
        ?></td>
        <td><?php 
        $PaymentStatus = $row['PaymentStatus'];
        if($PaymentStatus=='Pending')
        {
            $color = 'Red';
        }
        elseif($PaymentStatus=='Paid')
        {
             $color = 'Green';
        }
        ?>
        <font color="<?php echo $color; ?>">
        <?php echo $row['PaymentStatus'];?>
        </font></td>
        <td><?php echo $row['PaymentMode']; ?></td>
        <td><?php echo $row['OrderStatus']; ?></td>
        
      </tr>
      <?php
      $sr = $sr+1;
}
      ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  
  
  
  
  
  
  
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  
  
  
  

  
</div>



<?php
include('footer.php');
?>

<script>
$('.openBtn').on('click',function(){
    var fields =  $(this).attr("value").split('/');


var id = fields[0];
var vendorid = fields[1];
    $('.modal-body').load('OrdersDataGet.php?id=' + id +'&VendorID=' + vendorid,function(){
        $('#myModal').modal({show:true});
    });
});
</script>