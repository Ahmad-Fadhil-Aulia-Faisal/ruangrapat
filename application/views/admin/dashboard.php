<?php $this->load->view('templates/header', ['title' => 'Dashboard Admin']); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container mt-4">
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, <strong><?= $this->session->userdata('username'); ?></strong></p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Ruang</h5>
                    <p class="card-text fs-3"><?= $total_ruang; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total User</h5>
                    <p class="card-text fs-3"><?= $total_user; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Booking</h5>
                    <p class="card-text fs-3"><?= $total_booking; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
