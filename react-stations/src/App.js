// DO NOT DELETE
import { useState } from 'react'
import * as React from 'react'
import './App.css'

/**
 * 
 * @type {React.FC}
 */

export const App = () => {
  const initialUrl = "https://images.dog.ceo/breeds/komondor/n02105505_3787.jpg"
  const [dogUrl,setDogUrl] = useState(initialUrl)
  return (
    <div>
      <header>Dogアプリ</header>
      <img src={ dogUrl } width="300px"></img>
      {/* <button onClick={ () => setDogUrl("https://images.dog.ceo/breeds/dalmatian/cooper2.jpg") }>チェンジ</button> */}
      <h1>犬の画像を表示するサイトです</h1>
    </div>
  )
}
