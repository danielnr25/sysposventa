<div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">

    <div id="sidebar-menu">
      <ul>
        <!-- <li class="menu-title">Main</li> -->
          <?php 
            $idmodulo = 0;
            $siguiente = next($listaOpciones);

            foreach($listaOpciones as $k => $v){
              $ultimo = false;
              if (isset($siguiente['idmodulo']) && ($siguiente['idmodulo'] != $v['idmodulo'])) {
                $ultimo = true;
             }
              if ($v['idmodulo'] != $idmodulo) {
                echo "<li class='has_sub'><a href='#'' class='waves-effect waves-primary'><i style='font-size:20px' class='" . $v['modulo_icono'] . " '></i><span style='color:#000; font-weight:400;'>" . $v['modulo'] . "<span class='menu-arrow'></span></span></a><ul class='list-unstyled'>";
                $idmodulo = $v['idmodulo'];
              }

              echo "<li class='has_sub'><a href='#' class='waves-effect waves-primary' onclick='AbrirPagina(\"" . $v['url'] . "\"); verificarSeleccionado(this)' ><i style='font-size:15px;color:#000' class='" . $v['icono'] . "'></i>" . $v['descripcion'] . "</a></li>";

              if ($ultimo) {
                  echo "</ul></li>";
              }

              $siguiente = next($listaOpciones);
            }


          ?>
       
      </ul>
      <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
  </div>

  <div class="user-detail">
    <div class="dropup">
      <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
        <img src="../theme/assets/images/users/avatar-2.jpg" alt="user-img" class="img-circle">
        <span class="user-info-span">
          <h5 class="m-t-0 m-b-0 text-inverse"><?php echo $_SESSION['nombre'] ?></h5>
          <p class="text-inverse m-b-0">
            <small><i class="fa fa-circle text-success"></i><span> <?php echo $_SESSION['perfil'] ?></span></small>
          </p>
        </span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
        <li><a href=".."><i class="md md-settings-power"></i> Logout</a></li>
      </ul>

    </div>
  </div>
</div>

<script>
   $(".nav-link").click(function() {
      $(".nav-link").removeClass("active");
      $(this).addClass("active");
   });
</script>

<style>
   .copy{
      color: #000;
   }

</style>