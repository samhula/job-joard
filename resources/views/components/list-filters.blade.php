<select name="location" id="location" class="border rounded text-sm w-full p-2 md:col-span-1 dark:bg-gray-700 dark:border-gray-600">
	<option value="worldwide" selected="selected">Worldwide</option>
	<option value="Continents" disabled class="text-gray-200">--Continents--</option>
	@unless(count($continents) == 0)
		@foreach ($continents as $continent)
			<option value="{{$continent->name}}">{{$continent->name}}</option>
		@endforeach
	@endunless
	<option value="Country" disabled class="text-black">--Countries--</option>
	@unless(count($countries) == 0)
		@foreach ($countries as $country)
			<option value="{{$country->name}}">{{$country->name}}</option>
		@endforeach
	@endunless
</select>
<select name="salary" id="salary" class="border rounded text-sm p-2 w-full md:col-span-1 dark:bg-gray-700 dark:border-gray-600">
	<option value="10000" selected="selected">$10 000+</option>
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