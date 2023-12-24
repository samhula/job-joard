<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<div class="md:grid grid-cols-8">
		<x-sidebar class="md:col-span-1 lg:col-span-1"/>
		<main class="translate-y-[calc(4.4rem)] mx-auto p-4 w-full grid grid-cols-1 space-y-4 col-span-7">
			<div class="col-span-1 grid grid-cols-1 md:grid-cols-3 xl:grid-cols-8 gap-4">
				<x-account-details-panel :user="$user"/>
				<x-users-panel/>
				<x-notifications-panel />
			</div>
			<x-jobs-panel :jobs="$jobs"/>
		</main>
	</div>
<x-footer class="mt-[calc(7.6vh)]"/>
</body>
</html>