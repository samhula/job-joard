<x-head />
<body class="w-full h-full flex flex-col mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<main class="h-max flex flex-col mt-[calc(16vh)] w-full mx-auto mb-4">
		<div class="bg-stone-100 dark:bg-zinc-900 md:dark:bg-zinc-800 mx-auto w-full sm:w-11/12 md:w-3/5 xl:w-2/5 sm:p-10 rounded">
			<form method="POST" action="" enctype="multipart/form-data" class="flex flex-col mx-auto space-y-2">
				@csrf
				<h2 class="w-10/12 mx-auto text-2xl font-semibold">Create an account</h2>
				<label class="w-10/12 mx-auto" for="name">Name</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="text" name="name" id="name" placeholder="Name" value="{{old('name')}}">
				@error('name')
					<p class="w-10/12 mx-auto text-red-500">{{$message}}</p>
				@enderror
				<label class="w-10/12 mx-auto" for="email">Email</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}">
				@error('email')
					<p class="w-10/12 mx-auto text-red-500">{{$message}}</p>
				@enderror
				<label class="w-10/12 mx-auto" for="password">Password</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="password" name="password" id="password" placeholder="Password">
				@error('password')
					<p class="w-10/12 mx-auto text-red-500">{{$message}}</p>
				@enderror
				<label class="w-10/12 mx-auto" for="password_confirmation">Confirm Password</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="password" name="password_confirmation" id="password_confirmation" placeholder="Password">
				@error('password_confirmation')
					<p class="w-10/12 mx-auto text-red-500">{{$message}}</p>
				@enderror
				<label class="w-10/12 mx-auto" for="account_type">Who are you?</label>
				<div class="w-10/12 flex flex-row mx-auto">
					<div class="flex flex-row w-10/12 mx-auto space-x-2">
						<input type="radio" name="account_type" value="seeker">
						<label for="account_type">Job Seeker</label>
					</div>
					<div class="flex flex-row w-10/12 mx-auto space-x-2">
						<input type="radio" name="account_type" value="recruiter">
						<label for="account_type">Recruiter</label>
					</div>
				</div>
				@error('account_type')
					<p class="w-10/12 mx-auto text-red-500">{{$message}}</p>
				@enderror
				<p class="w-10/12 mx-auto">
					Terms and Conditions
				</p>
				<div class="w-10/12 mx-auto flex flex-row space-x-2 mt-4">
					<input type="checkbox" name="checkbox-t-and-c" id="checkbox-t-and-c" value="tc-confirmed">
					<label class="w-10/12 md:w-3/4 text-sm" for="checkbox-t-and-c">I accept the <a href="#" class="text-blue-600 dark:text-blue-400">terms and conditions</a></label>
				</div>
				<button type="submit" class="w-10/12 p-3 bg-blue-600 text-white text-center rounded-md mx-auto">
				Create an account
				</button>
			</form>
			<!-- <div class="mx-auto flex flex-row justify-center mt-4">
				<button type="submit" class="w-10/12 p-3 bg-blue-600 text-white text-center rounded-md">
				Create an account
				</button>
			</div> -->
			<div class="w-10/12 mx-auto flex flex-row mt-4 text-sm">
				<p>Already have an account? Sign in <a href="signin" class="text-blue-600 dark:text-blue-400">here!</a></p>
			</div>
		</div>
	</main>
<x-footer class="mt-[calc(20vh)]"/>
</body>
</html>