// DO NOT DELETE
import React from "react";
import { useState,useEffect } from "react";
import { BreedsSelect } from "./BreedsSelect";

export const DogListContainer = () => {

    const [breeds,setBreeds] = useState([]); 
    const [selectedBreed,setSelectedBreed] = useState("");


    useEffect(()=>{
        fetch("https://dog.ceo/api/breeds/list/all")
        .then((response) => {
          return response.json();
        })
        .then(mes => {
            const list = mes.message
            setBreeds(Object.keys(list))

        // 全犬種を取得
        // messageの一層目を配列化
        })

    },[])

    return(
        <div>
            <BreedsSelect breeds={breeds} />
        </div>
    );
}