@extends('layout')

@section('content')
<main class="w-full lg:w-7/8 mx-auto dark:text-slate-100">
	<canvas class="w-full h-screen" id="home-canvas"></canvas>
	<div class="w-full -translate-y-[60vh] flex flex-col gap-4 justify-center my-auto">
		<div class="w-full mx-auto text-center p-2 flex flex-col gap-2">
			@if((100 - ($numJobs)) > 0)
			<h2 class="text-3xl sm:text-5xl font-bold">Job postings are now free!</h2>
			<p class="text-xl dark:text-slate-300">Don't wait on this opportunity.
			@endif
			@if((100 - ($numJobs)) > 1)
					{{100 - ($numJobs)}} free job postings are available.</p>
			@elseif((100 - ($numJobs)) == 1)
					{{100 - ($numJobs)}} free job post is available.</p>
			@else
				<h2 class="text-3xl sm:text-5xl font-bold">Welcome to the best remote job board!</h2>
				<p class="text-xl dark:text-slate-300">Don't wait on this opportunity. Post a job or apply to some!</p>
			@endif
			<div class="mt-6 text-lg">
				<a href="jobs/create" class="rounded-full bg-blue-600 text-white p-4 poppins">Post a job</a>
				<a href="#job-list" class="translate-y-24 bg-gradient-to-b from-gray-100 to-gray-200 dark:from-gray-600 dark:to-gray-700 p-4 rounded-full mx-auto font-semibold dark:font-normal poppins">View Jobs</a>
			</div>
		</div>
	</div>
	<div class="translate-y-20">
		<x-list :continents="$continents" :countries="$countries" :jobs="$jobs"/>
	</div>
</main>
@endsection