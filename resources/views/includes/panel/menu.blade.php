<!-- Navigation -->
<h6 class="navbar-heading text-muted">Gestionar datos</h6>
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('home') }}">
      <i class="ni ni-tv-2 text-danger"></i> Grafica
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('usuario.index') }}">
      <i class="ni ni-single-02 text-red"></i> Usuarios
    </a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="{{ route('distritos.index')}}">
      <i class="ni ni-badge text-info"></i> Distritos
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('actividad.index')}}">
      <i class="ni ni-user-run text-info"></i> Actividad
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('evento.index')}}">
      <i class="ni ni-planet text-blue"></i> Eventos
    </a>
  </li>
  
    <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
      @csrf
    </form>
  </li>
</ul>

