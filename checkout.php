<?php 
include('header.php');

?>
    <ol class="breadcrumb" style="margin-top: 60px;">
        <li class="breadcrumb-item"><a href="#!"><span>Home</span></a></li>
        <li class="breadcrumb-item"><a href="#!"><span>Library</span></a></li>
        <li class="breadcrumb-item"><a href="#!"><span>Data</span></a></li>
    </ol>

    <div class="row my-5">
        <div class="col-md-10 m-auto">
            <div class="text-center mb-4">
                <h2>Checkout</h2>
            </div>
            <div role="tablist" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne" role="tab">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Product List</a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show item-1" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div>
                                <h2 class="mb-3 font-weight-normal">The Total amount of</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Amount</th>
                                                <th>Quantity</th>
                                                <th>Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Temporary amount<br></td>
                                                <td>95.4</td>
                                                <td>1</td>
                                                <td>95.4</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>19.6</td>
                                                <td>1</td>
                                                <td>19.6</td>
                                            </tr>
                                            <tr>
                                                <td>GST</td>
                                                <td>8%</td>
                                                <td></td>
                                                <td>5.5</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>128.5</td>
                                                <td>128.5</td>
                                                <td>128.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center"></div>
                            </div>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" role="tab">
                        <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="accordion-1">Shipping Details</a>
                    </h5>
                    </div>
                    <div  id="collapseTwo" class="collapse item-2" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name</label>
                                            <input class="form-control" type="text">
                                            <small class="error-text">Please enter a valid details</small>
                                        </div>
                                        <div class="form-group col-md-6"><label>Last Name</label><input class="form-control" type="text"><small class="error-text">Please enter a valid details</small></div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        <label>Email ID</label>
                                        <input class="form-control" type="email">
                                        <small class="error-text">Please enter a valid details</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Contact No.</label>
                                            <input class="form-control" type="number">
                                            <small class="error-text">Please enter a valid details</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12"><label>Address Line 1</label><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12"><label>Address Line 2</label><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4"><label>Pin Code</label><input class="form-control" type="number"><small class="error-text">Please enter a valid details</small></div>
                                        <div class="form-group col-md-4"><label>State</label><input class="form-control" type="text"><small class="error-text">Please enter a valid details</small></div>
                                        <div class="form-group col-md-4"><label>City</label><input class="form-control" type="text"><small class="error-text">Please enter a valid details</small></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-center">
                <button class="btn btn-gradient btn-shadow px-5" type="button">Procesed to Pay</button>
            </div>
        </div>
    </div>




<?php 
    include('footer.php');
?>