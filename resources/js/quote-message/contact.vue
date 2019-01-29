<template>
	<form class="contact-form" id="contact-form" v-on:submit.prevent="store" method="post">
	    <div class="error-container"></div>
	    <div class="row">
	       <div class="col-lg-12">
	          <div class="form-group">
	             <input class="form-control form-name" v-model="form.name" placeholder="Full Name" type="text">
	             <small class="help-block" v-if="(errors.hasOwnProperty('name'))" style="color: red;"> {{ (errors.hasOwnProperty('name')) ? errors.name[0] :'' }} </small>
	          </div>
	       </div>
	       <!-- Col end-->
	       <div class="col-lg-12">
	          <div class="form-group">
	             <input class="form-control form-website" v-model="form.email" placeholder="Email" type="email">
	             <small class="help-block" v-if="(errors.hasOwnProperty('email'))" style="color: red;"> {{ (errors.hasOwnProperty('email')) ? errors.email[0] :'' }} </small>
	          </div>
	       </div>
	       <div class="col-lg-12">
	          <div class="form-group">
	             <input class="form-control form-email" v-model="form.mobile" placeholder="Mobile" type="text">
	             <small class="help-block" v-if="(errors.hasOwnProperty('mobile'))" style="color: red;"> {{ (errors.hasOwnProperty('mobile')) ? errors.mobile[0] :'' }} </small>
	          </div>
	       </div>
	       <div class="col-lg-12">
	          <div class="form-group">
	             <textarea class="form-control form-message required-field" v-model="form.message" placeholder="message" rows="3"></textarea>
	             <small class="help-block" v-if="(errors.hasOwnProperty('message'))" style="color: red;"> {{ (errors.hasOwnProperty('message')) ? errors.message[0] :'' }} </small>
	          </div>
	       </div>
	       <!-- Col 12 end-->
	    </div>
	    <!-- Form row end-->
	    <div class="text-right">
	       <button class="btn btn-primary tw-mt-30" type="submit"> Contact US </button>
	    </div>
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
                axios.post(base_url+'sent-message', _this.form).then( (response) => {
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
