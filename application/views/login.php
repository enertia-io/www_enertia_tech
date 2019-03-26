<div class="row height-100 m-0">

    <div class="col-md-6 col-lg-5 col-sm-12 mx-auto p-0">

        <div class="card mb-0 card-for-center card-mobile">

            <div class="card-body">
                <!-- login div -->
                <h3 class="text-center m-0">
                    <a href="<?php echo base_url(); ?>" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets/images/logo-sm.png" width="150" alt="logo" class="my-3"></a>
                </h3>
                <div class="px-3">
                    <h4 class="text-muted font-18 mb-2 text-center">EV PLatform</h4>
                    <p class="text-muted text-center">Login with your Mobile or Facebook below</p>
                    <form class="form-horizontal my-2" action="#" method="post">
                        <div class="r_success_msg"></div>

                        <div class="tab_wzard">
                            <div class="form-group">
                                <label for="login_phone">Phone Number (Mobile)</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3-phone"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control input" id="login_phone" name="login_phone" placeholder="Phone Number">
                                </div>     
                                <span id="login_phone_result"></span>                                 
                            </div>
                        </div>

                        <div class="tab_wzard">
                            <div class="form-group">
                                <label for="opt">OTP (One Time Password)</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input type="text" class="form-control input" value="" id="opt" placeholder="Enter OTP sent via SMS" name="opt">
                                </div> 
                                <span id="otp_result"></span>                               
                            </div>
                        </div>


                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-2">
                                <button class="btn btn-primary btn-block waves-effect waves-light nextBtn_login" type="button" id="nextBtn"  name="get_otp">Phone Login<i class="fa fa-arrow-right ml-1"></i></button>
                                <button class="btn btn-primary btn-block waves-effect waves-light hide submit_to_action" type="button" name="submit_to_login" id="submit_to_login">Got the Code? Lets Login now <i class="fa fa-sign-in ml-1"></i></button>
                                <button type="button" class="btn btn-primary btn-block waves-effect waves-light hide" id="prevBtn" onclick="nextPrev(-1)">Move Back?</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 mt-2">
                                <a href="javascript:void(0);" onclick="fbLogin();" class="btn btn-facebook col-md-12">
                                    <i class="fa fa-facebook mr-2"></i> 
                                    Login with Facebook
                                </a>
                            </div>
                          
                        </div>
                    </form>
                </div>
                <div class="m-2 text-center text-primary">
                    <h4 class="">Don't have an Account ?</h4>
                    <a href="<?php echo base_url('signup'); ?>" class="btn btn-primary waves-effect waves-light">Sign Up</a>                
                </div>
                <div class="mt-2 text-center">
                    <p class="mb-0"> ©2019 - ENERTIA - Dubai <i class="mdi mdi-heart text-danger"></i> by ThreeFold</p>
                </div>
                <!-- login div -->
            </div>

        </div>

    </div>

</div>