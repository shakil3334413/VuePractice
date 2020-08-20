<template>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Category {{ !editmode ? "Add" : "Edit" }}</strong></div>
                <div class="card-body card-block">
                    <form  @submit.prevent="editmode ? updatedata() : storedata()">

                        <div class="form-group">
                            <label for="company" class=" form-control-label">Company</label>
                            <input type="text" v-model="name" id="name" placeholder="Enter your Category name" class="form-control" :class="err.name ? 'is-invalid' : ''">
                             <span v-if="err.name" class='text-danger'>{{ err.name[0] }}</span>
                        </div>
                        <input type="submit" class="btn btn-danger" value="Submit">
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in category" :key="index">
                                    <th scope="row">{{ index+=1 }}</th>
                                    <td>{{ item.name }}</td>
                                    <td><a @click="deleteEl(item.id)">Delet</a> | <a @click="editdata(item.id)">Edit</a> </td>
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
            name:'',
            err : [],
            category : [],
            editmode:false,
        }
    },
    mounted(){
        this.getData()
    },

    methods: {
        storedata(){
            this.editmode=false
            this.err = []
            let fn = new FormData()
            fn.append('name',this.name)
            axios.post('/api/category',fn)
            .then(res=>{
                this.name=''

                this.getData()
                })
            .catch(error => {
                this.err = error.response.data.errors
                console.log(error.response.data.errors)
            })
        },
        getData(){
            axios.get('/api/category')
            .then((res)=>{
                this.category = res.data.category
            })
            .catch(err=>{
                console.log(err)
            })
        },
        deleteEl(id){
            axios.delete('/api/category/'+ id)
            .then((res)=>{
                console.log(res)
                console.log("delete")
                this.getData()
            })
            .catch(err=>{
                console.log(err)
            })
        },
        editdata(id){
            this.editmode=true
            axios.get('/api/category/'+ id)
            .then((res)=>{
                this.name = res.data.category.name
                this.id = res.data.category.id
                console.log(res)
            })
            .catch(error=>{
                this.err = error.response.data.errors
            })
        },

        updatedata()
        {
            let fn = new FormData()
            fn.append('name',this.name)
            axios.put('/api/category/'+ this.id, {name : this.name})
            .then((res)=>{
                console.log("updated");
                this.editmode = false
                this.getData()
                this.name = ''
                this.id = ''
            })
            .catch(error=>{
                this.err = error.response.data.errors
            })
        }

    },
}
</script>
