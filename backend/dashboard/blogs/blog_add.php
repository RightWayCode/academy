<section class="p-6 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Add Blog</h2>

    <form class="space-y-5 bg-white p-6 shadow rounded-lg">

        <div>
            <label class="block mb-1 font-semibold">Blog Title</label>
            <input type="text"
                class="w-full px-3 py-2 border rounded-lg"
                placeholder="Enter blog title">
        </div>

        <div>
            <label class="block mb-1 font-semibold">Category</label>
            <select class="w-full px-3 py-2 border rounded-lg">
                <option>Admissions</option>
                <option>College Tips</option>
                <option>Events</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Content</label>
            <textarea rows="6"
                class="w-full px-3 py-2 border rounded-lg"
                placeholder="Write blog content here..."></textarea>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Status</label>
            <select class="w-full px-3 py-2 border rounded-lg">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg">
            Save Blog
        </button>
    </form>
</section>
