<!-- App.vue -->
<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
      <div class="container-fluid">
          <router-link class="navbar-brand"  aria-current="page"  to="/">Kola Market</router-link>
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->

        </div>
    </nav>
    <div class="p-2">
      <router-view></router-view>
    </div>

    <div class=" d-flex justify-content-center ">
      <div class="chat-icon-btn px-5 footer-box  d-grid d-flex gap-2 d-md-flex justify-content-md-between">

        <router-link to="/" class="btn btn-primary-outline ">
         Home
        </router-link>

        <router-link to="/invoices" class="btn btn-default-outline ">
          Invoice
        </router-link>


      </div>
    </div>

  </div>
</template>

<script>
export default {
  // Component logic here
};
</script>
 <style scoped>
 .navbar{
    margin-bottom: 10px;
    box-shadow:  -2px 2px 12px 1px rgb(0 0 0 / 20%);
    border-radius: 0px 0px 6px 6px;
  }

.chat-icon-btn {
  position: fixed;
  bottom: 2px;
  color: #fff;
  font-size: 25px;
  /* margin-bottom: 5px; */
  z-index: 999;
}

.footer-box{
  /* background-color:rgba(0, 0, 0, 1.4); */
  border-radius:3em;
  border: solid 1px #d7d7d7;
  padding:7px 15px;
  background: rgb(14,0,255);
background: linear-gradient(127deg, rgba(14,0,255,0.5816920518207283) 40%, rgba(0,212,255,0.4724483543417367) 100%);

}

 </style>