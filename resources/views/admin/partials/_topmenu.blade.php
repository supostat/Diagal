<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->fullName() }} <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
        <li><a href="#admin/profile"><i class="fa fa-user"></i>Профиль</a></li>
        <li><a href="#admin/settings"><i class="fa fa-cog"></i>Настройки</a></li>
        <li class="divider"></li>
        <li><a id="logout" href="#"><i class="fa fa-sign-out"></i>Выход</a></li>
    </ul>
</li>