<template>
    <div id="userform-container">
        <form @submit="submitForm">
            <div class="container">
                <div class="input-row">
                    <input
                        type="text"
                        placeholder="First Name"
                        v-model="form.firstName"
                        required
                    />
                    <input
                        type="text"
                        placeholder="Last Name"
                        v-model="form.lastName"
                        required
                    />
                </div>
                <input
                    type="email"
                    v-model="form.email"
                    placeholder="Email"
                    required
                />

                <div class="input-row">
                    <label for="country"><b>Select your Country</b></label>
                    <select v-model="form.country">
                        <option value="italy">Italy</option>
                        <option value="france">France</option>
                        <option value="australia">Australia</option>
                        <option value="usa">USA</option>
                    </select>

                    <label for="legalAge"><b>Are you 21 or older?</b></label>
                    <input type="checkbox" v-model="form.isLegalAge" />
                </div>

                <input
                    type="password"
                    placeholder="Enter Password"
                    v-model="form.password"
                    required
                />

                <button type="submit">Register New User</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                firstName: "",
                lastName: "",
                email: "",
                country: "italy",
                isLegalAge: false,
                password: "",
            },
        };
    },
    methods: {
        submitForm() {
            axios.post("/api/saveForm", this.form).then((response) => {
                alert(response.data.message);
            });
        },
    },
};
</script>
