<script setup>
console.log("ciao");
</script>

<template>
    <div id="userform-container">
        <form action="/action_page.php" method="post">
            <div class="container">
                <div class="input-row">
                    <input
                        type="text"
                        placeholder="First Name"
                        name="firstName"
                        required
                    />
                    <input
                        type="text"
                        placeholder="Last Name"
                        name="lastName"
                        required
                    />
                </div>
                <input type="email" placeholder="Email" name="email" required />

                <div class="input-row">
                    <label for="country"><b>Select your Country</b></label>
                    <select name="country" id="country">
                        <option value="italy">Italy</option>
                        <option value="france">France</option>
                        <option value="australia">Australia</option>
                        <option value="usa">USA</option>
                    </select>

                    <label for="legalAge"><b>Are you older than 21?</b></label>
                    <input type="checkbox" name="legalAge" required />
                </div>

                <input
                    type="password"
                    placeholder="Enter Password"
                    name="psw"
                    required
                />

                <input
                    type="password"
                    placeholder="Confirm Password"
                    name="pswRepeat"
                    required
                />

                <button type="submit">Register New User</button>
            </div>
        </form>
    </div>
</template>
