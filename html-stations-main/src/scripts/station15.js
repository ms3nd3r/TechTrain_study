function delay(n){
  return new Promise(function(resolve){
      setTimeout(resolve,n*1000);
  });
}

async function getData() {
  // Promiseを使った実装をやってみましょう！APIとの通信でよく使う表現になります！
  // ３秒後にフルネームのリストを表示されるようにしましょう。
  // 最初から表示されていると、クリアになりません。
  const userList = [
    { id: 1, first_name: '優', family_name: '大木', affilication: 'TechTrain', is_student: false },
    { id: 2, first_name: '太郎', family_name: '山田', affilication: 'HogeHoge大学', is_student: true }
  ];

  await delay(3);//3秒待って

  const result = await userList.map(test);
  // const result = await test(userList) //その後フルネームのオブジェクト追加
  return await result //その後mainにデータを戻す
}



function test(data) {
  
  var fullName = data.family_name+" "+data.first_name; //フルネームをつくるための要素
  var newTest = new Object(); //オブジェクト作成

  //以下既存のデータはそのまま転送
  //新規データは関数から移行してオブジェクト内のデータ作成

  newTest.id = data.id;
  newTest.full_name = fullName;
  newTest.first_name = data.first_name;
  newTest.family_name = data.family_name;
  newTest.affilication = data.affilication;
  newTest.is_student = data.is_student;

  return(newTest); 

  console.log(data);
  // return(newUserList);
}

