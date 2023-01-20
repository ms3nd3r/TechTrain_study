function changeBackgroundColor(e) {
  // ここに背景色を変える処理を書く。
  const text = document.getElementById("text");
  console.log(text);
  const checkBox = document.getElementById("check");
  console.log(checkBox);
  if(checkBox.checked){
    text.style.backgroundColor = "red";
  }else{
    text.style.backgroundColor = "transparent";
  }
}
