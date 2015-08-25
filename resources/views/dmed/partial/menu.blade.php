
    <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
    <!--- Sidebar navigation -->
    <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
    <ul id="nav">
        <!-- Main menu with font awesome icon -->
        <li class="open"><a href="index.html"><i class="fa fa-home"></i> Home</a>
            <!-- Sub menu markup
            <ul>
              <li><a href="#">Submenu #1</a></li>
              <li><a href="#">Submenu #2</a></li>
              <li><a href="#">Submenu #3</a></li>
            </ul>-->
        </li>
        <li>
            <a href="#"><i class="fa fa-users"></i> Grupo</a>
        </li>
        <li>
            <a href="{{ route('usuario.index') }}"><i class="fa fa-user"></i> Usuário</a>
        </li>
        <li>
            <a href="{{ route('empresa.index') }}"><i class="fa fa-bank"></i> Empresa</a>

        </li>
        <li>
            <a href="#"><i class="fa fa-file-text"></i> Notas Fiscais</a>

        </li>
        <li><a href="#"><i class="fa fa-gear"></i> Gerar Dmed</a>

        </li>
        <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Relátorio</a></li>

    </ul>
<!-- Sidebar ends -->
