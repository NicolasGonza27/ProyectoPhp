<nav class="nav justify-content-center navbar-dark bg-dark">
     <div class="container">
          <ul class="nav nav-fill">
               <div class="nav-item text-left">
                    <a href="<?= FRONT_ROOT ?>Home">    
                         <img class="cyberpunk-logo" src="<?php echo IMG_PATH ?>Logo_claro_2-removebg-preview.png">
                    </a>
               </div>
               <li class="nav-item my-characters-supmenu">
                    <a class="nav-link" href="<?php echo FRONT_ROOT ?>Character/ShowCharacterSheetView">My Characters</a>
                    <div class="my-characters-hovermenu">
                         <div class="my-characters-hovermenu__section">
                              <div class="my-characters-hovermenu__item">Fixer</div>
                              <div class="my-characters-hovermenu__item">Solo</div>
                              <div class="my-characters-hovermenu__item">Rockerboy</div>
                              <div class="my-characters-hovermenu__item">Tech</div>
                              <div class="my-characters-hovermenu__item">Medic</div>
                         </div>
                         <div class="my-characters-hovermenu__section">
                              <div class="my-characters-hovermenu__item">Media</div>
                              <div class="my-characters-hovermenu__item">Netrunner</div>
                              <div class="my-characters-hovermenu__item">Police</div>
                              <div class="my-characters-hovermenu__item">Nomad</div>
                              <div class="my-characters-hovermenu__item">Executive</div>
                         </div>
                    </div>
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