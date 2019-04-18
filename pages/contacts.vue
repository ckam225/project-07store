<template>
    <div class="x-container mh">
        <div class="x-column">

            <div class="x-col-1">
                    <div class="subtitle">Контакты</div>
                    <div class="">Электронная почта - <b>orders@7shop.com</b></div>
                    <div class="">Россия -<b> 8 (900) 600-43-95</b> (звонок бесплатный)</div>

                <div class="sh35"></div>
                <div class="subtitle">Напишите нам</div>
                 <form class="x-form">
                     <div class="x-form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="textbox" required>
                        <label for="еуд">Номер телефона</label>
                        <input type="text" class="textbox">
                        <label for="еуд">Электронная почта</label>
                        <input type="email" class="textbox" required>
                     </div>
                     <div class="x-form-actions">
                       <button type="submit" class="btn btn-green">Submit</button>
                     </div>
                </form>
            </div>
            <div class="x-col-2">
               
            </div>

        </div>
    </div>
</template>
<style scoped>
.x-column{
    padding-top: 30px;
    display:flex;
    flex-direction: column;
}
.x-column .x-col-2{
    padding:0 20px;
}

</style>
