<header class="header-user c-navigation" style="font-family: 'poppins';height:52px;">  
<div class="row g-0  "></div>
	<nav class="navbar navbar-expand-lg " style="width: 100%;">
  		<div class="col-lg-3 px-4 fs-5 fw-bold pb-2">
  			<strong>GradiWeb</strong>
  		</div>

  		<div class="col-lg-7 text-center">
			<div class="time-hours pb-2 ">
				<div id='hora' class="hour"></div><div>:</div><div id='minuto' class="minutes"></div><div id='segundo' class="seconds"></div>
			</div>
  		</div>

  		<div class="col-lg-2 mx-1 pb-2 ">

  		<div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
	      <ul class="navbar-nav">
	      	<li class="nav-item p-2 px-3">
	      		<i class="icofont-alarm fs-4"></i>
	      	</li>
	        <li class="nav-item dropdown ">
				<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black !important">
				{{ Auth::User()->name }} 
				</a>
	          	<ul class="dropdown-menu dropdown-menu-end dropdown-menu-white text-dark border-0 rounded-0 " aria-labelledby="navbarDarkDropdownMenuLink px-2" style="font-size:12px;border-radius: 6px;box-shadow: 0 0 17px 0 rgba(23,50,68,.17);border-radius: 6px;z-index: 1051; border:1px solid black ">
		          	
		          	<li class="p-3 px-4 fs-6 ln-1 "> 
		          		<div style="max-width:270px; padding-left: 10px;font-size: 14px;">
		          			<div class="fw-bold text-truncate px-2" >
							  {{ Auth::User()->name }} 
		          			</div>
		          			<span class=" px-2 " style="font-size:12px;"> {{ Auth::User()->email }} </span>
		          		</div>
		          	</li>
		          	<li class=""><hr class="dropdown-divider"></li>
		          	<div class="items-options" > 
						<li class="p-2 "><a class="border-dark  p-2" href="{{route('auth.logout')}}"><i class="icofont-logout"></i> &nbsp; Cerrar sesión</a></li>
					</div>

	        	</ul>
	        </li>
	      </ul>
	    </div>

  	 
  		</div> 

	</nav>
	
<script>
	Reloj();
</script>
</header>