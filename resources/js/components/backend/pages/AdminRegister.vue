<template>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Admin  {{ !editmode ? "Add" : "Edit" }}</strong></div>
                <div class="card-body card-block">
                    <form  @submit.prevent="editmode ? updatedata() : storedata()">

                        <div class="form-group">
                            <label for="company" class=" form-control-label">First Name</label>
                            <input type="text" v-model="first_name" id="name" placeholder="Enter your First Name" class="form-control">
                             <!-- <span v-if="err.first_name" class='text-danger'>{{ err.first_name[0] }}</span> -->
                        </div>
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Last Name</label>
                            <input type="text" v-model="last_name" id="name" placeholder="Enter your Last Name" class="form-control">
                             <!-- <span v-if="err.last_name" class='text-danger'>{{ err.last_name[0] }}</span> -->
                        </div>
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Email</label>
                            <input type="text" v-model="last_name" id="name" placeholder="Enter your Last Name" class="form-control">
                             <!-- <span v-if="err.last_name" class='text-danger'>{{ err.last_name[0] }}</span> -->
                        </div>
                        <input type="submit" class="btn btn-danger" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Admin Table Data</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr v-for="(item, index) in category" :key="index">
                                    <th scope="row">{{ index+=1 }}</th>
                                    <td>{{ item.name }}</td>
                                    <td><a @click="deleteEl(item.id)">Delet</a> | <a @click="editdata(item.id)">Edit</a> </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</template>


<script>
export default {

    data(){
        return{
            first_name:'',
            last_name:'',
            email:'',
            phone:'',
            admin_type:'',
            password:'',
            editmode:false
        }
    },
    methods :{

        updatedata(){

        },
        storedata(){

        }
    }
}
</script>
