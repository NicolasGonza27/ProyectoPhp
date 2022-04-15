<nav class="nav justify-content-center navbar-dark bg-dark">
     <div class="container">
          <ul class="nav nav-fill">
               <div class="nav-item text-left">
                    <a href="<?= FRONT_ROOT ?>Home">    
                         <img class="cyberpunk-logo" src="<?php echo IMG_PATH ?>Logo_claro_2-removebg-preview.png">
                    </a>
               </div>
               <li class="nav-item">
                    <a class="nav-link" href="<?php echo FRONT_ROOT ?>Student/ShowListView">My Characters</a>
               </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">The Streets</a>
                    <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="#">Action</a></li>
                         <li><a class="dropdown-item" href="#">Another action</a></li>
                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                         <li><hr class="dropdown-divider"></li>
                         <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="<?php echo FRONT_ROOT ?>Student/ShowListView">Factory</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="<?php echo FRONT_ROOT ?>Student/ShowListView">Garage</a>
               </li>
          </ul>
     </div>
</nav>