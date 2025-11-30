
<!-- CONTACT -->
<section id="contact" class="bg-gradient-to-r from-white to-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-8 items-center">
        <div>
            <h4 class="text-2xl font-bold text-gray-800">Get Started with Ashish Academy</h4>
            <p class="mt-3 text-gray-600">Fill the form or call us — we will help with admission, study packs,
                assignments and classes.</p>

            <ul class="mt-6 space-y-3 text-gray-700">
                <li><span class="font-semibold">Phone:</span> <a href="tel:+919876543210" class="text-orange-600">+91
                        9717572295</a></li>
                <li><span class="font-semibold">Email:</span> <a href="mailto:support@ashishtiwariacademy.in"
                        class="text-orange-600">support@ashishtiwariacademy.in</a></li>
                <li><span class="font-semibold">Address:</span> Ashish Tiwari Academy, New Delhi</li>
            </ul>
        </div>

        <form class="bg-white p-6 rounded-xl shadow"
            onsubmit="event.preventDefault(); alert('Form submitted — we will contact you shortly.');">
            <div class="grid gap-3">
                <input required name="name" placeholder="Full name" class="border rounded-md px-3 py-2" />
                <input required type="email" name="email" placeholder="Email address"
                    class="border rounded-md px-3 py-2" />
                <input required name="phone" placeholder="Phone number" class="border rounded-md px-3 py-2" />
                <select name="service" class="border rounded-md px-3 py-2">
                    <option value="">Choose service (Admission / Books / Classes)</option>
                    <option>Admission Assistance</option>
                    <option>Study Materials</option>
                    <option>Live Classes</option>
                    <option>Assignment Help</option>
                </select>
                <textarea name="message" rows="4" placeholder="Message (optional)"
                    class="border rounded-md px-3 py-2"></textarea>
                <div class="flex items-center gap-3">
                    <button class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md font-semibold">Send
                        Request</button>
                    <button type="reset" class="bg-gray-100 px-4 py-2 rounded-md">Clear</button>
                </div>
            </div>
        </form>

    </div>
</section>