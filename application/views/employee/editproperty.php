<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">   
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Edit Property</h3>
                        </div>
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block nk-block-lg">                   
                    <div class="card">
                        <div class="card-inner">                          
                            <form method="post" action="<?php echo EMPLOYEE_EDIT_PROPERTY_LINK.$res['property_id']; ?>" class="gy-3">
                                <div class="row g-3 align-center">
                                    <div class="col-lg-4">
                                        <div class="form-group">                                            
                                            <label class="form-label float-right" for="property_name">Property Name:</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" name="property_name" id="property_name" placeholder="Enter Property Name" required="" value="<?php echo $res['property_name']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row g-3 align-center">
                                    <div class="col-lg-4">
                                        <div class="form-group">                                            
                                            <label class="form-label float-right" for="property_address">Address:</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <textarea class="form-control" id="property_address" name="property_address" placeholder="Enter Address" required=""><?php echo $res['property_address']; ?></textarea>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>                                
                                <div class="row g-3">
                                    <div class="col-lg-7 offset-lg-5">
                                        <div class="form-group mt-2">
                                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>                                          
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>