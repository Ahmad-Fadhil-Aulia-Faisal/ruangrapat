<?php $this->load->view('templates/header', ['title' => 'Dashboard User']); ?>
<?php $this->load->view('templates/navbar'); ?>

<div class="container mt-4">
    <h2>Dashboard User</h2>
    <p>Halo, <strong><?= $this->session->userdata('username'); ?></strong> (User)</p>

    <div class="row">
        <div class="col-md-6">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Daftar Ruang Rapat</h5>
                    <p class="card-text">-- coming soon --</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer'); ?>
