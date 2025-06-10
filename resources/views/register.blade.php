<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Register - Soni Samaj</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#2563eb',
          },
        },
      },
    };
  </script>
  <!-- Optional: DaisyUI -->
  <script src="https://cdn.jsdelivr.net/npm/daisyui"></script>
</head>
<body class="bg-gray-100 text-gray-700">
  <form method="POST" action="{{ url('/register') }}" enctype="multipart/form-data"
    class="max-w-4xl mx-auto my-10 p-10 bg-white rounded-2xl shadow-2xl space-y-8">
    @csrf
    <h2 class="text-3xl font-extrabold text-center text-primary">Soni Samaj Registration Form</h2>
    <p class="text-center text-gray-500">Please fill out the details below to complete your registration</p>

    <!-- Section: Personal Information -->
    <div>
      <h3 class="text-xl font-semibold text-primary mb-2 border-b pb-1">Personal Information</h3>
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block mb-1 font-medium">Full Name</label>
          <input type="text" name="full_name" required placeholder="Full Name"
            class="input input-bordered w-full focus:outline-primary" />
        </div>
        <div>
          <label class="block mb-1 font-medium">Father's Name</label>
          <input type="text" name="father_name" required placeholder="Father's Name"
            class="input input-bordered w-full focus:outline-primary" />
        </div>

        <div>
          <label class="block mb-1 font-medium">Mother's Name</label>
          <input type="text" name="mother_name" required placeholder="Mother's Name"
            class="input input-bordered w-full" />
        </div>
        <div>
          <label class="block mb-1 font-medium">Date of Birth</label>
          <input type="date" name="dob" required class="input input-bordered w-full" />
        </div>

        <div>
          <label class="block mb-1 font-medium">Gender</label>
          <select name="gender" class="select select-bordered w-full">
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div>
          <label class="block mb-1 font-medium">Marital Status</label>
          <select name="marital_status" class="select select-bordered w-full">
            <option value="">Marital Status</option>
            <option>Single</option>
            <option>Married</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Section: Gotra -->
    <div>
      <h3 class="text-xl font-semibold text-primary mb-2 border-b pb-1">Gotra Information</h3>
      <div class="grid md:grid-cols-2 gap-6">
        <input type="text" name="gotra_self" placeholder="Gotra - Self" class="input input-bordered w-full" />
        <input type="text" name="gotra_mother" placeholder="Gotra - Mother" class="input input-bordered w-full" />
        <input type="text" name="gotra_nani" placeholder="Gotra - Nani" class="input input-bordered w-full" />
        <input type="text" name="gotra_dadi" placeholder="Gotra - Dadi" class="input input-bordered w-full" />
      </div>
    </div>

    <!-- Section: Education and Blood -->
    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block font-medium mb-1">Qualification</label>
        <select name="qualification" class="select select-bordered w-full">
          <option value="">Select Qualification</option>
          <option>High School</option>
          <option>Graduate</option>
        </select>
      </div>
      <div>
        <label class="block font-medium mb-1">Blood Group</label>
        <select name="blood_group" class="select select-bordered w-full">
          <option value="">Select Blood Group</option>
          <option>A+</option>
          <option>B+</option>
        </select>
      </div>
    </div>

    <!-- Section: Contact Info -->
    <div>
      <h3 class="text-xl font-semibold text-primary mb-2 border-b pb-1">Contact Information</h3>
      <div class="grid md:grid-cols-2 gap-6">
        <input type="text" name="mobile" placeholder="Mobile Number" class="input input-bordered w-full" />
        <input type="text" name="whatsapp" placeholder="WhatsApp Number" class="input input-bordered w-full" />
      </div>
    </div>

    <!-- Section: Work Info -->
    <div>
      <h3 class="text-xl font-semibold text-primary mb-2 border-b pb-1">Work Details</h3>
      <div class="grid md:grid-cols-2 gap-6">
        <select name="work_type" class="select select-bordered w-full">
          <option value="">Job or Business</option>
          <option>Job</option>
          <option>Business</option>
        </select>
        <select name="job_type" class="select select-bordered w-full">
          <option value="">Private or Government</option>
          <option>Private</option>
          <option>Government</option>
        </select>
        <input type="text" name="designation" placeholder="Designation" class="input input-bordered w-full" />
        <input type="text" name="work_city" placeholder="Work City" class="input input-bordered w-full" />
      </div>
    </div>

    <!-- Section: Address -->
    <div>
      <h3 class="text-xl font-semibold text-primary mb-2 border-b pb-1">Address</h3>
      <textarea name="current_address" rows="2" placeholder="Current Address"
        class="textarea textarea-bordered w-full mb-4"></textarea>
      <textarea name="permanent_address" rows="2" placeholder="Permanent Address"
        class="textarea textarea-bordered w-full"></textarea>
    </div>

    <!-- Section: Devotional Info -->
    <div>
      <h3 class="text-xl font-semibold text-primary mb-2 border-b pb-1">Devotional Information</h3>
      <div class="grid md:grid-cols-3 gap-6">
        <input type="text" name="satimata_place" placeholder="Satimata Place" class="input input-bordered w-full" />
        <input type="text" name="bheruji_place" placeholder="Bheruji Place" class="input input-bordered w-full" />
        <input type="text" name="kuldevi_place" placeholder="Kuldevi Place" class="input input-bordered w-full" />
      </div>
    </div>

    <!-- Section: Profile Photo -->
    <div>
      <label class="block font-medium mb-1">Profile Photo</label>
      <input type="file" name="profile_photo" class="file-input file-input-bordered w-full" />
    </div>

    <!-- Submit -->
    <button type="submit"
      class="btn btn-primary w-full text-lg font-bold tracking-wide hover:scale-105 transition-transform duration-200">
      Submit Registration
    </button>
  </form>
</body>
</html>
