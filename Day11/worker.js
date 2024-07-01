var n=0
while(true){
    n++
    console.log(n)

    //브라우저의 hh 요소에 보여주기 -error
    //document.getElementById('hh').innerHTML= n

    // 워커가 UI를 건드리려면 main thread에게 보내야 함
    postMessage(n)

    //잠시 잠재우기..
    for(var i=0; i<10000000; i++){
        new Date()
    }
}