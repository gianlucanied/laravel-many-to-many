<template>
    <h1>Project:</h1>
    <ul>
        <li v-for="project in projects" :key="project.id">
            <p>Title: {{ project.title }}</p>
            <p>Tipo: {{ project.type }}</p>
            <img :src="project.image" alt="" />
        </li>
    </ul>
</template>

<script>
import axios from "axios";

export default {
    name: "ApiContent",
    data() {
        return {
            projects: [],
        };
    },
    mounted() {
        axios
            .get("http://localhost:8000/api/v1/projects")
            .then((res) => {
                const data = res.data;
                if (data.status === "success") this.projects = data.projects;

                console.log("project: ", this.project);
            })
            .catch((err) => {
                console.err(err);
            });
    },
};
</script>
