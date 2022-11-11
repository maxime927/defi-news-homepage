<header class="header-wrap" role="banner">
  <div class="container">
    <!-- Logo -->
    <a href="/?page=home" class="header-logo">
      <img src="/dist/img/logo.svg" alt="">
      <span class="visually-hidden">Accueil</span>
    </a>

    <!-- Btn Menu -->
    <button type="button" class="btn btn-link btn-menu">
      <i class="icon-menu"></i><span class="visually-hidden">Menu</span>
    </button>

    <!-- Nav principale avec attributs WAI -->
    <?php if($menus->main): ?>
    <nav class="header-nav" role="navigation" aria-label="Navigation principale">
        <button type="button" class="btn btn-link btn-menu">
          <i class="icon-menu-close"></i><span class="visually-hidden">Fermer le menu</span>
        </button>
        <ul class="list-inline" role="menubar">
          <?php $i = 0; foreach($menus->main->item as $m): ?>
          <li role="presentation" class="list-inline-item">
            <a class="menu-item" id="main-nav-item-<?=$i?>" href="<?= $m->url != '' ? $m->url : 'javascript:void(0)' ?>" <?=$m->submenu ? 'aria-haspopup="true"' : '' ?> <?php if ($m->submenu) : ?>aria-controls="main-subnav-<?=$i?>" <?php endif; ?>><?=$m->label?></a>

            <?php if($m->submenu): ?>
              <ul class="list-inline" id="main-subnav-<?=$i?>" role="menu" aria-labelledby="main-nav-item-<?=$i?>">
                <?php $j = 0; foreach($m->submenu->item as $sm): ?>
                  <li role="none" class="list-inline-item">
                    <a role="menuitem" class="sub-menu-item" href="<?= $sm->url != '' ? $sm->url : 'javascript:void(0)' ?>" ><?=$sm->label?></a>
                  </li>
                <?php $j++; endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
          <?php $i++; endforeach; ?>
        </ul>
    </nav>
    <?php endif; ?>
  </div>
</header>
