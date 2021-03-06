<div>
    <div class="pt-8">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Create New Popup
            </h3>

        </div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">
                   Popup Title
                </label>
                <div class="mt-1">
                    <input wire:model.defer="PopUp.title"
                        type="text" name="title" id="title" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md
                        @error('PopUp.title') border-red-500 @enderror
                        ">
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">
                    Last name
                </label>
                <div class="mt-1">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email address
                </label>
                <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">
                    Country
                </label>
                <div class="mt-1">
                    <select id="country" name="country" autocomplete="country-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-6">
                <label for="street-address" class="block text-sm font-medium text-gray-700">
                    Street address
                </label>
                <div class="mt-1">
                    <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="city" class="block text-sm font-medium text-gray-700">
                    City
                </label>
                <div class="mt-1">
                    <input type="text" name="city" id="city" autocomplete="address-level2" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="region" class="block text-sm font-medium text-gray-700">
                    State / Province
                </label>
                <div class="mt-1">
                    <input type="text" name="region" id="region" autocomplete="address-level1" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="postal-code" class="block text-sm font-medium text-gray-700">
                    ZIP / Postal code
                </label>
                <div class="mt-1">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
        </div>
    </div>
</div>
