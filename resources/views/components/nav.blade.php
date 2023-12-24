<nav class="bg-gray-200 text-black fixed w-full z-10 top-0 dark:bg-gray-800 dark:text-white">
	<ul class="py-4 sm:px-0 w-11/12 lg:w-10/12 mx-auto flex flex-row justify-between">
		<li><h1 class="text-3xl lg:text-4xl drop-shadow-lg font-bold"><a href="{{url('')}}">Sitename</a></h1></li>
		<ul class="flex flex-row space-x-6 my-auto font-semibold">
			@auth
			<li class="hidden sm:block"><a href="/jobsearch/public/dashboard">Dashboard</a></li>
			@if(auth()->user()->account_type == 'recruiter')
			<li class="hidden sm:block"><a href="/jobsearch/public/jobs/create">Post</a></li>
			@endif 
			<li class="hidden sm:block">
			<form method="POST" action="/jobsearch/public/logout">
				@csrf
				<button value="submit">
					Logout
				</button>	
			</form>
			</li>
			<li class="hidden my-auto items-center sm:block">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
				</svg>
			</li>
			@else
			<li class="hidden sm:block">
				<a href="{{url('')}}/signin">Sign In</a>
			</li>
			<li class="hidden sm:block"><a href="/jobsearch/public/jobs/create">Post</a></li>
			@endauth
			<!-- <li class="hidden sm:block">Pricing</li> -->
			<li class="my-auto items-center sm:hidden">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
					  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
			</li>
		</ul>
	</ul>
</nav>