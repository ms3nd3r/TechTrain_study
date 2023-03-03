// DO NOT DELETE
import React from "react";
import { useState,useEffect } from "react";

export const DogListContainer = () => {

    const initialBreeds = [];
    const [breeds,setBreeds] = useState(initialBreeds); 

    useEffect(()=>{
        fetch("https://dog.ceo/api/breeds/list/all")
        .then((response) => {
          return response.json();
        })
        // 全犬種を取得
        // messageの一層目を配列化
    },[])

    return(
        <div>
            
        </div>
    );
}