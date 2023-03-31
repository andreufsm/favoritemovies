<template>
  <v-app theme="dark">

    <v-navigation-drawer
      v-model="isFavoriteOpen"
      location="right">

      <div class="pa-4">
        <!--<my-favorite/>-->
        <MyFavorite :movies="favorites" />
      </div>

    </v-navigation-drawer>

    <v-app-bar title="Filmes" class="text-center">
      <v-btn icon="mdi-heart" @click="isFavoriteOpen = !isFavoriteOpen"/>
    </v-app-bar>



    <v-main class="mt-4">
      <v-container>

        <v-row>
          <v-col v-for="movie in movies.data"
                 :key="movie.id"
                  cols="12"
                  md="6"
                  lg="3">

                  <MovieCard :movie="movie"/>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>

</template>

<script setup>

  import axios from 'axios';
  import { useAsyncState } from '@vueuse/core'
  import {computed, ref} from "vue";
  import {useMovie} from "@/composable/useMovie";
  import MyFavorite from "@/components/MyFavorite";
  import MovieCard from "@/components/MovieCard";




  //const {favorite, add: addMovieToFavorite } = useMovie();
  const isFavoriteOpen = ref(false)

  const { state:movies, isReady, isLoading } = useAsyncState(
    axios
      .get('http://localhost:8000/api/movies')
      .then(t => t.data),
    { id: null },
  )

  const favorites = computed(()=>{
    if(!movies.value?.data){
      return [];
    }

    return movies.value.data.filter(o => o.is_favorite)
  })

</script>
