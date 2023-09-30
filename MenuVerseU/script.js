const imgArray = [
    './IMAG/PISTHIDRYNEUM_1.png',
    './IMAG/PISTHIDRYNEUM_2.jpg'
]
const img = document.querySelector('#slide')
//const img = document.querySelector('#slide')
let i = 0

const slideShow = () => {
    img.src = imgArray[i]
    i = (i < imgArray.length -1) ? i+1 : 0
}
const interval = () => {
    setInterval(slideShow, 1000)
}