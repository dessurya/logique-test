<html>
    <head>
        <title>Wizard Form</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            .hide{
                display: none;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <div class="card-header">
              Wizard Form
            </div>
            <div class="card-body">

                  <div>
                    <div class="card">
                        <div id="wizardTitle" class="card-header">
                          Step 1
                        </div>
                        <div class="card-body">
                            <div id="step1" class="wizard_form_step">
                                <div id="alertForm1" onclick="toggle('#alertForm1')" class="alert alert-warning hide" role="alert" style="cursor: pointer;">
                                    <strong>Sorry!</strong> Your password with repassword not same!
                                </div>
                                <form id="form1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control input" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control input" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control input" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control input" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Repassword</label>
                                        <input type="password" name="repassword" class="form-control input" placeholder="Repassword" required>
                                    </div>
                                    <div class="form-check">
                                        <input id="defaultCheck1" class="form-check-input input" type="checkbox" name="tac" required>
                                        <label class="form-check-label" for="defaultCheck1">
                                            Term and Condition check box
                                        </label>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-outline-primary btn-sm btn-block">Submit</button>
                                </form>
                            </div>
                            <div id="step2" class="hide wizard_form_step">
                                <form id="form2">
                                    <div id="address" class="form-group">
                                        <label>Address</label>
                                        <span onclick="copyPast('input[name=address]:last','#address')" class="btn btn-outline-secondary btn-sm btn-block">Add Other Address</span>
                                        <input type="text" name="address" class="form-control input multiple" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" value="1970-01-01" name="date_of_birth" class="form-control input" placeholder="Date of Birth" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                    </div>
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input id="defaultCheck2" class="form-check-input input" type="radio" name="gender" required value="Male">
                                                <label class="form-check-label" for="defaultCheck2">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="defaultCheck3" class="form-check-input input" type="radio" name="gender" required value="Female">
                                                <label class="form-check-label" for="defaultCheck3">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Membership</label>
                                        <select name="membership" class="form-control input select">
                                            <option value="Silver">Silver</option>
                                            <option value="Gold">Gold</option>
                                            <option value="Platinum">Platinum</option>
                                            <option value="Black">Black</option>
                                            <option value="VIP">VIP</option>
                                            <option value="VVIP">VVIP</option>
                                        </select>
                                        <input id="membership_fav" type="text" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>CC Number</label>
                                        <input type="text" name="cc_number" class="form-control input" placeholder="CC Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>CC Type</label>
                                        <select name="cc_type" class="form-control input select">
                                            <option value="Visa">Visa</option>
                                            <option value="Master">Master</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>CC exp. Date</label>
                                        <input type="date" value="2020-12-31" name="cc_exp_date" class="form-control input" placeholder="CC exp. Date" required>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-sm btn-block">Submit</button>
                                </form>
                            </div>
                            <div id="step3" class="hide wizard_form_step">
                                <div class="alert alert-success hide" role="alert">
                                    <strong>Success!</strong> Store your data!
                                </div>
                                <form id="login">
                                    <h4>Login Form</h4>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control input" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control input" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary btn-sm btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                      </div>
                  </div>
            </div>
          </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script>
            let formWizard = {}
            let fav = {
                Silver : '100.000, IDR (Free VAT if customer’s gender is female and her age',
                Gold : '200.000, IDR (Free VAT if customer’s gender is female and her age is above 20 years old)',
                Platinum : '300.000, IDR (Free VAT if customer’s gender is female and her age is above 22 years old)',
                Black : '500.000, IDR (VAT 10%)',
                VIP : '1.000.000, IDR (VAT 10%)',
                VVIP : '2.000.000, IDR (VAT 10%)'
            }

            $(document).on('submit', '#form1', function(){
                let input = {}
                $.each($(this).find('.input'), function(){
                    input[$(this).attr('name')] = $(this).val()
                })
                if(input.password !== input.repassword) $('#alertForm1').show()
                else $('#alertForm1').hide()
                $(this).addClass('hide')
                $('#step2').removeClass('hide')
                formWizard['step1'] = input
                $('#wizardTitle').html('Step 2')
                $('#membership_fav').val(fav['Silver'])
                return false;
            })

            $(document).on('submit', '#form2', function(){
                let input = {}
                let address = []
                $.each($(this).find('.input'), function(){
                    if ($(this).attr('name') == 'address' && $(this).val() != null && $(this).val() != '') {
                        address.push($(this).val())
                    }
                    input[$(this).attr('name')] = $(this).val()
                    if ($(this).hasClass('select')){
                        input[$(this).attr('name')] = $(this).find('option:selected').val()
                    }
                })
                input.address = address
                formWizard['step2'] = input
                postData(formWizard,"{!! route('wizard.submit') !!}")
                return false;
            })

            $(document).on('submit', '#login', function(){
                let input = {}
                $.each($(this).find('.input'), function(){
                    input[$(this).attr('name')] = $(this).val()
                })
                login(input,"{!! route('login') !!}")
            })

            $(document).on('change', 'select[name=membership]', function () {
                let favIdx = $(this).val()
                $('#membership_fav').val(fav[favIdx])
            })

            function copyPast(copy, to) {
                $(to).append($(copy).clone())
            }

            function toggle(trgt) {
                $(trgt).toggle()
            }

            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            function postData(data,url) {
                $.ajax({
                    url: url,
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        responsePostData(data)
                    }
                });
            }
            function responsePostData(data) {
                $('#wizardTitle').html('Step 3')
                $('#step2').addClass('hide')
                $('#step3').removeClass('hide')
            }

            function login(data,url) {
                $.ajax({
                    url: url,
                    type: 'post',
                    dataType: 'json',
                    data: data,
                    success: function(data) {
                        responseLoginData(data)
                    }
                });
            }
            function responseLoginData(data) {
                alert(data.msg)
                localStorage.setItem('sessionLogin',JSON.stringify(data.sessionLogin))
            }
        </script>
    </body>
</html>
