<!-- Contact Inquiry List Page -->
<div class="p-6">
  <h1 class="text-2xl font-bold mb-4">Contact Inquiries</h1>

  <!-- Status Filter -->
  <div class="mb-4 flex gap-3">
    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">All</button>
    <button class="px-4 py-2 bg-yellow-500 text-white rounded-lg">Pending</button>
    <button class="px-4 py-2 bg-purple-500 text-white rounded-lg">In Progress</button>
    <button class="px-4 py-2 bg-green-600 text-white rounded-lg">Resolved</button>
  </div>

  <!-- Inquiry Table -->
  <div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="min-w-full text-left text-sm">
      <thead class="bg-gray-100">
        <tr>
          <th class="p-3">Name</th>
          <th class="p-3">Email</th>
          <th class="p-3">Subject</th>
          <th class="p-3">Status</th>
          <th class="p-3">Created At</th>
          <th class="p-3 text-right">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
          <td class="p-3">Rahul Sharma</td>
          <td class="p-3">rahul@example.com</td>
          <td class="p-3">Admission Query</td>
          <td class="p-3"><span class="bg-yellow-400 px-2 py-1 rounded text-white">Pending</span></td>
          <td class="p-3">2024-01-15</td>
          <td class="p-3 text-right">
            <a href="#details1" class="text-blue-600">View</a>
          </td>
        </tr>
        <tr class="border-b">
          <td class="p-3">Aditi Verma</td>
          <td class="p-3">aditi@example.com</td>
          <td class="p-3">Course Info</td>
          <td class="p-3"><span class="bg-green-500 px-2 py-1 rounded text-white">Resolved</span></td>
          <td class="p-3">2024-01-10</td>
          <td class="p-3 text-right">
            <a href="#details2" class="text-blue-600">View</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Inquiry Details Page -->
<div id="details1" class="p-6 mt-10">
  <h2 class="text-xl font-bold mb-3">Inquiry Details</h2>

  <div class="bg-white shadow rounded-lg p-5">

    <p><strong>Name:</strong> Rahul Sharma</p>
    <p><strong>Email:</strong> rahul@example.com</p>
    <p><strong>Phone:</strong> 9876543210</p>
    <p><strong>Subject:</strong> Admission Query</p>

    <p class="mt-4"><strong>Message:</strong></p>
    <p class="bg-gray-50 p-3 rounded">
      Sir, I want details about BCA 2024 admission process.
    </p>

    <!-- Status Update -->
    <div class="mt-6 flex gap-3">
      <form method="POST" action="#">
        <input type="hidden" name="status" value="resolved" />
        <button class="px-4 py-2 bg-green-600 text-white rounded-lg">Mark as Resolved</button>
      </form>

      <form method="POST" action="#">
        <input type="hidden" name="status" value="in_progress" />
        <button class="px-4 py-2 bg-yellow-500 text-white rounded-lg">Mark In Progress</button>
      </form>
    </div>
  </div>
</div>
