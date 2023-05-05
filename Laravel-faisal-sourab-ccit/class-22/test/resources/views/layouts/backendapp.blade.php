
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>

    <link rel="icon" href="img/mini_logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/themefy_icon/themify-icons.css') }}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/niceselect/css/nice-select.css') }}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href=" {{ asset('backend/vendors/owl_carousel/css/owl.carousel.css') }}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/gijgo/gijgo.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendors/tagsinput/tagsinput.css') }}" />

    <!-- date picker -->
     <link rel="stylesheet" href="{{ asset('backend/vendors/datepicker/date-picker.css') }}" />

     <link rel="stylesheet" href="{{ asset('backend/')}}vendors/vectormap-home/vectormap-2.0.2.css" />
     
     <!-- scrollabe  -->
     <link rel="stylesheet" href="{{ asset('backend/vendors/scroll/scrollable.css')}}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatable/css/jquery.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatable/css/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('backend/vendors/datatable/css/buttons.dataTables.min.css')}}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/text_editor/summernote-bs4.css')}}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/morris/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/material_icon/material-icons.css')}}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('backend/css/colors/default.css" id="colorSkinCSS')}}">
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
 <nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index.html"><img src="img/logo.png" alt=""></a>
        <a class="small_logo" href="index.html"><img src="img/mini_logo.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a class="has-arrow" href="empty_page.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/dashboard.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>User Management </span>
                </div>
            </a>
            <ul>
                <li><a href="index_2.html">Default</a></li>
              <li><a href="index_3.html">Dark Sidebar</a></li>
              <li><a href="index.html">Light Sidebar</a></li>
            </ul>
        </li>
        <li class="">
            <a class="has-arrow" href="empty_page.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/2.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Application </span>
                </div>
            </a>
            <ul>
              <li><a href="editor.html">editor</a></li>
              <li><a href="mail_box.html">Mail Box</a></li>
              <li><a href="chat.html">Chat</a></li>
              <li><a href="faq.html">FAQ</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/3.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Pages</span>
            </div>
            </a>
            <ul>
              <li><a href="login.html">Login</a></li>
              <li><a href="resister.html">Register</a></li>
              <li><a href="error_400.html">Error 404</a></li>
              <li><a href="error_500.html">Error 500</a></li>
              <li><a href="forgot_pass.html">Forgot Password</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/4.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Admins</span>
            </div>
            </a>
            <ul>
              <li><a href="admin_list.html">Admin List</a></li>
              <li><a href="add_new_admin.html">Add New Admin</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/11.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Role & Permissions</span>
            </div>
            </a>
            <ul>
              <li><a href="module_setting.html">Module Setting</a></li>
              <li><a href="role_permissions.html">Role & Permissions</a></li>
            </ul>
        </li>
        <li class="">
            <a  href="navs.html" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/12.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Navs</span>
            </div>
            </a>
        </li>
        <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/5.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Users</span>
            </div>
            </a>
            <ul>
              <li><a href="user_list.html">Users List</a></li>
              <li><a href="add_new_user.html">Add New User</a></li>
            </ul>
        </li>
        <li>
            <a href="Builder.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/6.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Builder </span>
                </div>
            </a>
        </li>
        <li class="">
            <a  href="invoice.html" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/7.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Invoice</span>
            </div>
            </a>
        </li>
        <li class="">
            <a  class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/8.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>forms</span>
              </div>
            </a>
            <ul>
              <li><a href="Basic_Elements.html">Basic Elements</a></li>
              <li><a href="Groups.html">Groups</a></li>
              <li><a href="Max_Length.html">Max Length</a></li>
              <li><a href="Layouts.html">Layouts</a></li>
            </ul>
          </li>
          <li class="">
              <a href="Board.html" aria-expanded="false">
                  <div class="nav_icon_small">
                      <img src="img/menu-icon/9.svg" alt="">
                  </div>
                  <div class="nav_title">
                      <span>Board</span>
                  </div>
              </a>
          </li>
        <li class="">
            <a  href="calender.html" aria-expanded="false">
              <div class="nav_icon_small">
                <img src="img/menu-icon/10.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Calander</span>
            </div>
            </a>
        </li>
        <li class="">
            <a  class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/11.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>Themes</span>
              </div>
            </a>
            <ul>
              <li><a href="dark_sidebar.html">Dark Sidebar</a></li>
              <li><a href="light_sidebar.html">light Sidebar</a></li>
            </ul>
        </li>
        <li class="">
            <a  class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/12.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>General</span>
              </div>
            </a>
            <ul>
              <li><a href="Minimized_Aside.html">Minimized Aside</a></li>
              <li><a href="empty_page.html">Empty page</a></li>
              <li><a href="fixed_footer.html">Fixed Footer</a></li>
            </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/13.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Products</span>
            </div>
            </a>
            <ul>
              <li><a href="Products.html">Products</a></li>
              <li><a href="Product_Details.html">Product Details</a></li>
              <li><a href="Cart.html">Cart</a></li>
              <li><a href="Checkout.html">Checkout</a></li>
            </ul>
          </li>
        <li class="">
          <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/14.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Icons</span>
            </div>
          </a>
          <ul>
            <li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>
            <li><a href="themefy_icon.html">themefy icon</a></li>
          </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/15.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Animations</span>
                </div>
            </a>
            <ul>
                <li><a href="wow_animation.html">Animate</a></li>
                <li><a href="Scroll_Reveal.html">Scroll Reveal</a></li>
                <li><a href="tilt.html">Tilt Animation</a></li>
                
            </ul>
          </li>
          <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/16.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Components</span>
                </div>
            </a>
            <ul>
              <li><a href="accordion.html">Accordions</a></li>
              <li><a href="Scrollable.html">Scrollable</a></li>
              <li><a href="notification.html">Notifications</a></li>
              <li><a href="carousel.html">Carousel</a></li>
              <li><a href="Pagination.html">Pagination</a></li>
            </ul>
          </li>

          <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/17.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Table</span>
                </div>
            </a>
            <ul>
                <li><a href="data_table.html">Data Tables</a></li>
                <li><a href="bootstrap_table.html">Bootstrap</a></li>
            </ul>
          </li>
          <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/18.svg" alt="">
                </div>
                <div class="nav_title">
                    <span>Cards</span>
                </div>
            </a>
            <ul>
                <li><a href="basic_card.html">Basic Card</a></li>
                <li><a href="theme_card.html">Theme Card</a></li>
                <li><a href="dargable_card.html">Draggable Card</a></li>
            </ul>
          </li>


        <li class="">
          <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/19.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Charts</span>
            </div>
          </a>
          <ul>
            <li><a href="chartjs.html">ChartJS</a></li>
            <li><a href="apex_chart.html">Apex Charts</a></li>
            <li><a href="chart_sparkline.html">Chart sparkline</a></li>
            <li><a href="am_chart.html">am-charts</a></li>
            <li><a href="nvd3_charts.html">nvd3 charts.</a></li>
          </ul>
        </li>
        <li class="">
            <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
              <div class="nav_icon_small">
                  <img src="img/menu-icon/20.svg" alt="">
              </div>
              <div class="nav_title">
                  <span>UI Kits </span>
              </div>
            </a>
            <ul>
              <li><a href="colors.html">colors</a></li>
              <li><a href="Alerts.html">Alerts</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="modal.html">modal</a></li>
              <li><a href="dropdown.html">Droopdowns</a></li>
              <li><a href="Badges.html">Badges</a></li>
              <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
              <li><a href="color_plate.html">Color Plate</a></li>
              <li><a href="typography.html">Typography</a></li>
              <li><a href="datepicker.html">Date Picker</a></li>
            </ul>
          </li>

        <li class="">
          <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/21.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Widgets</span>
            </div>
          </a>
          <ul>
            <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
            <li><a href="profilebox.html">Profile Box</a></li>
          </ul>
        </li>
        

        <li class="">
          <a   class="has-arrow" href="empty_page.html#" aria-expanded="false">
            <div class="nav_icon_small">
                <img src="img/menu-icon/12.svg" alt="">
            </div>
            <div class="nav_title">
                <span>Maps</span>
            </div>
          </a>
          <ul>
            <li><a href="mapjs.html">Maps JS</a></li>
            <li><a href="vector_map.html">Vector Maps</a></li>
          </ul>
        </li>


      </ul>
</nav>
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="line_icon open_miniSide d-none d-lg-block">
                        <img src="img/line_img.png" alt="">
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                        <div class="search_inner">
                            <form action="empty_page.html#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                            </form>
                        </div>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="bell_notification_clicker" href="empty_page.html#"> <img src="img/icon/bell.svg" alt="">
                                    <span>2</span>
                                </a>
                                <!-- Menu_NOtification_Wrap  -->
                            <div class="Menu_NOtification_Wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="empty_page.html#"><img src="img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="empty_page.html#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="empty_page.html#"><img src="img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="empty_page.html#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="empty_page.html#"><img src="img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="empty_page.html#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="empty_page.html#"><img src="img/staf/2.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="empty_page.html#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="empty_page.html#"><img src="img/staf/4.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="empty_page.html#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="empty_page.html#"><img src="img/staf/3.png" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="empty_page.html#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                        <a href="empty_page.html#" class="btn_1">See More</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ Menu_NOtification_Wrap  -->
                            </li>
                            <li>
                                <a class="CHATBOX_open" href="empty_page.html#"> <img src="img/icon/msg.svg" alt=""> <span>2</span>  </a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="img/client_img.png" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Neurologist </p>
                                    <h5>Dr. Robar Smith</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="empty_page.html#">My Profile </a>
                                    <a href="empty_page.html#">Settings</a>
                                    <a href="empty_page.html#">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            @yield('content');


        </div>
    </div>

<!-- footer part -->
<div class="footer_part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by <a href="empty_page.html#"> <i class="ti-heart"></i> </a><a href="empty_page.html#"> DashboardPack</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- main content part end -->

<!-- ### CHAT_MESSAGE_BOX   ### -->

<div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
    <div class="MSEESAGE_CHATBOX_CLOSE">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white"/>
    </svg>

    </div>
        <h3>Chat with us</h3>
        <div class="Chat_Listed_member">
            <ul>
                <li>
                    <a href="empty_page.html#">
                        <div class="member_thumb">
                         <img src="img/staf/1.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="empty_page.html#">
                        <div class="member_thumb">
                         <img src="img/staf/2.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="empty_page.html#">
                        <div class="member_thumb">
                         <img src="img/staf/3.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="empty_page.html#">
                        <div class="member_thumb">
                         <img src="img/staf/4.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="empty_page.html#">
                        <div class="member_thumb">
                         <img src="img/staf/5.png" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="empty_page.html#">
                        <div class="member_thumb">
                            <div class="more_member_count">
                                <span>90+</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="CHAT_POPUP_BODY">
        <p class="mesaged_send_date">
        Sunday, 12 January
        </p>
    
    <div class="CHATING_SENDER">
        <div class="SMS_thumb">
            <img src="img/staf/1.png" alt="">
        </div>
        <div class="SEND_SMS_VIEW">
            <P>Hi! Welcome .
            How can I help you?</P>
        </div>
    </div>
    
    <div class="CHATING_SENDER CHATING_RECEIVEr">
        
        <div class="SEND_SMS_VIEW">
            <P>Hello</P>
        </div>
        <div class="SMS_thumb">
            <img src="img/staf/1.png" alt="">
        </div>
    </div>
    
    </div>
    <div class="CHAT_POPUP_BOTTOM">
        <div class="chat_input_box d-flex align-items-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Write your message" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn " type="button"> 
                        <!-- svg      -->
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.7821 3.21895C14.4908 -1.07281 7.50882 -1.07281 3.2183 3.21792C-1.07304 7.50864 -1.07263 14.4908 3.21872 18.7824C7.50882 23.0729 14.4908 23.0729 18.7817 18.7815C23.0726 14.4908 23.0724 7.50906 18.7821 3.21895ZM17.5813 17.5815C13.9525 21.2103 8.04773 21.2108 4.41871 17.5819C0.78907 13.9525 0.789485 8.04714 4.41871 4.41832C8.04752 0.789719 13.9521 0.789304 17.5817 4.41874C21.2105 8.04755 21.2101 13.9529 17.5813 17.5815ZM6.89503 8.02162C6.89503 7.31138 7.47107 6.73534 8.18131 6.73534C8.89135 6.73534 9.46739 7.31117 9.46739 8.02162C9.46739 8.73228 8.89135 9.30811 8.18131 9.30811C7.47107 9.30811 6.89503 8.73228 6.89503 8.02162ZM12.7274 8.02162C12.7274 7.31138 13.3038 6.73534 14.0141 6.73534C14.7241 6.73534 15.3002 7.31117 15.3002 8.02162C15.3002 8.73228 14.7243 9.30811 14.0141 9.30811C13.3038 9.30811 12.7274 8.73228 12.7274 8.02162ZM15.7683 13.2898C14.9712 15.1332 13.1043 16.3243 11.0126 16.3243C8.8758 16.3243 6.99792 15.1272 6.22834 13.2744C6.09642 12.9573 6.24681 12.593 6.56438 12.4611C6.64238 12.4289 6.72328 12.4136 6.80293 12.4136C7.04687 12.4136 7.27836 12.5577 7.37772 12.7973C7.95376 14.1842 9.38048 15.0799 11.0126 15.0799C12.6077 15.0799 14.0261 14.1836 14.626 12.7959C14.7625 12.4804 15.1288 12.335 15.4441 12.4717C15.7594 12.6084 15.9048 12.9745 15.7683 13.2898Z" fill="#707DB7"/>
                        </svg>

                        <!-- svg      -->
                    </button>
                    <button class="btn" type="button">
                         <!-- svg  -->
                         <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 0.289062C4.92455 0.289062 0 5.08402 0 10.9996C0 16.9152 4.92455 21.7101 11 21.7101C17.0755 21.7101 22 16.9145 22 10.9996C22 5.08472 17.0755 0.289062 11 0.289062ZM11 20.3713C5.68423 20.3713 1.375 16.1755 1.375 10.9996C1.375 5.82371 5.68423 1.62788 11 1.62788C16.3158 1.62788 20.625 5.82371 20.625 10.9996C20.625 16.1755 16.3158 20.3713 11 20.3713ZM15.125 10.3302H11.6875V6.98314C11.6875 6.61363 11.3795 6.31373 11 6.31373C10.6205 6.31373 10.3125 6.61363 10.3125 6.98314V10.3302H6.875C6.4955 10.3302 6.1875 10.6301 6.1875 10.9996C6.1875 11.3691 6.4955 11.669 6.875 11.669H10.3125V15.016C10.3125 15.3855 10.6205 15.6854 11 15.6854C11.3795 15.6854 11.6875 15.3855 11.6875 15.016V11.669H15.125C15.5045 11.669 15.8125 11.3691 15.8125 10.9996C15.8125 10.6301 15.5045 10.3302 15.125 10.3302Z" fill="#707DB7"/>
                        </svg>

                         <!-- svg  -->
                         <input type="file">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/### CHAT_MESSAGE_BOX  ### -->

<div id="back-top" style="display: none;">
    <a title="Go to Top" href="empty_page.html#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- footer  -->
<script src="{{ asset('backend/js/jquery-3.4.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{ asset('backend/js/popper.min.js')}}"></script>
<!-- bootstarp js -->
<script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
<!-- sidebar menu  -->
<script src="{{ asset('backend/js/metisMenu.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('backend/vendors/count_up/jquery.waypoints.min.js')}}"></script>
<!-- waypoints js -->
<script src="{{ asset('backend/vendors/chartlist/Chart.min.js')}}"></script>
<!-- counterup js -->
<script src="{{ asset('backend/vendors/count_up/jquery.counterup.min.js')}}"></script>

<!-- nice select -->
<script src="{{ asset('backend/vendors/niceselect/js/jquery.nice-select.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{ asset('backend/vendors/owl_carousel/js/owl.carousel.min.js')}}"></script>

<!-- responsive table -->
<script src="{{ asset('backend/vendors/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/jszip.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('backend/vendors/datatable/js/buttons.print.min.js')}}"></script>

<!-- datepicker  -->
<script src="{{ asset('backend/vendors/datepicker/datepicker.js')}}"></script>
<script src="{{ asset('backend/vendors/datepicker/datepicker.en.js')}}"></script>
<script src="{{ asset('backend/vendors/datepicker/datepicker.custom.js')}}"></script>

<script src="{{ asset('backend/js/chart.min.js')}}"></script>
<script src="{{ asset('backend/vendors/chartjs/roundedBar.min.js')}}"></script>

<!-- progressbar js -->
<script src="{{ asset('backend/vendors/progressbar/jquery.barfiller.js')}}"></script>
<!-- tag input -->
<script src="{{ asset('backend/vendors/tagsinput/tagsinput.js')}}"></script>
<!-- text editor js -->


<script src="{{ asset('backend/js/custom.js ')}}"></script>
</body>
</html>