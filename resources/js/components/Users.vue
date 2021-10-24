<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">

				<div class="card">
				  <div class="card-header">
				    <h3 class="card-title">DataTable with default features</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
				    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
				      <div class="row">
				        <!-- <div class="col-sm-12 col-md-6">
				          <div class="dt-buttons btn-group flex-wrap">
				            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> 
				            <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button></div>
				          </div>
				        </div> -->
				        <div class="col-sm-12 col-md-6">
				          <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
				        </div>
				        <div class="col-sm-12 col-md-6">
				          <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">
				          	<i class="fas fa-user-plus"></i>
									  Add User
									</button>
				        </div>				        
				      </div>
				      <div class="row">
				        <div class="col-sm-12">
				          <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
				            <thead>
				              <tr role="row">
				                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
				                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
				                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Email</th>
				                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Actions</th>
				              </tr>
				            </thead>
				            <tbody>
				              <!-- <tr class="odd">
				                <td class="dtr-control sorting_1" tabindex="0">1</td>
				                <td>Glenn Escrimadora</td>
				                <td>gescrimadora@gmail.com</td>
				                <td>
				                	<a href="">
				                		<i class="fa fa-edit"></i>
				                	</a>
				                	<a href="">
				                		<i class="fa fa-trash"></i>
				                	</a>				                	
				                </td>
				              </tr> -->

					            <!-- Loop through each user record and display user details -->
					            <tr v-for="user in users.data" :key="user.id">
					              <td class="align-middle">{{ user.id }}</td>
					              <td class="align-middle">{{ user.name }}</td>
					              <td class="align-middle">{{ user.email }}</td>
					              <td class="align-middle">
					                <a href="" @click.prevent="editUser(user)">
					                  <i class="fa fa-edit"></i>
					                </a>
					                <a href="" @click.prevent="deleteUser(user.id)">
					                  <i class="fa fa-trash"></i>
					                </a>
					              </td>                     
					            </tr> 

				            </tbody>
				            <tfoot>
				              <tr>
				                <th rowspan="1" colspan="1">ID</th>
				                <th rowspan="1" colspan="1">Name</th>
				                <th rowspan="1" colspan="1">Email</th>
				                <th rowspan="1" colspan="1">Actions</th>
				              </tr>
				            </tfoot>
				          </table>
				        </div>
				      </div>
				      <div class="row">
				        <div class="col-sm-12 col-md-5">
				          <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
				        </div>
				        <div class="col-sm-12 col-md-7">
				          <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
				            <ul class="pagination">
				              <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
				              <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
				              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
				              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
				              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
				              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
				              <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
				              <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
				            </ul>
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
				  <!-- /.card-body -->
				</div>

      </div>
    </div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">		        
					  <form @submit.prevent="createUser" @keydown="form.onKeydown($event)">
					    <input v-model="form.name" type="text" name="name" placeholder="Name">
					    <div v-if="form.errors.has('name')" v-html="form.errors.get('name')" />

					    <input v-model="form.email" type="email" name="email" placeholder="Email">
					    <div v-if="form.errors.has('email')" v-html="form.errors.get('email')" />

							<input v-model="form.password" type="password" name="password" placeholder="Password">
					    <div v-if="form.errors.has('password')" v-html="form.errors.get('password')" />

					    <button type="submit" :disabled="form.busy">
					      Save
					    </button>
					  </form>		      	
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>


  </div>
</template>

<script>
  export default {
		data: () => ({
			users: {},
	    form: new Form({
	      name: '',
	      email: '',
	      password: ''
	    })
	  }),
	  methods: {
      getUsers(page) {
        if (typeof page === 'undefined') {
          page = 1;
        }

        axios.get('/laravel/laravelVueBreeze/api/user', {
          params: {
            page: page
          }
        }).then(data => {
          this.users = data.data;
        });     
      }, 	
	    createUser () {
	      // this.form.post('/api/user');
	      this.form.post('/laravel/laravelVueBreeze/api/user');	      
	    }
	  },
	  created() {
	  	this.getUsers();
	  },
    mounted() {
			console.log('Component mounted.')
    }
  }
</script>
