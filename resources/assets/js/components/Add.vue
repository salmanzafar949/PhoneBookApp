<template>
<div class="modal" :class="openmodal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete" aria-label="close" @click="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
      <div class="field">
        <label class="label">Name</label>
          <div class="control">
            <input class="input" type="text" placeholder="Name of the person" v-model="list.name">
          </div>
      </div>
      <div class="field">
        <label class="label">PhoneNo</label>
          <div class="control">
            <input class="input" type="number" placeholder="Number" v-model="list.no">
          </div>
      </div>
       <div class="field">
        <label class="label">Email</label>
          <div class="control">
            <input class="input" type="email" placeholder="Enter email" v-model="list.email">
          </div>
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
                  name:'',
                  no:'',
                  email:''
                }
              }
    },
    methods:{
        close(){
            this.$emit('closeRequest');
        },
        save(){

          axios.post('phone',this.$data.list).then((response)=> console.log(response)).catch((error)=>console.log(error))
        }
    }
}
</script>