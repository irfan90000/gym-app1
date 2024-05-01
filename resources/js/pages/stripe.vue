<template id="app">
    <form id="payment-form" style="background-color: white;">
        <div id="payment-element">
            <!-- Stripe will create form elements here -->
        </div>
        <button class="my-4 text-right" type="submit" @click="handleSubmit" style="width: 100px !important;
    height: 48px; margin-left: 20px;"><span style="margin-right: 20px;">Pay via Stripe</span></button>
    </form>
</template>

<script setup>
import axios from 'axios';

import {useRoute, useRouter} from 'vue-router';
import {ref, onMounted} from "vue"

const route = useRoute();
const router = useRouter();
const amount = ref(null);
const token = ref(null)
const stripe = ref(null)
const elements = ref(null)


onMounted(() => {


    console.log(localStorage.getItem('product_id'));
    axios.post('payment/initiate', {
        amount: localStorage.getItem('price'),
        currency: 'USD'
    }).then(response => {


        console.log(response);
        token.value = response.data.client_secret // Use to identify the payment

        // console.log(Stripe(STRIPE_PUBLISHABLE_KEY));
        stripe.value = Stripe('pk_test_51Ly0sBE75ef8cmSM17gsugzMcI83OTNR2hanKNL47KbmcKmsPfNdo054xhxWDKpbD2HDKKr3e7Gzp4Yzek4mwmlX00918XSUUX');
        const options = {
            clientSecret: response.data.client_secret,
        }
        console.log(response, 'ff')
        elements.value = stripe.value.elements(options);


        const paymentElement = elements.value.create('payment');


        paymentElement.mount('#payment-element');
    }).catch(error => {
        // throw error
    })
})

const handleSubmit = async (e) => {
    e.preventDefault();

    const {error} = await stripe.value.confirmPayment({
        elements: elements.value,
        redirect: "if_required"
    });

    if (error === undefined) {

        axios.post("payment/complete", {
            token: token.value,
            product_id: localStorage.getItem('product_id'),
            user_id: localStorage.getItem('user_id'),
        })
            .then(response => {

                var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                var fileLink = document.createElement('a');
                fileLink.href = fileURL;
                fileLink.setAttribute('download', 'gym.pdf');
                document.body.appendChild(fileLink);

                fileLink.click();
                router.push({
                    path: '/',
                    query: {
                        message: 'Order successfully completed' // Replace 'key' and 'value' with your actual data
                    }
                });

            })
            .catch(error => {
                // Handle error here
                console.error("Error completing payment:", error);
            });
        //
        // axios.post("payment/complete", {
        //     token: token.value,
        //     product_id: localStorage.getItem('product_id'),
        //     user_id: localStorage.getItem('user_id'),
        // })

    } else {
        axios.post("payment/failure", {
            token: token.value,
            code: error.code,
            description: error.message,
        })
    }
}
</script>
<style>
.p-PaymentDetails-group {
    background-color: white;
}
</style>
