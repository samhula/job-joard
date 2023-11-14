<x-head />
<body class="w-full h-screen mx-auto">
	<x-nav />
	<main class="flex flex-row">
		<div class="hidden sm:block bg-zinc-800 h-screen flex flex-col justify-between text-white">
			<div class="translate-y-20 flex flex-col">
				<div class="hover:bg-zinc-600 hover:transition-all hover:ease-in-out bg:zinc-500 w-full p-4">Home</div>
				<div class="hover:bg-zinc-600 w-full p-4">Post a job</div>
				<div class="hover:bg-zinc-600 w-full p-4">List of jobs</div>
				<div class="hover:bg-zinc-600 w-full p-4">Applicants</div>
			</div>
			<div class="flex flex-row justify-around space-x-1 mb-4">
				<div class="flex flex-row space-x-1 hover:bg-zinc-600">
					<div>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
						</svg>
					</div>
					<p>Help</p>
				</div>
				<div class="flex flex-row space-x-1 hover:bg-zinc-600">
					<div>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
						</svg>
					</div>
					<p>Admin</p>
				</div>
			</div>
		</div>
		<div class="h-screen translate-y-20 flex flex-col justify-between w-full">
			<h2>Jobs Applied to</h2>
		</div>
	</main>
</body>
</html>