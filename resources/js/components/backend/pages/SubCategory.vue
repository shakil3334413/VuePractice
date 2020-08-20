<template>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Sub Category Add</strong></div>
                <div class="card-body card-block">
                    <form @submit.prevent="storedata()">
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Select Category</label>
                           <select v-model="category_id" class="form-control" :class="err.category_id ? 'is-invalid' : ''">
                            <option disabled value="">Please select one</option>
                                <option v-for="(item, index) in category" :key="index" v-bind:value="item.id">
                                        {{ item.name }}
                                </option>

                            </select>
                             <span v-if="err.category_id" class='text-danger'>{{ err.category_id[0] }}</span>
                        </div>
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Sub Category</label>
                            <input type="text" v-model="name" id="name" placeholder="Enter your Category name" class="form-control" :class="err.name ? 'is-invalid' : ''">
                             <span v-if="err.name" class='text-danger'>{{ err.name[0] }}</span>
                        </div>
                        <input type="submit" class="btn btn-danger" value="Insert">
                    </form>
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
                                    <th scope="col">Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in subcategory" :key="index">
                                    <th>{{ index+=1 }}</th>
                                    <td>{{item.category.name}}</td>
                                    <td>{{item.name}}</td>
                                    <td> <router-link :to="{ path : '/admin/subcategoryup/'+item.id }">Edit</router-link> | <a  @click="deleteEl(item.id)" class="btn btn-danger">Delete</a></td>
                                </tr>
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
        return {
            id : '',
            category_id:'',
            name:'',
            err : [],
            category : [],
            subcategory:[],
        }
    },
    mounted(){
        this.getData()
        this.getcategory()
    },


    methods: {
        getcategory(){
        axios.get('/api/subcategory/create')
            .then((res)=>{
                this.category = res.data.category
            })
            .catch(err=>{
                console.log(err)
            })
        },
         getData(){
            axios.get('/api/subcategory')
            .then((res)=>{
               this.subcategory = res.data.subcategory
               console.log(res.data.subcategory)
            })
            .catch(err=>{
                console.log(err)
            })
        },

        edit(id){

        },
        storedata(){
                this.err = []
                let fn = new FormData()
                fn.append('name',this.name);
                fn.append('category_id',this.category_id);
                axios.post('/api/subcategory',fn)
                .then((res)=>{
                    this.name='',
                    this.category_id=''
                this.getData()
            })
            .catch(error => {
                this.err = error.response.data.errors
                console.log(error.response.data.errors)
            })
        },
        deleteEl(id){
            axios.delete('/api/subcategory/'+ id)
            .then((res)=>{
                this.getData()
            })
            .catch(err=>{
                console.log(err)
            })
        }
    }
}
</script>
