<form class="w-full my-2 flex flex-col w-full  md:pr-2" method="GET" action="{{url('')}}/jobs/search">
	<div class="flex flex-row">
		<input class="bg-stone-200 focus:bg-stone-100 outline-sky-600 p-2 rounded-l text-sm w-full dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="text" placeholder="Find your dream job!" name="job_title">
		<button class="rounded-r bg-blue-600 text-white p-2" type="submit">
			Search
		</button>
	</div>
	<div class="flex flex-row my-2 space-x-2">
		@unless(count($continents) == 0)
		@unless(count($countries) == 0)
			<x-list-filters :continents="$continents" :countries="$countries"/>
		@endunless
		@endunless
	</div>
</form>