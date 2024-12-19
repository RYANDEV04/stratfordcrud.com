<div class="card card-outline card-primary rounded-0">
    <!-- Card Header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">List of Resume</h4>
        <div>
            <!-- Buttons -->
            <a href="http://localhost/codx/public/" class="btn btn-primary btn-sm me-2">Home</a>
            <a href="http://localhost/codx/public/main/create" class="btn btn-secondary btn-sm">Add New</a>
        </div>
    </div>

    <!-- Card Body -->
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-striped table-bordered">
                <!-- Define Table Columns -->
                <colgroup>
                    <col width="5%">
                    <col width="15%">
                    <col width="10%">
                    <col width="5%">
                    <col width="10%">
                    <col width="15%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>

                <!-- Table Header -->
                <thead>
                    <tr class="bg-gradient bg-primary text-light">
                        <th class="py-1 text-center">#</th>
                        <th class="py-1 text-center">Name</th>
                        <th class="py-1 text-center">Gender</th>
                        <th class="py-1 text-center">Age</th>
                        <th class="py-1 text-center">Contact</th>
                        <th class="py-1 text-center">Email</th>
                        <th class="py-1 text-center">Address</th>
                        <th class="py-1 text-center">Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                    <?php if (count($list) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $row): ?>
                            <tr>
                                <th class="p-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="p-1 align-middle">
                                    <?= $row->lastname . ", " . $row->firstname . (!empty($row->middlename) ? " " . $row->middlename : '') ?>
                                </td>
                                <td class="p-1 align-middle"><?= $row->gender ?></td>
                                <td class="p-1 align-middle"><?= $row->age ?></td>
                                <td class="p-1 align-middle"><?= $row->contact ?></td>
                                <td class="p-1 align-middle"><?= $row->email ?></td>
                                <td class="p-1 align-middle"><?= $row->address ?></td>
                                <td class="p-1 align-middle text-center">
                                    <!-- Action Buttons -->
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?= base_url('main/view_details/' . $row->id) ?>" 
                                           class="btn btn-default bg-gradient-light border text-dark rounded-0" 
                                           title="View Contact">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="<?= base_url('main/edit/' . $row->id) ?>" 
                                           class="btn btn-primary rounded-0" 
                                           title="Edit Contact">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('main/delete/' . $row->id) ?>" 
                                           onclick="if(confirm('Are you sure to delete this contact details?') === false) event.preventDefault()" 
                                           class="btn btn-danger rounded-0" 
                                           title="Delete Contact">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center p-2">No data available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
