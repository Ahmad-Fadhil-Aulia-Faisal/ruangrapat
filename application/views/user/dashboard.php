<h2>Dashboard User</h2>
<p>Selamat datang, <?= $this->session->userdata('username'); ?> (User)</p>
<a href="<?= site_url('auth/logout'); ?>">Logout</a>
