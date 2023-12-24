<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<div class="md:grid grid-cols-8">
		<x-sidebar class="col-span-1"/>
		<div class="translate-y-[calc(4.4rem)] mx-auto p-4 w-full grid grid-cols-1 space-y-4 col-span-7">
			<x-jobs-panel :jobs="$jobs"/>
			@unless(count($jobs) == 0)
				{{$jobs->appends(request()->query())->links()}}
			@endunless
		</div>
	</div>
<x-footer class="mt-[calc(7.6vh)]"/>
</body>
</html>