<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
    include '../Login/Seguridad.php';
} 

  if(isset($_SESSION['Users_id'])){
    include '../../Connection/Connection.php';
	  $Users_id = $_SESSION['Users_id'];

    $Sentencia = $conexion_bd->prepare("SELECT * FROM users WHERE Users_id = ?;");
    $Sentencia->execute([$Users_id]);

    if ($Sentencia->rowCount()>=1) {
        $fila = $Sentencia->fetch();
        $Users_names = $fila['Users_names'];
        $Role_Role_id = $fila['Role_Role_id'];
  }  
	$sentencia = $conexion_bd -> query("SELECT * FROM users;");
	$Usuarios = $sentencia -> fetchAll(PDO::FETCH_OBJ);
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zaiko | Admin</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="../../Assets/img/svg/Logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../../Assets/css/SystemAdmin/Dashboard_SystemAdmin.css">
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="#" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title"><?php echo $Users_names;?></span>
                    <span class="logo-subtitle"><?php echo "Administrador";?></span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
            <span class="system-menu__title">Inventarios</span>
                <li>
                    <a href="SystemAdmin.php"><span class="icon home" aria-hidden="true"></span>Inicio</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Inventarios
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="Inventories.php">Todos los inventarios</a>
                        </li>
                        <li>
                            <a href="CreateUnit.php">Crear dependencia</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class=" icon paper " aria-hidden="true"></span>Préstamos
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="Loans.php">Todos los préstamos</a>
                        </li>
                        <li>
                          <a href="new-post.html">Crear préstamo</a>
                      </li>
                    </ul>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon user-3" aria-hidden="true"></span>Usuarios
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="SelectUsers.php" class="active">Todos los usuarios</a>
                        </li>
                        <li>
                            <a href="SelectUsersD.php">Desactivados</a>
                        </li>
                        <li>
                            <a href="media-02.html">Crear usuario</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <span class="system-menu__title">Sistema</span>
            <ul class="sidebar-body-menu">
                <li>
                    
                    <a href="##"><span class="icon setting" aria-hidden="true"></span>Configuración</a>
                </li>
            </ul>
        </div>
    </div>
</aside>
  <div class="main-wrapper"> 
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
  <div class="container main-nav">
    <div class="main-nav-start">
      <div class="search-wrapper">
        <i data-feather="search" aria-hidden="true"></i>
        <input type="text" placeholder="Enter keywords ..." required>
      </div>
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
      <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button>
      <div class="notification-wrapper">
        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
          <span class="sr-only">To messages</span>
          <span class="icon notification active" aria-hidden="true"></span>
        </button>
        <ul class="users-item-dropdown notification-dropdown dropdown">
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">System just updated</span>
                <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon danger">
                <i data-feather="info" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">The cache is full!</span>
                <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
              </div>
            </a>
          </li>
          <li>
            <a href="##">
              <div class="notification-dropdown-icon info">
                <i data-feather="check" aria-hidden="true"></i>
              </div>
              <div class="notification-dropdown-text">
                <span class="notification-dropdown__title">New Subscriber here!</span>
                <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
              </div>
            </a>
          </li>
          <li>
            <a class="link-to-page" href="##">Go to Notifications page</a>
          </li>
        </ul>
      </div>
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
          <li><a href="##">
              <i data-feather="user"></i>
              <span>Profile</span>
            </a></li>
          <li><a href="##">
              <i data-feather="settings"></i>
              <span>Account settings</span>
            </a></li>
          <li>
            <a class="danger" href="../Login/Logout.php?tk=<?php echo $_SESSION['token'];?>">
              <i data-feather="log-out"></i>
              <span>Cerrar sesión</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

      <?php 
        if(isset($_POST['Units_name'],$_POST['Users_number_dni'])){
          require_once '../../Connection/Connection.php';
          require_once 'CRUD/InsertUnits.php';
        }
      ?>
        <div class="row">
          <div class="col-lg-9">
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>Número Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rol</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        foreach ($Usuarios as $dato) {
                    ?>
                        <tr> 
                        <td><?php echo $dato->Users_number_dni; ?></td>
                        <td><?php echo $dato->Users_names; ?></td>
                        <td><?php echo $dato->Users_surname_one; ?></td>
                        <td>
                        <?php 
                            switch ($dato->Role_Role_id) {
                              case $dato->Role_Role_id == 1 :
                                echo 'Administrador de sistemas';
                              break;
                              case $dato->Role_Role_id == 2 :
                                echo 'Administrador de Dependencia';
                              break;
                            }
                        ?>
                        </td>
                        <td><?php echo $dato->Users_email; ?></td>
                        <td>
                        <?php 
                            if ($dato->Users_active == 1) {
                                echo 'Activo';
                            }else {
                                echo 'Inactivo';
                            }
                        ?>
                        </td>
                        <td>
                      <span class="p-relative">
                        <button class="dropdown-btn transparent-btn" type="button" title="More info">
                          <div class="sr-only">More info</div>
                          <i data-feather="more-horizontal" aria-hidden="true"></i>
                        </button>
                        <ul class="users-item-dropdown dropdown">
                          <li><a href="../../Insertar/Forms/Users/UsersUpdate.php?Users_id=<?php echo $dato->Users_id;?>">Editar</a></li>
                          <li><a href="../../Insertar/Forms/Users/Procedures/Dasactivate.php?Users_id=<?php echo $dato->Users_id;?>">Desactivar</a></li>
                        </ul>
                      </span>
                      <?php
                      }
                      ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-lg-3">
            <article class="white-block">
              <div class="top-cat-title">
                <h3>Top categories</h3>
                <p>28 Categories, 1400 Posts</p>
              </div>
              <ul class="top-cat-list">
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Lifestyle <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy lifestyle articles <span class="purple">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Tutorials <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Coding tutorials <span class="blue">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Technology <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Dailiy technology articles <span class="danger">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      UX design <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      UX design tips <span class="success">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Interaction tips <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Interaction articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      App development <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Mobile development articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Nature <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Wildlife animal articles <span class="warning">+472</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="##">
                    <div class="top-cat-list__title">
                      Geography <span>8.2k</span>
                    </div>
                    <div class="top-cat-list__subtitle">
                      Geography articles <span class="primary">+472</span>
                    </div>
                  </a>
                </li>
              </ul>
            </article>
          </div>
        </div>
      </div>
    </main>
    <!-- ! Footer -->
  </div>
</div>
<!-- Chart library -->
<script src="../../Assets/Plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="../../Assets/Plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="../../Assets/js/script.js"></script>
</body>

</html>