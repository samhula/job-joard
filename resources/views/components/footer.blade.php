<footer {{$attributes->merge(['class' => 'bg-gray-900 text-white p-2 grid grid-cols-1 sm:grid-cols-2 w-full sm:space-x-2 space-y-2'])}}>
	<div class="col-span-1 mx-auto sm:mx-0 sm:ml-auto">
		<img src="https://via.placeholder.com/200x200&text=oogabooga">
	</div>
	<div class="col-span-1 sm:p-2 mx-auto sm:mr-auto sm:my-auto flex flex-col">
		<a href="{{Request::httpHost()}}" class="text-center sm:text-left">About Us</a>
		<a href="{{Request::httpHost()}}/pricing" class="text-center sm:text-left">Pricing</a>
		<a href="{{Request::httpHost()}}" class="text-center sm:text-left">Contact</a>
		<a href="{{Request::httpHost()}}" class="text-center sm:text-left">Advertise</a>
		<a href="{{Request::httpHost()}}" class="text-center sm:text-left">Terms and Conditions</a>
		<a href="{{Request::httpHost()}}" class="text-center sm:text-left">Legal</a>
	</div>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</footer>