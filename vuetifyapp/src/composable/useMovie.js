import { ref } from 'vue';
import axios from 'axios';

//import { useStorage } from '@vueuse/core'
//const favorite = useStorage('favorite', [])

const favorite = ref([])

export const useMovie = () => {


  function add(movie){
    // ajax para backend para adicionar
    // const isAdded = inFavorite(movie.id)
  }



  function remove(id) {

    //const index = favorite.value.findIndex(o => o.id === id)
    /*
    if(index >= 0){
        favorite.value.splice(index, 1)
    }
     */

    // eu decido o que vai para fora!

    /*
    function inFavorite(id){
      return favorite.value.some(o => o.id === id)
    }

    */
  }

  function addOrRemove(movie){

    axios.put(`http://localhost:8000/api/movies/${movie.id}/favorite`).
      then((response) =>{
        movie.is_favorite = response.data.data.is_favorite
        console.log(response.data.data);
    })
    /*
    if(movie.is_favorite){
      remove(movie.id)
    }else{
      add(movie)
    }
    */
  }

  return {
    // funcionalidades
    favorite,
    add,
    remove,
    addOrRemove,
  }
}
