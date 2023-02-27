// DO NOT DELETE
import React from "react";
import DogImage from "./DogImage";

export default function Description(){

    return(
    <div>
      <div className='main'>
        <DogImage dogUrl={ dogUrl } />
      </div>
      <h1>犬の画像を表示するサイトです</h1>
    </div>
    )
}