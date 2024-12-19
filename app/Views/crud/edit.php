<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-edit"></i> Edit Resume Details</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                <div class="mb-3">
                    <label for="" class="control-label">Full Name (first name, middle name, last name)</label>
                    <div class="input-group">
                        <input type="text" autofocus class="form-control form-control-border" id="firstname" name="firstname" value="<?= isset($data['firstname']) ? $data['firstname'] : '' ?>" required="required" placeholder="First Name">
                        <input type="text" class="form-control form-control-border" id="middlename" name="middlename" value="<?= isset($data['middlename']) ? $data['middlename'] : '' ?>" required="false" placeholder="Middle Name (optional)">
                        <input type="text" class="form-control form-control-border" id="lastname" name="lastname" value="<?= isset($data['lastname']) ? $data['lastname'] : '' ?>" required="required" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="gender" class="control-label">Gender</label>
                    <select name="gender" id="gender" class="form-select form-select-border" required>
                        <option <?= isset($data['gender']) && $data['gender'] == 'Male' ? 'selecte' : '' ?>>Male</option>
                        <option <?= isset($data['gender']) && $data['gender'] == 'Female' ? 'selecte' : '' ?>>Female</option>
                    </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="religion" class="control-label">Religion</label>
                            <input type="text" class="form-control" id="religion" name="religion" required="required" value="<?= isset($data['religion']) ? $data['religion'] : '' ?>">
                       </div>
                  <div class="mb-3">
                    <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="age" class="control-label">Age</label>
                            <input type="text" class="form-control" id="age" name="age" required="required" value="<?= isset($data['age']) ? $data['age'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="birthday" class="control-label">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" required="required" value="<?= isset($data['birthday']) ? $data['birthday'] : '' ?>">
             </div>
                <div class="mb-3">
                    <div class="row">
                    <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="civil_status" class="control-label">Civil Status</label>
                    <select name="civil_status" id="civil_status" class="form-select form-select-border" required>
                        <option <?= isset($data['civil_status']) && $data['civil_status'] == 'Single' ? 'selecte' : '' ?>>Single</option>
                        <option <?= isset($data['civil_status']) && $data['civil_status'] == 'Marriage' ? 'selecte' : '' ?>>Marriage</option>
                        <option <?= isset($data['civil_status']) && $data['civil_status'] == 'Divorced' ? 'selecte' : '' ?>>Divorced</option>
                        <option <?= isset($data['civil_status']) && $data['civil_status'] == 'Widowed' ? 'selecte' : '' ?>>Widowed</option>
                    </select>
                  </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="citizenship" class="control-label">Citizenship</label>
                            <input type="text" class="form-control" id="citizenship" name="citizenship" required="required" value="<?= isset($data['citizenship']) ? $data['citizenship'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="contact" class="control-label">Contact no.</label>
                            <input type="text" class="form-control" id="contact" name="contact" required="required" value="<?= isset($data['contact']) ? $data['contact'] : '' ?>">
                  </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required="required" value="<?= isset($data['email']) ? $data['email'] : '' ?>">
                 </div>

                 <div class="mb-3">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="height" class="control-label">Height</label>
                            <input type="number" class="form-control" id="height" name="height" required="required" value="<?= isset($data['height']) ? $data['height'] : '' ?>">
                
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                         <label for="weight" class="control-label">Weight</label>
                         <input type="number" class="form-control" id="weight" name="weight" required="required" value="<?= isset($data['weight']) ? $data['weight'] : '' ?>">
                 
</div>
                  <div class="mb-3">
                    <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="address" class="control-label">Address</label>
                    <textarea name="address" id="address" cols="30" rows="3" class="form-control" required="required"><?= isset($data['address']) ? $data['address'] : '' ?></textarea>
                </div>
            
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <label for="work_experience" class="control-label">Work Experience</label>
                    <textarea name="work_experience" id="work_experience" cols="30" rows="3" class="form-control" required="required"><?= isset($data['work_experience']) ? $data['work_experience'] : '' ?></textarea>
                </div>
         </form>
                   </div>
                   <div class="row mb-3">
    <!-- Elementary Level -->
    <div class="col-md-4">
        <label for="elementary_level" class="control-label">Elementary Level</label>
        <input type="text" class="form-control" id="elementary_level" name="elementary_level" required value="<?= isset($data['elementary_level']) ? $data['elementary_level'] : '' ?>">
    </div>
    <div class="col-md-4">
        <label for="school_address" class="control-label">School Address</label>
        <input type="text" class="form-control" id="school_address" name="school_address" required value="<?= isset($data['school_address']) ? $data['school_address'] : '' ?>">
    </div>
    <div class="col-md-4">
        <label for="year_attended" class="control-label">Year Attended</label>
        <input type="text" class="form-control" id="year_attended" name="year_attended" required value="<?= isset($data['year_attended']) ? $data['year_attended'] : '' ?>">
    </div>
</div>

<div class="row mb-3">
    <!-- Secondary Level -->
    <div class="col-md-4">
        <label for="secondary_level" class="control-label">Secondary Level</label>
        <input type="text" class="form-control" id="secondary_level" name="secondary_level" required value="<?= isset($data['secondary_level']) ? $data['secondary_level'] : '' ?>">
    </div>
    <div class="col-md-4">
        <label for="school_location" class="control-label">School Address</label>
        <input type="text" class="form-control" id="school_location" name="school_location" required value="<?= isset($data['school_location']) ? $data['school_location'] : '' ?>">
    </div>
    <div class="col-md-4">
        <label for="year" class="control-label">Year Attended</label>
        <input type="text" class="form-control" id="year" name="year" required value="<?= isset($data['year']) ? $data['year'] : '' ?>">
    </div>
</div>

<div class="row mb-3">
    <!-- College Level -->
    <div class="col-md-4">
        <label for="college_level" class="control-label">College Level</label>
        <input type="text" class="form-control" id="college_level" name="college_level" required value="<?= isset($data['college_level']) ? $data['college_level'] : '' ?>">
    </div>
    <div class="col-md-4">
        <label for="location" class="control-label">School Address</label>
        <input type="text" class="form-control" id="location" name="location" required value="<?= isset($data['location']) ? $data['location'] : '' ?>">
    </div>
    <div class="col-md-4">
        <label for="year_graduated" class="control-label">Year Attended</label>
        <input type="text" class="form-control" id="year_graduated" name="year_graduated" required value="<?= isset($data['year_graduated']) ? $data['year_graduated'] : '' ?>">
    </div>
</div>


    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <a class="btn btn-secondary" href="<?= base_url('main/view_details/'.(isset($data['id']) ? $data['id'] : '')) ?>"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>