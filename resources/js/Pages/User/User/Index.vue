<template>
<Head title="User" />
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <Link href="/dashboard">Dashboard</Link>
                            </li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <button class="btn btn-success">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h3>
                                <div class="card-tools">
                                    <div
                                        class="input-group input-group-sm"
                                        style="width: 150px"
                                    >
                                        <input
                                            type="text"
                                            name="table_search"
                                            class="form-control float-right"
                                            placeholder="Search"
                                        />
                                        <div class="input-group-append">
                                            <button
                                                type="submit"
                                                class="btn btn-default"
                                            >
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(user, index) in users"
                                            :key="user.id"
                                        >
                                            <td>{{ index + 1 }}</td>
                                            <td>{{ user.name }}</td>
                                            <td>{{ user.email }}</td>
                                            <td>{{ user.created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-primary"
                                                    >
                                                        <i
                                                            class="fas fa-pencil-alt"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        class="btn btn-danger"
                                                    >
                                                        <i
                                                            class="fas fa-trash"
                                                        ></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</template>

<script>
//import layout App
import LayoutApp from "../../../Layouts/User/App.vue";
import { Link, Head } from "@inertiajs/inertia-vue3";

export default {
    //set layout
    layout: LayoutApp,
    components: {
        Link, Head
    },
    props: {
        users: Object,
    },
    methods: {
        openAddModal(data) {
            this.$root.$emit("bv::show::modal", "your-modal-id");
        },
        openEditModal(data) {
            this.$root.$emit("bv::show::modal", "your-modal-id");
        },
    },
};
</script>
