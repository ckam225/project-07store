<template>
    <div></div>
</template>
<style>
.x-card{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 200px;
    border: 1px solid #eee;
    margin: 5px;
    transition: all .3s;
}
.x-card:hover{
    box-shadow: 0 1px 4px -2px #777;
}
.x-card:hover > .x-ribbon{
    display: flex;
}
.x-card .x-card-image{
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center
}
/* .x-card .x-card-image img{
   /* background: #eee; */
/* width: 79px;
   height: 159px; 
} */
.x-card .x-card-title{
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    padding: 5px 15px;
}
.x-card .x-card-title a:hover{
    color: #ffa300;
}
.x-card .x-card-rate{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 15px ;
}
.x-card .x-card-rate a{
    font-size: 14px;
    color: #ffcc00;
    color: var(--color-accent)
}
.x-likes{
 display: flex;
 align-items: center;
 margin: 10px 0;
}
.x-likes .x-likes-item {
    margin: 0 2px;
    color: #b9b9b9;
}
.x-card .x-card-footer{
    padding: 5px 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.x-card-footer .x-prices{
    display: flex;
    flex-direction: column;
}
.x-prices .x-sold{
    text-decoration: line-through;
    color: #777;
}
.x-prices .x-price{
    font-weight: bold;
    font-size: 18px;
}
.x-card-footer .x-cart a{
    text-align: center;
   padding: 5px 10px;
   color: #fff;
   background: #04c504;
   background: var(--main-color);
   border-radius: 3px;
   transition: all .3s;
}
.x-card-footer .x-cart a:hover{
    background: rgba(4, 197, 4, 0.6)
}
.x-ribbon{
    display: none;
    background: #fff;
    color: #ffa300;
    position: absolute;
    right: 0;
    padding: 5px 15px;
    transition: all 0.3s;
}
.x-ribbon .icon{
    font-size: 25px;
}

</style>
