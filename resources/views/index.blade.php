<x-head />
<body class="w-full mx-auto dark:bg-zinc-900">
	<x-nav />
	<main class="w-full lg:w-7/8 mx-auto dark:text-slate-200">
		<canvas class="w-full h-screen" id="home-canvas"></canvas>
		<div class="w-full -translate-y-[32rem] flex flex-col gap-4 justify-center">
			<div class="w-full mx-auto text-center p-2">
				<h2 class="text-2xl sm:text-4xl font-bold">Job postings are now free!</h2>
				<p class="text-xl mb-8">Don't wait on this opportunity. <span>100</span> free spots available.</p>
				<a href="" class="rounded-full bg-blue-600 text-white p-4">Post a job</a>
			</div>
<!-- 			<form class="w-full sm:w-3/4 lg:w-1/2 mx-auto p-4 grid grid-cols-1 md:grid-cols-2 gap-2">
				<input class="bg-stone-100 focus:bg-stone-200 focus:outline-none p-4 rounded text-sm w-full col-span-1 md:col-span-2 dark:bg-gray-700 dark:border-gray-600 dark:focus:bg-gray-500" type="text" placeholder="Find your dream job!">
				@if(isset($countries))
					<x-list-filters :continents="$continents" :countries="$countries"/>
				@endif
				<button class="rounded bg-blue-600 text-white p-2 text-sm w-full col-span-1 md:col-span-2" type="submit">
					Search
				</button>
			</form> -->
			<a href="#job-list" class="translate-y-24 bg-gradient-to-b from-gray-100 to-gray-200 dark:from-gray-600 dark:to-gray-700 p-4 rounded-full mx-auto">Latest jobs</a>
		</div>
		<div class="translate-y-20">
			<x-list :continents="$continents" :countries="$countries"/>
		</div>
	</main>
</body>
<x-footer class="translate-y-20"/>
</html>