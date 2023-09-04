<template>
   <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" to="/dashoard">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title" style="font-size: 13px;">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" >
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <!-- <span class="menu-title">Product</span> -->
              <router-link to="/product" style="font-size: 13px;">Product</router-link>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" to="/dashoard">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <!-- <span class="menu-title">Category</span> -->
              <router-link to="/category" style="font-size: 13px;">Category</router-link>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" to="/dashoard">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <!-- <span class="menu-title">Settings</span> -->
              <router-link to="/settings" style="font-size: 13px;">Settings</router-link>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" to="/dashoard">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <!-- <span class="menu-title">Settings</span> -->
              <router-link to="/user" style="font-size: 13px;">User</router-link>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" to="/dashoard">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <!-- <span class="menu-title">Settings</span> -->
              <router-link to="/subscription" style="font-size: 13px;">Monthly SubsCription</router-link>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" to="/dashoard">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <!-- <span class="menu-title">Settings</span> -->
              <router-link to="/program" style="font-size: 13px;">Program</router-link>
            </a>
          </li>
        </ul>
      </nav>
</template>
<script>
export default {
    name:'sidebar'
}
</script>