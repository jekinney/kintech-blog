<template>
	<div>
		<div class="input-field">
			<button type="button" @click="toggleOverview" class="btn">Overview</button>
			<div v-show="show.overview">
				<textarea name="overview">{{ overview }}</textarea>
			</div>
		</div>
		<div class="input-field">
			<button type="button" @click="toggleBody" class="btn">Body</button>
			<div v-show="show.body">
				<textarea name="body">{{ body }}</textarea>
			</div>
		</div>
	</div>
</template>

<script>
import tinymce from 'tinymce'

export default {
	props: ['overview', 'body'],
	data() {
		return {
			show: {
				overview: false,
				body: true
			}
		}
	},
	mounted() {
		tinymce.init({ selector:'textarea' })
	},
	methods: {
		toggleOverview() {
			return this.show.overview = !this.show.overview
		},
		toggleBody() {
			return this.show.body = !this.show.body
		}
	}
}
</script>