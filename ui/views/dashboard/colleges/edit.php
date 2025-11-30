<!-- Create / Edit College -->
<div class="p-6 max-w-3xl">

    <h2 class="text-2xl font-semibold mb-6">Add New College</h2>

    <form action="" method="POST" class="space-y-5">

        <!-- College Name -->
        <div>
            <label class="block mb-1 font-medium">College Name</label>
            <input type="text" name="college_name"
                   class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500"
                   placeholder="Enter college name">
        </div>

        <!-- Address -->
        <div>
            <label class="block mb-1 font-medium">Address</label>
            <textarea name="address"
                      class="w-full border rounded-lg px-3 py-2 h-28 focus:ring-2 focus:ring-blue-500"
                      placeholder="Write address here"></textarea>
        </div>

        <!-- Status -->
        <div>
            <label class="block mb-1 font-medium">Status</label>
            <select name="status"
                    class="w-full border rounded-lg px-3 py-2">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Save College
        </button>
    </form>

</div>
