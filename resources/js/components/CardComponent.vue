<template>
    <div class="container">
        <div class="row justify-contnet-center">

            <router-link to="/teacher">Go to User</router-link>
            <div class="col-md-8">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">age</th>
      <th scope="col">photo</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="teach in teachers">
      <th scope="row">1</th>
      <td>{{teach.name}}</td>
      <td>{{teach.email}}</td>
      <td>{{teach.age}}</td>
      <td><img :src="'media/images/' + teach.photo" style="height: 50px; width: 50px"></td>
      <td>       <router-link
                      :to="{ name: 'single', params: { id: teach.id } }"
                      class="btn btn-success"
                      >View Profile</router-link
                    ></td>
    </tr>

  </tbody>
</table>
            </div>
        </div>
    </div>
</template>


<script>
	export default{
		data() {

			return{

                teachers : []

			};

		},

          created() {
    axios.get("http://localhost:8000/api/teachers").then((response) => {
      this.teachers = response.data;
    });
  },



	}
</script>
