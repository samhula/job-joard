@props(['user'])

<div class="space-y-2 p-2 rounded-md shadow-md md:col-span-1 xl:col-span-2 dark:bg-zinc-800 h-[27.75rem]">
	<h2 class="font-semibold text-2xl">User</h2>
	<div class="flex flex-col w-full space-y-2">
		@if($user)
		<form class="w-full flex flex-col space-y-2" method="POST" action="">
			@csrf
			<label for="company-name" class="font-semibold">Name</label>
			<input type="text" name="company-name" id="company-name" value="{{$user->name}}" placeholder="{{$user->name}}" class="border w-full p-2 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none">
			<label for="company-name" class="font-semibold">Email</label>
			<input type="text" name="company-email" id="company-email" value="{{$user->email}}" placeholder="{{$user->email}}" class="border w-full p-2 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none">
			<button class="p-2 bg-blue-600 rounded-md text-white transition ease-in-out w-full">
				<p class="my-auto">Save</p>
			</button>
		</form>
		<a href="#" class="p-2 bg-gray-600 rounded-md text-white transition ease-in-out w-full">
			<p class="my-auto mx-auto text-center">Account Settings</p>
		</a>
		@endif
	</div>
</div>