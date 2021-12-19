<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="index.html" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                          class="hide-menu">Dashboard</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="pages-profile.html" aria-expanded="false">
                      <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
              </li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="table-basic.html" aria-expanded="false"><i class="mdi me-2 mdi-table"></i><span
                          class="hide-menu">Table</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="icon-material.html" aria-expanded="false"><i
                          class="mdi me-2 mdi-emoticon"></i><span class="hide-menu">Icon</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="map-google.html" aria-expanded="false"><i class="mdi me-2 mdi-earth"></i><span
                          class="hide-menu">Google Map</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="pages-blank.html" aria-expanded="false"><i
                          class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">Blank</span></a>
              </li>
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                      href="pages-error-404.html" aria-expanded="false"><i class="mdi me-2 mdi-help-circle"></i><span
                          class="hide-menu">Error 404</span></a>
              </li>
              <li class="text-center p-20 upgrade-btn">
                  <a href="https://www.wrappixel.com/templates/materialpro/"
                      class="btn btn-warning text-white mt-4" target="_blank">Upgrade to
                      Pro</a>
              </li>
          </ul>

      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
  <div class="sidebar-footer">
      <div class="row">
          <div class="col-4 link-wrap">
              <!-- item-->
              <a href="{{ route('profile.show') }}" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                      class="ti-settings"></i></a>
          </div>
          <div class="col-4 link-wrap">
              <!-- item-->
              <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                      class="mdi mdi-gmail"></i></a>
          </div>
          <div class="col-4 link-wrap">
              <!-- item-->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout" onclick="event.preventDefault();
                this.closest('form').submit();" class="dropdown-item preview-item">
                  
                  <i
                  class="mdi mdi-power"></i>
                </a>
              </form>
          </div>
      </div>
  </div>
</aside>