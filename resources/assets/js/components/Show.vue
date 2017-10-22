<template>
    <div class="modal":class='openmodal'>
        <div class="modal-background"></div>
        <div class="modal-card">

            <header class="modal-card-head">
                <p class="modal-card-title">Info of Mr. {{list.name}}</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>

            <section class="modal-card-body">

                <!-- Name -->
                <div class = "field" >
                    <li class="panel-block">
                        <label class="column is-2">Name :</label>
                        {{list.name}}
                    </li>
                </div>

                <!-- Phone ... -->
                <div class="field">
                    <li class="panel-block">
                        <label class="column is-2">Phone :</label>
                        {{list.phone}}
                    </li>
                </div>

                <div class="field">
                    <li class="panel-block">
                        <label class="column is-2">Email :</label>
                        {{list.email}}
                    </li>
                </div>

            </section>

            <footer class="modal-card-foot">
                <button class="button" @click="close">Cancel</button>
            </footer>

        </div>
    </div>
</template>



<script>

    export default{
        props:['openmodal'],//declared a props
        data(){
          return{
              list:''
          }
        },

        methods: { //besides props we can also declare methods here
            close() {
                this.$emit('closeRequest')
            }
        }
    }


</script>
