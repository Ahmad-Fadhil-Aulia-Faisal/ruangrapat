<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RuangRapat</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <?php if ($this->session->userdata('role') == 'admin'): ?>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/dashboard'); ?>">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/ruang'); ?>">Master Ruang</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/user'); ?>">Master User</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('admin/booking'); ?>">Semua Booking</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('user/dashboard'); ?>">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('user/booking'); ?>">Booking Ruang</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= site_url('user/mybooking'); ?>">Riwayat Booking</a></li>
        <?php endif; ?>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('auth/logout'); ?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
