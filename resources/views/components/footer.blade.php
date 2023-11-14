<footer {{$attributes->merge(['class' => 'bg-gray-900 text-white p-2 grid grid-cols-1 sm:grid-cols-2 w-full sm:space-x-2 space-y-2'])}}>
	<div class="col-span-1 mx-auto sm:mx-0 sm:ml-auto">
		<img src="https://via.placeholder.com/200x200&text=oogabooga">
	</div>
	<div class="col-span-1 sm:p-2 mx-auto sm:mr-auto sm:my-auto">
		<p class="text-center sm:text-left">About Us</p>
		<p class="text-center sm:text-left">Pricing</p>
		<p class="text-center sm:text-left">Contact</p>
		<p class="text-center sm:text-left">Advertise</p>
		<p class="text-center sm:text-left">Terms and Conditions</p>
		<p class="text-center sm:text-left">Legal</p>
	</div>
</footer>
@vite(['resources/css/app.css', 'resources/js/app.js'])