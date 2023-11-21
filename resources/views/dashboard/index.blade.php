<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<main class="translate-y-[calc(5.5rem)] w-11/12 lg:w-10/12 mx-auto px-2 flex flex-col space-y-4 md:space-y-0 md:grid md:grid-cols-4 md:gap-4">
		<div class="flex flex-col space-y-2 p-2 rounded-md shadow-md md:col-span-2 xl:col-span-1 dark:bg-zinc-800 h-[27.75rem]">
			<h2 class="font-semibold text-2xl">Details</h2>
			<div class="flex flex-col w-full space-y-2">
				<form class="w-full flex flex-col space-y-2">
					<img src="https://via.placeholder.com/3600x400&text=image1" class="object-cover h-32 w-32 mx-auto rounded-md">
					<label for="company-name" class="font-semibold">Name</label>
					<input type="text" name="company-name" id="company-name" value="company-name" placeholder="company-name" class="border w-full p-2 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none">
					<label for="company-name" class="font-semibold">Email</label>
					<input type="text" name="company-email" id="company-email" value="company-email" placeholder="company-email" class="border w-full p-2 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none">
					<button class="p-2 bg-blue-600 rounded-md text-white transition ease-in-out w-full">
						<p class="my-auto">Save</p>
					</button>
					<!-- <button class="p-2 bg-gray-200 hover:bg-gray-300 rounded-md transition ease-in-out w-full">
						<p class="my-auto">Reset Password</p>
					</button> -->
				</form>
				<a href="#" class="p-2 bg-gray-600 rounded-md text-white transition ease-in-out w-full">
					<p class="my-auto mx-auto text-center">Account Settings</p>
				</a>
			</div>
		</div>
		<div class="flex flex-col space-y-2 p-2 rounded-md shadow-md md:col-span-2 xl:col-span-1 dark:bg-zinc-800 h-[27.75rem]">
			<h2 class="font-bold text-2xl">Messages</h2>
			<div class="flex flex-col w-full overflow-y-auto">
				<div class="bg-gray-100 dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b dark:border-t border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-white dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-gray-100 dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-white dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-gray-100 dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-white dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-gray-100 dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-white dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div class="bg-gray-100 dark:bg-zinc-800 py-2 mr-2 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<p class="p-2">
						This is a message
					</p>
				</div>
				<div>
					You have 0 new messages
				</div>
			</div>
		</div>
		<div class="flex flex-col space-y-2 p-2 rounded-md shadow-md md:col-span-2 xl:col-span-1 dark:bg-zinc-800 h-[27.75rem]">
			<h2 class="font-semibold text-2xl">Applicants</h2>
			<div class="flex flex-col w-full overflow-y-auto">
				<div class="py-2 mr-2 bg-gray-100 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b dark:border-t border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div class="py-2 mr-2 bg-white dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div class="py-2 mr-2 bg-gray-100 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div class="py-2 mr-2 bg-white dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div class="py-2 mr-2 bg-gray-100 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div class="py-2 mr-2 bg-white dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div class="py-2 mr-2 bg-gray-100 dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div class="py-2 mr-2 bg-white dark:bg-zinc-800 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out dark:border-b border-gray-600">
					<div class="p-1 flex flex-col space-y-1">
						<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
						</p>
						<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
						</p>
					</div>
				</div>
				<div>
					You have no candidates that have applied to your job listings
				</div>
			</div>
		</div>
		<div class="flex flex-col space-y-2 p-2 rounded-md shadow-md md:col-span-2 xl:col-span-1 dark:bg-zinc-800 h-[27.75rem] overflow-y-auto">
			<h2 class="font-semibold text-2xl">Interviews</h2>
			<div>
				You have not sent out any interview requests
			</div>
		</div>
		<div class="rounded-md shadow-md p-2 space-y-2 md:col-span-4 dark:bg-zinc-800">
			<h2 class="font-semibold text-2xl">Jobs</h2>
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
			                    <span class="sr-only">Edit</span>
			                </th>
			            </tr>
			        </thead>
			        <tbody class="overflow-y-auto">
			        	@unless(count($jobs) == 0)
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
				                    {{$job->created_at}}
				                </td>
				                <td class="px-6 py-4 text-right">
				                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
				                </td>
				            </tr>
				        	@endforeach
				        @endunless
			        </tbody>
			    </table>
			</div>
		</div>
	</main>
<x-footer class="mt-[calc(35vh)]"/>
</body>
</html>