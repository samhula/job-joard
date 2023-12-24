<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<main class="translate-y-[calc(5.5rem)] w-11/12 lg:w-10/12 mx-auto px-2 flex flex-col space-y-2">
		<h2 class="w-full text-2xl font-semibold">Applicants</h2>
		<form class="my-2 flex flex-col w-full space-y-2">
			<div class="flex flex-row">
				<input class="bg-stone-200 focus:bg-stone-100 outline-sky-600 p-2 rounded-l text-sm w-full dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="text" placeholder="Search" name="job-title">
				<button class="rounded-r bg-blue-600 text-white p-2" type="submit">
					Search
				</button>
			</div>
			<div class="flex flex-col space-y-2 sm:space-y-0 sm:flex-row sm:space-x-2">
				<select name="job" id="job" class="border rounded text-sm w-full p-2 md:col-span-1 dark:bg-gray-700 dark:border-gray-600">
					<option selected disabled class="text-gray-200">-- Job --</option>
					<option value="all">All</option>
					<option value="job-1">Job 1</option>
					<option value="job-2">Job 2</option>
				</select>
				<select name="view" id="view" class="border rounded text-sm w-full p-2 md:col-span-1 dark:bg-gray-700 dark:border-gray-600">
					<option selected disabled class="text-gray-200">-- Viewed? --</option>
					<option value="all">All</option>
					<option value="not-viewed">Not viewed</option>
					<option value="viewed">Viewed</option>
				</select>
				<select name="sort-date" id="date" class="border rounded text-sm w-full p-2 md:col-span-1 dark:bg-gray-700 dark:border-gray-600">
					<option selected disabled class="text-gray-200">-- Sort By --</option>
					<option value="latest">Newest - Oldest</option>
					<option value="oldest">Oldest - Newest</option>
				</select>
			</div>
		</form>
		<div class="flex flex-col">
			<div class="py-2 bg-white dark:bg-zinc-700 hover:bg-sky-100 hover:dark:bg-zinc-700 transition ease-in-out border-b border-gray-400 dark:border-gray-600">
				<div class="p-1 flex flex-col space-y-2 p-2">
					<div class="flex flex-col sm:flex-row justify-between space-y-2 p-2">
						<div class="flex flex-col">
							<p class="font-bold">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <a href="../jobs/1" target="_blank" class="text-blue-600 dark:text-blue-300">Software Engineer</a>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
							</p>
						</div>
						<div class="flex flex-col sm:flex-row sm:space-x-4 my-auto">
							<div class="font-bold">
								View Resume
							</div>
							<div class="">
								Interview
							</div>
							<div class="">
								Decline
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="py-2 bg-gray-100 dark:bg-stone-900 hover:bg-sky-100 hover:dark:bg-zinc-800 transition ease-in-out border-b border-gray-400 dark:border-gray-600">
				<div class="p-1 flex flex-col space-y-1 p-2">
					<div class="flex flex-col sm:flex-row justify-between space-y-2 p-2">
						<div class="flex flex-col">
							<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
							</p>
						</div>
						<div class="flex flex-col sm:flex-row sm:space-x-4 my-auto">
							<div class="">
								View Resume
							</div>
							<div class="">
								Interview
							</div>
							<div class="">
								Decline
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="py-2 bg-gray-100 dark:bg-stone-900 hover:bg-sky-100 hover:dark:bg-zinc-800 transition ease-in-out border-b border-gray-400 dark:border-gray-600">
				<div class="p-1 flex flex-col space-y-1 p-2">
					<div class="flex flex-col sm:flex-row justify-between space-y-2 p-2">
						<div class="flex flex-col">
							<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
							</p>
						</div>
						<div class="flex flex-col sm:flex-row sm:space-x-4 my-auto">
							<div class="">
								View Resume
							</div>
							<div class="">
								Interview
							</div>
							<div class="">
								Decline
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="py-2 bg-gray-100 dark:bg-stone-900 hover:bg-sky-100 hover:dark:bg-zinc-800 transition ease-in-out border-b border-gray-400 dark:border-gray-600">
				<div class="p-1 flex flex-col space-y-1 p-2">
					<div class="flex flex-col sm:flex-row justify-between space-y-2 p-2">
						<div class="flex flex-col">
							<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
							</p>
						</div>
						<div class="flex flex-col sm:flex-row sm:space-x-4 my-auto">
							<div class="">
								View Resume
							</div>
							<div class="">
								Interview
							</div>
							<div class="">
								Decline
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="py-2 bg-gray-100 dark:bg-stone-900 hover:bg-sky-100 hover:dark:bg-zinc-800 transition ease-in-out border-b border-gray-400 dark:border-gray-600">
				<div class="p-1 flex flex-col space-y-1 p-2">
					<div class="flex flex-col sm:flex-row justify-between space-y-2 p-2">
						<div class="flex flex-col">
							<p class="">
							<span class="text-blue-600 dark:text-blue-500">John Doe</span> applied to <span class="text-blue-600 dark:text-blue-300">Software Engineer</span>
							</p>
							<p class="text-gray-800 dark:text-gray-400 text-sm">
							email@email.com
							</p>
						</div>
						<div class="flex flex-col sm:flex-row sm:space-x-4 my-auto">
							<div class="">
								View Resume
							</div>
							<div class="">
								Interview
							</div>
							<div class="">
								Decline
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="hidden sm:block sm:col-span-2 lg:col-span-3"><p>Message expanded view</p></div>	 -->
	</main>
<x-footer class="mt-[calc(35vh)]"/>
</body>
</html>