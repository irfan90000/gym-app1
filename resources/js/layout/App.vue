<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper" style="background: #191c24;">
            <navbar />
            <div class="row mb-4" style="width: 100% !important; margin-top: 130px; padding-left: 30px !important;">
                <!-- Product Card -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <div class="d-flex align-items-center">
                                        <!-- Product icon (xx-large and white color) -->
                                        <font-awesome-icon icon="clipboard" class="text-white" style="font-size: 2rem; margin-right: 10px;" />
                                        <span>Product</span>
                                    </div>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">21,459</h4>
                                    </div>
                                    <small>Total Product</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Card -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <div class="d-flex align-items-center">
                                        <!-- Order icon (xx-large and white color) -->
                                        <font-awesome-icon icon="city" class="text-white" style="font-size: 2rem; margin-right: 10px;" />
                                        <span>Order</span>
                                    </div>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">4,567</h4>
                                    </div>
                                    <small>Total Orders</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trainer Card -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <div class="d-flex align-items-center">
                                        <!-- Trainer icon (xx-large and white color) -->
                                        <font-awesome-icon icon="compass" class="text-white" style="font-size: 2rem; margin-right: 10px;" />
                                        <span>Trainer</span>
                                    </div>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">19,860</h4>
                                    </div>
                                    <small>Total Trainer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Users Card -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body" style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <div class="d-flex align-items-center">
                                        <!-- Users icon (xx-large and white color) -->
                                        <font-awesome-icon icon="users" class="text-white" style="font-size: 2rem; margin-right: 10px;" />
                                        <span>Users</span>
                                    </div>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">237</h4>
                                    </div>
                                    <small>Total Users</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// Import FontAwesomeIcon and icons for use in this page
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faClipboard, faCity, faCompass, faUsers } from '@fortawesome/free-solid-svg-icons';

// Add icons to the library
library.add(faClipboard, faCity, faCompass, faUsers);

import Sidebar from '../sidebar.vue';
import Navbar from '../navbar.vue';

export default {
    components: {
        Sidebar,
        Navbar,
        FontAwesomeIcon // Register FontAwesomeIcon locally in this page
    },
};
</script>

<style scoped>
span {
    font-size: 22px !important;
    color: #A1B0CB !important;
}

.me-2 {
    font-size: 22px !important;
    padding: 7px 0 !important;
    color: #d8deea;
}

small {
    font-size: 1.255em;
    font-weight: 400;
    color: #A1B0CB  !important;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: transparent !important;
    background-clip: border-box;
    border: 0;
    border-radius: 0;
}

.avatar i {
    font-size: 40px;
    color: #A1B0CB;
}

/* Additional styling to space the icons from the text */
.content-left .d-flex {
    align-items: center;
}
</style>
