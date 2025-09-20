<?php $this->load->view('templates/header', ['title' => 'Dashboard Admin']); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container mt-4">
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, <strong><?= $this->session->userdata('username'); ?></strong> (Admin)</p>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Ruang</h5>
                    <p class="card-text">-- coming soon --</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
