<template>
    <div class="card-body card-block">
        <form method="post" v-on:submit.prevent="update(form.id)" id="EditComponent" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name </label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" v-model="form.name" placeholder="Name" class="form-control"><small class="form-text text-muted" v-if="(errors.hasOwnProperty('name'))" style="color: red;"> {{ (errors.hasOwnProperty('name')) ? errors.name[0] :'' }} </small></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"> Email </label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" v-model="form.email" placeholder="Email" class="form-control">
                <small class="form-text text-muted" v-if="(errors.hasOwnProperty('email'))" style="color: red;"> {{ (errors.hasOwnProperty('email')) ? errors.description[0] :'' }} </small></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"> Password </label></div>
                <div class="col-12 col-md-9"><input type="password" id="text-input" v-model="form.password" placeholder="Password" class="form-control">
                <small class="form-text text-muted" v-if="(errors.hasOwnProperty('password'))" style="color: red;"> {{ (errors.hasOwnProperty('password')) ? errors.password[0] :'' }} </small></div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label"> Status </label></div>
                <div class="col-12 col-md-9">
                    <select name="selectSm" id="SelectLm" v-model="form.status" class="form-control-sm form-control">
                        <option value=""> Select Status </option>
                        <option value="1"> Admin </option>
                        <option value="2"> User </option>
                    </select>
                <small class="form-text text-muted" v-if="(errors.hasOwnProperty('status'))" style="color: red;"> {{ (errors.hasOwnProperty('status')) ? errors.status[0] :'' }} </small></div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Update
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
        </form>
    </div>
</template>


<script>
    import { EventBus } from './../vue-assets';
    export default {

        components: {  },

        props:['editId'],

        data:function(){
            return {
                list:false,
                add_form:false,
                edit_form:true,
                view_form:false,

                form:{
                    name: '',
                    email: '',
                    password:'',
                },
                errors: {},
            };
        },

        methods:{

            edit(id) {
                var _this = this;
                axios.get(base_url+'cbadmin/admin-new/'+id+'/edit').then( (response) => {
                    var responseData = response.data;
                    _this.form  = responseData;
                });
            },

            update(id){
                axios.put(base_url+'cbadmin/admin-new/'+id, this.form).then( (response) => {
                    this.showMassage(response.data);
                    EventBus.$emit('data-changed');
                }).catch(error => {
                    if(error.response.status == 422){
                        this.errors = error.response.data.errors;
                    }else{
                        this.showMassage(error);
                    }
                });
            },

            showMassage(data){
                if(data.status == 'success'){
                    toastr.success(data.message, 'Success Alert');
                }else if(data.status == 'error'){
                    toastr.error(data.message, 'Error Alert');
                }else{
                    toastr.error(data.message, 'Error Alert');
                }
            },
        },

        created(){
            var _this = this;
            _this.edit(_this.editId);
            console.log(_this.editId);
        }

    }
</script>
