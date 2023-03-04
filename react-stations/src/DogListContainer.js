// DO NOT DELETE
import React from "react";
import { useState,useEffect } from "react";

export const DogListContainer = () => {

    const [breeds,setBreeds] = useState([]); 

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
            <select name="breed" >
                {breeds.map(breed => (
                    <option key={breed} value={breed}>{breed}</option>
                ))}
            </select>
        </div>
    );
}