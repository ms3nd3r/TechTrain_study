// DO NOT DELETE
import React from "react";
import { useEffect,useState } from 'react'

export default function Description(){
    const initialUrl = "https://images.dog.ceo/breeds/komondor/n02105505_3787.jpg";
    const [dogUrl,setDogUrl] = useState(initialUrl);
  
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
        <img src={ dogUrl }></img>
        <button onClick={ () =>  randomImage() }>更新</button>
      </div>
      <h1>犬の画像を表示するサイトです</h1>
    </div>
    )
}