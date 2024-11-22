<x-app-layout>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
              </a>
              <!--
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="index.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="dashboards-crm.html" class="menu-link">
                    <div data-i18n="CRM">CRM</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-dashboard.html" class="menu-link">
                    <div data-i18n="eCommerce">eCommerce</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-logistics-dashboard.html" class="menu-link">
                    <div data-i18n="Logistics">Logistics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-academy-dashboard.html" class="menu-link">
                    <div data-i18n="Academy">Academy</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Layouts 
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                <div data-i18n="Layouts">Layouts</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-collapsed-menu.html" class="menu-link">
                    <div data-i18n="Collapsed menu">Collapsed menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-content-navbar.html" class="menu-link">
                    <div data-i18n="Content navbar">Content navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                    <div data-i18n="Content nav + Sidebar">Content nav + Sidebar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                    <div data-i18n="Horizontal">Horizontal</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">Without navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid">Fluid</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container">Container</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Front Pages -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-files"></i>
                <div data-i18n="Front Pages">Front Pages</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ url('landing-page') }}" class="menu-link">
                    <div data-i18n="Landing">Landing</div>
                  </a>
                </li>
                
                <li class="menu-item">
                  <a href="/about/1" class="menu-link" target="_blank">
                    <div data-i18n="about">About</div>
                  </a>
                </li>
                <!--
                <li class="menu-item">
                  <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                    <div data-i18n="Payment">Payment</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                    <div data-i18n="Checkout">Checkout</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                    <div data-i18n="Help Center">Help Center</div>
                  </a>
                </li>
-->
              </ul>
            </li>

            <!-- Apps & Pages 
            <li class="menu-header small">
              <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
            </li>
            <li class="menu-item">
              <a href="app-email.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Email">Email</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Chat">Chat</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Calendar">Calendar</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-kanban.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Kanban">Kanban</div>
              </a>
            </li>
            <!-- e-commerce-app menu start 
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-shopping-cart"></i>
                <div data-i18n="eCommerce">eCommerce</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-ecommerce-dashboard.html" class="menu-link">
                    <div data-i18n="Dashboard">Dashboard</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Products">Products</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-ecommerce-product-list.html" class="menu-link">
                        <div data-i18n="Product List">Product List</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-product-add.html" class="menu-link">
                        <div data-i18n="Add Product">Add Product</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-category-list.html" class="menu-link">
                        <div data-i18n="Category List">Category List</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Order">Order</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-ecommerce-order-list.html" class="menu-link">
                        <div data-i18n="Order List">Order List</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-order-details.html" class="menu-link">
                        <div data-i18n="Order Details">Order Details</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Customer">Customer</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-ecommerce-customer-all.html" class="menu-link">
                        <div data-i18n="All Customers">All Customers</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Customer Details">Customer Details</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                            <div data-i18n="Overview">Overview</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                            <div data-i18n="Security">Security</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                            <div data-i18n="Address & Billing">Address & Billing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                            <div data-i18n="Notifications">Notifications</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                    <div data-i18n="Manage Reviews">Manage Reviews</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-ecommerce-referral.html" class="menu-link">
                    <div data-i18n="Referrals">Referrals</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Settings">Settings</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-ecommerce-settings-detail.html" class="menu-link">
                        <div data-i18n="Store Details">Store Details</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-settings-payments.html" class="menu-link">
                        <div data-i18n="Payments">Payments</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                        <div data-i18n="Checkout">Checkout</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                        <div data-i18n="Shipping & Delivery">Shipping & Delivery</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-settings-locations.html" class="menu-link">
                        <div data-i18n="Locations">Locations</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- e-commerce-app menu end 
            <!-- Academy menu start 
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-book"></i>
                <div data-i18n="Academy">Academy</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-academy-dashboard.html" class="menu-link">
                    <div data-i18n="Dashboard">Dashboard</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-academy-course.html" class="menu-link">
                    <div data-i18n="My Course">My Course</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-academy-course-details.html" class="menu-link">
                    <div data-i18n="Course Details">Course Details</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Academy menu end 
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-truck"></i>
                <div data-i18n="Logistics">Logistics</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-logistics-dashboard.html" class="menu-link">
                    <div data-i18n="Dashboard">Dashboard</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-logistics-fleet.html" class="menu-link">
                    <div data-i18n="Fleet">Fleet</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div data-i18n="Invoice">Invoice</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-invoice-list.html" class="menu-link">
                    <div data-i18n="List">List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-preview.html" class="menu-link">
                    <div data-i18n="Preview">Preview</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-edit.html" class="menu-link">
                    <div data-i18n="Edit">Edit</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-invoice-add.html" class="menu-link">
                    <div data-i18n="Add">Add</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Users</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-user-list.html" class="menu-link">
                    <div data-i18n="List">List</div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="View">View</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="app-user-view-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-security.html" class="menu-link">
                        <div data-i18n="Security">Security</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">Billing & Plans</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="app-user-view-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Roles & Permissions">Roles & Permissions</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="app-access-roles.html" class="menu-link">
                    <div data-i18n="Roles">Roles</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="app-access-permission.html" class="menu-link">
                    <div data-i18n="Permission">Permission</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-file"></i>
                <div data-i18n="Pages">Pages</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="User Profile">User Profile</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-profile-user.html" class="menu-link">
                        <div data-i18n="Profile">Profile</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-teams.html" class="menu-link">
                        <div data-i18n="Teams">Teams</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-projects.html" class="menu-link">
                        <div data-i18n="Projects">Projects</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-profile-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Account Settings">Account Settings</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-security.html" class="menu-link">
                        <div data-i18n="Security">Security</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-billing.html" class="menu-link">
                        <div data-i18n="Billing & Plans">Billing & Plans</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="pages-faq.html" class="menu-link">
                    <div data-i18n="FAQ">FAQ</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-pricing.html" class="menu-link">
                    <div data-i18n="Pricing">Pricing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Misc">Misc</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="pages-misc-error.html" class="menu-link" target="_blank">
                        <div data-i18n="Error">Error</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                        <div data-i18n="Coming Soon">Coming Soon</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                        <div data-i18n="Not Authorized">Not Authorized</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-lock"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Login">Login</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-login-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Register">Register</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                        <div data-i18n="Multi-steps">Multi-steps</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Verify Email">Verify Email</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Reset Password">Reset Password</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Forgot Password">Forgot Password</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Two Steps">Two Steps</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                        <div data-i18n="Cover">Cover</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-forms"></i>
                <div data-i18n="Wizard Examples">Wizard Examples</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="wizard-ex-checkout.html" class="menu-link">
                    <div data-i18n="Checkout">Checkout</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-property-listing.html" class="menu-link">
                    <div data-i18n="Property Listing">Property Listing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="wizard-ex-create-deal.html" class="menu-link">
                    <div data-i18n="Create Deal">Create Deal</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="modal-examples.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-square"></i>
                <div data-i18n="Modal Examples">Modal Examples</div>
              </a>
            </li>

            <!-- Components 
            <li class="menu-header small">
              <span class="menu-header-text" data-i18n="Components">Components</span>
            </li>
            <!-- Cards
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="Cards">Cards</div>
                <div class="badge bg-primary rounded-pill ms-auto">5</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="cards-basic.html" class="menu-link">
                    <div data-i18n="Basic">Basic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-advance.html" class="menu-link">
                    <div data-i18n="Advance">Advance</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-statistics.html" class="menu-link">
                    <div data-i18n="Statistics">Statistics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-analytics.html" class="menu-link">
                    <div data-i18n="Analytics">Analytics</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="cards-actions.html" class="menu-link">
                    <div data-i18n="Actions">Actions</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- User interface 
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-color-swatch"></i>
                <div data-i18n="User interface">User interface</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">Accordion</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Alerts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Badges</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">Buttons</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">Carousel</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-collapse.html" class="menu-link">
                    <div data-i18n="Collapse">Collapse</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-dropdowns.html" class="menu-link">
                    <div data-i18n="Dropdowns">Dropdowns</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-footer.html" class="menu-link">
                    <div data-i18n="Footer">Footer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-list-groups.html" class="menu-link">
                    <div data-i18n="List Groups">List groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-modals.html" class="menu-link">
                    <div data-i18n="Modals">Modals</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-navbar.html" class="menu-link">
                    <div data-i18n="Navbar">Navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-offcanvas.html" class="menu-link">
                    <div data-i18n="Offcanvas">Offcanvas</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                    <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-progress.html" class="menu-link">
                    <div data-i18n="Progress">Progress</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-spinners.html" class="menu-link">
                    <div data-i18n="Spinners">Spinners</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tabs-pills.html" class="menu-link">
                    <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-toasts.html" class="menu-link">
                    <div data-i18n="Toasts">Toasts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tooltips-popovers.html" class="menu-link">
                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; Popovers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-typography.html" class="menu-link">
                    <div data-i18n="Typography">Typography</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Extended components
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-components"></i>
                <div data-i18n="Extended UI">Extended UI</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-avatar.html" class="menu-link">
                    <div data-i18n="Avatar">Avatar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-blockui.html" class="menu-link">
                    <div data-i18n="BlockUI">BlockUI</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-drag-and-drop.html" class="menu-link">
                    <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-media-player.html" class="menu-link">
                    <div data-i18n="Media Player">Media Player</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Perfect Scrollbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-star-ratings.html" class="menu-link">
                    <div data-i18n="Star Ratings">Star Ratings</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-sweetalert2.html" class="menu-link">
                    <div data-i18n="SweetAlert2">SweetAlert2</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Text Divider</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Timeline">Timeline</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="extended-ui-timeline-basic.html" class="menu-link">
                        <div data-i18n="Basic">Basic</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                        <div data-i18n="Fullscreen">Fullscreen</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-tour.html" class="menu-link">
                    <div data-i18n="Tour">Tour</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-treeview.html" class="menu-link">
                    <div data-i18n="Treeview">Treeview</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-misc.html" class="menu-link">
                    <div data-i18n="Miscellaneous">Miscellaneous</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Icons 
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-brand-tabler"></i>
                <div data-i18n="Icons">Icons</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="icons-tabler.html" class="menu-link">
                    <div data-i18n="Tabler">Tabler</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="icons-font-awesome.html" class="menu-link">
                    <div data-i18n="Fontawesome">Fontawesome</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Forms & Tables 
            <li class="menu-header small">
              <span class="menu-header-text" data-i18n="Forms & Tables">Forms &amp; Tables</span>
            </li>
            <!-- Forms 
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-toggle-left"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-custom-options.html" class="menu-link">
                    <div data-i18n="Custom Options">Custom Options</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-editors.html" class="menu-link">
                    <div data-i18n="Editors">Editors</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-file-upload.html" class="menu-link">
                    <div data-i18n="File Upload">File Upload</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-pickers.html" class="menu-link">
                    <div data-i18n="Pickers">Pickers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-selects.html" class="menu-link">
                    <div data-i18n="Select & Tags">Select &amp; Tags</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-sliders.html" class="menu-link">
                    <div data-i18n="Sliders">Sliders</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-switches.html" class="menu-link">
                    <div data-i18n="Switches">Switches</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-extras.html" class="menu-link">
                    <div data-i18n="Extras">Extras</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-navbar"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-sticky.html" class="menu-link">
                    <div data-i18n="Sticky Actions">Sticky Actions</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-text-wrap-disabled"></i>
                <div data-i18n="Form Wizard">Form Wizard</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-wizard-numbered.html" class="menu-link">
                    <div data-i18n="Numbered">Numbered</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-wizard-icons.html" class="menu-link">
                    <div data-i18n="Icons">Icons</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div data-i18n="Form Validation">Form Validation</div>
              </a>
            </li>
            <!-- Tables 
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div data-i18n="Datatables">Datatables</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="tables-datatables-basic.html" class="menu-link">
                    <div data-i18n="Basic">Basic</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-advanced.html" class="menu-link">
                    <div data-i18n="Advanced">Advanced</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-extensions.html" class="menu-link">
                    <div data-i18n="Extensions">Extensions</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Charts & Maps 
            <li class="menu-header small">
              <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-chart-pie"></i>
                <div data-i18n="Charts">Charts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="charts-apex.html" class="menu-link">
                    <div data-i18n="Apex Charts">Apex Charts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="charts-chartjs.html" class="menu-link">
                    <div data-i18n="ChartJS">ChartJS</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="maps-leaflet.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-map"></i>
                <div data-i18n="Leaflet Maps">Leaflet Maps</div>
              </a>
            </li>

            <!-- Misc 
            <li class="menu-header small">
              <span class="menu-header-text" data-i18n="Misc">Misc</span>
            </li>
            <li class="menu-item">
              <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-description"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
-->
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item navbar-search-wrapper mb-0">
                  <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                    <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
                    <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
                  </a>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="ti ti-language rounded-circle ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                        <span>English</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                        <span>French</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                        <span>Arabic</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                        <span>German</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <i class="ti ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                        <span class="align-middle"><i class="ti ti-sun ti-md me-3"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                        <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                        <span class="align-middle"
                          ><i class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span
                        >
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="ti ti-layout-grid-add ti-md"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Shortcuts</h6>
                        <a
                          href="javascript:void(0)"
                          class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          title="Add shortcuts"
                          ><i class="ti ti-plus text-heading"></i
                        ></a>
                      </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-calendar ti-26px text-heading"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link">Calendar</a>
                          <small>Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-file-dollar ti-26px text-heading"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                          <small>Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-user ti-26px text-heading"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link">User App</a>
                          <small>Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-users ti-26px text-heading"></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                          <small>Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
                          </span>
                          <a href="index.html" class="stretched-link">Dashboard</a>
                          <small>User Dashboard</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-settings ti-26px text-heading"></i>
                          </span>
                          <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                          <small>Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-help ti-26px text-heading"></i>
                          </span>
                          <a href="pages-faq.html" class="stretched-link">FAQs</a>
                          <small>FAQs & Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                            <i class="ti ti-square ti-26px text-heading"></i>
                          </span>
                          <a href="modal-examples.html" class="stretched-link">Modals</a>
                          <small>Useful Popups</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                  <a
                    class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false">
                    <span class="position-relative">
                      <i class="ti ti-bell ti-md"></i>
                      <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div class="dropdown-header d-flex align-items-center py-3">
                        <h6 class="mb-0 me-auto">Notification</h6>
                        <div class="d-flex align-items-center h6 mb-0">
                          <span class="badge bg-label-primary me-2">8 New</span>
                          <a
                            href="javascript:void(0)"
                            class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Mark all as read"
                            ><i class="ti ti-mail-opened text-heading"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown-notifications-list scrollable-container">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                              <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Charles Franklin</h6>
                              <small class="mb-1 d-block text-body">Accepted your connection</small>
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/2.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">New Message ✉️</h6>
                              <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-shopping-cart"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                              <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/9.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Application has been approved 🚀</h6>
                              <small class="mb-1 d-block text-body"
                                >Your ABC project application has been approved.</small
                              >
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="ti ti-chart-pie"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Monthly report is generated</h6>
                              <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/5.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">Send connection request</h6>
                              <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img src="../../assets/img/avatars/6.png" alt class="rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">New message from Jane</h6>
                              <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="ti ti-alert-triangle"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="mb-1 small">CPU is running high</h6>
                              <small class="mb-1 d-block text-body"
                                >CPU Utilization Percent is currently at 88.63%,</small
                              >
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div class="flex-shrink-0 dropdown-notifications-actions">
                              <a href="javascript:void(0)" class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a href="javascript:void(0)" class="dropdown-notifications-archive"
                                ><span class="ti ti-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="border-top">
                      <div class="d-grid p-4">
                        <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                          <small class="align-middle">View all notifications</small>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img src="../../assets/img/avatars/1.png" alt class="rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i
                          ><span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center"
                            >4</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                          <small class="align-middle btn btn-sm btn-danger d-flex text-white">
                              <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="text-white lh-lg">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                            <i class="ti ti-logout ms-2 ti-14px"></i>
                          </small>
                          
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="ti ti-x search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
              <div class="container-fluid mt-5">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="card text-center">
                          <div class="card-header">
                          Edit  Landing page 
                          </div>
                          <div class="card-body">
                            <nav>
                              <div class="nav nav-tabs overflow-scroll" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-paragraph-tab" data-bs-toggle="tab" data-bs-target="#nav-paragraph" type="button" role="tab" aria-controls="nav-paragraph" aria-selected="false"><small>Nav Paragraph</small></button>
                                <button class="nav-link" id="quote-form-tab" data-bs-toggle="tab" data-bs-target="#quote-form" type="button" role="tab" aria-controls="quote-form" aria-selected="false"><small>Quote Form</small></button>
                                <button class="nav-link" id="carrousel-tab" data-bs-toggle="tab" data-bs-target="#carrousel" type="button" role="tab" aria-controls="carrousel" aria-selected="false"><small>Main Carrousel</small></button>
                                <button class="nav-link" id="three-icon-boxes-tab" data-bs-toggle="tab" data-bs-target="#three-icon-boxes" type="button" role="tab" aria-controls="three-icon-boxes" aria-selected="false"><small>Status</small></button>
                                <button class="nav-link" id="three-icon-images-boxes-tab" data-bs-toggle="tab" data-bs-target="#three-icon-images-boxes" type="button" role="tab" aria-controls="three-icon-images-boxes" aria-selected="false"><small>Best Service</small></button>
                                <button class="nav-link" id="image-tabs-text-tab" data-bs-toggle="tab" data-bs-target="#image-tabs-text" type="button" role="tab" aria-controls="image-tabs-text" aria-selected="false"><small>Our service</small></button>
                                <button class="nav-link" id="background-images+text-tab" data-bs-toggle="tab" data-bs-target="#background-images+text" type="button" role="tab" aria-controls="background-images+text" aria-selected="false"><small>About Now</small></button>
                                <button class="nav-link" id="three-images+six-icons+three-paragraphs-tab" data-bs-toggle="tab" data-bs-target="#three-images+six-icons+three-paragraphs" type="button" role="tab" aria-controls="three-images+six-icons+three-paragraphs" aria-selected="false"><small>Choose us</small></button>
                                <button class="nav-link" id="three-dark-bg-boxes-tab" data-bs-toggle="tab" data-bs-target="#three-dark-bg-boxes" type="button" role="tab" aria-controls="three-dark-bg-boxes" aria-selected="false"><small>Testimonial</small></button>
                                <button class="nav-link" id="four-images+collapse-box-tab" data-bs-toggle="tab" data-bs-target="#four-images+collapse-box" type="button" role="tab" aria-controls="four-images+collapse-box" aria-selected="false"><small>Collapse</small></button>
                                <button class="nav-link" id="call-now-image-box-tab" data-bs-toggle="tab" data-bs-target="#call-now-image-box" type="button" role="tab" aria-controls="call-now-image-box" aria-selected="false"><small>Call-now</small></button>
                                <button class="nav-link" id="watch-video+background-image-tab" data-bs-toggle="tab" data-bs-target="#watch-video+background-image" type="button" role="tab" aria-controls="watch-video+background-image" aria-selected="false"><small>Watch video</small></button>
                                <button class="nav-link" id="background-image+form-tab" data-bs-toggle="tab" data-bs-target="#background-image+form" type="button" role="tab" aria-controls="background-image+form" aria-selected="false"><small>Contact Us</small></button>                                
                                <!--
                                <button class="nav-link" id="footer-tab" data-bs-toggle="tab" data-bs-target="#footer" type="button" role="tab" aria-controls="footer" aria-selected="false"><small>footer</small></button>
                                -->
                              </div>
                            </nav>
                            <div class="tab-content mt-5" id="nav-tabContent">
                                <!-- first paragraph -->
                                <div class="tab-pane fade show active" id="nav-paragraph" role="tabpanel" aria-labelledby="nav-paragraph-tab">
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Navbar Paragraph</label>
                                        <input type="text" class="form-control" name="nav-paragraph" id="validationCustom01" value="{{ $main_screen[0]['nav-paragraph'] }}" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form0">Submit</button>
                                      </div>
                                    </form>
                                </div>
                                 <!-- Quote form -->
                                <div class="tab-pane fade" id="quote-form" role="tabpanel" aria-labelledby="quote-form-tab">
                                    <form class="row g-3" action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab title 1</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-title-1'] }}" name="quote-form-tab-title-1" required>
                                        </div>
                                        <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab title 2</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-title-2'] }}" name="quote-form-tab-title-2"  required>
                                        </div>
                                        <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 H2</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-2-h2'] }}" name="quote-form-tab-2-h2" required>
                                        </div>
                                        <div class="col-12 mt-5">
                                          <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 p</label>
                                          <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['quote-form-tab-2-p'] }}" name="quote-form-tab-2-p" required>
                                        </div>
                                        
                                        <div class="col-12">
                                          <button type="submit" class="btn btn-primary w-100" name="form1">Submit</button>
                                        </div>
                                    </form>  
                                </div>
                                <!-- carrousel-->
                                <div class="tab-pane fade" id="carrousel" role="tabpanel" aria-labelledby="carrousel-tab">
                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                        <div class="card">
                                          <img src="{{ $main_screen[0]['carrousel-bg-img-path'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                          <div class="card-body">                                              
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path">                        
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h5'] }}" name="carrousel-h5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2'] }}" name="carrousel-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-p'] }}" name="carrousel-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-a-1'] }}" name="carrousel-a-1" required>
                                      </div>


                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                        <div class="card">
                                          <img src="{{ $main_screen[0]['carrousel-bg-img-path-1'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                          <div class="card-body">                                              
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path-1">                        
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h5-1'] }}" name="carrousel-h5-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2-1'] }}" name="carrousel-h2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-p-1'] }}" name="carrousel-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-a-1-1'] }}" name="carrousel-a-1-1" required>
                                      </div>


                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                        <div class="card">
                                          <img src="{{ $main_screen[0]['carrousel-bg-img-path-2'] }}" class="img-fluid" alt="..." style="max-height:885px;max-width:1920px;">
                                          <div class="card-body">                                              
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path-2">                        
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h5-2'] }}" name="carrousel-h5-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-h2-2'] }}" name="carrousel-h2-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-p-2'] }}" name="carrousel-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $main_screen[0]['carrousel-a-1-2'] }}" name="carrousel-a-1-2" required>
                                      </div>

                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form2">Submit</button>
                                      </div>
                                    </form>                                
                                </div>
                                <!-- Three Icon Boxes-->
                                <div class="tab-pane fade" id="three-icon-boxes" role="tabpanel" aria-labelledby="three-icon-boxes-tab">                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-h6'] }}" name="company-status-h6" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-h3'] }}" name="company-status-h3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-1h4'] }}" name="company-status-1h4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-1p'] }}" name="company-status-1p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">2 H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-2h4'] }}" name="company-status-2h4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">2 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-2p'] }}" name="company-status-2p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">4 H4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-3h4'] }}" name="company-status-3h4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">3 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $company_status[0]['company-status-3p'] }}" name="company-status-3p" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form3">Submit</button>
                                      </div>
                                    </form>
                                
                                </div>
                                <!-- Three Icon Images Boxes-->
                                <div class="tab-pane fade" id="three-icon-images-boxes" role="tabpanel" aria-labelledby="three-icon-images-boxes-tab">
                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-h6-1'] }}" name="best-service-h6-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-h3-1'] }}" name="best-service-h3-1" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $best_service[0]['best-service-img-path-1'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path-1">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-1'] }}" name="best-service-a-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-1'] }}" name="best-service-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Navbar Paragraph</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $best_service[0]['best-service-img-path-2'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-2">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-2'] }}" name="best-service-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-2'] }}" name="best-service-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Navbar Paragraph</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $best_service[0]['best-service-img-path-3'] }}" class="img-fluid" alt="..." style="max-height:239px;max-width:370px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-2">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-a-3'] }}" name="best-service-a-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $best_service[0]['best-service-p-3'] }}" name="best-service-p-3" required>
                                      </div>
                                      <!--
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Navbar Paragraph</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $best_service[0]['best-service-img-path-3'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="best-service-img-path-3">                        
                                            </div>
                                          </div>
                                      </div>
                                      -->
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form4">Submit</button>
                                      </div>
                                    </form>
                                
                                </div>
                                <!-- Three Icon Images Boxes-->
                                <div class="tab-pane fade" id="image-tabs-text" role="tabpanel" aria-labelledby="image-tabs-text-tab">
                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-h6-1'] }}" name="our-services-h6-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 Part1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-h2-1'] }}" name="our-services-h2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 Part2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-h2-2'] }}" name="our-services-h2-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $our_service_1[0]['our-services-bg-img-path-1'] }}" class="img-fluid" alt="..." style="max-height:515px;max-width:1920px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="our-services-bg-img-path-1">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1'] }}" name="our-services-tab-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 H2 </label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-h2'] }}" name="our-services-tab-1-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-p'] }}" name="our-services-tab-1-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-p-1'] }}" name="our-services-tab-1-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-1'] }}" name="our-services-tab-1-li-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-2'] }}" name="our-services-tab-1-li-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 li 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-li-3'] }}" name="our-services-tab-1-li-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 p 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-p-2'] }}" name="our-services-tab-1-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 a 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_1[0]['our-services-tab-1-a-2'] }}" name="our-services-tab-1-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2'] }}" name="our-services-tab-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 H2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-h2'] }}" name="our-services-tab-2-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 2 p</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-p'] }}" name="our-services-tab-2-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 1 2 p 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-p-1'] }}" name="our-services-tab-2-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 li 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-1'] }}" name="our-services-tab-2-li-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 li 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-2'] }}" name="our-services-tab-2-li-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 li 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-li-3'] }}" name="our-services-tab-2-li-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 p 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-p-2'] }}" name="our-services-tab-2-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Tab 2 a 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $our_service_2[0]['our-services-tab-2-a'] }}" name="our-services-tab-2-a" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form5">Submit</button>
                                      </div>
                                    </form>
                                
                                </div>
                                 <!-- background-images+text -->
                                 <div class="tab-pane fade" id="background-images+text" role="tabpanel" aria-labelledby="background-images+text-tab">
                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')  
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-h6'] }}" name="about-now-h6" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-h3'] }}" name="about-now-h3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-p'] }}" name="about-now-p" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $about_now[0]['about-now-1-bg-img-path'] }}" class="img-fluid" alt="..." style="max-width:1026px;max-height:798px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $about_now[0]['about-now-2-img-path'] }}" class="img-fluid" alt="..." style="max-width:1026px;max-height:798px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-1'] }}" name="about-now-li-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-2'] }}" name="about-now-li-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-3'] }}" name="about-now-li-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-4'] }}" name="about-now-li-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-5'] }}" name="about-now-li-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">Li 6</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $about_now[0]['about-now-li-6'] }}" name="about-now-li-6" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form6">Submit</button>
                                      </div>
                                    </form>
                                </div>
                                <!-- three-images+six-icons+three-paragraphs -->
                                <div class="tab-pane fade" id="three-images+six-icons+three-paragraphs" role="tabpanel" aria-labelledby="three-images+six-icons+three-paragraphs-tab">
                                  <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT') 
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-p-1'] }}" name="choose-us-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h3'] }}" name="choose-us-h3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-p-2'] }}" name="choose-us-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4-1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h4-1'] }}" name="choose-us-h4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4-2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h4-2'] }}" name="choose-us-h4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4-3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $choose_us[0]['choose-us-h4-3'] }}" name="choose-us-h4-3" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $choose_us[0]['choose-us-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $choose_us[0]['choose-us-img-1'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img-1">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $choose_us[0]['choose-us-img-2'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img-2">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $choose_us[0]['choose-us-img-3'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="choose-us-img-3">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form">Submit</button>
                                      </div>
                                    </form>                               
                                </div>
                                <!-- three-images+six-icons+three-paragraphs -->
                                <div class="tab-pane fade" id="three-dark-bg-boxes" role="tabpanel" aria-labelledby="three-dark-bg-boxes-tab">
                                    
                                <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT') 
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P strong</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-strong'] }}" name="testimonial-say-p-strong" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h2'] }}" name="testimonial-say-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p i 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-1'] }}" name="testimonial-say-p-i-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p i 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-1-1'] }}" name="testimonial-say-p-i-1-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h3-1'] }}" name="testimonial-say-h3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H5 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h5-1'] }}" name="testimonial-say-h5-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P i 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-2'] }}" name="testimonial-say-p-i-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">p i 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-2-1'] }}" name="testimonial-say-p-i-2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h3-2'] }}" name="testimonial-say-h3-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H5 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h5-2'] }}" name="testimonial-say-h5-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P I 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-3'] }}" name="testimonial-say-p-i-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P I 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-p-i-3-1'] }}" name="testimonial-say-p-i-3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h3-3'] }}" name="testimonial-say-h3-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H5 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $testimonial_say[0]['testimonial-say-h5-3'] }}" name="testimonial-say-h5-3" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form8">Submit</button>
                                      </div>
                                    </form>
                                
                                </div>
                                <!-- four-images+collapse-box -->
                                <div class="tab-pane fade" id="four-images+collapse-box" role="tabpanel" aria-labelledby="four-images+collapse-box-tab">                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $collapse[0]['collapse-bg-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="carrousel-bg-img-path">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h3-1'] }}" name="collapse-h3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-p-1'] }}" name="collapse-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h3-2'] }}" name="collapse-h3-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-p-2'] }}"  name="collapse-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H3 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h3-3'] }}" name="collapse-h3-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-p-3'] }}" name="collapse-p-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-1'] }}" name="collapse-div-p-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-1-1'] }}" name="collapse-div-p-1-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-1-2'] }}" name="collapse-div-p-1-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-1'] }}" name="collapse-h4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-2'] }}" name="collapse-div-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-2-1'] }}" name="collapse-div-p-2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-2-2'] }}" name="collapse-div-p-2-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-2'] }}" name="collapse-h4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-3'] }}" name="collapse-div-p-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-3-1'] }}" name="collapse-div-p-3-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-3-2'] }}" name="collapse-div-p-3-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-3'] }}" name="collapse-h4-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-3'] }}" name="collapse-h4-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-4'] }}" name="collapse-h4-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-4'] }}" name="collapse-div-p-4" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-4-1'] }}" name="collapse-div-p-4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P 4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-4-2'] }}" name="collapse-div-p-4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-h4-5'] }}" name="collapse-h4-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-5'] }}" name="collapse-div-p-5" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-5-1'] }}" name="collapse-div-p-5-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">DIV P5</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $collapse[0]['collapse-div-p-5-2'] }}" name="collapse-div-p-5-2" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form9">Submit</button>
                                      </div>
                                    </form>
                                
                                </div>
                                 <!-- CALL US -->
                                <div class="tab-pane fade" id="call-now-image-box" role="tabpanel" aria-labelledby="call-now-image-box-tab">
                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $call_now[0]['call-now-bg-image-1-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="call-now-bg-image-1-path" name="call-now-bg-image-1-path">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $call_now[0]['call-now-bg-image-2-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="call-now-bg-image-2-path">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $call_now[0]['call-now-bg-image-3-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="call-now-bg-image-3-path">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $call_now[0]['call-now-bg-image-4-path'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="call-now-bg-image-4-path">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-h4-1'] }}" name="call-now-h4-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">PA 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p-a-1'] }}" name="call-now-p-a-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">PA 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p-a-2'] }}" name="call-now-p-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H4 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-h4-2'] }}" name="call-now-h4-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">PA 3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p-a-3'] }}" name="call-now-p-a-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-a-3'] }}" name="call-now-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-p'] }}" name="call-now-p" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-a-2'] }}" name="call-now-a-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">IMG4</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-bg-image-4-path'] }}" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">A3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $call_now[0]['call-now-a-3'] }}" name="call-now-a-3" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form10">Submit</button>
                                      </div>
                                    </form>
                                
                                </div>
                                <!-- WATCH VIDEO -->
                                <div class="tab-pane fade" id="watch-video+background-image" role="tabpanel" aria-labelledby="watch-video+background-image-tab">
                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P strong 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-strong-1'] }}" name="watch-video-p-strong-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-h2'] }}" name="watch-video-h2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-2'] }}" name="watch-video-p-2" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-2-1'] }}" name="watch-video-p-2-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-3'] }}" name="watch-video-p-3" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">P3</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['watch-video-p-3-1'] }}" name="watch-video-p-3-1" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $video_contact[0]['watch-video-bg-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="watch-video-bg-img">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form11">Submit</button>
                                      </div>
                                    </form>
                                
                                </div>
                                <!-- background-image+form -->
                                <div class="tab-pane fade" id="background-image+form" role="tabpanel" aria-labelledby="background-image+form-tab">                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 1</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['contact-us-h2-part-1'] }}" name="contact-us-h2-part-1" required>
                                      </div>
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label" style="float:left;">H2 2</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="{{ $video_contact[0]['contact-us-h2-part-2'] }}" name="contact-us-h2-part-2" required>
                                      </div>
                                      <div class="col-12 mt-5 form-group">   
                                        <div class="card-header">
                                          <label for="validationCustom01" class="form-label" style="float:left;margin-left:-22px;">Background Image</label>
                                        </div>                                       
                                          <div class="card">
                                            <img src="{{ $video_contact[0]['contact-us-bg-img'] }}" class="img-fluid" alt="..." style="max-height:150px;">
                                            <div class="card-body">                                              
                                              <label for="exampleFormControlFile1">Example file input</label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="contact-us-bg-img">                        
                                            </div>
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="form12">Submit</button>
                                      </div>
                                    </form>                                
                                </div>
                                
                                <!-- footer 
                                <div class="tab-pane fade" id="footer" role="tabpanel" aria-labelledby="footer">
                                    
                                    <form class="row g-3 needs-validation" novalidate action="{{ route('landing-page.update', 1) }}" method="post">
                                      @csrf
                                      @method('PUT')
                                      <div class="col-12 mt-5">
                                        <label for="validationCustom01" class="form-label">Navbar Paragraph</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                      </div>
                                      <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Submit form</button>
                                      </div>
                                    </form>
                                
                                </div>
                                -->
                            </div>
                          </div>
                          <div class="card-footer text-muted mt-5"> </div>
                        </div>    
                      </div>
                </div>
              </div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
</x-app-layout>
