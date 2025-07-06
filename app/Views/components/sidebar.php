<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <?php
  $role = session()->get('role');
?>

<ul class="sidebar-nav" id="sidebar-nav">
  <?php if ($role === 'admin'): ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/user">
        <i class="bi bi-person"></i>
        <span>Kelola User</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/paket">
        <i class="bi bi-box-seam"></i>
        <span>Kelola Paket</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/keranjang">
        <i class="bi bi-cart4"></i>
        <span>Kelola Keranjang</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/booking">
        <i class="bi bi-calendar-check"></i>
        <span>Kelola Booking</span>
      </a>
    </li>

  <?php elseif ($role === 'guest'): ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="/paket">
        <i class="bi bi-box"></i>
        <span>Lihat Paket</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/keranjang">
        <i class="bi bi-cart4"></i>
        <span>Keranjang</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/booking">
        <i class="bi bi-calendar-check"></i>
        <span>Booking</span>
      </a>
    </li>
  <?php endif; ?>
</ul>


</aside><!-- End Sidebar-->
