function changeImage(){
    var es= document.getElementsByTagName('img')

    // es는 배열임. -- img태그 요소가 여러개 일수 있어서...
    es[0].src='./image/paris.jpg'
}