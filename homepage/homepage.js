middle = {
    trang1: [

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "aaa",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

        {
            image1: "/doan/img/img_8338_f70aa7e040374153bf5c660c17748824_master.jpg",
            image2: "/doan/img/phoneKQ.jpg",
            brandsp: "ONEPLUS",
            namesp: "Điện thoại One Plus Ace 3 phiên bản Keqing 16G + 512GB - Genshin Impact",
            pricesp: "15,000,000",
            linksp:'/doan/Trangcon+footer/trangcon.php',
        },

    ],
}

for(let i of middle.trang1){
    


    let image1 = document.createElement('img')
    image1.classList.add("img1")
    image1.setAttribute('src',i.image1)

    let image2 = document.createElement('img')
    image2.classList.add("img2")
    image2.setAttribute('src',i.image2)

    let divanh = document.createElement('div')
    divanh.classList.add('divanh')
    divanh.appendChild(image1)
    divanh.appendChild(image2) 

    let linkimg = document.createElement('a')
    linkimg.setAttribute('href',i.linksp)
    linkimg.appendChild(divanh)

    let brand =  document.createElement('p')
    brand.classList.add('brandsp')
    brand.innerText =  i.brandsp


    let name = document.createElement('p')
    name.classList.add("namesp")
    name.innerText = i.namesp

    let price = document.createElement('p')
    price.classList.add('pricesp')
    price.innerText = i.pricesp

    let thongtin = document.createElement('div')
    thongtin.appendChild(brand)
    thongtin.appendChild(name)
    thongtin.appendChild(price)
    thongtin.classList.add('divtt')

    let divlon = document.createElement("div")
    divlon.classList.add("divlon")
    divlon.appendChild(linkimg)
    divlon.appendChild(thongtin)
    
    // divlon.appendChild(image2)
    

    document.getElementById("products").appendChild(divlon)
}

document.getElementById("srch").addEventListener("click",() =>{
    let searchInput = document.getElementById("search-input").value
    let tong= document.querySelectorAll(".divlon")
    let productName = document.querySelectorAll(".namesp")
    let prices = document.querySelectorAll("h6")

   productName.forEach((items, index)=> {
    if (items.innerText.includes(searchInput)){
        tong[index].classList.remove("hide")
        } else{
            tong[index].classList.add("hide")
        }
   })
})
