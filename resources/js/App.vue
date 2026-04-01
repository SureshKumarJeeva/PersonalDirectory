<template>
  <ion-app>
      <component :is="$page.component" v-bind="$page.props" />
  </ion-app>
</template>

<script setup>
import { IonApp, IonRouterOutlet } from '@ionic/vue';
</script>