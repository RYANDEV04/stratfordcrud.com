<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <div class="h4 mb-0">Resume Details</div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <!-- Navigation Buttons -->
            <div class="mb-3">
                <button class="unique-button" onclick="window.location.href='http://localhost/codx/public/';">HOME</button>
                <button class="unique-button" onclick="window.location.href='http://localhost/codx/public/main/create';">ADD NEW</button>
            </div>

            <!-- Personal and Educational Information -->
            <div class="row">
                <!-- Personal Information -->
                <div class="col-md-6">
                    <dl>
                        <dt class="text-muted">ID no.</dt>
                        <dd class="ps-4"><?= isset($data['id']) ? $data['id'] : '' ?></dd>
                        <dt class="text-muted">Name</dt>
                        <dd class="ps-4"><?= isset($data['name']) ? $data['name'] : '' ?></dd>
                        <dt class="text-muted">Age</dt>
                        <dd class="ps-4"><?= isset($data['age']) ? $data['age'] : '' ?></dd>
                        <dt class="text-muted">Birthday</dt>
                        <dd class="ps-4"><?= isset($data['birthday']) ? $data['birthday'] : '' ?></dd>
                        <dt class="text-muted">Gender</dt>
                        <dd class="ps-4"><?= isset($data['gender']) ? $data['gender'] : '' ?></dd>
                        <dt class="text-muted">Religion</dt>
                        <dd class="ps-4"><?= isset($data['religion']) ? $data['religion'] : '' ?></dd>
                        <dt class="text-muted">Civil Status</dt>
                        <dd class="ps-4"><?= isset($data['civil_status']) ? $data['civil_status'] : '' ?></dd>
                        <dt class="text-muted">Citizenship</dt>
                        <dd class="ps-4"><?= isset($data['citizenship']) ? $data['citizenship'] : '' ?></dd>
                        <dt class="text-muted">Contact #</dt>
                        <dd class="ps-4"><?= isset($data['contact']) ? $data['contact'] : '' ?></dd>
                        <dt class="text-muted">Email</dt>
                        <dd class="ps-4"><?= isset($data['email']) ? $data['email'] : '' ?></dd>
                        <dt class="text-muted">Address</dt>
                        <dd class="ps-4"><?= isset($data['address']) ? $data['address'] : '' ?></dd>
                        <dt class="text-muted">Height</dt>
                        <dd class="ps-4"><?= isset($data['height']) ? $data['height'] : '' ?></dd>
                        <dt class="text-muted">Weight</dt>
                        <dd class="ps-4"><?= isset($data['weight']) ? $data['weight'] : '' ?></dd>
                        <dt class="text-muted">Work Experience</dt>
                        <dd class="ps-4"><?= isset($data['work_experience']) ? $data['work_experience'] : '' ?></dd>
                    </dl>
                </div>

                <!-- Educational Background -->
                <div class="col-md-6">
                    <dl>
                        <dt class="text-muted">Elementary Level</dt>
                        <dd class="ps-4"><?= isset($data['elementary_level']) ? $data['elementary_level'] : '' ?></dd>
                        <dt class="text-muted">School Address</dt>
                        <dd class="ps-4"><?= isset($data['school_address']) ? $data['school_address'] : '' ?></dd>
                        <dt class="text-muted">Year Attended</dt>
                        <dd class="ps-4"><?= isset($data['year_attended']) ? $data['year_attended'] : '' ?></dd>
                        <dt class="text-muted">Secondary Level</dt>
                        <dd class="ps-4"><?= isset($data['secondary_level']) ? $data['secondary_level'] : '' ?></dd>
                        <dt class="text-muted">School Address</dt>
                        <dd class="ps-4"><?= isset($data['school_location']) ? $data['school_location'] : '' ?></dd>
                        <dt class="text-muted">Year Attended</dt>
                        <dd class="ps-4"><?= isset($data['year']) ? $data['year'] : '' ?></dd>
                        <dt class="text-muted">College Level</dt>
                        <dd class="ps-4"><?= isset($data['college_level']) ? $data['college_level'] : '' ?></dd>
                        <dt class="text-muted">School Address</dt>
                        <dd class="ps-4"><?= isset($data['location']) ? $data['location'] : '' ?></dd>
                        <dt class="text-muted">Year Attended</dt>
                        <dd class="ps-4"><?= isset($data['year_graduated']) ? $data['year_graduated'] : '' ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Buttons -->
    <div class="card-footer text-center">
        <a href="<?= base_url('main/edit/'.(isset($data['id']) ? $data['id'] : '')) ?>" 
           class="btn btn-primary btn-sm rounded-0">
            <i class="fa fa-edit"></i> Edit
        </a>
        <a href="<?= base_url('main/delete/'.(isset($data['id']) ? $data['id'] : '')) ?>" 
           class="btn btn-danger btn-sm rounded-0" 
           onclick="if(confirm('Are you sure to delete this contact details?') === false) event.preventDefault();">
            <i class="fa fa-trash"></i> Delete
        </a>
        <a href="<?= base_url('main/list') ?>" 
           class="btn btn-light bg-gradient-light border btn-sm rounded-0">
            <i class="fa fa-angle-left"></i> Back to List
        </a>
    </div>
</div>
