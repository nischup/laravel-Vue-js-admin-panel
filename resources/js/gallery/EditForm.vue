<template>
    <div class="card-body card-block">
        <form method="post" v-on:submit.prevent="update(form.id)" id="EditComponent" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label"> Title </label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" v-model="form.title" placeholder="Title" class="form-control"><small class="form-text text-muted" v-if="(errors.hasOwnProperty('title'))" style="color: red;"> {{ (errors.hasOwnProperty('title')) ? errors.title[0] :'' }} </small></div>
            </div>

<!--             <div class="row form-group">
                 <div class="col col-md-3"><label for="text-input" class=" form-control-label"> Gallery Photo </label></div>
                <div class="col-sm-3">
                     <input type="file" v-on:change="onFileChange" class="form-control">
                </div>   
                <div class="col-sm-6">
                     <img :src="form.gallery_photo" class="img-responsive">
                </div>
            </div> -->

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
                    title: '',
                    // gallery_photo: '',
                    
                },
                errors: {},
            };
        },

        methods:{

            edit(id) {
                var _this = this;
                axios.get(base_url+'cbadmin/visitor-gallery/'+id+'/edit').then( (response) => {
                    var responseData = response.data;
                    _this.form  = responseData;
                });
            },

            update(id){
                axios.put(base_url+'cbadmin/visitor-gallery/'+id, this.form).then( (response) => {
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
