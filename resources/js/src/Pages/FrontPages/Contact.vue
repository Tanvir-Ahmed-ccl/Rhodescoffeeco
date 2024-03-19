<template>
    <AdminLayout>
        <!-- Page Title -->
        <section class="px-5 md:px-20 flex flex-col justify-end" 
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('imgs/history_inner_bg1.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: top;"
        >
            <div class="pt-36 pb-20 md:py-44 text-center text-[#c8d6ca] transition-all animate-fade">
                <h1 class="text-4xl md:text-7xl font-semibold italic">Let's Make it Happen</h1>
            </div>
        </section>

        <!-- Page Content -->
        <section class="grid md:grid-cols-2 gap-10 px-5 md:px-20 py-12 md:py-32 transition-all animate-fade">
            <div class="flex flex-col gap-5">
                <h5 class="text-gray-700 text-lg md:text-4xl font-semibold">Get in Touch with Rhodes Coffee Co.</h5>
                <p>Whether you have a question, feedback, or want to inquire about our catering services, we're here to help! Reach out to us through any of the following channels:</p>

                <p>hello@rhodescoffeeco.com,</p>
                <p>(315) 430-5996</p>
                <p>4759 Salina St, Pulaski, NY 13142</p>

                <p>
                    <a href="https://www.instagram.com/rhodescoffeeco/"> <i class="fa-brands fa-instagram text-3xl"></i> </a>
                </p>

                <div class="flex flex-col gap-3">
                    <p>Working Hours</p>
                    <p> 
                        Saturday & Sunday <br/>
                        08:00 am - 2:00pm
                    </p>
                    
                    <p>
                        Monday & Friday <br/>
                        07:00 am - 1:00pm
                    </p>
                    
                    <p>
                        Tuesday - Thursday <br/>
                        Closed
                    </p>
                </div>
            </div>

            <div class="p-5 md:pl-32">
                <h3 class="text-2xl font-semibold ">Request an Event Quote</h3>

                <fwb-alert closable icon border type="success" v-if="$page.props.flash.message">{{ $page.props.flash.message }}</fwb-alert>
                <fwb-alert closable icon border type="danger" v-if="$page.props.flash.exception">{{ $page.props.flash.exception }}</fwb-alert>
                
                <form class="flex flex-col gap-5 mt-10" @submit.prevent="form.post('/contact', {onSuccess: () => form.reset()})">
                    <div class="relative z-0">
                        <input type="text" id="full_name" required v-model="form.name" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="full_name" class="absolute text-md text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            Name / Company
                        </label>
                        <p v-if="form.errors.name" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.name }}</p>
                    </div>

                    <div class="relative z-0">
                        <input type="text" id="email" required v-model="form.email" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="email" class="absolute text-md text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            Email Address
                        </label>
                        <p v-if="form.errors.email" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.email }}</p>
                    </div>

                    <div class="relative z-0">
                        <input type="text" id="phone" v-model="form.phone" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="phone" class="absolute text-md text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            Phone Number
                        </label>
                        <p v-if="form.errors.phone" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.phone }}</p>
                    </div>

                    <div>
                        <select id="underline_select" v-model="form.type_of_event" class="block py-2.5 px-0 w-full text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option value="type_of_event" selected>Type of Event</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Corporate or Office Event">Corporate or Office Event</option>
                            <option value="Non-Profit or School">Non-Profit or School</option>
                            <option value="Conference or Expo">Conference or Expo</option>
                            <option value=" Church Event"> Church Event</option>
                            <option value="Retail Event">Retail Event</option>
                            <option value="Baby or Bridal Shower">Baby or Bridal Shower</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="relative z-0 mt-5">
                        <input type="date" id="event_date" v-model="form.event_date" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="event_date" class="absolute text-md text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            Date of Event
                        </label>
                        <p v-if="form.errors.event_date" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.event_date }}</p>
                    </div>

                    <div class="relative z-0">
                        <input type="text" id="event_address" v-model="form.event_address" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="event_address" class="absolute text-md text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            Event Location - Venue & Address
                        </label>
                        <p v-if="form.errors.event_address" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.event_address }}</p>
                    </div>

                    <div class="relative z-0">
                        <input type="text" id="no_of_guest" v-model="form.no_of_guest" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="no_of_guest" class="absolute text-md text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                            No of Guests Expected
                        </label>
                        <p v-if="form.errors.no_of_guest" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.no_of_guest }}</p>
                    </div>

                    <div>
                        <select id="underline_select" v-model="form.hear_us" class="block py-2.5 px-0 w-full text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option value="hear_us" selected>How did you hear about us?</option>
                            <option value="Google Search"> Google Search</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Friends or Family">Friends or Family</option>
                            <option value="Venue/Event Planner">Venue/Event Planner</option>
                            <option value="We’re a Repeat Client">We’re a Repeat Client</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="relative z-0">
                        <textarea id="message" v-model="form.message" class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" ></textarea>
                        <label for="message" class="absolute text-md text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">
                           Tell us more about your event
                        </label>
                        <p v-if="form.errors.message" class="mt-2 text-sm text-red-600 dark:text-red-500">{{ form.errors.message }}</p>
                    </div>

                    <div class="mt-3">
                        <button :disabled="form.processing" class=" float-right uppercase items-center hidden md:flex py-3 px-6 bg-[#ddc9cc] hover:bg-[#dbbdc2] text-black text-lg">
                            <span v-if="form.processing">Processing ...</span> <span v-else>Send</span> <i class="ml-2 fa fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11564.584150330187!2d-76.1269897!3d43.56184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d8358140e9fabf%3A0x2b06051bf3685f38!2sRhodes%20Coffee%20Co!5e0!3m2!1sen!2sus!4v1710689491419!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </AdminLayout>
</template>


<script setup>
import AdminLayout from '../../Layouts/Frontend.vue';
import { useForm } from '@inertiajs/vue3'
import { FwbAlert } from 'flowbite-vue'

const form = useForm({
  name: null,
  email: null,
  phone: null,
  event_date: null,
  event_address: null,
  message: null,
  hear_us: 'hear_us',
  type_of_event: 'type_of_event',
})
</script>