<template>
   <form method="post" v-on:submit.prevent="store" class="form-horizontal" id="addComponent" role="form">
     <div class="quote_form">
         <h2 class="column-title title-white"><span>We are always ready</span> Request a call back</h2>
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group">
                  <input class="form-control" id="name" v-model="form.name" placeholder="Full Name">
                  <small class="help-block" v-if="(errors.hasOwnProperty('name'))" style="color: red;"> {{ (errors.hasOwnProperty('name')) ? errors.name[0] :'' }} </small>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <input class="form-control" id="email" v-model="form.email" placeholder="Email Address">
                  <small class="help-block" v-if="(errors.hasOwnProperty('email'))" style="color: red;"> {{ (errors.hasOwnProperty('email')) ? errors.email[0] :'' }} </small>
               </div>
            </div>
         </div>
         <!-- Row 1 end-->
         <div class="row">
            <div class="col-lg-12">
               <div class="form-group">
                  <input class="form-control" id="subject" v-model="form.mobile" type="text" placeholder="Mobile">
                  <small class="help-block" v-if="(errors.hasOwnProperty('mobile'))" style="color: red;"> {{ (errors.hasOwnProperty('mobile')) ? errors.mobile[0] :'' }} </small>
               </div>
            </div>
         </div>
         <!-- Row end-->
         <div class="row">
            <div class="col-lg-12">
               <div class="form-group">
                  <textarea class="form-control" placeholder="Message" rows="3" v-model="form.message" ></textarea>
                  <small class="help-block" v-if="(errors.hasOwnProperty('message'))" style="color: red;"> {{ (errors.hasOwnProperty('message')) ? errors.message[0] :'' }} </small>
               </div>
            </div>
         </div>
         <!-- Row end-->
         <div class="form-group text-right mb-0">
            <input class="button btn btn-primary" type="submit" :disabled="!isComplete" value="Send Message">
         </div>
      </div>
      <!-- Quote form end-->
   </form>
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

                form:{
                    name: '',
                    email: '',
                    mobile: '',
                    message: '',
                    
                },
                errors: {},
            };
        },

        methods:{
            store:function() {
                var _this = this;
                axios.post(base_url+'message', _this.form).then( (response) => {
                    this.showMassage(response.data);
                    _this.form = {};
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

        computed: {
          isComplete () {
            return this.form.mobile;
          }
        },

    }
</script>
