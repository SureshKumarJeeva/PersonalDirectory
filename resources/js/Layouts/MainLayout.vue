<template>
  <!-- Global Menu -->
  <ion-menu content-id="main-content">
    <ion-header>
      <ion-toolbar color="primary">
        <ion-title>Options</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content class="ion-padding">
      <ion-menu-toggle>
        <ion-item router-link="/home">Home</ion-item>
        <ion-item router-link="/finance">Finance</ion-item>
      </ion-menu-toggle>
    </ion-content>
  </ion-menu>

  <!-- Main Content Area -->
  <div class="ion-page" id="main-content">
    <ion-header>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-menu-button></ion-menu-button>
        </ion-buttons>
        <ion-title>{{ title }}</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content class="ion-padding">
      <!-- Page content will be rendered here -->
      <slot /> 
    </ion-content>
  </div>
</template>


<script setup>
import { 
  IonContent, IonHeader, IonItem, IonMenu, IonMenuToggle, 
  IonTitle, IonToolbar, IonButtons, IonMenuButton 
} from '@ionic/vue';
</script>