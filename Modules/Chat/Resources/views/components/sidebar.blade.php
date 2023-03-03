<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">
                {{-- dashboard --}}
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

                {{-- user manager --}}
                <li class="nav-item nav-link {{ Request::is('user*') ? 'active' : '' }}">
                    <a href="/user" class="collapsed" aria-expanded="false">
                        <i class="fas fa-user mr-3 fa-lg {{ Request::is('user*') ? 'text-white' : 'text-muted' }}"></i>
                        <p>User Manager</p>
                    </a>
                </li>

                {{-- chat --}}
                <li class="nav-item {{ Request::is('floating*') ? 'active' : '' }}">

                    <a data-toggle="collapse" href="#base">
                        <i
                            class="fas fa-comment-dots mr-3 fa-lg {{ Request::is('floating*') ? 'text-white' : 'text-muted' }}"></i>
                        <p>Chat</p>
                        <span class="caret"></span>
                    </a>

                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="/chatify">
                                    <span class="sub-item">Interface Chat</span>
                                </a>
                            </li>

                            <li>
                                <a href="/floating">
                                    <span class="sub-item {{ Request::is('floating*') ? 'text-primary' : '' }}">Floating
                                        Chat</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </li>

                {{-- ticket --}}
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
