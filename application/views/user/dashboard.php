<?php $this->load->view('templates/header', ['title' => 'Dashboard User']); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container mt-4">
    <h2>Dashboard User</h2>
    <p>Halo, <strong><?= $this->session->userdata('username'); ?></strong></p>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card text-bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Booking Saya</h5>
                    <p class="card-text fs-3"><?= $my_booking; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
