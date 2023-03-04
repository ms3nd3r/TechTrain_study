// DO NOT DELETE
import React from "react";
import { useState } from "react";

export const BreedsSelect = (props) =>{


    return (
        <div>
            <select name="breed" >
                {breeds.map(breed => (
                    <option key={breed} value={breed}>{breed}</option>
                    // 選ばれたらイベント発火
                    //props.BreedSelect?
                    // selectでonchangeを実行
                    // selectのvalueを変更
                ))}
            </select>
        </div>
    );

}