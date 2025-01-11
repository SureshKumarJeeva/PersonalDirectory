<script setup>
// import Layout from './Layout'
import { Head } from '@inertiajs/vue3';
import { IonContent, IonHeader, IonToolbar, IonPage, IonSplitPane, IonButton, IonMenu, IonList, IonListHeader, IonMenuToggle, IonItem, IonIcon } from '@ionic/vue';

const props = defineProps({ name: Object });

</script>

<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
        <ion-title>Home Personal Directory</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-split-pane contentId="main-content">
      <ion-menu contentId="main-content" type="overlay">
        <ion-content>
          <ion-list id="inbox-list">
            <ion-list-header>Device Navigator</ion-list-header>

            <ion-menu-toggle auto-hide="false">
              <ion-item detail="false">
                <ion-icon name="menu" size="large"></ion-icon>
                <ion-label>Title 1</ion-label>
              </ion-item>
            </ion-menu-toggle>
          </ion-list>

        </ion-content>
      </ion-menu>
    </ion-split-pane>

  </ion-page>
</template>