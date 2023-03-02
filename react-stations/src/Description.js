// DO NOT DELETE
import React from "react";
import {DogImage} from "./DogImage";
import {DogUrl} from "./DogImage";

export const Description = () => {

    return(
    <div>
      <div className='main'>
        <DogImage DogUrl={ DogUrl } />
            {/* DogImage propsで受け取り */}
      </div>
      <h1>犬の画像を表示するサイトです</h1>
    </div>
    )
}