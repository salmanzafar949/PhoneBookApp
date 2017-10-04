<template>
<div class="modal" :class="openmodal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Add Contacts</p>
      <button class="delete" aria-label="close" @click="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
      <div class="field">
        <label class="label">Name</label>
          <div class="control">
            <input class="input" type="text" :class="{'is-danger':errors.name}" placeholder="Name of the person" v-model="list.name">
          </div>
          <small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
      </div>
      <div class="field">
        <label class="label">PhoneNo</label>
          <div class="control">
            <input class="input" type="number" :class="{'is-danger':errors.phoneno}" placeholder="Number" v-model="list.phoneno">
          </div>
          <small v-if="errors.phoneno" class="has-text-danger">{{ errors.phoneno[0] }}</small>
      </div>
       <div class="field">
        <label class="label">Email</label>
          <div class="control">
            <input class="input" :class="{'is-danger':errors.email}" type="email" placeholder="Enter email" v-model="list.email">
          </div>
          <small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" @click="save">Save changes</button>
      <button class="button" @click="close">Cancel</button>
    </footer>
  </div>
</div>
</template>
<script>
export default {

    props:['openmodal'],
    data(){
              return {
                list:{
                  email:'',
                  phoneno:'',
                   name:''
                  
                },
                errors:{}
              }
    },
    methods:{
        close(){
            this.$emit('closeRequest');
        },
        save(){

          axios.post('phone',this.$data.list)
          .then((response)=> console.log(response))
          .catch((error)=>console.log(this.errors = error.response.data.errors))
        }
    }
}
</script>