// DO NOT DELETE
import React from "react";
import { useState } from 'react'

export const DogImage = () => {

    const initialUrl = "https://images.dog.ceo/breeds/komondor/n02105505_3787.jpg";
    const [DogUrl,setDogUrl] = useState(initialUrl);
  
    function randomImage(){
        fetch("https://dog.ceo/api/breeds/image/random")
        .then((response) => {
          return response.json();
        })
        .then((data) =>{
          console.log(data.message);
          setDogUrl(data.message);
        })
      }
    

    
    return(
        <div>
            <img src={ DogUrl }></img>
            <button onClick={ () =>  randomImage() }>更新</button>
        </div>
    );
}