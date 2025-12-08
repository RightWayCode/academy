<section class="p-6 max-w-xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Add Blog Category</h2>

    <form class="space-y-5 bg-white p-6 shadow rounded-lg">
        <div>
            <label class="block mb-1 font-medium">Category Name</label>
            <input type="text" 
                class="w-full px-3 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Enter category name">
        </div>

        <div>
            <label class="block mb-1 font-medium">Status</label>
            <select class="w-full px-3 py-2 border rounded-lg">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">
            Save Category
        </button>
    </form>
</section>
