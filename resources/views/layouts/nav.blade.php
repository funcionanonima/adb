<nav class="bg-light text-light">
    <div class="sidebar-sticky">
        
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
        <span>Administrador</span>
        <a class="d-flex align-items-center text-muted" href="#">
        </a>
    </h6>  
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-users-cog"></i>{{ __('Control Usuarios') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('companies') }}"><i class="far fa-building"></i>{{ __('Control Empresas') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('areas')}}"><i class="fas fa-puzzle-piece"></i>{{ __('Control Areas') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('documents') }}"><i class="fas fa-file"></i>{{ __('Control Documentos') }}</a>
            </li>  
            <hr>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                {{ __('Cerrar Sesion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>                
    </div>
</nav>