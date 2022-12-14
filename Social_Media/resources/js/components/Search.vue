<template>
	<div class="chat-searchbar mt-4">
		<div class="form-group chat-search-data m-0">
			<input type="text" class="form-control round" v-model="query" @keyup="fetchData()" id="chat-search"
				placeholder="Search">
			<table class="table table-bordered table-striped">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>
				<tr v-for="(row, index) in allData" :key="index" >
					<td>{{ row.firstname }}</td>
					<td>{{ row.lastname }}</td>
				</tr>
				<tr v-if="nodata">
					<td colspan="2" align="center">No Data Found</td>
				</tr>
			</table>
		</div>
	</div>
</template>

<script>

import axios from 'axios';

export default {

	props: ['users'],
	setup(props) {



		const allData = ref({})
		const query = ref({})
		// const nodata = false


		const fetchData = () => {
			axios.post('/search', {
				query: query
			}).then((response) =>{
				if (response.data.length > 0) {
					allData.value = response.data.users;
					// application.nodata = false;
				}
				else {
					allData.value = '';
					// application.nodata = true;
				}
			});
		}
	},

	return:
	{
		allData,
		query,
		// nodata,
	}
}


</script>
