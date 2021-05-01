
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PEQUEJARDINES</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider 
    <hr class="sidebar-divider">

    Heading 
    <div class="sidebar-heading">
        Jardines
    </div>

    Nav Item - Pages Collapse Menu 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseune"
            aria-expanded="true" aria-controls="collapseune">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ver</span>
        </a>
        <div id="collapseune" class="collapse" aria-labelledby="headingune" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            </div>
        </div>
    </li>
-->
   

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/longin">
        <i class="fas fa-fw fa-home"></i>
        <span>INICIO SESIÓN</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Busqueda
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-building"></i>
            <span>Jardines</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Ver Jardines</h6>
                <a class="collapse-item" href="/informacionJardin"  >Jardines</a>  
                         
            </div>
        </div>
    </li>


    <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Usuarios
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
aria-expanded="true" aria-controls="collapsePages1">
<i class="fas fa-fw fa-user"></i>
<span>Administrador</span>
</a>
<div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">RECTOR:</h6>
    <a class="collapse-item" href="{{ route('rector_crear')}} "> Registro Rector</a>
    <a class="collapse-item" href="{{ route('rector_listar')}}"> ver Rector</a>
    <h6 class="collapse-header">JARDINES:</h6>
    <a class="collapse-item" href="{{ route('institucion.nuevo') }}">Registro Jardines</a>
    <a class="collapse-item" href="{{ route('institucion.listar') }}">Ver Jardines</a>
    <div class="collapse-divider"></div>                           
</div>
</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
aria-expanded="true" aria-controls="collapsePages2">
<i class="fas fa-fw fa-child"></i>
<span>Rector</span>
</a>
<div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">DOCENTE:</h6>
    <a class="collapse-item" href="{{ route('docente_crear') }}">Registro Docentes</a>
    <a class="collapse-item" href="{{ route('docente_listar') }}">Ver Docentes</a>
    <a class="collapse-header">CURSO:</a>
    <a class="collapse-item" href="{{ route('curso.nuevo') }}">Registro cursos</a>
    <a class="collapse-item" href="{{ route('curso.listar') }}">Ver cursos</a>
    <a class="collapse-header">ESTUDIANTE:</a>
    <a class="collapse-item" href="{{ route('estudiante.nuevo') }}">Registrar estudiantes</a> 
    <a class="collapse-item" href="{{ route('estudiante.listar') }}">Listar estudiantes</a> 

    <div class="collapse-divider"></div>

</div>
</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
aria-expanded="true" aria-controls="collapsePages3">
<i class="fas fa-fw fa-group"></i>
<span>Docente</span>
</a>
<div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">TEMAS:</h6>
    <a class="collapse-item" href="{{ route('tema_listar') }}">Registrar temas</a>
    <a class="collapse-item" href="{{ route('tarea_listar') }}">Registrar Tareas</a>
    <a class="collapse-item" href="/">Agregar foro</a>
    <div class="collapse-divider"></div>
  
</div>
</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4"
aria-expanded="true" aria-controls="collapsePages4">
<i class="fa-github-alt"></i>
<span>Estudiante</span>
</a>
<div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Ventanas:</h6>
    <a class="collapse-item" href="">Ver temas</a>
    <a class="collapse-item" href="/"> Ver Tareas</a>
    <a class="collapse-item" href="/"> Participar foro</a>
    <div class="collapse-divider"></div>                          
</div>
</div>
</li>
<!-- fin columna-->


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->