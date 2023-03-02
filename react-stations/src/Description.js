// DO NOT DELETE
import React from "react";
import { useState } from "react";
import {DogImage} from "./DogImage";

export const Description = () => {

  const initialUrl = "https://images.dog.ceo/breeds/komondor/n02105505_3787.jpg";
  const [url,setDogUrl] = useState(initialUrl);

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
      <div className='main'>
        <DogImage url={ url } />
            {/* DogImage propsで受け取り */}
        <button onClick={ () =>  randomImage() }>更新</button>
      </div>
      <h1>犬の画像を表示するサイトです</h1>
    </div>
    )
}