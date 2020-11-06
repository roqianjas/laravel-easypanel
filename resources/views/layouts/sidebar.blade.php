<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item @isActive(getRouteName()'.home', 'selected')">
                    <a class="sidebar-link @isActive(getRouteName()'.home', 'active') " href="ticket-list.html" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Home</span>
                    </a>
                </li>

                @include('admin::layouts.child-sidebar-menu')


                <li class="list-divider"></li>
                <li class="sidebar-item">
                    <a href="@route(getRouteName().'.logout')" class="sidebar-link sidebar-link" onclick="event.preventDefault(); document.querySelector('#logout').submit()" aria-expanded="false">
                        <i data-feather="log-out" class="feather-icon"></i>
                        <span class="hide-menu">Logout</span>
                    </a>
                    <form id="logout" action="@route(getRouteName().'.logout')" method="post"> @csrf </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
