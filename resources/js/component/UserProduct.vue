<template>
    <header class="ct-mainHeader">
        <div class="ct-topBar ct-topBar--type1">
            <div class="navbar navbar-default" style="margin-left: -380px;">
                <div class="container">
                    <div class="navbar-block navbar-left">
                        <div>
                            <img class="grayscale grayscale-fade"
                                 src="./../../public/assets/images/content/logo-footer-btm.jpeg" alt=""
                                 style="width: 85px; margin-right: 10px;">
                        </div>
                        <div class="navbar-block-inner">
                            <ul class="list-unstyled list-inline">
                                <li><span>Call Us Now <a href="tel:1234567890">+61 431270638</a></span></li>
                                <li><span><a href="mailto:Hermesonori@gmail.com">Hermesonori@gmail.com</a></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="navbar-block navbar-right">
                        <div class="navbar-block-inner">
                            <ul class="socialicons">
                                <li>
                                    <a href="https://www.facebook.com/createITpl" data-toggle="tooltip"
                                       data-placement="bottom" title=""
                                       data-original-title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/createitpl" data-toggle="tooltip"
                                       data-placement="bottom" title=""
                                       data-original-title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="LinkedIn">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="RSS">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                       data-original-title="Vimeo">
                                        <i class="fa fa-vimeo-square"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar--type1 yamm navbar-logo--left" style="margin-left: -500px;">
            <div class="container ct-navbar-container">

                <div class="navbar-header navbar-left">
                    <a class="navbar-brand" href="index.html">
                        <!-- <img alt="Brand" src="./../../public/assets/images/content/logo.png"> -->
                    </a>
                </div>
                <ul class="nav navbar-nav ct-navbar--fadeIn navbar-right" style="display: contents;">

                    <li class="onepage">
                        <router-link to="/">Home</router-link>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid  " style=" background-color: #380202; height: 175vh">

        <div class="row " style="margin-top: 125px !important; margin-left: 125px !important;
    margin-right: 100px;">
            <table class=" table table-bordered  table-hover  px-5"
                   style="margin-top: 140px; ">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="items in getTrainersData">
                    <td>{{ items.username }}</td>
                    <td>{{ items.email }}</td>
                    <td>{{ items.phone }}</td>
                    <td>{{ items.address }}</td>
                </tr>

                </tbody>
            </table>


            <table class=" table table-bordered  table-hover  px-5"
                   style="margin-top: 140px; ">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Address</th>
                    <th scope="col"> <div>
                        <button @click="downloadFile">Download PDF</button>
                    </div></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="variable in trainers">
                    <td>{{ variable.username }}</td>
                    <td>{{ variable.email }}</td>
                    <td>{{ variable.phone }}</td>
                    <td>{{ variable.address }}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>


    <footer>

        <section class="ct-prefooter ct-u-paddingTop80 ct-u-paddingBottom20 ct-u-backgroundDarkGray">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-sm-12 col-12">
                        <div class="widget ct-widget-shortMessage">

                            <h6 class="ct-widget-header">
          <span>
            ABOUT Higgs Training
          </span>
                            </h6>
                            <div class="widget-inner">
                                <img src="./../../public/assets/images/content/widgetChinseSymbol.png" alt="">
                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="widget ct-widget-contact">

                            <h6 class="ct-widget-header">
          <span>
            Contact
          </span>
                            </h6>
                            <div class="widget-inner">


                                <div class="ct-u-marginTop20">
                                    <ul class="socialicons">
                                        <li>
                                            <a href="https://www.facebook.com/createITpl" data-toggle="tooltip"
                                               data-placement="bottom" title="" data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/createitpl" data-toggle="tooltip"
                                               data-placement="bottom" title="" data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                               data-original-title="LinkedIn">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                               data-original-title="RSS">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                               data-original-title="Vimeo">
                                                <i class="fa fa-vimeo-square"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix visible-sm"></div>

                </div>
            </div>
        </section>

        <section class="ct-postfooter ct-u-backgroundMotive ct-u-paddingBoth20">

            <div class="container">

                <a href="index.html">
                    <img alt="Brand" src="./../../public/logo.jpeg" style="width: 85px;">
                </a>

                <ul class="list-unstyled list-inline" style="display: contents;">

                    <li><a href="#home">Home</a></li>
                    <li><a href="#testimonials">About Us</a></li>
                    <li><a href="#trainers">Trainers</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#services">Services</a></li>

                </ul>
            </div>

        </section>

    </footer>
</template>



<script>
import axios from "axios";

export default {
    name: 'FileDownloader',

    data() {
        return {
            getTrainersData: [],
            selectedFile: null,
            pdfFiles: [],
            trainers: [
                {

                    username: 'John Doewwww',
                    email: 'john.doe@example.com',
                    phone: '123-456-7890',
                    address: '123 Main St'
                },
                {

                    username: 'Jane Smith',
                    email: 'jane.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
                {

                    username: 'jhone smt',
                    email: 'jhone.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
                {

                    username: 'John Doe',
                    email: 'john.doe@example.com',
                    phone: '123-456-7890',
                    address: '123 Main St'
                },
                {

                    username: 'Jane Smith',
                    email: 'jane.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
                {

                    username: 'jhone smt',
                    email: 'jhone.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
            ]
        }

    },



    mounted() {

        console.log(this.trainers, 'trainers');
        this.getTrainers();

        this.updatedData();
    },

    methods: {


        updatedData(){
            this.trainers = [
                {

                    username: 'Mubashir',
                    email: 'john.doe@example.com',
                    phone: '123-456-7890',
                    address: '123 Main St'
                },
                {

                    username: 'Jane Smith',
                    email: 'jane.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
                {

                    username: 'jhone smt',
                    email: 'jhone.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
                {

                    username: 'John Doe',
                    email: 'john.doe@example.com',
                    phone: '123-456-7890',
                    address: '123 Main St'
                },
                {

                    username: 'Jane Smith',
                    email: 'jane.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
                {

                    username: 'jhone smt',
                    email: 'jhone.smith@example.com',
                    phone: '987-654-3210',
                    address: '456 Elm St'
                },
            ]
        },

        async getTrainers() {

            const response = await axios.get('/get-trainers');
            this.getTrainersData = response.data;
            console.log(this.getTrainersData, 'getTrainersData')

        },
        downloadFile() {
            // Specify the path to the file in the public directory
            const fileUrl = '/example.pdf';

            // Create a temporary link element
            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = 'example.pdf'; // Optional: Specify a default file name

            // Append the link to the body (required for Firefox)
            document.body.appendChild(link);

            // Trigger the download
            link.click();

            // Remove the link from the document
            document.body.removeChild(link);
        }
    },

};
</script>

<style scoped>
.table thead:before {
    background-color: transparent !important;
    content: none !important;
    position: absolute;
    /* top: 0; */
    /* left: -4500px; */
    /* display: block; */
    /* height: 40px; */
    /* width: 9999px; */
    /* z-index: -1; */
    background-color: #000;

}

tr {
    text-align: left !important;
}

td {
    text-align: left !important;
}

th {
    text-align: left !important;
    color: white !important;

}

tbody {
    background-color: #1C1C1C !important;
}

thead, tbody, tfoot, tr, td, th {

    font-size: 16px;
}

.table td, .table th {
    padding: 1.75rem !important;

}

.table tbody tr td {
    color: #515151;
    font-weight: 400;
    font-size: 2.0rem;
    text-align: right;

}

.table-bordered th {
    border: 1px solid #454545;
}
</style>
