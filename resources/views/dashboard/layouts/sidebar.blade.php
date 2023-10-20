<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/" target="_blank">
                <i class="bi bi-link-45deg"></i>
                <span>Website</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/adminbanner">
                        <i class="bi bi-circle"></i><span>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="/adminportofolio">
                        <i class="bi bi-circle"></i><span>Portofolio</span>
                    </a>
                </li>
                <li>
                    <a href="/adminarticle">
                        <i class="bi bi-circle"></i><span>Artcile</span>
                    </a>
                </li>
                {{-- <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Subsidiary</span>
            </a>
          </li> --}}
            </ul>
        </li><!-- End Components Nav -->


    </ul>

</aside><!-- End Sidebar-->
