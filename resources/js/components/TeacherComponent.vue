<template>

	<div class="container"> 
	<div class="form-box">
  <h1>Simple Contact Form</h1>
  <p>Using <a href="">Bootstrap</a> and <a href="#">FormBucket</a></p>

  <router-link to="/card">Go to User</router-link>
  <form @submit.prevent="addTeacher">
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" v-model="teacher.name" type="text">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" v-model="teacher.email" type="email">
    </div>    
    <div class="form-group">
      <label for="email">Age</label>
      <input class="form-control" v-model="teacher.age" type="text">
    </div>
    <div class="form-group">
      <label for="profile">Profile Image</label>
       <input type="file" ref="file" name="photo" id="uploadFile">
    </div>
    <div>
    <input class="btn btn-primary" type="submit" value="add" />
    </div>
  </form>
</div>

</div>
</template>



<script>
	export default{

		data() {
			return {
				teacher:{
					name: '',
					email:'',
					age:  '',
					photo:  '',
				}
			};
		},

		methods:{

			addTeacher(){

				let teacherData = new FormData();

				this.teacher.photo = this.$refs.file.files[0];

				teacherData.append('name',this.teacher.name);
				teacherData.append('email',this.teacher.email);
				teacherData.append('age',this.teacher.age);
				teacherData.append('photo',this.teacher.photo);


				axios.post('http://localhost:8000/api/teachers/',teacherData, {
                    header: {
                        'content-Type': 'multipart/form-data'
                    }
                }).then(response =>(

                	this.teacher = {
                		name:'',
                		email:'',
                		age:''
                	},


                	$('#uploadFile').val(''),




					swal("Good job!", "You clicked the button!", "success")







					));
			}

		}


	}



</script>