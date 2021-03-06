     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navigation-menu w-nav-menu">
         <div class="container w-container">
            <a class="navbar-brand site-name-link w-nav-brand site-name" href="/">Lone wolf</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                     <a class="nav-link w-nav-link" href="/">Home
                     </a>
                  </li>
                   <li class="nav-item {{ Request::is('shop') ? 'active' : '' }}">
                     <a class="nav-link w-nav-link" href="/shop">Shop
                     </a>
                  </li>
                  <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                     <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                     <a class="nav-link" href="/contact">Contact Us</a>
                  </li>
                  <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
                     <a class="nav-link" href="/blog">Blog</a>
                  </li>
                  <li class="nav-item {{ Request::is('cart') ? 'active' : '' }}">
                     <a class="nav-link" href="/cart">Cart&nbsp;<span class="badge badge-success"><?php 
                     $cart = Session::get('cart');
                     if(!empty ($cart)) : echo count($cart); endif; 

                     ?></span></a>
                  </li>
                  <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                     <a class="nav-link" href="/register">Register</a>
                  </li>
                   <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                     <a class="nav-link" href="/login">Login</a>
                  </li>
                  <li class="nav-item {{ Request::is('logout') ? 'active' : '' }}">
                     <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                  </li>
                  </ul>
            </div>
         </div>
      </nav>
