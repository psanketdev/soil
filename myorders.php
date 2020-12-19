<?php 
include('header.php');
?>
   <section>
        <ol class="breadcrumb"  style="margin-top: 60px;">
            <li class="breadcrumb-item"><a href="#!"><span>Home</span></a></li>
            <li class="breadcrumb-item"><a href="#!"><span>Library</span></a></li>
            <li class="breadcrumb-item"><a href="#!"><span>Data</span></a></li>
        </ol>
        <div class="row py-5">
            <div class="col-md-3">
                <h2 class="mb-3 font-weight-normal">Filter</h2>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Addon</span></div><input class="form-control" type="text">
                        <div class="input-group-append"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between w-100 mb-3">
                    <h2 class="font-weight-normal">My Orders</h2>
                    <div class="form-group mb-0 pull-right col-lg-4">
                        <input type="text" class="search form-control" placeholder="Search by typing here..">
                    </div>
                </div>
                <div class="col-md-12 table-responsive search-table-col pl-0">     
                        <table class="table table-bordered table-hover">
                            <thead class="bill-header cs">
                                <tr>
                                    <th id="trs-hd" style="width: 65px">SL. No.</th>
                                    <th id="trs-hd">Order ID</th>
                                    <th id="trs-hd">Total Items</th>
                                    <th id="trs-hd">Company Name</th>
                                    <th id="trs-hd">Status</th>
                                    <th id="trs-hd">Action</th>
                                    <th id="trs-hd">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>India</td>
                                    <td>Souvik Kundu</td>
                                    <td>Bootstrap Stuido</td>
                                    <td>2014</td>
                                    <td class="text-center"><button class="btn btn-danger"  type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                                    <td class="text-center"><a href="myorderdetails.php" class="btn btn-primary"  type="button"><i class="fa fa-eye" style="font-size: 15px;"></i></a></td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>India</td>
                                    <td>Souvik Kundu</td>
                                    <td>Bootstrap Stuido</td>
                                    <td>2014</td>
                                    <td class="text-center"><button class="btn btn-danger"  type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                                    <td class="text-center"><button class="btn btn-primary"  type="button"><i class="fa fa-eye" style="font-size: 15px;"></i></button></td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>India</td>
                                    <td>Souvik Kundu</td>
                                    <td>Bootstrap Stuido</td>
                                    <td>2014</td>
                                    <td class="text-center"><button class="btn btn-danger" type="submit"><i class="fa fa-trash" style="font-size: 15px;"></i></button></td>
                                    <td class="text-center"><button class="btn btn-primary"  type="button"><i class="fa fa-eye" style="font-size: 15px;"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">4</a></li>
                        <li class="page-item"><a class="page-link" href="#!">5</a></li>
                        <li class="page-item"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <?php 
    include('footer.php');
?>