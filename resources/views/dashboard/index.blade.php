<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<main class="translate-y-20 w-11/12 lg:w-10/12 mx-auto px-2 flex flex-col space-y-4 md:space-y-0 md:grid md:grid-cols-4 md:gap-2">
		<div class="flex flex-col space-y-2 p-2 rounded shadow-md md:col-span-2 xl:col-span-1 dark:border">
			<h2 class="font-semibold text-xl">Details</h2>
			<div>
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
			</div>
		</div>
		<div class="flex flex-col space-y-2 p-2 rounded shadow-md md:col-span-2 xl:col-span-1 dark:border">
			<h2 class="font-semibold text-xl">Messages</h2>
			<div>
				You have no messages
			</div>
		</div>
		<div class="flex flex-col space-y-2 p-2 rounded shadow-md md:col-span-2 xl:col-span-1 dark:border">
			<h2 class="font-semibold text-xl">Candidates</h2>
			<div>
				You have no candidates that have applied to your job listings
			</div>
		</div>
		<div class="flex flex-col space-y-2 p-2 rounded shadow-md md:col-span-2 xl:col-span-1 dark:border">
			<h2 class="font-semibold text-xl">Interviews</h2>
			<div>
				You have not sent out any interview requests
			</div>
		</div>
		<div class="rounded shadow-md p-2 space-y-2 md:col-span-4">
			<h2 class="font-semibold text-xl">Jobs</h2>
			<div class="relative overflow-x-auto sm:rounded-lg">
			    <table class="w-full text-sm text-left text-gray-500">
			        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
			            <tr>
			                <th scope="col" class="px-6 py-3">
			                    Job ID
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
			        <tbody>
			            <tr class="bg-white border-b">
			                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			                    123
			                </th>
			                <td class="px-6 py-4">
			                    Software Engineer
			                </td>
			                <td class="px-6 py-4">
			                    40
			                </td>
			                <td class="px-6 py-4">
			                    29th February 42069
			                </td>
			                <td class="px-6 py-4 text-right">
			                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
			                </td>
			            </tr>
			            <tr class="bg-white border-b">
			                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			                    124
			                </th>
			                <td class="px-6 py-4">
			                    Software Engineer
			                </td>
			                <td class="px-6 py-4">
			                    40
			                </td>
			                <td class="px-6 py-4">
			                    29th February 42069
			                </td>
			                <td class="px-6 py-4 text-right">
			                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
			                </td>
			            </tr>
			            <tr class="bg-white">
			                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
			                    125
			                </th>
			                <td class="px-6 py-4">
			                    Software Engineer
			                </td>
			                <td class="px-6 py-4">
			                    40
			                </td>
			                <td class="px-6 py-4">
			                    29th February 42069
			                </td>
			                <td class="px-6 py-4 text-right">
			                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
			                </td>
			            </tr>
			        </tbody>
			    </table>
			</div>
		</div>
	</main>
</body>
<x-footer class="translate-y-20"/>
</html>