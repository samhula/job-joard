<x-head />
<body class="w-full h-full mx-auto">
	<x-nav />
	<main class="h-full flex flex-col mt-16 md:mt-32 w-full mx-auto mb-4">
		<div class="bg-stone-100 mx-auto w-full md:w-4/5 p-2 sm:p-10 rounded">
			<h2 class="w-10/12 mx-auto text-2xl font-semibold mb-2">Account Details</h2>
			<form class="flex flex-col mx-auto space-y-2">
				<label class="w-10/12 mx-auto" for="email">Email*</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg" type="email" name="email" id="email" value="email@email.com">
				<label class="w-10/12 mx-auto" for="resume">CV/Resume</label>
				<input class="w-10/12 mx-auto file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" type="file" name="resume" id="resume">
				<label class="w-10/12 mx-auto" for="company-name">Company Name</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg" type="text" name="company-name" id="company-name" value="Company Name">
				<label class="w-10/12 mx-auto" for="company-logo">Company Logo</label>
				<input class="w-10/12 mx-auto file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" type="file" name="company-logo" id="company-logo">
				<div class="w-10/12 mx-auto flex flex-row space-x-2 mt-4">
					<input type="checkbox" name="checkbox-t-and-c" id="checkbox-t-and-c" value="tc-confirmed">
					<label class="w-10/12 md:w-3/4 text-sm" for="checkbox-t-and-c">I accept the <a href="#" class="text-blue-600">terms and conditions</a></label>
				</div>
			</form>
			<div class="mx-auto flex flex-row justify-center mt-4">
				<button class="w-10/12 p-3 bg-blue-600 text-white text-center rounded-md">
				Save
				</button>
			</div>
		</div>
	</main>
</body>
<x-footer class="translate-y-20"/>
</html>