<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-left">
                <button type="button" class="header-widget sidebar-btn">
                    <i class="fas fa-align-right"></i>
                </button>
                <a href="{{ route('home.index') }}" class="header-logo">
                    <img src="{{ asset('assets/endUser') }}/images/logo.png" alt="logo">
                </a>


                @if (auth()->user())
                    <a href="{{ route('auth.logout') }}" class="header-widget header-user">
                        <img src="{{ asset('assets/endUser') }}/images/user.png" alt="user">
                        <span>Logout</span>
                    </a>
                @else
                    <a href="{{ route('auth') }}" class="header-widget header-user">
                        <img src="{{ asset('assets/endUser') }}/images/user.png" alt="user">
                        <span>join me</span>
                    </a>
            @endif
                <button type="button" class="header-widget search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <form class="header-form">
                <div class="header-search">
                    <button type="submit" title="Search Submit "><i class="fas fa-search"></i></button>
                    <input type="text" placeholder="Search, Whatever you needs...">
                    <button type="button" title="Search Option" class="option-btn"><i class="fas fa-sliders-h"></i></button>
                </div>
                <div class="header-option">
                    <div class="option-grid">
                        <div class="option-group"><input type="text" placeholder="City"></div>
                        <div class="option-group"><input type="text" placeholder="State"></div>
                        <div class="option-group"><input type="text" placeholder="Min Price"></div>
                        <div class="option-group"><input type="text" placeholder="Max Price"></div>
                        <button type="submit"><i class="fas fa-search"></i><span>Search</span></button>
                    </div>
                </div>
            </form>
            <div class="header-right">
                <ul class="header-list">
                    <li class="header-item">
                        <a href="bookmark.html" class="header-widget">
                            <i class="fas fa-heart"></i>
                             {{-- @if (auth()->user())
                                <sup>{{ $allBookmark }}</sup>
                             @else
                                <sup>0</sup>
                             @endif --}}

                             <sup>0</sup>


                        </a>
                    </li>
                    <li class="header-item">
                        <button type="button" class="header-widget">
                            <i class="fas fa-envelope"></i>
                            <sup>0</sup>
                        </button>
                        <div class="dropdown-card">
                            <div class="dropdown-header">
                                <h5>message (2)</h5>
                                <a href="message.html">view all</a>
                            </div>
                            <ul class="message-list">
                                <li class="message-item unread">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/01.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>miron mahmud <span>now</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                        <span class="message-count">4</span>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/03.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>shipu ahmed <span>3m</span></h6>
                                            <p><span>me:</span>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item unread">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>tahmina bonny <span>2h</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                        <span class="message-count">12</span>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/04.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>nasrullah <span>5d</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img">
                                            <img src="{{ asset('assets/endUser') }}/images/user.png" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>saikul azam <span>7w</span></h6>
                                            <p><span>me:</span>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>munni akter <span>9m</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/03.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>shahin alam <span>1y</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-item">
                        <button type="button" class="header-widget">
                            <i class="fas fa-bell"></i>
                            <sup>0</sup>
                        </button>
                        <div class="dropdown-card">
                            <div class="dropdown-header">
                                <h5>Notification (1)</h5>
                                <a href="notification.html">view all</a>
                            </div>
                            <ul class="notify-list">
                                <li class="notify-item active">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/01.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>miron mahmud</span> has added the advertisement post of your <span>booking</span> to his wishlist.</p>
                                            <span class="notify-time">just now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>tahmina bonny</span> gave you a <span>comment</span> and 5 star <span>review.</span></p>
                                            <span class="notify-time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/03.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>shipu ahmed</span> and <span>4 other</span> have seen your contact number</p>
                                            <span class="notify-time">3 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>miron mahmud</span> has added the advertisement post of your <span>booking</span> to his wishlist.</p>
                                            <span class="notify-time">5 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/04.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>labonno khan</span> gave you a <span>comment</span> and 5 star <span>review.</span></p>
                                            <span class="notify-time">4 months ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="{{ asset('assets/endUser') }}/images/avatar/01.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>azam khan</span> and <span>4 other</span> have seen your contact number</p>
                                            <span class="notify-time">1 years ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a href="{{ route('dashboard.ad.create') }}" class="btn btn-inline post-btn">
                    <i class="fas fa-plus-circle"></i>
                    <span>post your ad</span>
                </a>
            </div>
        </div>
    </div>
</header>
<!--=====================================
            HEADER PART END
=======================================-->


<!--=====================================
            SIDEBAR PART START
=======================================-->
<aside class="sidebar-part">
    <div class="sidebar-body">
        <div class="sidebar-header">
            <a href="index.html" class="sidebar-logo"><img src="{{ asset('assets/endUser') }}/images/logo.png" alt="logo"></a>
            <button class="sidebar-cross"><i class="fas fa-times"></i></button>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-profile">
                <a href="#" class="sidebar-avatar"><img src="{{ asset('assets/endUser') }}/images/avatar/01.jpg" alt="avatar"></a>
                <h4><a href="#" class="sidebar-name">Jackon Honson</a></h4>
                <a href="ad-post.html" class="btn btn-inline sidebar-post">
                    <i class="fas fa-plus-circle"></i>
                    <span>post your ad</span>
                </a>
            </div>
            <div class="sidebar-menu">
                <ul class="nav nav-tabs">
                    <li><a href="#main-menu" class="nav-link active" data-toggle="tab">Main Menu</a></li>
                    <li><a href="#author-menu" class="nav-link" data-toggle="tab">Author Menu</a></li>
                </ul>

                <div class="tab-pane active" id="main-menu">
                    <ul class="navbar-list">
                        <li class="navbar-item"><a class="navbar-link" href="index.html">Home</a></li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="#">
                                <span>Categories</span>
                                <i class="fas fa-plus"></i>
                            </a>
                            <ul class="dropdown-list">
                                <li><a class="dropdown-link" href="category-list.html">category list</a></li>
                                <li><a class="dropdown-link" href="category-details.html">category details</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="#">
                                <span>Advertise List</span>
                                <i class="fas fa-plus"></i>
                            </a>
                            <ul class="dropdown-list">
                                <li><a class="dropdown-link" href="ad-list-column3.html">ad list column 3</a></li>
                                <li><a class="dropdown-link" href="ad-list-column2.html">ad list column 2</a></li>
                                <li><a class="dropdown-link" href="ad-list-column1.html">ad list column 1</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="#">
                                <span>Advertise details</span>
                                <i class="fas fa-plus"></i>
                            </a>
                            <ul class="dropdown-list">
                                <li><a class="dropdown-link" href="ad-details-grid.html">ad details grid</a></li>
                                <li><a class="dropdown-link" href="ad-details-left.html">ad details left</a></li>
                                <li><a class="dropdown-link" href="ad-details-right.html">ad details right</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="#">
                                <span>Pages</span>
                                <i class="fas fa-plus"></i>
                            </a>
                            <ul class="dropdown-list">
                                <li><a class="dropdown-link" href="about.html">About Us</a></li>
                                <li><a class="dropdown-link" href="compare.html">Ad Compare</a></li>
                                <li><a class="dropdown-link" href="cities.html">Ad by Cities</a></li>
                                <li><a class="dropdown-link" href="price.html">Pricing Plan</a></li>
                                <li><a class="dropdown-link" href="user-form.html">User Form</a></li>
                                <li><a class="dropdown-link" href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="#">
                                <span>blogs</span>
                                <i class="fas fa-plus"></i>
                            </a>
                            <ul class="dropdown-list">
                                <li><a class="dropdown-link" href="blog-list.html">Blog list</a></li>
                                <li><a class="dropdown-link" href="blog-details.html">blog details</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="tab-pane" id="author-menu">
                    <ul class="navbar-list">
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('dashboard.home') }}">Dashboard</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('dashboard.profile') }}">Profile</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('dashboard.ad.create') }}">Ad Post</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('dashboard.myAds') }}">My Ads</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('dashboard.settings') }}">Settings</a></li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="{{ route('dashboard.bookmark') }}">
                                <span>Bookmark</span>
                                <span>0</span>
                            </a>
                        </li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="message.html">
                                <span>Message</span>
                                <span>0</span>
                            </a>
                        </li>
                        <li class="navbar-item navbar-dropdown">
                            <a class="navbar-link" href="notification.html">
                                <span>Notification</span>
                                <span>0</span>
                            </a>
                        </li>
                       @if (auth()->user())
                       <li class="navbar-item"><a class="navbar-link" href="{{ route('auth.logout') }}">Logout</a></li>
                            @else
                            <li class="navbar-item"><a class="navbar-link" href="{{ route('auth') }}">Login</a></li>

                       @endif
                    </ul>
                </div>
            </div>

            <div class="sidebar-footer">
                <p>All Rights Reserved By <a href="#">Classicads</a></p>
                <p>Developed By <a href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
            </div>
        </div>
    </div>
</aside>
<!--=====================================
            SIDEBAR PART END
=======================================-->
