<div id="job-list" class="px-1 mb-4 sm:px-0 w-11/12 lg:w-10/12 mx-auto dark:text-slate-200 scroll-smooth">
	<h2 class="font-semibold text-xl sm:text-2xl mb-2">Featured Jobs</h2>
	<x-list-search/>
	<div class="flex flex-row my-2 space-x-2 md:space-x-4">
		@if(isset($countries))
			<x-list-filters :continents="$continents" :countries="$countries"/>
		@endif
	</div>
	<hr class="w-full my-4 dark:border-gray-600">
	<div class="flex flex-col md:flex-row md:space-x-4">
		<div class="w-full md:w-1/2 flex flex-col space-y-4">
			<x-card :id="1" class="hover:scale-[1.02] transition"/>
			<hr class="dark:border-gray-600">
			<x-card :id="2" class="hover:scale-[1.02] transition"/>
			<hr class="dark:border-gray-600">
			<x-card :id="3" class="hover:scale-[1.02] transition"/>
			<hr class="dark:border-gray-600">
			<x-card :id="4" class="hover:scale-[1.02] transition"/>
			<hr class="dark:border-gray-600">
			<x-card :id="5" class="hover:scale-[1.02] transition"/>
			<hr class="dark:border-gray-600">
			<x-card :id="6" class="hover:scale-[1.02] transition"/>
			<hr class="dark:border-gray-600">
			<x-card :id="7" class="hover:scale-[1.02] transition"/>
			<hr class="dark:border-gray-600">
			<x-card :id="8" class="hover:scale-[1.02] transition"/>
		</div>
		<x-card-details class="hidden sticky top-0 w-1/2 md:h-max bg-stone-100 dark:bg-zinc-900 md:flex md:flex-col p-2" />
	</div>
</div>