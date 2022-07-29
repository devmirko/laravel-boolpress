<template>
<section class="hero">
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6" id="hero_left">
                <h1>Cogli ogni attimo e postalo.</h1>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6" id="hero_right"></div>
        </div>
    </div>
</section>
</template>

<script>
export default {
  name: 'HeroApp',
  data(){
      return{

      }
  }

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import 'bootstrap/scss/bootstrap';
.hero{
    width: 100%;
    min-height: 500px;
    background-color: black;

    #hero_left{
        display: flex;
        justify-content: center;
        align-items: center;


        h1{
            color: white;
            font-size: 40px;
        }



    }





}



</style>
