<x-head />
<body class="w-full h-full mx-auto dark:bg-zinc-900">
	<x-nav />
	<main class="h-full flex flex-col mt-16 md:mt-24 w-full mx-auto sm:mb-4 dark:text-slate-200">
		<div class="md:bg-stone-100 mx-auto w-full md:w-4/5 p-2 sm:p-10 rounded md:dark:bg-zinc-800">
			<form method="POST" action="{{url('')}}/jobs" class="flex flex-col mx-auto space-y-2">
				@csrf
				<h2 class="w-10/12 mx-auto text-2xl font-semibold">Post a job</h2>
				<label class="w-10/12 mx-auto" for="job_title">Job Title</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600" type="text" name="job_title" id="job_title" placeholder="Job Title">
				<label class="w-10/12 mx-auto" for="job_type">Job Type</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600" type="text" name="job_type" id="job_type" placeholder="Full Time/Part Time/Permanent/Temporary">
				<div class="flex flex-col space-y-2 sm:space-y-0 sm:grid sm:grid-cols-6 sm:gap-2 w-10/12 mx-auto">
					<div class="flex flex-col space-y-2 sm:col-span-3 lg:col-span-2">
						<label class="w-full mx-auto" for="location">Location</label>
						<select name="location" id="location" class="border rounded text-sm w-full p-2 mx-auto dark:bg-gray-700 dark:border-gray-600">
							<option value="Worldwide" selected="selected">Worldwide</option>
							<option value="Continent" disabled>--Continents--</option>
							@unless(count($continents) == 0)
								@foreach ($continents as $continent)
									<option value="{{$continent->name}}">{{$continent->name}}</option>
								@endforeach
							@endunless
							<option value="Country" disabled>--Countries--</option>
							@unless(count($countries) == 0)
								@foreach ($countries as $country)
									<option value="{{$country->name}}">{{$country->name}}</option>
								@endforeach
							@endunless
						</select>
					</div>
					<div class="flex flex-col space-y-2 sm:col-span-3 lg:col-span-2">
						<label class="w-full mx-auto" for="salary">Salary ($USD/yr)</label>
						<select name="salary" id="salary" class="border rounded text-sm w-full p-2 mx-auto dark:bg-gray-700 dark:border-gray-600">
							<option value="0" selected="selected">$0+</option>
							<option value="10000">$10 000+</option>
							<option value="20000">$20 000+</option>
							<option value="30000">$30 000+</option>
							<option value="40000">$40 000+</option>
							<option value="50000">$50 000+</option>
							<option value="60000">$60 000+</option>
							<option value="70000">$70 000+</option>
							<option value="80000">$80 000+</option>
							<option value="90000">$90 000+</option>
							<option value="100000">$100 000+</option>
						</select>
					</div>
					<div class="flex flex-col space-y-2 col-span-6 lg:col-span-2">
						<label class="w-full mx-auto" for="deadline">Job closing date</label>
						<input class="w-full p-2 mx-auto rounded dark:bg-gray-700 dark:border-gray-600" type="date" min="{{now()->format('Y-m-d');}}" name="deadline" id="deadline">
					</div>
				</div>
				<label class="w-10/12 mx-auto" for="description">Job Description</label>
				<textarea class="w-10/12 p-2 mx-auto rounded-lg resize-none dark:bg-gray-700 dark:border-gray-600" rows="15" cols="50" name="description" id="description" placeholder="Job Description"></textarea>
				<label class="w-10/12 mx-auto" for="skills">Job Skills (Comma Separated)</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600" type="text" name="skills" id="skills" placeholder="Comma Separated">
				<label class="w-10/12 mx-auto" for="benefits">Job Benefits (Comma Separated)</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600" type="text" name="benefits" id="benefits" placeholder="Comma Separated">
				<!-- <div class="w-10/12 mx-auto flex flex-row space-x-2 mt-4">
					<input type="checkbox" name="checkbox-t-and-c" id="job-featured" value="">
					<label class="w-10/12 md:w-3/4 text-sm" for="checkbox-t-and-c">Make my job post <a href="#" class="text-blue-600">featured!</a> (+$30)</label>
				</div> -->
				<label class="w-10/12 mx-auto" for="url">Link to an external application</label>
				<input class="w-10/12 p-2 mx-auto rounded-lg dark:bg-gray-700 dark:border-gray-600" type="text" name="url" id="url" placeholder="URL">
			<div class="w-10/12 mx-auto flex flex-col space-y-2 mt-4">
				<p class="text-xl font-semibold">Sub Total</p>
				<hr class="dark:border-gray-600">
				<p class="flex flex-row gap-4">$<span>1.00</span><span class="text-sm">(Daily)</span></p>
				<!-- <p class="flex flex-row gap-4">$<span>0.00</span><span class="text-sm">(Featured)</span></p> -->
				<hr class="dark:border-gray-600">
				<p class="text-2xl font-bold">Total</p>
				<p class="flex flex-row gap-4">$<span>0.00</span></p>
			</div>
			<div class="w-10/12 mx-auto flex flex-row space-x-2 mt-4">
				<input type="checkbox" name="checkbox-t-and-c" id="checkbox-t-and-c" value="tc-confirmed">
				<label class="w-10/12 md:w-3/4 text-sm" for="checkbox-t-and-c" required>I accept the <a href="#" class="text-blue-600 dark:text-blue-400">terms and conditions</a></label>
			</div>
			<input class="w-10/12 p-3 bg-blue-600 text-white text-center rounded-md mx-auto" type="submit" value="Post">
			</form>
		</div>
	</main>
</body>
<x-footer class=""/>