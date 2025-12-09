<div class="p-6 max-w-xl mx-auto">
    <h1 class="text-2xl font-semibold mb-5">Add New Service</h1>

    <form action="" method="POST" class="bg-white p-6 rounded-lg shadow space-y-5">

        <!-- Service Name -->
        <div>
            <label class="block font-medium mb-1">Service Name</label>
            <input type="text" name="service_name"
                class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-500"
                placeholder="Enter service name">
        </div>

        <!-- Slug -->
        <div>
            <label class="block font-medium mb-1">Slug</label>
            <input type="text" name="slug"
                class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-500"
                placeholder="auto-generated or custom slug">
        </div>

        <!-- Description -->
        <div>
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description"
                class="w-full px-3 py-2 border rounded focus:ring-2 focus:ring-blue-500"
                placeholder="Enter details"></textarea>
        </div>

        <!-- Status -->
        <div>
            <label class="block font-medium mb-1">Status</label>
            <select name="status"
                class="w-full border px-3 py-2 rounded focus:ring-2 focus:ring-blue-500">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save Service
        </button>
    </form>
</div>
