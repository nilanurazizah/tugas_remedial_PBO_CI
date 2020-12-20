<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="<?php echo base_url() . 'assets/css/bootsrap.min.css' ?>" rel="stylesheet">
    <title><?php echo $title;?></title>
  <style>

/* .tulisan{
    color: inherit;
    font-size: 100px;
    font-family: candara;
} */
/* .text-center{
    font-family: candara;
    font-size: 35px;
} */
.navbar, .navbar-light{
    background: #14b1ab;
}
.navbar-brand{
    font-size: 45px;
    margin-left: 40%;
    font-family: candara;
}
.wrapper {
    display: flex;
    width: 100%;
    /* align-items: stretch; */
}

.sidebar {
    background: palegreen;
    color: white;
    font-family: candara;
    min-width: 380px;
    max-width: 400px;
    min-height: 100vh;
}

.sidebar .sidebar-header {
    padding: 10px;
    background: powderblue;
}

.sidebar ul li a {
    padding: 30px;
    font-size: 1.1em;
    display: block;
    font-family: candara;
    font-size: 30px;
}
.rounded-circle{
    width: 30%;
    /* margin-left: 100px; */
}
.text-center{
    font-family: candara;
    font-size: 30px;
}




    </style>
</head>
<body>
<nav class="navbar navbar-light">
      <a class="navbar-brand">SMK Taruna Bhakti</a>
  </nav>
<div class="wrapper">
    <nav class="sidebar">

        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo site_url('homepage/home_siswa'); ?>" style="font-size: 25px;">Dashboard</a>
            </li>
            <hr>
            <li>
                <a href="<?php echo site_url('homepage/data_kunjungan'); ?>" style="font-size: 25px;">Data Kunjungan</a>
            </li>
            <hr>
            <li>
                <a href="#" style="font-size: 25px;">Form Pengisian</a>
            </li>
            <hr>
            <li>
                <a href="" data-toggle="modal" data-target="#logoutModal" style="font-size: 25px;">Logout</a>
            </li>
        </ul>
    </nav>

  



    <div class="card-body" style="margin-top: -10px; background-color: #F0F8FF;">

    <center>
        <p style="margin-top: -1px; font-size: 30px;">Form Berkunjung Ke Sekolah</p>
    </center>
    <hr>

    <div>
        <form action="<?php echo site_url('Homepage/simpan_kunjungan'); ?>" method="POST" enctype="multipart/form-data" >
            <div class="row">
                <div class="col">
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Nama Lengkap</label>
                    <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Kelas</label>
                    <div class="col-sm-6">
                    <input type="text" name="klss" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">No absen</label>
                    <div class="col-sm-6">
                    <input type="text" name="noabsen" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Tanggal Ke Sekolah</label>
                    <div class="col-sm-6">
                    <input type="date" name="tgl" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Keperluan Ke Sekolah</label>
                    <div class="col-sm-6">
                    <textarea name="keper" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Keterangan:</label>
                        <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ket" value="1">Sehat
                </label>
            </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ket" value="2">Tidak Sehat
                    </label>
                </div>
            </div>
                <div class="form-group">
                    <div class="col-sm-7">
                    <button class="btn btn-info" type="submit" style="margin-left: 1100px; width: 20%; font-size: 20px; font-family: candara;">Submit form</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>

    <!-- LOGOUT NYA -->
<div class="modal fade" id="logoutModal" tabindex="-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">X</span>
					</button>
				</div>
				<div class="modal-body">Pilih Logout, jika sudah bersiap untuk keluar.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">batal</button>
					<a class="btn btn-primary" href="<?php echo site_url('Homepage/logout');?>">Logout</a>
				</div>
			</div>
		</div>
    </div>
    
</body>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>

</html>