function getData() {
    // これから作ろうとしているもので、JavaScriptでフルネームを生成する必要が出てきました。
    // ただ現状持っている情報では、名前と苗字をそれぞれのみしかありません。
    // そのため、JavaScriptで連結させて生成することにしました。
    const test = [
        { id: 1, first_name: '優', family_name: '大木', affilication: 'TechTrain', is_student: false },
        { id: 2, first_name: '太郎', family_name: '山田', affilication: 'HogeHoge大学', is_student: true }
    ];
    return test.map(buildFullName)
}

function buildFullName(data) {
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

    return(newTest); //getDataに新しいオブジェクトの情報を飛ばす

    // return `${    data.full_name = data.family_name+" "+data.first_name}`;
        // console.log(test);
        //     if (index == 0) {
        //         test.full_name = test.family_name + " " + test.first_name.value;
        //     }


    // console.log(test);
    // Station14の問題はこちらです。想定する答えをここを書いてください。
    // 氏名がわかるようにしつつ、半角スペースで繋いでください。
    // またtest配列のそれぞれのオブジェクトに対して、full_nameのプロパティが追加されるように実装すること
}

// 出力が想定される答え
// const test = [
//     {id: 1, full_name: '大木 優', first_name: '優', family_name: '大木',affilication: 'TechTrain', is_student: false},
//     {id: 2, full_name: '山田 太郎', first_name: '太郎', family_name: '山田',affilication: 'HogeHoge大学', is_student: true}
// ];