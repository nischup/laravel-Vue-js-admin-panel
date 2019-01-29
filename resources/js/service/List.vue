<template>
	<div class="card" v-if="list">
		<div class="container">
			<div class="row">
                <div class="col-md-2">
                    <div class="item-show-limit">
                        <span>Show</span>
                        <select name="per_page" class="per_page" @change="changePerPage" v-model="perPage">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span>Entries</span>
                    </div>
                </div>

		        <table class="table table-striped">
		            <thead>
		                <tr>
                            <th> # </th>
		                    <th> Service Name </th>
		                    <th> Service Description </th>
		                    <th> Created Date </th>
		                    <th> Action </th>
		                </tr>
		            </thead>
		                <tbody v-if="resultData !=''">
		                	<tr v-for="(value, index) in resultData.data">
		                		 <td>{{index+1}}</td>
		                		 <td>{{value.name}}</td>
		                		 <td>{{value.description}}</td>
		                		 <td>{{value.created_at}}</td>
		                		 <td class="text-center">
                                    <a style="cursor: pointer;" class="btn-sm" @click="deleteData(value.id)"><i aria-hidden="true" class="fa fa-trash-o btnColor"></i></a>
                                    <a style="cursor: pointer;" class="btn-sm" @click="editData(value.id)"><i aria-hidden="true" class="fa fa-pencil-square-o btnColor"></i></a>
                                 </td>
		                	</tr>
		                </tbody>
                        <tbody v-else>
                                <tr>
                                    <td colspan="11">No Data Available.</td>
                                </tr>
                        </tbody>
		         </table>
			</div>
            <div class="row">
                <div class="text-center col-md-12" >
                    <pagination :resultData="resultData" @clicked="index" :mid-size="9"></pagination>
                </div>
            </div>
		</div>
	</div>

    <AddForm  v-else-if="add_form"></AddForm>
    <EditForm  v-else-if="edit_form" :edit-id="edit_id"></EditForm>
</template>

<script>  
	import { EventBus } from './../vue-assets';
    import VueToastr2 from 'vue-toastr-2'
    import 'vue-toastr-2/dist/vue-toastr-2.min.css'
    import AddForm from './AddForm.vue';
    import EditForm from './EditForm.vue';
    import Pagination from  './../components/Pagination.vue';
    window.toastr = require('toastr')
     
    Vue.use(VueToastr2)

    export default {
        components: {
            Pagination,
            AddForm,
            EditForm,
        },

        data(){
            return {
                list:true,
                add_form:false,
                edit_form:false,

                resultData: {},
                deleteId: [],
                perPage: 10,
            };
        },

        methods: {

            index(pageNo,perPage)
            {
                if(pageNo){ pageNo = pageNo; }else{pageNo = this.resultData.current_page; }
                if(perPage){ perPage = perPage;}else{ perPage = this.perPage;}
                 axios.get(base_url+"cbadmin/service-setup/?page="+pageNo+"&perPage="+perPage).then((response) => {
                    this.resultData = response.data;
                });
            },

            changePerPage(){
                var _this = this;
                _this.index(1,_this.perPage);
            },

            editData(id){
                var _this = this;
                _this.list = _this.add_form = _this.view_form = false;
                _this.edit_form = true;
                _this.edit_id = id;
                $('#addBtn').hide();
                $('#listBtn').show();
            },

            // ============== resource route destroy only delete one id or data start ===============

            deleteData: function(id){
                var _this = this;
                axios.delete(base_url+'cbadmin/service-setup/'+id).then((response) => {
                    _this.index(1);
                    _this.showMassage(response.data);
                }).catch((error)=>{
                    _this.showMassage(error);
                });
            },    

        //==================== resource route destroy only delete one id or data end ======================= 


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

        created() {
            var _this = this;

            $('body').on('click', '#addBtn', function() {
                _this.add_form = true;
                _this.list = _this.edit_form = _this.view_form = false;
				$('#addBtn').hide();
				$('#listBtn').show();
            });

            $('body').on('click', '#listBtn', function() {
                _this.list = true;
                _this.add_form = _this.edit_form = _this.view_form = false;
				$('#addBtn').show();
				$('#listBtn').hide();
            });

            EventBus.$on('data-changed', () => {
                _this.add_form = _this.edit_form =  _this.view_form = false;
                _this.list = true;
                $('#addBtn').show();
                $('#listBtn').hide();
                _this.index(1);
            });

             _this.index(1);
        }
    }; 

</script>