<template>

	<div class="container"> 
	<div class="form-box">
  <h1>Simple Contact Form</h1>
  <p>Using <a href="">Bootstrap</a> and <a href="#">FormBucket</a></p>

  <router-link to="/card">Go to User</router-link>

  <div>
    <h2>name:</h2>{{ singleteacher.name }}
    <h2>age:</h2>{{ singleteacher.age }}
    <h2>email:</h2>{{ singleteacher.email }}
    <img :src="'media/images/' + singleteacher.photo">

  </div>

</div>

</div>
</template>



<script>
	export default{

		data() {
			return {
				singleteacher:{}
			};
		},


    created(){

                 axios.get('http://localhost:8000/api/teachers/${this.$route.params.id}').then(
         response => (


            this.singleteacher = response.data



            )


         )
    }







	}



</script>