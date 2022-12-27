<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
    <style>
        .gradient-custom-3 {
            background: #84fab0;
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
            background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
            background: #84fab0;
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <?php
                                $msg = $this->session->flashdata('msg');
                                if ($msg != '') {
                                    echo '<div class="alert alert-success">' . $msg . '</div>';
                                }

                                ?>
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form action="<?php echo base_url() . 'user/register' ?>" method="post" id="register_form">

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Your Name</label>
                                        <input type="text" name="name" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Cnic</label>
                                        <input type="text" name="cnic" id="cnic" class="form-control form-control-lg" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control form-control-lg" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control form-control-lg" />

                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>

                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="<?php echo base_url() . 'user/login' ?>" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $.mask.definitions['d'] = '[0-9]';
        $.mask.definitions['s'] = '[s]';
        $.mask.definitions['c'] = '[c]';

        $.mask.definitions['9'] = '';

        $('input[name="mobile-number"]').mask('(00) 0000 0000');
        $("#cnic").mask("ddddd-ddddddd-d");
        $("#phone").mask(("+(92)-dddddddddd"));
        
        // $(":input").inputmask();

        $(document).ready(function() {
            $('#register_form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    cnic: {
                        required: true,
                        maxlength: 15,
                    },
                    phone: {
                        required: true,

                    },

                    password: {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    name: {
                        required: 'Name field is required.',
                        minlength: 'Name must be at least 3 characters'
                    },
                    email: {
                        required: 'Email field is required.',
                    },
                    cnic: {
                        required: 'Cnic filed is required.',
                        minlength: 'Cnic must be at least 15 characters'
                    },
                    phone: {
                        required: 'Phone field is required.',
                    },
                    password: {
                        required: 'Password field is required.',
                    }

                },
            })
        });
    </script>

</body>

</html>