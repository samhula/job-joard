@props(['continents', 'countries', 'jobs'])

<div id="job-list"  {{$attributes->merge(['class' => 'px-1 mb-4 sm:px-0 w-11/12 lg:w-10/12 mx-auto dark:text-slate-300 scroll-my-20 snap-start'])}}>
	<h2 class="font-semibold text-xl sm:text-2xl mb-2">Featured Jobs</h2>
	<x-list-search/>
	<div class="flex flex-row my-2 space-x-2 md:space-x-4">
		@unless(count($continents) == 0)
		@unless(count($countries) == 0)
			<x-list-filters :continents="$continents" :countries="$countries"/>
		@endunless
		@endunless
	</div>
	<hr class="w-full my-4 dark:border-gray-600">
	<div class="flex flex-col md:flex-row md:space-x-4">
		<div class="w-full md:w-1/2 flex flex-col space-y-4">
			@unless(count($jobs) == 0)
			@foreach($jobs as $job)
				<x-card :job="$job" class="hover:scale-[1.02] transition"/>
				<hr class="dark:border-gray-600">
			@endforeach
			@endunless
		</div>
		<x-card-details class="hidden sticky top-2 w-1/2 dark:bg-zinc-900 md:flex md:flex-col p-2 py-0 overflow-y-auto h-[calc(100vh-9rem)]" />
	</div>
</div>
<div class="w-7/8 px-4 lg:px-24 xl:px-40">
	@unless(count($jobs) == 0)
		{{$jobs->appends(request()->query())->links()}}
	@endunless
</div>