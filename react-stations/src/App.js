// DO NOT DELETE

import * as React from 'react'
import Header from './Header'
import Description from './Description'
import './App.css'

/**
 * 
 * @type {React.FC}
 */

export const App = () => {

  return (
    <>
    <Header />
    <Description />
    {/* ここにコンポーネントを呼び出したいんです。 */}
    {/* DogImage propsで受け取り */}
    </>
    // <div>
    //   <header>Dogアプリ</header>
    //   <div className='main'>
    //     <img src={ dogUrl }></img>
    //     <button onClick={ () =>  randomImage() }>更新</button>
    //   </div>
    //   <h1>犬の画像を表示するサイトです</h1>
    // </div>
  )


}
