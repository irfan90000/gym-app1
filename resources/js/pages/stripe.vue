<template>
    <form id="payment-form">
        <div id="payment-element">
            <!-- Stripe will create form elements here -->
        </div>
        <button type="submit" @click="handleSubmit">Pay via Stripe</button>
    </form>
</template>

<script setup>
import axios from 'axios';
import { ref, onMounted } from "vue"

const token = ref(null)
const stripe = ref(null)
const elements = ref(null)

onMounted(() => {
    axios.post('payment/initiate', {
        amount: 150,
        currency: 'USD'
    }).then(response => {

        console.log(response);
        token.value = response.data.client_secret // Use to identify the payment

        // console.log(Stripe(STRIPE_PUBLISHABLE_KEY));
        stripe.value = Stripe('pk_test_51Ly0sBE75ef8cmSM17gsugzMcI83OTNR2hanKNL47KbmcKmsPfNdo054xhxWDKpbD2HDKKr3e7Gzp4Yzek4mwmlX00918XSUUX');
        const options = {
            clientSecret: response.data.client_secret,
        }
        console.log(response,'ff')
        elements.value = stripe.value.elements(options);


        const paymentElement = elements.value.create('payment');


        paymentElement.mount('#payment-element');
    }).catch(error => {
        // throw error
    })
})

const handleSubmit = async (e) => {
    e.preventDefault();

    const { error } = await stripe.value.confirmPayment({
        elements: elements.value,
        redirect: "if_required"
    });

    if (error === undefined) {
        axios.post("payment/complete", {
            token:  token.value,
        })
    } else {
        axios.post("payment/failure", {
            token: token.value,
            code: error.code,
            description: error.message,
        })
    }
}
</script>
