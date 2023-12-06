<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar" style="overflow:hidden;overflow-y: scroll;height:100;">
    <ul class="nav">
      
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="menu-icon mdi mdi-television"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('add_user') || request()->is('user_list') ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="" aria-controls="basic-ui">
          <i class="fa-solid fa-user pe-4"></i>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="basic-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item ">
              <a class="nav-link" href="{{route('add_user')}}">Add User
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('user_list')}}">User List
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ request()->is('royal_mattress') || request()->is('home_mattress') || request()->is('hospital_mattress') || request()->is('hotel_mattress') ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#basic" aria-expanded="" aria-controls="basic">
          <i class="fa-solid fa-layer-group pe-4"></i>
          <span class="menu-title">Mattresses</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item ">
              <a class="nav-link" href="{{route('royal_mattress')}}">Royal Mattress
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('home_mattress')}}">Home Mattress
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('hospital_mattress')}}">Hospital Mattress
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('hotel_mattress')}}">Hotel Mattress
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ request()->is('adm_pillows') || request()->is('adm_protector') || request()->is('adm_topper') ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#esential" aria-expanded="" aria-controls="esential">
          <i class="fa-solid fa-cubes-stacked pe-4"></i>
          <span class="menu-title">Sleep Essential</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="esential">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item ">
              <a class="nav-link" href="{{route('adm_pillows')}}">Pillows
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('adm_protector')}}">Protector
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('adm_topper')}}">Topper 
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ request()->is('master_size') || request()->is('unit') || request()->is('inch_size') || request()->is('mm_size') ||
      request()->is('thickness') || request()->is('size_pillows') || request()->is('size_pillows_mm') || request()->is('size_protector')  ? 'active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#Size" aria-expanded="" aria-controls="Size">
          <i class="fa-solid fa-maximize pe-4"></i>
          <span class="menu-title">Size</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Size">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item ">
              <a class="nav-link" href="{{route('master_size')}}">Master Size
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('unit')}}">Unit
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="{{route('inch_size')}}">Size In Inches
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('mm_size')}}">Size In mm 
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('thickness')}}">Thickness 
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('size_pillows')}}">Pillow Size Inches 
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('size_pillows_mm')}}">Pillow Size MM 
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('size_protector')}}">Protector Size 
                <i class="fa-solid fa-arrow-right ms-2 "></i></a>
            </li>
          </ul>
        </div>
      </li>
  
      <li class="nav-item  {{ request()->is('orders') ? 'active' : '' }}">
        <a class="nav-link" href="/orders">
            <i class="fa-solid fa-cart-shopping pe-4"></i>
          <span class="menu-title">Orders</span>
        </a>
      </li>
  
  
      <li class="nav-item {{ request()->is('clients') ? 'active' : '' }}">
        <a class="nav-link" href="/clients">
            <i class="fa-solid fa-users pe-4"></i>
          <span class="menu-title">Clients</span>
        </a>
      </li>
  
  
      <li class="nav-item {{ request()->is('adm_contact') ? 'active' : '' }}">
        <a class="nav-link" href="/adm_contact">
            <i class="fa-solid fa-address-book pe-4"></i>
          <span class="menu-title">Contact List</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="/admin_logout">
          <i class="fa-solid fa-arrow-right-from-bracket pe-4"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
      
    </ul>
  </nav>