<template></template>

<script>
import axios from "axios";

export default {
    name: "ApiContent",
    mounted() {
        axios.get("http://localhost:8000/api/v1/test").then((res) => {
            const data = res.data;
            console.log(data);
        });
    },
};
</script>
