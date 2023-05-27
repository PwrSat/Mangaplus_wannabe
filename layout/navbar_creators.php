<div id="wrap" class="wrapper_contents" ontouchstart="">

<header id="as-header-vue" class="mpc-header">

  <div class="header_above">
    <div class="header_inner">
      <button class="header_mobile_menu" data-mpc-mobile-side-menu="">
        <span class="hidden">Menu</span>
        <span class="header_badge" style="display:none;" data-mpc-notification>New</span>
      </button>
      <h1 class="header_logo">
        <a href="https://medibang.com/mpc/" >
          <img src="https://medibang.com/resources/images/mpc/logo_mpc_header.svg" alt="MANGA Plus Creators by SHUEISHA">
        </a>
      </h1>

      <div class="header_main">
        <nav class="header_gnav">
          <div class="header_gnav_inner">
            <ul class="header_gnav_list" >
              <li>
                <a class="{{request()->is('creator/aboutus') ? 'active': ''}}" href="/creator/aboutus" >
                  About Us
                </a>
              </li>
              <li>
                <a class="{{request()->is('creator/notices') ? 'active': ''}}" href="/creator/notices" >
                  Notices
                  {{-- <span class="header_badge" style="display:none;" data-mpc-notification>New</span> --}}
                  {{-- ini fungsi kalo ada nontifikasi  --}}
                </a>
              </li>
              <li class="">
                <a class="{{request()->is('creator/montly') ? 'active': ''}}" href="/creator/montly" >
                  Monthly Awards
                </a>
                {{-- ini aing bikin ga aktif, bingung soale --}}
              </li>
              <li class="">
                <a class="{{request()->is('creator/genres') ? 'active': ''}}" href="/creator/genres">
                  Genres
                </a>
              </li>
              <li class="">
                <a class="{{request()->is('creator/dashboard') ? 'active': ''}}" href="/creator/dashboard">
                  Dashboard
                </a>
              </li>
            </ul>
          </div>
        </nav>


        <div class="header_input">
          <div class="header_input_inner">
            <input type="search" placeholder="Keyword" value="" autocomplete="off" maxlength="127">
          </div>
          <button type="submit" class="header_search" data-common-search-btn="pc"></button>
        </div>
        {{-- <div class="input-group">
          <div class="form-outline">
            <input type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Search</label>
          </div>
          <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
          </button>
        </div> --}}
      </div><!--  .header_main -->

      <div class="header_nav">
        <div class="header_nav_submit">
		  <a href="https://medibang.com/mpc/dashboard/titles/new/" data-loginitem="true">
		    Submit
          </a>
		  <a href="javascript:void(0);" data-need-login="submit" data-loginitem="false" style="display:none;">
	       Submit
		  </a>
        </div>

	    <div class="header_nav_lang" data-mpc-select>
	       <div class="header_nav_pulldown">

	         <span class="placeholder" data-select-placeholder></span>
	         <ul class="pulldown" data-header-select-list="locale">


	             <li >
	               <label>

	                 <input type="radio" name="locale2" title="English" value="en"
	                 	 checked="checked" autocomplete="off">
	                 <span data-value="English">
	                   English
	                 </span>
	               </label>
	             </li>

	             <li >
	               <label>

	                 <input type="radio" name="locale2" title="Español" value="es"
	                 	  autocomplete="off">
	                 <span data-value="Español">
	                   Español
	                 </span>
	               </label>
	             </li>

	         </ul>
	       </div>
	     </div>

        <div class="header_nav_menu login" data-loginitem="true">
          <div class="header_nav_avatar">

            <a href="/creator/profile">


                <img src="https://medibang.com/resources/images/no_icon.png" alt="aiyaya_">

            </a>


          </div>
        </div>
      </div>
      <!-- .header_nav -->
    </div>
  </div>
</header>


<div class="mobile_sidebar" data-mpc-mobile-sidebar="">
  <span class="mobile_sidebar_overlay" data-menu-overlay="mobile_sidebar_overlay"></span>
  <nav class="mobile_sidebar_nav">

  <button class="mobile_sidebar_menu" data-mpc-mobile-side-menu="">
    <span class="hidden">https://medibang.com/faq/">Menu</span>
  </button>

  <h1 class="mobile_sidebar_logo">
    <a href="https://medibang.com/mpc/" >
      <img class="lazyload" data-src="https://medibang.com/resources/images/mpc/logo_mpc.svg" alt="MANGA Plus Creator by SHUEISHA">
    </a>
  </h1>

  <div class="mobile_sidebar_input">
    <div class="mobile_sidebar_input_inner">
      <input type="search" data-common-search-keywords="sp" placeholder="Keyword" value="" autocomplete="off" maxlength="127">
    </div>
    <button type="submit" data-common-search-btn="sp" class="mobile_sidebar_search">Search</button>
  </div>

  <div class="mobile_sidebar_nav_inner">
    <ul class="mobile_sidebar_nav_above">
      <li class="">
        <a href="https://medibang.com/mpc/about/">
          About Us
        </a>
      </li>
      <li class="">
        <a href="https://medibang.com/mpc/announces" >
          Notices
          <span class="header_badge" style="display:none;" data-mpc-notification>New</span>
        </a>
      </li>
      <li class="">
        <a href="https://medibang.com/mpc/mom/" >
          Monthly Awards
        </a>
      </li>
      <li class="">
        <a href="https://medibang.com/mpc/genres/">
          Genres
        </a>
      </li>
      <li class="">
        <a href="https://medibang.com/mpc/dashboard/" data-loginitem="true">
          Dashboard
        </a>
        <a href="javascript:void(0);" data-need-login="dashboard" data-loginitem="false" style="display:none;">
          Dashboard
        </a>
      </li>
    </ul>
    <a href="https://medibang.com/mpc/dashboard/titles/new/" class="mobile_sidebar_submit" data-loginitem="true">
      Submit
    </a>
    <a href="javascript:void(0);" data-need-login="submit" class="mobile_sidebar_submit" data-loginitem="false" style="display:none;">
      Submit
    </a>

    <div class="mobile_sidebar_lang" data-mpc-select>
      <div class="label">Language</div>


      <div class="mobile_sidebar_pulldown" tabindex="0">
        <span class="placeholder" data-select-placeholder></span>
        <ul class="pulldown" data-header-select-list="locale">


             <li >
               <label>

                 <input type="radio" name="locale" title="English" value="en"
                 	 checked="checked" autocomplete="off">
                 <span data-value="English">
                   English
                 </span>
               </label>
             </li>

             <li >
               <label>

                 <input type="radio" name="locale" title="Español" value="es"
                 	  autocomplete="off">
                 <span data-value="Español">
                   Español
                 </span>
               </label>
             </li>

        </ul>
      </div>
    </div>

    <ul class="mobile_sidebar_nav_below">
      <li><a href="https://medibang.com/terms/terms/" >Terms of Service</a></li>
      <li><a href="https://medibang.com/terms/privacy/" >Privacy Policy</a></li>
      <li><a href="https://medibang.com/terms/guideline/">Submission Guidelines</a></li>
      <li><a href="https://medibang.com/mpc/help/" >FAQ</a></li>
      <li><a href="https://medibang.com/contact/contactForm/?app=20" >Contact</a></li>
      <li><a href="https://medibang.com/about/company/" >Company</a></li>
    </ul>

    <ul class="mobile_sidebar_link">
      <li>
        <a href="https://mangaplus.shueisha.co.jp/" target="_blank">
          <img class="img-mangaplus lazyload" data-src="https://medibang.com/resources/images/mpc/logo-mangaplus.png" alt="MANGA Plus Creators by SHUEISHA">
        </a>
      </li>
      <li>
        <a href="https://medibang.com/" >
          <img class="img-artstreet lazyload" data-src="https://medibang.com/resources/images/mpc/logo-ARTstreet.svg" alt="ART street">
        </a>
      </li>
    </ul>

    <p class="mobile_sidebar_copyright">© MediBang Inc.</p>
  </div>
  </nav>
  <span class="mobile_sidebar_close"></span>
<!-- /mobile_sidebar -->
</div>

<br>