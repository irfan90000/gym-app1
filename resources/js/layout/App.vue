<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper" style="background: #191c24;">
            <navbar />
            <div class="row mb-4" style="    width: 100% !important;
    margin-top: 130px; padding-left: 30px !important;">
                <div class=" col-xl-3 col-sm-6" >
                    <div class="card">
                        <div class="card-body " style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left " >
                                    <span>Product</span>
                                    <div class="d-flex align-items-end mt-2 ">
                                        <h4 class="mb-0 me-2" >21,459</h4>

                                    </div>
                                    <small>Total Product</small>
                                </div>
                                <div class="avatar">
                  <span>
                    <i></i>
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-3 col-sm-6" >
                    <div class="card">
                        <div class="card-body " style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Order</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2" >4567</h4>

                                    </div>
                                    <small>Total Orders</small>
                                </div>
                                <div class="avatar">
                  <span>
                    <i></i>
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-3 col-sm-6" >
                    <div class="card">
                        <div class="card-body " style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Trainer</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">19860</h4>

                                    </div>
                                    <small>Total Trainer</small>
                                </div>
                                <div class="avatar">
                  <span>
                    <i></i>
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-3 col-sm-6" >
                    <div class="card">
                        <div class="card-body " style="background-color: #283144">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="content-left">
                                    <span>Users</span>
                                    <div class="d-flex align-items-end mt-2">
                                        <h4 class="mb-0 me-2">237</h4>

                                    </div>
                                    <small>Total Users</small>
                                </div>
                                <div class="avatar">
                  <span>
                    <i></i>
                  </span>
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
import Sidebar from '../sidebar.vue';
import Navbar from '../navbar.vue';

export default {

    components: {
        Sidebar,
        Navbar
    },

};
</script>

<style scoped>
/* Add component-specific styles here if needed */
span{
    font-size: 22px !important;
    color: #A1B0CB  !important;
}

.me-2 {
    font-size: 22px !important;
    padding: 7px 0 !important;
    color: #d8deea;
}
small{
    font-size: 1.255em;
    font-weight: 400;
    color: #A1B0CB  !important;
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
     background-color: transparent !important;
    background-clip: border-box;
    border: 0  ;
    border-radius: 0 ;
}
</style>
