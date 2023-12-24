<x-head />
<body class="w-full h-full flex flex-col mx-auto dark:bg-zinc-900 dark:text-slate-200">
	<x-nav />
	<main class="h-max flex flex-col mt-[calc(15vh)] w-full mx-auto mb-4">
		<div class="bg-stone-100 dark:bg-zinc-900 md:dark:bg-zinc-800 mx-auto w-full sm:w-11/12 md:w-3/5 xl:w-2/5 p-4 sm:p-10 rounded flex flex-col space-y-4">
			<form class="flex flex-col mx-auto space-y-2 w-full" method="POST" action="/jobsearch/public/authenticate">
				@csrf
				<h2 class="w-10/12 mx-auto text-2xl font-semibold">Sign in to your account</h2>
				<label class="w-10/12 mx-auto" for="email">Email</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="email" name="email" id="email" placeholder="Email">
				<label class="w-10/12 mx-auto" for="password">Password</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:border-gray-600 dark:focus:bg-gray-500 focus:outline-none" type="password" name="password" id="password" placeholder="Password">
				<div class="w-10/12 mx-auto flex flex-row justify-center">
					<button value="submit" class="w-full p-3 mt-4 bg-blue-600 text-white text-center rounded-lg">
					Sign In
					</button>
				</div>
			</form>
			<!-- <div class="w-10/12 mx-auto flex flex-row mt-2 text-sm">
				<p>Forgot your password? Reset it <a href="{{request()->route()->url}}/jobsearch/public/resetpassword" class="text-blue-600 dark:text-blue-400">here!</a></p>
			</div> -->
			<div class="w-10/12 mx-auto flex flex-row text-sm">
				<p>Don't have an account? Sign up <a href="signup" class="text-blue-600 dark:text-blue-400">here!</a></p>
			</div>
		</div>
	</main>
<x-footer class="mt-[calc(30vh)]"/>
</body>
</html>