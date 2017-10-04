<template>
<div>
 <nav class="panel column is-offset-2 is-8">
  <p class="panel-heading">
    PhoneBook
     <button class="button is-primary is-outlined" @click="openaddmodal">
      Add new contact
    </button>
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search">
      <span class="icon is-small is-left">
        <i class="fa fa-search"></i>
      </span>
    </p>
  </div>
  <!-- <p class="panel-tabs">
    <a class="is-active">all</a>
    <a>public</a>
    <a>private</a>
    <a>sources</a>
    <a>forks</a>
  </p> -->
   <a class="panel-block is-active" v-for="contacts,key in lists">
  <!--  <span class="panel-icon">
      <i class="fa fa-book"></i>
    </span> -->
    <span class="column is-9">
      {{ contacts.name }}
    </span>
     <span class="has-text-danger panel-icon column is-1">
        <i class="fa fa-trash" aria-hidden="true"></i>
    </span>
    <span class="has-text-info panel-icon column is-1">
        <i class="fa fa-edit" aria-hidden="true"></i>
    </span>
    <span class="has-text-primary panel-icon column is-1">
        <i class="fa fa-eye" aria-hidden="true"></i>
    </span>
  </a>
  <!-- <a class="panel-block">
    <span class="panel-icon">
      <i class="fa fa-book"></i>
    </span>
    marksheet
  </a>
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fa fa-book"></i>
    </span>
    minireset.css
  </a>
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fa fa-book"></i>
    </span>
    jgthms.github.io
  </a>
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fa fa-code-fork"></i>
    </span>
    daniellowtw/infboard
  </a>
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fa fa-code-fork"></i>
    </span>
    mojs
  </a>
  <label class="panel-block">
    <input type="checkbox">
    remember me
  </label> -->
  <!-- <div class="panel-block">
    <button class="button is-primary is-outlined is-fullwidth">
      reset all filters
    </button>
  </div> -->
</nav>
<Add :openmodal="addActive" @closeRequest="close"></Add>
</div>
</template>
<script>
let Add = require('./Add.vue');
export default{
    components:{Add},
    data(){
           return{
               addActive:'',
               lists:{},
               errors:{}
           }
    },
    mounted(){
               axios.post('/contacts',this.$data.list)
              .then((response)=> this.lists = response.data)
              .catch((error)=>console.log(this.errors = error.response.data.errors))
    },
    methods:{
        // bind the function to Add vue using props
        openaddmodal(){
            this.addActive = 'is-active';
        },
        close(){
            this.addActive ='';
        }
    }
}
</script>