<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <!--=====================================
                    META-TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->
        <meta name="author" content="Mironcoder">
        <meta name="email" content="mironcoder@gmail.com">
        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="name" content="Classicads">
        <meta name="type" content="Classified Advertising">
        <meta name="title" content="Classicads - Classified Ads HTML Template">
        <meta name="keywords" content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- FOR WEBPAGE TITLE -->
        <title>Message - Classicads</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="{{ asset('assets/endUser') }}/images/favicon.png">

        <!-- FONTS-->
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/fonts/font-awesome/fontawesome.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/vendor/nice-select.min.css">
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/vendor/emojionearea.min.css">
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/vendor/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/main.css">
        <link rel="stylesheet" href="{{ asset('assets/endUser') }}/css/custom/message.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-left">
                        <button type="button" class="header-widget sidebar-btn">
                            <i class="fas fa-align-right"></i>
                        </button>
                        <a href="index.html" class="header-logo">
                            <img src="{{ asset('assets/endUser') }}/images/logo.png" alt="logo">
                        </a>
                        <a href="user-form.html" class="header-widget header-user">
                            <img src="{{ asset('assets/endUser') }}/images/user.png" alt="user">
                            <span>join me</span>
                        </a>
                        <button type="button" class="header-widget search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <form class="header-form" >
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
                        <a href="ad-post.html" class="btn btn-inline post-btn">
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
                                <li class="navbar-item"><a class="navbar-link" href="dashboard.html">Dashboard</a></li>
                                <li class="navbar-item"><a class="navbar-link" href="profile.html">Profile</a></li>
                                <li class="navbar-item"><a class="navbar-link" href="ad-post.html">Ad Post</a></li>
                                <li class="navbar-item"><a class="navbar-link" href="my-ads.html">My Ads</a></li>
                                <li class="navbar-item"><a class="navbar-link" href="setting.html">Settings</a></li>
                                <li class="navbar-item navbar-dropdown">
                                    <a class="navbar-link" href="bookmark.html">
                                        <span>bookmark</span>
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
                                <li class="navbar-item"><a class="navbar-link" href="user-form.html">Logout</a></li>
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


        <!--=====================================
                    MESSAGE PART START
        =======================================-->
        <section class="message-part">
            <div class="container">
                <div class="row">
                  @forelse ( $users as $user )
                    <div class="col-lg-12 col-xl-12">
                        <div class="message-inbox">
                            <div class="inbox-header">
                                <div class="inbox-header-profile">
                                    <a class="inbox-header-img" href="#">
                                        <img src="{{ asset('assets/endUser') }}/images/avatar/01.jpg" alt="avatar">
                                    </a>
                                    <div class="inbox-header-text">
                                        <h5><a href="#">{{ $user->fname }}</a></h5>
                                        <span>active now</span>
                                    </div>
                                </div>
                                <ul class="inbox-header-list">
                                    <li><a href="#" title="Delete" class="fas fa-trash-alt"></a></li>
                                    <li><a href="#" title="Report" class="fas fa-flag"></a></li>
                                    <li><a href="#" title="Block" class="fas fa-shield-alt"></a></li>
                                </ul>
                            </div>
                            <ul class="inbox-chat-list">
                               @forelse ($messages as $message)

                               @if ($message->sender === auth()->user()->id)

                                <li class="inbox-chat-item my-chat">
                                    <div class="inbox-chat-img">
                                        <img src="{{ asset('assets/endUser') }}/images/avatar/02.jpg" alt="avatar">
                                    </div>
                                    <div class="inbox-chat-content">
                                        <div class="inbox-chat-text">
                                            <p>{{ $message->message }}</p>
                                            <div class="inbox-chat-action">
                                                <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                                <a href="#" title="Forward" class="fas fa-forward"></a>
                                            </div>
                                        </div>
                                        <small class="inbox-chat-time">{{ $message->created_at }}</small>
                                    </div>
                                </li>

                               @else

                               <li class="inbox-chat-item">
                                   <div class="inbox-chat-img">
                                       <img src="{{ $user->image }}" alt="avatar">
                                   </div>
                                   <div class="inbox-chat-content">

                                       <div class="inbox-chat-text">
                                           <p>{{ $message->message }}</p>
                                           <div class="inbox-chat-action">
                                               <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                               <a href="#" title="Forward" class="fas fa-forward"></a>
                                           </div>
                                       </div>
                                       <small class="inbox-chat-time">{{ $message->created_at }}</small>
                                   </div>
                               </li>

                               @endif

                               @empty
                                    <h4>No Messages</h4>
                               @endforelse
                            </ul>
                           {{-- <form id="myForm" method="post"> --}}
                            {{-- @csrf --}}

                            {{-- {{  }} --}}

                            <div class="inbox-chat-form">
                                <textarea placeholder="Type a Message" id="chat-emoji" name="message"></textarea>
                                <button type="submit" onClick="sendMessage()" id="btnSendMessage"><i class="fas fa-paper-plane" ></i></button>
                            </div>
                           {{-- </form> --}}
                        </div>
                    </div>
                  @empty
                    <h4>No User</h4>
                  @endforelse
                </div>
            </div>
        </section>
        <!--=====================================
                    MESSAGE PART END
        =======================================-->


        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="{{ asset('assets/endUser') }}/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/vendor/popper.min.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/vendor/bootstrap.min.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/vendor/nice-select.min.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/vendor/emojionearea.min.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/vendor/nicescroll.min.js"></script>

        <!-- CUSTOM -->
        <script src="{{ asset('assets/endUser') }}/js/custom/nice-select.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/custom/nicescroll.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/custom/emojionearea.js"></script>
        <script src="{{ asset('assets/endUser') }}/js/custom/main.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!--=====================================
                    JS LINK PART END
        =======================================-->



        <script>
            const messageVal = document.getElementById("chat-emoji");
            const btnSendMessage = document.getElementById("btnSendMessage");
            const inbox_chat_list = document.querySelector(".inbox-chat-list");

            const sendMessage = () => {

                $.ajax({
                    type:'POST',
                    url:'{{ route("dashboard.message.store",request()->id) }}',
                    data:{
                        '_token': '{{ csrf_token() }}',
                        'message':messageVal.value
                    },
                    success:function(data) {
                        messageVal.value = "";
                        var todo = `
                                <li class="inbox-chat-item my-chat">
                                    <div class="inbox-chat-img">
                                        <img src="{{ asset('assets/endUser') }}/images/avatar/02.jpg" alt="avatar">
                                    </div>
                                    <div class="inbox-chat-content">
                                        <div class="inbox-chat-text">
                                            <p>${data.message}</p>
                                            <div class="inbox-chat-action">
                                                <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                                <a href="#" title="Forward" class="fas fa-forward"></a>
                                            </div>
                                        </div>
                                        <small class="inbox-chat-time">${data.created_at}</small>
                                    </div>
                                </li>
                        `;
                        jQuery('.inbox-chat-list').append(todo);
                    },
                    error:function(err) {
                        console.log("err");
                    }
                });

            }


        </script>
    </body>
</html>
