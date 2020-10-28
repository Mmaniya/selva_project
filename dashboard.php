<?php function main()
{ ?>
<div class="row">
    <div class="col-xl-3 col-md-4">
        <div class="card bg-c-yellow update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-12">
                        <h4 class="text-white"><?php echo count($rsCategory); ?> </h4>
                        <h6 class="text-white m-b-0">Total Active Category</h6>
                    </div>          
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white  m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : <?php echo  $rsCategory[0]->updated_date; ?> </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4">
        <div class="card bg-c-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-12">
                        <h4 class="text-white"><?php echo count($rsServices); ?> </h4>
                        <h6 class="text-white m-b-0">Total Active Services</h6>
                    </div>            
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="feather  icon-clock text-white f-14 m-r-10"></i>update : <?php echo  $rsServices[0]->updated_date; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4">
        <div class="card bg-c-pink update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-12">
                        <h4 class="text-white"><?php echo count($rsServices); ?> </h4>
                        <h6 class="text-white m-b-0">Total Active Services</h6>
                    </div>            
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="feather  icon-clock text-white f-14 m-r-10"></i>update : <?php echo  $rsServices[0]->updated_date; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4">
        <div class="card bg-c-lite-green update-card">
            <div class="card-block">
                <div class="row align-items-end">
                    <div class="col-12">
                        <h4 class="text-white"><?php echo count($rsServices); ?> </h4>
                        <h6 class="text-white m-b-0">Total Active Services</h6>
                    </div>            
                </div>
            </div>
            <div class="card-footer">
                <p class="text-white m-b-0"><i class="feather  icon-clock text-white f-14 m-r-10"></i>update : <?php echo  $rsServices[0]->updated_date; ?>
                </p>
            </div>
        </div>
    </div>
</div>
    <div class="card">
        <div class="card-header">
            <h5>Enter Forms</h5>
        </div>
        <div class="card-block">
            <form>
                <div class="row">
                    <label class="col-sm-4 col-lg-2 col-form-label">Product Name</label>
                    <div class="col-sm-8 col-lg-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-ui-volume"></i></span>
                            <input type="text" class="form-control" placeholder="Normal Text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-lg-2 col-form-label">Product Price</label>
                    <div class="col-sm-8 col-lg-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-queen"></i></span>
                            <input type="text" class="form-control form-control-bold" placeholder=".form-control-bold">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-lg-2 col-form-label">Product Qty</label>
                    <div class="col-sm-8 col-lg-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-presentation"></i></span>
                            <input type="text" class="form-control form-control-capitalize" placeholder=".form-control-capitalize">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-lg-2 col-form-label">Product Weight</label>
                    <div class="col-sm-8 col-lg-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-wifi"></i></span>
                            <input type="text" class="form-control form-control-uppercase" placeholder=".form-control-uppercase">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-4 col-lg-2 col-form-label">Discount Price</label>
                    <div class="col-sm-8 col-lg-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icofont icofont-shield"></i></span>
                            <input type="text" class="form-control form-control-lowercase" placeholder=".form-control-lowercase">
                        </div>
                    </div>
                </div> 
                <div class="row grid-layout">
                    <input type="submit" class="col-sm-2 btn hor-grd btn-grd-inverse ml-md-auto" value="Inverse Button">
                </div>
            </form>
        </div>
    </div>
<?php } include 'admin_template.php';?>