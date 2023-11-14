<x-head />
<body class="w-full h-screen mx-auto">
	<x-nav />
	<main class="w-11/12 lg:w-9/12 lg:translate-y-5 mx-auto">
		<x-card-details class="translate-y-20 w-full h-screen"/>
	</main>
	<div class="grid grid-cols-1 lg:grid-cols-3 lg:px-2 gap-4">
		<hr class="lg:hidden">
		<x-card class="col-span-1 lg:hover:scale-[1.02] transition bg-gray-100 "/>
		<hr class="lg:hidden">
		<x-card class="col-span-1 lg:hover:scale-[1.02] transition bg-gray-100 "/>
		<hr class="lg:hidden">
		<x-card class="col-span-1 lg:hover:scale-[1.02] transition bg-gray-100 "/>
	</div>
</body>
<x-footer class="translate-y-4"/>
</html> 