
<?php
    $properties_string = '';
    if(isset($properties) && is_array($properties) && sizeof($properties) > 0){
        foreach ($properties AS $key=> $property){
            $propertyId = (int)$property['property_id'];
            $propertyName = trim($property['property_name']);

            $properties_string .= ' <option value="'.$propertyId.'">'.$propertyName.'</option>';
        }
    }
?>


<!-- Start main-content -->
<div class="main-content">
    <!-- Section: About -->
    <section id="about">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-details">
                            <!--<h2 class="font-26 mt-0"> Inquiry <span class="text-theme-colored">Form</span></h2>-->
                            <div class="col-md-12">
                                <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Property Viewing Application</h3>
                                <form action="<?php echo FRONT_SUBMIT_PROPERTY_VIEWVWING_APPLICATION ?>" method="post" id="frm_properties" class="bg-light p-30 pb-15 frm_properties" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="property_address_id">Address of the property you are viewing <small>*</small></label>
                                                <select class="form-control" id="property_address_id" name="property_address_id"  tabindex="-1" aria-hidden="true">
                                                    <option class="" value="" disabled="" selected="">------ Select Property ------</option>
                                                   <?= $properties_string ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="when_you_move_in">When can you move in? <small>*</small></label>
                                                <input id="when_you_move_in" name="when_you_move_in" type="date" placeholder="Select Date"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
<!--                                        <div class="col-md-4">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="students_dob">Date Of Birth <small>*</small></label>-->
<!--                                                <input id="students_dob" name="students_dob" type="date" placeholder="Select Date"  class="form-control">-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-md-4">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="students_occupation">Occupation <small>*</small></label>-->
<!--                                                <input id="students_occupation" name="students_occupation" type="text" placeholder="Enter Occupation"  class="form-control">-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="viewer_name">Your Name <small>*</small></label>
                                                <input id="viewer_name" autocomplete="false" name="viewer_name" type="text" placeholder="Enter Your Full Name"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="viewer_contact">Contact No <small>*</small></label>
                                                <input autocomplete="false" id="viewer_contact" name="viewer_contact" type="text"   placeholder="Enter Contact No"  class="form-control mobileno">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="viewer_email">Email address<small>*</small></label>
                                                <input autocomplete="false" id="viewer_email" name="viewer_email" type="email" placeholder="Enter Email address"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="main_applicant_birthday">Main applicant Date Of Birth <small>*</small></label>
                                                <input id="main_applicant_birthday" name="main_applicant_birthday" type="text" placeholder="dd/mm/yyyy"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="current_residential">Your current residential address? <small>*</small></label>
                                                <textarea id="current_residential" name="current_residential"  class="form-control " rows="3" placeholder="Enter Your current residential address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="current_rent_pay">How much rent are you currently paying? <small>*</small></label>
                                                <input autocomplete="false" id="current_rent_pay" name="current_rent_pay" type="number" min="0" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="move_reason">Why are you moving homes? <small>*</small></label>
                                                <input autocomplete="false" id="move_reason" name="move_reason" type="text" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="how_many_people_stay">How many people are wanting to stay? <small>*</small></label>
                                                <input autocomplete="false" id="how_many_people_stay" name="how_many_people_stay" type="number" min="0" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="main_applicant_weekly_income">Main applicant weekly income? <small>*</small></label>
                                                <input autocomplete="false" id="main_applicant_weekly_income" name="main_applicant_weekly_income" type="number" min="0" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="joint_applicant_weekly_income">Joint applicant weekly income? <small>*</small></label>
                                                <input autocomplete="false" id="joint_applicant_weekly_income" name="joint_applicant_weekly_income" type="number" min="0" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="how_many_adults">How many adults? <small>*</small></label>
                                                <input autocomplete="false" id="how_many_adults" name="how_many_adults" type="number" min="0" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="how_many_children">How many children and what are there age? <small>*</small></label>
                                                <input autocomplete="false" id="how_many_children" name="how_many_children" type="text" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="how_many_working">How many people are working? <small>*</small></label>
                                                <input autocomplete="false" id="how_many_working" name="how_many_working" type="number" min="0" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="how_many_cars">How many cars do you have? <small>*</small></label>
                                                <input autocomplete="false" id="how_many_cars" name="how_many_cars" type="number" min="0" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="is_affect_weekly_rental_payment">Is there any potential reason that may affect your weekly rental payment? <small>*</small></label>
                                                <br>
                                                <input class="form-check-input" type="radio" name="is_affect_weekly_rental_payment" id="is_affect_weekly_rental_payment" value="1" checked>
                                                <label class="form-check-label" for="is_affect_weekly_rental_payment">
                                                   Yes
                                                </label>

                                                <br>
                                                <input class="form-check-input" type="radio" name="is_affect_weekly_rental_payment" id="is_affect_weekly_rental_payment" value="2">
                                                <label class="form-check-label" for="is_affect_weekly_rental_payment">
                                                    No
                                                </label>

                                                <br>
                                                <input class="form-check-input" type="radio" name="is_affect_weekly_rental_payment" id="is_affect_weekly_rental_payment" value="3">
                                                <label class="form-check-label" for="is_affect_weekly_rental_payment">
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input autocomplete="false" id="other_affect_weekly_rental_payment" name="other_affect_weekly_rental_payment" type="text" placeholder="Your answer"  class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="viewer_feedback">Is there anything else you would like to say?</label>
                                                <textarea id="viewer_feedback" name="viewer_feedback"  class="form-control " rows="3" placeholder="Your answer"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <div id="messages" style="font-weight: 600"></div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                        <h4>Health screening confirmation:</h4>
                                        <ul>
                                            <li> - I/we are not, nor have been, in close contact with a confirmed case of COVID-19 within the last 14 days.</li>
                                            <li> - I/we are not feeling ill or experiencing symptoms of COVID-19 (fever, tiredness, dry cough)</li>
                                            <li> - I/we are not required to self-isolate</li>
                                        </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <br>
                                                <input class="form-check-input" required type="checkbox" name="health_confirmation" id="health_confirmation">
                                                <label class="form-check-label" for="health_confirmation">
                                                    I have read and confirm as true all of the health screening questions above
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">
                                            <h4>Terms & Conditions of property viewing:</h4>
                                            <ul class="list-container">
                                                <li> - I/we agree to maintain a minimum physical distancing of 2 metres at all times.</li>
                                                <li> - I/we agree to adhere to recommended hygiene practices such as covering coughs and sneezes, and washing and drying hands.</li>
                                                <li> - While anybody is welcome to attend the viewing, the government recommends that people at higher risk of severe illness from COVID-19 (e.g. those with underlying medical conditions, especially if not well-controlled, and the elderly), take additional precautions.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <br>
                                                <input class="form-check-input" required type="checkbox" name="covid_confirmation" id="health_confirmation">
                                                <label class="form-check-label" for="covid_confirmation">
                                                    I have read and agree to all of the Terms & Conditions outlined above
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="property_submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Submit</button>
                                    </div>
                                </form>
                                <!-- Job Form Validation-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->

<script type="text/javascript">
    $(document).ready(function() {
      $('#frm_properties').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
          valid: 'glyphicon glyphicon-ok',
          invalid: 'glyphicon glyphicon-remove',
          validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          property_address_id: {
            validators: {
              notEmpty: {
                message: 'Please select address of the property you are viewing?'
              }
            },
          },
          when_you_move_in: {
            validators: {
              notEmpty: {
                message: 'When can you move in?'
              }
            },
          },
          viewer_name: {
            validators: {
              notEmpty: {
                message: 'The full name is required and cannot be empty'
              }
            },
          },
          viewer_contact: {
            validators: {
              notEmpty: {
                message: 'The contact number is required and cannot be empty'
              }
            },
          },
          viewer_email: {
            validators: {
              notEmpty: {
                message: 'The email address is required and cannot be empty'
              },
              emailAddress: {
                message: 'The email address is not valid'
              }
            }
          },
          main_applicant_birthday: {
            validators: {
              date: {
                format: 'DD/MM/YYYY',
                message: 'The format is dd/mm/yyyy'
              },
              notEmpty: {
                message: 'The date of birth is required and cannot be empty'
              }
            }
          },
          current_residential: {
            validators: {
              notEmpty: {
                message: 'Your current residential address is required and cannot be empty'
              },
              stringLength: {
                max: 500,
                message: 'Your current residential address must be less than 500 characters long'
              }
            }
          },
          current_rent_pay: {
            validators: {
              notEmpty: {
                message: 'How much rent are you currently paying?'
              }
            }
          },
          move_reason: {
            validators: {
              notEmpty: {
                message: 'Why are you moving homes?'
              }
            }
          },
          how_many_people_stay: {
            validators: {
              notEmpty: {
                message: 'How many people are wanting to stay?'
              }
            }
          },
          main_applicant_weekly_income: {
            validators: {
              notEmpty: {
                message: 'Main applicant weekly income?'
              }
            }
          },
          joint_applicant_weekly_income: {
            validators: {
              notEmpty: {
                message: 'Joint applicant weekly income?'
              }
            }
          },
          how_many_adults: {
            validators: {
              notEmpty: {
                message: 'How many adults?'
              }
            }
          },
          how_many_children: {
            validators: {
              notEmpty: {
                message: 'How many children?'
              }
            }
          },
          how_many_working: {
            validators: {
              notEmpty: {
                message: 'How many are working?'
              }
            }
          },
          how_many_cars: {
            validators: {
              notEmpty: {
                message: 'How many cars do you have?'
              }
            }
          },
          health_confirmation: {
            validators: {
              notEmpty: {
                message: 'Require health confirmation?'
              }
            }
          },
          covid_confirmation: {
            validators: {
              notEmpty: {
                message: 'Require term & condition?'
              }
            }
          }
        }
      });
    });
</script>


