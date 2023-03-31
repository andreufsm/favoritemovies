<template>
  <h3>Meus favoritos</h3>

  <v-card>
    <MovieCard v-for="movie in movies"
      :key="movie.id"
      :movie="movie"
    />

    <div v-if="!movies.length">
      Você não tem nenhum favorito :(
    </div>
  </v-card>



</template>

<script setup>

  import {useMovie} from "@/composable/useMovie";
  import MovieCard from "@/components/MovieCard";

  //const {favorite} = useMovie()

  defineProps({
    movies: Array
  })
</script>
