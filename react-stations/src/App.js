// DO NOT DELETE

import * as React from 'react'
import { Header } from './Header'
import { Description } from './Description'
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
    </>
  )


}
