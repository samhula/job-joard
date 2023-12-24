@props(['jobs'])

<div class="rounded-md shadow-md p-2 space-y-2 md:col-span-4 xl:col-span-8 dark:bg-zinc-800">
	<a href="dashboard/jobs" class="font-semibold text-2xl"><h2>Jobs</h2></a>
	@unless(count($jobs) == 0)
	<div class="relative overflow-x-auto sm:rounded-lg h-[calc(44rem)]">
	    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-200">
	        <thead class="text-xs text-gray-700 dark:text-gray-300 uppercase bg-gray-300 dark:bg-gray-600 sticky top-0">
	            <tr>
	                <th scope="col" class="px-6 py-3">
	                    <div class="flex items-center">
	                        Job ID
	                        <a href="#">
	                        	<svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
	    							<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
	  							</svg>
	  						</a>
	                    </div>
	                </th>
	                <th scope="col" class="px-6 py-3">
	                    <div class="flex items-center">
	                        Title
	                        <a href="#">
	                        	<svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
	    							<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
	  							</svg>
	  						</a>
	                    </div>
	                </th>
	                <th scope="col" class="px-6 py-3">
	                    <div class="flex items-center">
	                        Applicants
	                        <a href="#">
	                        	<svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
							    	<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
							  </svg>
							</a>
	                    </div>
	                </th>
	                <th scope="col" class="px-6 py-3">
	                    <div class="flex items-center">
	                        Closing Date
	                        <a href="#">
	                        	<svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
							    	<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
							  </svg>
							</a>
	                    </div>
	                </th>
	                <th scope="col" class="px-6 py-3">
	                	<span class="">Edit?</span>
	                </th>
	                @auth()
	                @if(in_array(auth()->user()->account_type, array('owner', 'admin')))
	                <th scope="col" class="px-6 py-3">
	                    <span class="flex items-center">Delete?</span>
	                </th>
	                @endif
	                @endauth()
	            </tr>
	        </thead>
	        <tbody class="overflow-y-auto">
		        	@foreach ($jobs as $job)
		        		@if($job->deadline >= date('Y-m-d'))
		        		<tr class="bg-white border-b border-gray-600 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out">
			        	@else
			        	<tr class="bg-red-100 border-b border-gray-600 dark:bg-red-950 hover:bg-red-300 hover:dark:bg-red-800 transition ease-in-out">
			        	@endif
		                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-gray-300 whitespace-nowrap">
		                    {{$job->id}}
		                </th>
		                <td class="px-6 py-4">
		                	<a href="{{url('')}}/jobs/{{$job->id}}" class="text-blue-600 dark:text-blue-300">{{$job->job_title}}</a>
		                </td>
		                <td class="px-6 py-4">
		                    {{$job->num_applications}}
		                </td>
		                <td class="px-6 py-4">
		                    {{$job->deadline}}
		                </td>
		                <td class="px-6 py-4">
		                	@if($job->deadline < date('Y-m-d'))
		                	@else
		                		<a href="{{url('')}}/jobs/{{$job->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
		                	@endif
		                </td>
		                @auth()
		                @if(in_array(auth()->user()->account_type, array('owner', 'admin')))
		                <td class="px-6 py-4">
		                	<form method="POST" action="{{url('')}}/jobs/{{$job->id}}">
		                		@csrf 
		                		@method('DELETE')
		                		<button class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this job post?')">Delete</button>
		                	</form>
		                </td>
		                @endif
		                @endauth()
		            </tr>
		        	@endforeach
	        </tbody>
	    </table>
	</div>
	@endunless
	@if(count($jobs) == 0)
		@if(auth()->user()->account_type != 'seeker')
		<div class="h-[calc(30rem)]">You have not posted a job. Create a job <a href="{{url('')}}/jobs/create" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">here!</a></div>
		@else
		<div class="h-[calc(30rem)]">You have not applied to any jobs. You can search for jobs <a href="{{url('')}}/jobs/search" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">here!</a></div>
		@endif
	@endif
</div>