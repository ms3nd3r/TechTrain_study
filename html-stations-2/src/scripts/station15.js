function displayList(){
    var element = document.getElementById("fruits");
    var pElement = element.querySelector("p");
    let childNodesCount = element.childElementCount;

    console.log(childNodesCount);

    // pの内容だけ取得したい

    let getChildElement = element.children;
    console.log(getChildElement.item(1).textContent);

    var fruitsTxt = [];

    for(var i = 0; i<childNodesCount; i++){
        fruitsTxt[i] = getChildElement.item(i).textContent;
    }
    
    console.log(fruitsTxt);
    
    var ulElement = document.createElement('ul');
    var liElement1 = document.createElement('li');
    var liElement2 = document.createElement('li');
    var liElement3 = document.createElement('li');
    liElement1.textContent = fruitsTxt[0];
    liElement2.textContent = fruitsTxt[1];
    liElement3.textContent = fruitsTxt[2];

    ulElement.appendChild(liElement1);
    ulElement.appendChild(liElement2);
    ulElement.appendChild(liElement3);

    element.replaceChild( ulElement, pElement);

    element.removeChild(element.children[2]);
    element.removeChild(element.children[1]);

}