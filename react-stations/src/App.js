// DO NOT DELETE
import { useEffect,useState } from 'react'
import * as React from 'react'
import './App.css'

/**
 * 
 * @type {React.FC}
 */

export const App = () => {
  const initialUrl = "https://images.dog.ceo/breeds/komondor/n02105505_3787.jpg"
  const [dogUrl,setDogUrl] = useState(initialUrl)

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
  

  return (
    <div>
      <header>Dogアプリ</header>
      <div className='main'>
        <img src={ dogUrl }></img>
        <button onClick={ () =>  randomImage() }>更新</button>
      </div>
      <h1>犬の画像を表示するサイトです</h1>
    </div>
  )


}
