<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900 dark:text-slate-100">
	<x-nav />
	<main class="w-11/12 lg:w-9/12 lg:translate-y-5 mx-auto">
		<x-card-details :job="$job" class="translate-y-20 w-full h-full dark:text-slate-300"/>
	</main>
	<div class="mx-auto grid grid-cols-1 lg:grid-cols-3 lg:px-2 gap-4 mt-28">
		<hr class="lg:hidden">
		<x-card class="col-span-1 lg:hover:scale-[1.02] transition bg-gray-100 dark:bg-zinc-800 dark:text-slate-300"/>
		<hr class="lg:hidden">
		<x-card class="col-span-1 lg:hover:scale-[1.02] transition bg-gray-100 dark:bg-zinc-800 dark:text-slate-300"/>
		<hr class="lg:hidden">
		<x-card class="col-span-1 lg:hover:scale-[1.02] transition bg-gray-100 dark:bg-zinc-800 dark:text-slate-300"/>
	</div>
</body>
<x-footer class="translate-y-4"/>
</html>