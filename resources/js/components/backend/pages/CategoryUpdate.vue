<template>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Category Update</strong></div>
                <div class="card-body card-block">
                    <from>
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Company</label>
                            <input type="text" name="name" id="name" placeholder="Enter your Category name" class="form-control">
                        </div>
                        <input type="sumit" class="btn btn-danger" value="submit">
                    </from>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Category Table</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>Edit | Delete</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</template>
