
<?php

if(!is_array($inquiry_data) || sizeof($inquiry_data) <= 0){
    echo "Looks like this application is not available";
    die();
}
?>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-lg mx-auto">   
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Inquiry Details</h4>
                                <div class="nk-block-des">
                                    <!--<p>Using the most basic table markup, here’s how <code class="code-class">.table</code> based tables look by default.</p>-->
                                </div>
                            </div>
                        </div>                        
                        <div class="card card-preview">
                            <div class="card-inner">
                                <table style="font-size: 17px" id="example" class="table table-striped table-bordered dt-responsive nowrap datatableEx" style="width:100%">
                                    <tr>
                                        <td style="width: 32%;">Address of the property you are viewing</td>
                                        <td style="width: 78%;"><?= $inquiry_data['property_name'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">When can you move in?</td>
                                        <td style="width: 78%;"><?= date("d/m/Y", strtotime($inquiry_data['when_you_move_in'])); ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Your Name</td>
                                        <td style="width: 78%;"><?= $inquiry_data['viewer_name'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Contact No</td>
                                        <td style="width: 78%;"><?= $inquiry_data['viewer_contact'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Email address</td>
                                        <td style="width: 78%;"><a href="mailto:<?= $inquiry_data['viewer_email'] ?>"><?= $inquiry_data['viewer_email'] ?></a></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Main applicant Date Of Birth</td>
                                        <td style="width: 78%;"><?= $inquiry_data['main_applicant_birthday'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Your current residential address</td>
                                        <td style="width: 78%;"><?= $inquiry_data['current_residential'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">How much rent are you currently paying?</td>
                                        <td style="width: 78%;"><?= "$". number_format($inquiry_data['current_rent_pay'],2,'.',''); ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Why are you moving homes?</td>
                                        <td style="width: 78%;"><?= $inquiry_data['move_reason'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">How many people are wanting to stay?</td>
                                        <td style="width: 78%;"><?= $inquiry_data['how_many_people_stay'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Main applicant weekly income?</td>
                                        <td style="width: 78%;"><?= "$".  number_format($inquiry_data['main_applicant_weekly_income'],2,'.',''); ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Joint applicant weekly income?</td>
                                        <td style="width: 78%;"><?= "$". number_format($inquiry_data['joint_applicant_weekly_income'],2,'.',''); ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">How many adults?</td>
                                        <td style="width: 78%;"><?= $inquiry_data['how_many_adults'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">How many children?</td>
                                        <td style="width: 78%;"><?= $inquiry_data['how_many_children'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">How many people are working?</td>
                                        <td style="width: 78%;"><?= $inquiry_data['how_many_working'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">How many cars do you have? </td>
                                        <td style="width: 78%;"><?= $inquiry_data['how_many_cars'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Is there any potential reason that may affect your weekly rental payment? </td>
                                        <td style="width: 78%;">

                                            <?php
                                                if($inquiry_data['is_affect_weekly_rental_payment'] == 1){
                                                    echo 'Yes';
                                                }
                                                if($inquiry_data['is_affect_weekly_rental_payment'] == 2){
                                                    echo 'No';
                                                }
                                            if($inquiry_data['is_affect_weekly_rental_payment'] == 3){
                                                echo $inquiry_data['other_affect_weekly_rental_payment'];
                                            }
                                            ?>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Is there anything else you would like to say?</td>
                                        <td style="width: 78%;"><?= $inquiry_data['viewer_feedback'] ?></td>
                                    </tr>

                                    <tr>
                                        <td style="width: 32%;">Note</td>
                                        <td style="width: 78%;"><?= $inquiry_data['admin_note'] ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div>                
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>