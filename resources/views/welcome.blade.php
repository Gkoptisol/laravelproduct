<form method="POST" action="">
        <div class="mt-2">
          <label for="pname" class="text-sm text-gray-500">Product Name</label>
          <input id="pname" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="unittype" class="text-sm text-gray-500">Unit Type</label>
          <select name="unittype" id="unittype" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
                <option value="Qty">Qty</option>
                <option value="Ltr">Ltr</option>
                <option value="KG">KG</option>
                <option value="Meter">Meter</option>
          </select>
        </div>
        <div class="mt-2">
          <label for="pcategory" class="text-sm text-gray-500">Product Category</label>
          <input id="pcategory" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="pimage" class="text-sm text-gray-500">Product Images</label>
          <input id="pimage" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="pprice" class="text-sm text-gray-500">Product Price</label>
          <input id="pprice" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="discountpercent" class="text-sm text-gray-500">Discount Percentage</label>
          <input id="discountpercent" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="discountamt" class="text-sm text-gray-500">Discount Amount</label>
          <input id="discountamt" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="discountrangedates" class="text-sm text-gray-500">Discount Range Dates</label>
          <input id="discountrangedates" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="taxpercentage" class="text-sm text-gray-500">Tax Percentage</label>
          <input id="taxpercentage" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="taxamount" class="text-sm text-gray-500">Tax Amount</label>
          <input id="taxamount" type="number" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <div class="mt-2">
          <label for="stockentry" class="text-sm text-gray-500">Stock Entry</label>
          <input id="stockentry" type="text" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 w-full">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>