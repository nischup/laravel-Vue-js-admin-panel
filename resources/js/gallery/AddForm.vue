<template>
    <div class="card-body card-block">
        <form method="post" v-on:submit.prevent="store" id="addComponent" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title </label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" v-model="form.title" placeholder="title" class="form-control"></div>
            </div>

            <div class="row form-group">
                 <div class="col col-md-3"><label for="text-input" class=" form-control-label"> Gallery Photo </label></div>
                <div class="col-sm-3">
                     <input type="file" v-on:change="onFileChange" class="form-control">
                </div>   
                <div class="col-sm-6">
                     <img :src="form.gallery_photo" class="img-responsive">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Save
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

        // props:[''],

        data:function(){
            return {
                list:false,
                add_form:true,
                edit_form:false,
                view_form:false,
                el: "#app",
                form:{
                    title: '',
                    gallery_photo: '',
                },
                errors: {},
            };
        },

        methods:{
            store:function() {
                var _this = this;
                axios.post(base_url+'cbadmin/visitor-gallery', _this.form).then( (response) => {
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

             onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.form.gallery_photo = e.target.result;
                };
                reader.readAsDataURL(file);
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

        computed: {
          isComplete () {
            return this.form.mobile;
          }
        },

    }
</script>
