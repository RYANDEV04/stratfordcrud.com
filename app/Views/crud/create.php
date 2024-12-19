<div class="card border-0 shadow-sm rounded-3">
    <!-- Card Header -->
    <div class="card-header bg-gradient-primary text-light rounded-top">
        <h4 class="mb-0 d-flex align-items-center">
            <i class="far fa-plus-square me-2"></i> Add New Resume Details
        </h4>
    </div>

    <!-- Card Body -->
    <div class="card-body p-4">
        <div class="container-fluid">
            <!-- Form -->
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id">

                <!-- Navigation Buttons -->
                <div class="mb-3">
                    <button class="unique-button" onclick="window.location.href='http://localhost/codx/public/';">HOME</button>
                    <button class="unique-button" onclick="window.location.href='http://localhost/codx/public/main/list';">LIST</button>
                </div>

                <!-- Full Name -->
                <div class="mb-4">
                    <label for="" class="form-label fw-semibold">Full Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="First Name" value="<?= !empty($request->getPost('firstname')) ? $request->getPost('firstname') : '' ?>">
                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name (Optional)" value="<?= !empty($request->getPost('middlename')) ? $request->getPost('middlename') : '' ?>">
                        <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Last Name" value="<?= !empty($request->getPost('lastname')) ? $request->getPost('lastname') : '' ?>">
                    </div>
                </div>

                <!-- Gender and Religion -->
                <div class="row mb-4">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="gender" class="form-label fw-semibold">Gender</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option <?= !empty($request->getPost('gender')) && $request->getPost('gender') == 'Male' ? 'selected' : '' ?>>Male</option>
                            <option <?= !empty($request->getPost('gender')) && $request->getPost('gender') == 'Female' ? 'selected' : '' ?>>Female</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="religion" class="form-label fw-semibold">Religion</label>
                        <input type="text" class="form-control" id="religion" name="religion" required placeholder="Religion" value="<?= !empty($request->getPost('religion')) ? $request->getPost('religion') : '' ?>">
                    </div>
                </div>

                <!-- Age and birthday -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <label for="age" class="form-label fw-semibold">Age</label>
                    <input type="text" class="form-control" id="age" name="age" required placeholder="Age" value="<?= !empty($request->getPost('age')) ? $request->getPost('age') : '' ?>">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <label for="birthday" class="form-label fw-semibold">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required placeholder="Your Birthday" value="<?= !empty($request->getPost('birthday')) ? $request->getPost('birthday') : '' ?>">
                </div>

                <!-- Civil Status and Citizenship -->
                <div class="row mb-4">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="civil_status" class="form-label fw-semibold">Civil Status</label>
                        <select name="civil_status" id="civil_status" class="form-select" required>
                            <option <?= !empty($request->getPost('civil_status')) && $request->getPost('civil_status') == 'Single' ? 'selected' : '' ?>>Single</option>
                            <option <?= !empty($request->getPost('civil_status')) && $request->getPost('civil_status') == 'Married' ? 'selected' : '' ?>>Married</option>
                            <option <?= !empty($request->getPost('civil_status')) && $request->getPost('civil_status') == 'Divorced' ? 'selected' : '' ?>>Divorced</option>
                            <option <?= !empty($request->getPost('civil_status')) && $request->getPost('civil_status') == 'Widowed' ? 'selected' : '' ?>>Widowed</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="citizenship" class="form-label fw-semibold">Citizenship</label>
                        <input type="text" class="form-control" id="citizenship" name="citizenship" required placeholder="Citizenship" value="<?= !empty($request->getPost('citizenship')) ? $request->getPost('citizenship') : '' ?>">
                    </div>
                </div>

                <!-- Contact and Email -->
                <div class="row mb-4">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="contact" class="form-label fw-semibold">Contact #</label>
                        <input type="text" class="form-control" id="contact" name="contact" required placeholder="Contact Number" value="<?= !empty($request->getPost('contact')) ? $request->getPost('contact') : '' ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email Address" value="<?= !empty($request->getPost('email')) ? $request->getPost('email') : '' ?>">
                    </div>
                </div>

                <!-- Height and Weight -->
                <div class="row mb-4">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="height" class="form-label fw-semibold">Height (cm)</label>
                        <input type="number" class="form-control" id="height" name="height" required placeholder="Height in cm" value="<?= !empty($request->getPost('height')) ? $request->getPost('height') : '' ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="weight" class="form-label fw-semibold">Weight (kg)</label>
                        <input type="number" class="form-control" id="weight" name="weight" required placeholder="Weight in kg" value="<?= !empty($request->getPost('weight')) ? $request->getPost('weight') : '' ?>">
                    </div>
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <label for="address" class="form-label fw-semibold">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3" required placeholder="Complete Address"><?= !empty($request->getPost('address')) ? $request->getPost('address') : '' ?></textarea>
                </div>

                <!-- Work Experience -->
                <div class="mb-4">
                    <label for="work_experience" class="form-label fw-semibold">Work Experience</label>
                    <textarea name="work_experience" id="work_experience" class="form-control" rows="3" required placeholder="Your Experience"><?= !empty($request->getPost('work_experience')) ? $request->getPost('work_experience') : '' ?></textarea>
                </div>
<!-- Educational Background -->
<div class="mb-4">
    <h5 class="fw-semibold">Educational Background</h5>

   <!-- Elementary -->
<div class="row mb-3">
    <div class="col-md-4">
        <label for="elementary_level" class="form-label">Elementary Level</label>
        <input type="elementary_level" class="form-control mb-2" id="elementary_level" name="elementary_level" placeholder="School Name" required>
    </div>
    <div class="col-md-4">
        <label for="school_address" class="form-label">School Address</label>
        <input type="text" class="form-control mb-2" id="school_address" name="school_address" placeholder="School Address" required>
    </div>
    <div class="col-md-4">
        <label for="year_attended" class="form-label">Year Attended</label>
        <input type="text" class="form-control mb-2" id="year_attended" name="year_attended" placeholder="Year Graduated" required>
    </div>
</div>

<!-- Secondary -->
<div class="row mb-3">
    <div class="col-md-4">
        <label for="secondary_level" class="form-label">Secondary Level</label>
        <input type="text" class="form-control mb-2" id="secondary_level" name="secondary_level" placeholder="School Name" required>
    </div>
    <div class="col-md-4">
        <label for="school_location" class="form-label">School Address</label>
        <input type="text" class="form-control mb-2" id="school_location" name="school_location" placeholder="School Address" required>
    </div>
    <div class="col-md-4">
        <label for="year" class="form-label">Year Attended</label>
        <input type="text" class="form-control mb-2" id="year" name="year" placeholder="Year Graduated" required>
    </div>
</div>

<!-- College -->
<div class="row mb-3">
    <div class="col-md-4">
        <label for="college_level" class="form-label">College Level</label>
        <input type="text" class="form-control mb-2" id="college_level" name="college_level" placeholder="School Name" required>
    </div>
    <div class="col-md-4">
        <label for="location" class="form-label">School Address</label>
        <input type="text" class="form-control mb-2" id="location" name="location" placeholder="School Address" required>
    </div>
    <div class="col-md-4">
        <label for="year_graduated" class="form-label">Year Attended</label>
        <input type="text" class="form-control mb-2" id="year_graduated" name="year_graduated" placeholder="Year Graduated" required>
    </div>
</div>

</div>
            </form>
        </div>
    </div>

    <!-- Card Footer -->
    <div class="card-footer bg-light text-center py-3">
        <button class="btn btn-primary btn-lg me-3" form="create-form" type="submit">
            <i class="fa fa-save me-2"></i>Save Details
        </button>
        <button class="btn btn-secondary btn-lg" form="create-form" type="reset">
            <i class="fa fa-times me-2"></i>Reset
        </button>
    </div>
</div>
