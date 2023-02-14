<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">
                <li class="nav-item nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
                    <a href="/dashboard" class="collapsed" aria-expanded="false">
                        <i
                            class="fas fa-home mr-3 fa-lg {{ Request::is('dashboard*') ? 'text-white' : 'text-muted' }}"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Fitur</h4>
                </li>

                <li class="nav-item nav-link {{ Request::is('user*') ? 'active' : '' }}">
                    <a href="/user" class="collapsed" aria-expanded="false">
                        <i class="fas fa-user mr-3 fa-lg {{ Request::is('user*') ? 'text-white' : 'text-muted' }}"></i>
                        <p>User Manager</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-comment-dots mr-3 fa-lg text-muted"></i>
                        <p>Chat</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-ticket-alt mr-3 fa-lg text-muted"></i>
                        <p>Ticket</p>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</div>
