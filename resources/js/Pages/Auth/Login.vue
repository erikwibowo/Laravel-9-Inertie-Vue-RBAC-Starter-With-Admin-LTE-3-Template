<template>
    <div class="login-page">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form @submit.prevent="storeLogin">
                        <div class="input-group mb-3">
                            <input
                                type="email"
                                :class="{ 'is-invalid': errors.email }"
                                class="form-control"
                                placeholder="Email"
                                v-model="form.email"
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <div v-if="errors.email" class="invalid-feedback">
                                {{ errors.email }}
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input
                                type="password"
                                :class="{ 'is-invalid': errors.password }"
                                class="form-control"
                                placeholder="Password"
                                v-model="form.password"
                            />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <div v-if="errors.password" class="invalid-feedback">
                                {{ errors.password }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" />
                                    <label for="remember"> Remember Me </label>
                                </div>
                            </div>

                            <div class="col-4">
                                <button
                                    type="submit"
                                    class="btn btn-primary btn-block">
                                    Sign In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//import layout App
import LayoutApp from "../../Layouts/User/Auth/App.vue";

//import reactivity API dari vue
import { reactive } from "vue";

//import inertia adapter
import { Inertia } from "@inertiajs/inertia";

export default {
    //set layout
    layout: LayoutApp,

    //get props
    props: {
        errors: Object,
    },

    //define composition API
    setup() {
        //define state
        const form = reactive({
            email: "",
            password: "",
        });

        //method storeLogin
        const storeLogin = () => {
            //send data ke server
            Inertia.post("/login", {
                email: form.email,
                password: form.password,
            });
        };

        return {
            form,
            storeLogin,
        };
    },
};
</script>

<style></style>
