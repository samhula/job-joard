<x-head />
<body class="w-full h-screen mx-auto dark:bg-zinc-900">
	<x-nav />
	<div class="translate-y-20">
		<x-list :continents="$continents" :countries="$countries"/>
	</div>
</body>
<x-footer class="translate-y-20"/>