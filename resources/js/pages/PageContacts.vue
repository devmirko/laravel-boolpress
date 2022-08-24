<template>
  <div>
    <h1>Contact us</h1>
    <!-- funzione sul form che va a catturare l'evento all'invio  -->
     <form @submit.prevent="submitMessage">
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control"  type="text" name="name" id="name" v-model="name">
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" v-model="email">
        </div>
        <div class="mb-3">
            <label class="form-label" for="Message">Message</label>
            <textarea class="form-control"  name="message" id="message" cols="30" rows="10" v-model="message"></textarea>
        </div>
        <div>
            <input class="form-check-input"  type="checkbox" name="newsletter" id="newsletter" v-model="mailinglist">
            <label class="form-check-label" for="newsletter">Iscrivimi alla newsletter</label>
        </div>
        <button type="submit" class="btn btn-primary" >Send</button>
    </form>
  </div>
</template>

<script>
export default {
    name: 'PageContacts',
     data() {
        return {
            name: '',
            email: '',
            message: '',
            mailinglist: true,
        }
    },
    methods: {
        submitMessage() {
            console.log('funziona');
             axios.post('/api/leads', {
                name: this.name,
                email: this.email,
                message: this.message,
                mailinglist: this.mailinglist
            })
            .then(res => console.log(res.data));

        }

    }
}

</script>

<style lang="scss" scoped>
</style>
