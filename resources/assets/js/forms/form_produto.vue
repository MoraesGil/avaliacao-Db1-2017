<template lang="html">
  <form :id="formId">
    <label for="input_name">Label</label>
    <input type="text" id="input_name" class="form-control" data-action="auto-focus" v-model="dataForm.label"/>
    <br>
    <label for="input_descricao">Descricão</label>
    <textarea id="input_descricao" placeholder="..." class="form-control" v-model="dataForm.descricao" style="resize: none;"></textarea>
    <br>
    <label for="descricao">Preço</label>
    <money id="input_name"  v-model="dataForm.preco" v-bind="dataForm.money" class="form-control"></money>

  </form>
</template>

<script>
import MainForm from './form_main.vue'
export default {
  extends: MainForm,
  data(){
    return {
      dataForm:{
        label:'',
        descricao:'',
        preco:0,
        money: {
          decimal: ',',
          thousands: '.',
          prefix: 'R$ ',
          precision: 2,
          masked: false 
        }
      },
    }
  },
  mounted(){

  },
  methods:{
  }
}
</script>

<style lang="css">
</style>
