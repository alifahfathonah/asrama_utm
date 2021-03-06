<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASRAMA MAHASISWA UTM</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/asramaico.ico" type="image/x-icon" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>asset_login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>asset_login/css/style.css">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form">
                        <h2 class="form-title">WELCOME</h2>
                        <?php if ($this->session->flashdata('gagal_login')) { ?><div class="error">
                                <p><?= $this->session->flashdata('gagal_login'); ?></p>
                            </div>
                        <?php } ?>
                        <div>
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <select name="nama" class="form-control" id="nama">
                                </select>
                                <small class="text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="error"><?= form_error('password'); ?></div>
                            <div class="form-group form-button">
                                <input type="submit" onclick="masuk()" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </div>
                        <div class="social-login">
                            <span class="social-label"> </span>
                            <ul class="socials">
                                <!-- <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="signin-image">
                        <figure><img src="<?= base_url() ?>asset_login/images/signup-image.jpg" alt="sing up image"></figure>
                        <a class="signup-image-link"> Asrama Mahasiswa Universitas Trunojoyo Madura </a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url() ?>asset_login/js/main.js"></script>
    <script>
        get_list_desa();

        function get_list_desa() {
            $.ajax({
                type: 'get',
                data: 'target=tbl_pengguna',
                url: '<?= base_url() ?>login_control/ambilData',
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    var baris = '<option value="0">- Pilih Pengguna -</option>';
                    var nama = '';
                    for (var i = 0; i < data.length; i++) {
                        baris += '<option value = "' + data[i].id_pengguna + '"'
                        if (data[i].id_pengguna == <?php if (set_value("nama")) {
                                                        echo "'" . set_value("nama") . "'";
                                                    } else {
                                                        echo "0";
                                                    } ?>) {
                            baris += ""
                        }
                        baris += ' > ' + data[i].username + ' | ' + data[i].jurusan + ' </option>'
                    }

                    $("#nama").html(baris);
                    console.log(baris);
                }
            });
        }

        function masuk() {
            if (document.getElementById("nama").value != '' && document.getElementById("password").value != '') {
                $.ajax({
                    type: 'POST',
                    data: 'nama=' + document.getElementById("nama").value + '&password=' + document.getElementById("password").value,
                    url: '<?= base_url() ?>login_control/coba',
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data);
                        if (data == "") {
                            window.location.replace("<?= base_url() ?>home_control");
                        } else {
                            window.location.replace("<?= base_url() ?>login_control");
                        }

                    }
                });
            }
        }
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>