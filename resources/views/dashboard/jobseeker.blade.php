<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<main class="translate-y-[calc(5.5rem)] w-11/12 lg:w-10/12 mx-auto px-2 grid grid-cols-1 space-y-4">
		<div class="col-span-1 grid grid-cols-1 md:grid-cols-3 xl:grid-cols-8 gap-4">
			<div class="space-y-2 p-2 rounded-md shadow-md md:col-span-1 xl:col-span-2 dark:bg-zinc-800 h-[27.75rem]">
				@unless(count($users) == 0)
				@foreach($users as $user)
				<h2 class="font-semibold text-2xl">Welcome, {{$user->name}}</h2>
				@endforeach
				@endunless
				<div class="flex flex-col w-full space-y-2">
					@unless(count($users) == 0)
					<form class="w-full flex flex-col space-y-2" method="POST" action="">
						@csrf
						@foreach($users as $user)
							<label for="company-name" class="font-semibold">Name</label>
							<input type="text" name="company-name" id="company-name" value="{{$user->name}}" placeholder="{{$user->name}}" class="border w-full p-2 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none">
							<label for="company-name" class="font-semibold">Email</label>
							<input type="text" name="company-email" id="company-email" value="{{$user->email}}" placeholder="{{$user->email}}" class="border w-full p-2 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none">
							<button class="p-2 bg-blue-600 rounded-md text-white transition ease-in-out w-full">
								<p class="my-auto">Save</p>
							</button>
						@endforeach
						<!-- <button class="p-2 bg-gray-200 hover:bg-gray-300 rounded-md transition ease-in-out w-full">
							<p class="my-auto">Reset Password</p>
						</button> -->
					</form>
					<a href="#" class="p-2 bg-gray-600 rounded-md text-white transition ease-in-out w-full">
						<p class="my-auto mx-auto text-center">Account Settings</p>
					</a>
					@endunless
				</div>
			</div>
			<div class="flex flex-col space-y-2 p-2 rounded-md shadow-md md:col-span-1 xl:col-span-3 dark:bg-zinc-800 h-[27.75rem]">
				<h2 class="font-semibold text-2xl"> <a href="dashboard/applicants">Notifications</a></h2>
				<div class="flex flex-col w-full overflow-y-auto">
					<div class="py-2 mr-2 bg-gray-100 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b dark:border-t border-gray-600">
						<div class="p-1 flex flex-col space-y-1">
							<p class="">
								You applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
								email@email.com
							</p>
						</div>
					</div>
					<!-- <div>
						You have not applied to any jobs yet. Head over to the <a href="{{url('')}}/search" class="text-blue-600 dark:text-blue-500">jobs search page</a> and get started!
					</div> -->
				</div>
			</div>
			<div class="flex flex-col space-y-2 p-2 pr-0 rounded-md shadow-md md:col-span-1 xl:col-span-3 dark:bg-zinc-800 h-[27.75rem] overflow-y-auto">
				<h2 class="font-semibold text-2xl">Interviews</h2>
				<div class="flex flex-col w-full overflow-y-auto">
					<div class="py-2 mr-2 bg-gray-100 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b dark:border-t border-gray-600">
						<div class="p-1 flex flex-col space-y-1">
							<p class="">
								Interviewing <span class="text-blue-600 dark:text-blue-500">John Doe</span> for
								<span class="text-blue-600 dark:text-blue-300"> Software Developer</span>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
								email@email.com
							</p>
						</div>
					</div>
					<div class="py-2 mr-2 bg-white dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
						<div class="p-1 flex flex-col space-y-1">
							<p class="">
								Interviewing <span class="text-blue-600 dark:text-blue-500">John Doe</span> for
								<span class="text-blue-600 dark:text-blue-300"> Software Developer</span>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
								email@email.com
							</p>
						</div>
					</div>
				</div>
				<div>
					You have not sent out any interview requests
				</div>
			</div>
		</div>
		<div class="rounded-md shadow-md p-2 space-y-2 md:col-span-4 xl:col-span-8 dark:bg-zinc-800">
			<a href="dashboard/jobs" class="font-semibold text-2xl"><h2>Jobs</h2></a>
			@unless(count($jobs) == 0)
			<div class="relative overflow-x-auto sm:rounded-lg h-[calc(30rem)]">
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
			                <th scope="col" class="px-6 py-3">
			                    <span class="flex items-center">Delete?</span>
			                </th>
			            </tr>
			        </thead>
			        <tbody class="overflow-y-auto">
				        	@foreach ($jobs as $job)
				        		<tr class="bg-white dark:border-b border-gray-600 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out">
				                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-gray-300 whitespace-nowrap">
				                    {{$job->id}}
				                </th>
				                <td class="px-6 py-4">
				                    {{$job->job_title}}
				                </td>
				                <td class="px-6 py-4">
				                    {{$job->num_applications}}
				                </td>
				                <td class="px-6 py-4">
				                    {{$job->deadline}}
				                </td>
				                <td class="px-6 py-4">
				                    <a href="jobs/{{$job->id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
				                </td>
				                <td class="px-6 py-4">
				                	<form method="POST" action="{{url('')}}/jobs/{{$job->id}}">
				                		@csrf 
				                		@method('DELETE')
				                		<button class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this job post?')">Delete</button>
				                	</form>
				                </td>
				            </tr>
				        	@endforeach
			        </tbody>
			    </table>
			</div>
			@endunless
			@if(count($jobs) == 0)
			<div class="h-[calc(30rem)]">You have not applied to any jobs yet. You can apply to them <a href="{{url('')}}/jobs/search" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">here!</a></div>
			@endif
		</div>
	</main>
<x-footer class="mt-[calc(35vh)]"/>
</body>
</html>