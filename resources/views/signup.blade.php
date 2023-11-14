<x-head />
<body class="w-full h-full flex flex-col mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<main class="h-screen flex flex-col mt-32 w-11/12 mx-auto mb-4">
		<div class="bg-stone-100 dark:bg-zinc-800 mx-auto w-11/12 md:w-3/5 xl:w-2/5 p-10 rounded">
			<form class="flex flex-col mx-auto space-y-2">
				<h2 class="w-10/12 mx-auto text-2xl font-semibold">Create an account</h2>
				<label class="w-10/12 mx-auto" for="email">Email</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="email" name="email" id="email" placeholder="Email">
				<label class="w-10/12 mx-auto" for="password">Password</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="password" name="password" id="password" placeholder="Password">
				<label class="w-10/12 mx-auto" for="password">Confirm Password</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="password" name="confirm-password" id="confirm-password" placeholder="Password">
				<div class="w-10/12 mx-auto flex flex-row space-x-2 mt-4">
					<input type="checkbox" name="checkbox-t-and-c" id="checkbox-t-and-c" value="tc-confirmed">
					<label class="w-10/12 md:w-3/4 text-sm" for="checkbox-t-and-c">I accept the <a href="#" class="text-blue-600 dark:text-blue-400">terms and conditions</a></label>
				</div>
			</form>
			<div class="mx-auto flex flex-row justify-center mt-4">
				<button class="w-10/12 p-3 bg-blue-600 text-white text-center rounded-md">
				Create an account
				</button>
			</div>
			<div class="w-10/12 mx-auto flex flex-row mt-4 text-sm">
				<p>Already have an account? Sign in <a href="{{request()->route()->url}}/jobsearch/public/signin" class="text-blue-600 dark:text-blue-400">here!</a></p>
			</div>
		</div>
	</main>
</body>
<x-footer class="translate-y-20"/>
</html>