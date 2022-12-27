<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>edit</title>
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
                                <h2 class="text-uppercase text-center mb-5">Edit User</h2>

                                <form action="<?php echo base_url('user/update/'.$users->id); ?>" method="post" id="edit_form">

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Your Name</label>
                                        <input type="text" name="name" value="<?= $users->name;?>" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Your Email</label>
                                        <input type="email" name="email" value="<?= $users->email;?>" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label">Cnic</label>
                                        <input type="text" name="cnic" value="<?= $users->cnic;?>" data-inputmask="'mask' : '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" class="form-control form-control-lg" />

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label">Phone</label>
                                        <input type="text" name="phone" value="<?= $users->phone;?>" data-inputmask="'mask': '0399-99999999'" placeholder="03XX-XXXXXXX" class="form-control form-control-lg" type="number" maxlength="12" />

                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Update</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script>
        $(":input").inputmask();

        $(document).ready(function() {
            $('#edit_form').validate({
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
                        minlength: 9
                    },

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
                        // minlength: 'Phone must be at least 8 numbers',
                    },

                },
            })
        });
    </script>

</body>

</html>