<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @vite(['resources/css/catalog/header.css'])
    @vite(['resources/css/catalog/catalog.css'])
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxstar</title>
</head>
<body>

 <header class="header">
    <div class="header__container container">
        <div class="header__logo-cell col-xl-3 col-6 header-top-mobile">
            <a href="#" class="header__logo logo ">
                <img src="./img/catalog/logo.svg" alt="" class="logo__img">
               
            </a>
        </div>
        
        <button type="submit" class="search-form__btn header-top-mobile" id="mobileSearchButton">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.0001 20.0001L18.2223 18.2223L17.3334 17.3334L15.5557 15.5557" stroke="#212121" stroke-width="1.5" stroke-linecap="round"/>
            <circle cx="10.6667" cy="10.6667" r="6.66667" stroke="#212121" stroke-width="1.5"/>
            </svg>
        </button>
        <div class="header__favorites-btn header-top-mobile col-xl-1 col-2">
                <a href="#" class=" favorites-btn js--fav-link" >
                    <img class="cart-btn__icon" src="./img/catalog/header/cart.svg" alt="">
                
                    <span class="cart-btn__count ">0</span>
                    <span class="header-icon-title cart-btn__text">Мій кошик</span>
                </a>
            </div>
        <div class="header__item col-2">
            <div class="hamburger hamburger--spring">
                <div class="hamburger-box">
                    <div class="hamburger-inner "></div>
                </div>
            </div>
           
        </div>
        
        <div class="mobile-menu__modal">
            
                <div class="header__navigation col-xl-6">
                    <nav class=" navigation">
                        <ul class="navigation__ul">
                            <li class="navigation__li">
                                <a href="#" class="navigation__link ">Про нас</a>
                            </li>
                            <li class="navigation__li">
                                <a href="#" class="navigation__link ">Як замовити</a>
                            </li>
                            <li class="navigation__li">
                                <a href="#" class="navigation__link ">Доставка і оплата</a>
                            </li>
                            <li class="navigation__li">
                                <a href="#" class="navigation__link ">Гарантія</a>
                            </li>
                            <li class="navigation__li">
                                <a href="#" class="navigation__link ">Контакти</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__lang col-xl-3">
                    <div class="header__lang-switcher lang-switcher">
                        <a href="#" class="lang-switcher__link active js-lang-switcher">Ua</a>
                        <a href="#" class="lang-switcher__link  js-lang-switcher">Ru</a>
                    </div>
                </div>
            
            
                <div class="header__favorites-btn col-xl-1">
                    <a href="#" class=" favorites-btn js--fav-link" >
                    <img class="favorites-btn__icon" src="./img/catalog/header/favorite.svg" alt="">
                        <span class="favorites-btn__count ">0</span>
                        <span class="header-icon-title favorites-btn__text">Вибране</span>
                    </a>
                </div>
                <div class="header__favorites-btn cart-mobile col-xl-1 col-2" >
                    <a href="#" class=" favorites-btn js--fav-link" >
                        <img class="cart-btn__icon" src="./img/catalog/header/cart.svg" alt="">
                    
                        <span class="cart-btn__count ">0</span>
                        <span class="header-icon-title cart-btn__text">Мій кошик</span>
                    </a>
                </div>
         
                <div class="header__logo-cell col-xl-3 col-3">
                    <a href="#" class="header__logo logo">
                        <img src="./img/catalog/logo.svg" alt="" class="logo__img">
                    
                    </a>
                </div>
                <div class="header__phones col-xl-3">
                    <div class="header__target-phone target-phones "  data-toggle="collapse" data-target="#phone-number__list" aria-expanded="false" aria-controls="phone-number__list">
                        <div class="target-phones__phone phone-item">
                            <span>
                                +38 086 <b> 787 00 12</b> 
                            </span>
                        
                            
                            <img src="./img/catalog/header/circle=viber.svg" alt="">
                                
                            <div class="target-phones__btn">
                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                            </svg>
                            </div> 
                        </div>
                    </div>

                </div>
            
                <div class="collapse target-phones__phone-box" id="phone-number__list">
                    <div class="phone-number__list">
                        <h6 class="phone-item menu-modal-text">Телефони для зв’язку:</h6>
                        <h6 class="search-modal-text">Не нашли что искали? <br> Тогда позвоните нам по телефону</h6>
                        <div class=" phone-item">
                            <a href="#" class="phone-item__number ">+38 086 <b>787 00 12</b> </a>
                        
                                <img src="./img/catalog/header/circle=viber.svg" alt="">
                    
                        </div>
                        <div class=" phone-item">
                            <a href="#" class="phone-item__number ">+38 086 <b>787 00 12</b></a>
                        
                                <img src="./img/catalog/header/circle=whatsapp.svg" alt="">
                        
                            
                        </div>
                        <div class=" phone-item">
                            <a href="#" class="phone-item__number ">+38 086 <b>787 00 12</b> </a>
                        
                                <img src="./img/catalog/header/circle=telegram.svg" alt="">
                        
                        </div>
                        <h6 class="phone-item" >Графік роботи</h6>   
                        <span class="phone-item">Пн-Пт: <b>9:00–18:30</b> </span>
                        <span class="phone-item"> Сб: <b>9:00–16:00</b> </span>
                        <span class="phone-item">Нд — <b>вихідний</b></span>
                    
                        
                        
                    </div>
                
                </div>
                <div class="header__form col-xl-5">
                    <form action="" class="header__search-form search-form ">
                        <input type="text" autocomplete="off" name="search" class="search-form__input " placeholder="Пошук товарів" value="">
                        <button type="submit" class="search-form__btn">
                        <img src="./img/catalog/header/input-search.svg" alt="">
                        </button>
                    </form>
                </div>
                <div class="social-mobile">
                    <div class="social__container">
                        <a href="#"> <img src="./img/catalog/footer/Facebook.svg" alt=""></a>
                        <a href="#"><img src="./img/catalog/footer/Instagram.svg" alt=""></a>
                        <a href="#"><img src="./img/catalog/footer/Telegram.svg" alt=""></a>
                        <a href="#"><img src="./img/catalog/footer/Youtube.svg" alt=""></a>                    
                    </div>
                </div>
       
         
            
           
            
           
        </div>
      
      
       
      
    </div>
    </div>
 </header>
<main >
       
        <div class="catalog__breadcrumbs breadcrumbs">
            <div class="breadcrumbs__container container">
                <nav class="breadcrumbs__nav">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item">
                            <a href="#" class="breadcrumbs__link">Головна
                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                    </svg>
                            </a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="#" class="breadcrumbs__link">Каталог товарів
                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                    </svg>
                            </a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="#" class="breadcrumbs__link">Телефони та аксесуари
                              
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="container main__container">
            <div class="shading"></div>
            <div class="col-xl-3 col-md-12  col-lg-3 modal-container">
                <button class="form-modal__btn col-6"   data-toggle="collapse" data-target="#categories-modal" aria-expanded="false" aria-controls="categories-modal">
                          
                <img src="./img/catalog/catalog/categories-icon.svg" alt="">
                          <span>
                          Каталог товарів
                              
                          </span>  
                            
                </button>
                <div class="categories-modal__container" id="categories-modal">
                    <div class="filters-modal-header">
                        <div>
                       <img src="./img/catalog/catalog/categories-icon.svg" alt="">
                            <span>
                            Каталог товарів                 
                            </span> 
                        </div>
                        <div>
                            <div class="form-modal_close"  data-toggle="collapse" data-target="#categories-modal" aria-expanded="false" aria-controls="categories-modal">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5" stroke="#07090C"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="categories-modal__title">
                        <img src="./img/catalog/catalog/phone-icon.svg" alt="">
                        Телефони та аксесуари
                    </div>
                    <div>
                        <ul class="categories__ul">
                            <li><a href="#">GSM аксесуари</a> </li>
                            <li><a href="#">Карти пам'яті</a> </li>
                            <li><a href="#">Павербанки</a> </li>
                            <li><a href="#">Радіозв'язок</a> </li>
                            <li><a href="#">Смартфони та мобільні телефони</a> </li>
                            <li><a href="#">Розумні годинники та аксесуари</a> </li>
                            <li><a href="#">Стаціонарне обладнання</a> </li>
                        </ul>
                    </div>
                </div>
                <button id="form-modal__btn" class="col-6 form-modal__btn "   data-toggle="collapse" data-target="#filters__modal" aria-expanded="false" aria-controls="filters__modal">
                          
                        <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00016 8.26651C6.19346 8.26651 6.35016 8.1098 6.35016 7.91651C6.35016 7.72321 6.19346 7.5665 6.00016 7.5665V8.26651ZM1.3335 7.5665C1.1402 7.5665 0.983496 7.7232 0.983496 7.9165C0.983496 8.1098 1.1402 8.2665 1.3335 8.2665L1.3335 7.5665ZM6.00016 1.73317C5.80686 1.73317 5.65016 1.88987 5.65016 2.08317C5.65016 2.27647 5.80686 2.43317 6.00016 2.43317V1.73317ZM10.6668 2.43317C10.8601 2.43317 11.0168 2.27647 11.0168 2.08317C11.0168 1.88987 10.8601 1.73317 10.6668 1.73317V2.43317ZM6.00016 7.5665L1.3335 7.5665L1.3335 8.2665L6.00016 8.26651V7.5665ZM6.00016 2.43317L10.6668 2.43317V1.73317L6.00016 1.73317V2.43317ZM0.983496 2.08317C0.983496 2.9208 1.66253 3.59984 2.50016 3.59984V2.89984C2.04913 2.89984 1.6835 2.5342 1.6835 2.08317H0.983496ZM2.50016 3.59984C3.33779 3.59984 4.01683 2.9208 4.01683 2.08317H3.31683C3.31683 2.5342 2.9512 2.89984 2.50016 2.89984V3.59984ZM4.01683 2.08317C4.01683 1.24554 3.33779 0.566504 2.50016 0.566504V1.2665C2.9512 1.2665 3.31683 1.63214 3.31683 2.08317H4.01683ZM2.50016 0.566504C1.66253 0.566504 0.983496 1.24554 0.983496 2.08317H1.6835C1.6835 1.63214 2.04913 1.2665 2.50016 1.2665V0.566504ZM11.0168 7.91651C11.0168 7.07887 10.3378 6.39984 9.50016 6.39984L9.50016 7.09984C9.95119 7.09984 10.3168 7.46547 10.3168 7.9165L11.0168 7.91651ZM9.50016 6.39984C8.66253 6.39984 7.9835 7.07887 7.9835 7.9165L8.6835 7.91651C8.6835 7.46547 9.04913 7.09984 9.50016 7.09984L9.50016 6.39984ZM7.9835 7.9165C7.9835 8.75414 8.66253 9.43317 9.50016 9.43317L9.50016 8.73317C9.04913 8.73317 8.6835 8.36754 8.6835 7.91651L7.9835 7.9165ZM9.50016 9.43317C10.3378 9.43317 11.0168 8.75414 11.0168 7.91651L10.3168 7.9165C10.3168 8.36754 9.95119 8.73317 9.50016 8.73317L9.50016 9.43317Z" fill="#2D264B"/>
                        </svg>
                        <span>
                        Фільтр / сорт.
                            
                        </span>  
                          
                </button>
                <form class="filters-modal-mobile" id="filters__modal">
                   
                    <div class="filters-modal-header">
                        <div>
                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.00016 8.26651C6.19346 8.26651 6.35016 8.1098 6.35016 7.91651C6.35016 7.72321 6.19346 7.5665 6.00016 7.5665V8.26651ZM1.3335 7.5665C1.1402 7.5665 0.983496 7.7232 0.983496 7.9165C0.983496 8.1098 1.1402 8.2665 1.3335 8.2665L1.3335 7.5665ZM6.00016 1.73317C5.80686 1.73317 5.65016 1.88987 5.65016 2.08317C5.65016 2.27647 5.80686 2.43317 6.00016 2.43317V1.73317ZM10.6668 2.43317C10.8601 2.43317 11.0168 2.27647 11.0168 2.08317C11.0168 1.88987 10.8601 1.73317 10.6668 1.73317V2.43317ZM6.00016 7.5665L1.3335 7.5665L1.3335 8.2665L6.00016 8.26651V7.5665ZM6.00016 2.43317L10.6668 2.43317V1.73317L6.00016 1.73317V2.43317ZM0.983496 2.08317C0.983496 2.9208 1.66253 3.59984 2.50016 3.59984V2.89984C2.04913 2.89984 1.6835 2.5342 1.6835 2.08317H0.983496ZM2.50016 3.59984C3.33779 3.59984 4.01683 2.9208 4.01683 2.08317H3.31683C3.31683 2.5342 2.9512 2.89984 2.50016 2.89984V3.59984ZM4.01683 2.08317C4.01683 1.24554 3.33779 0.566504 2.50016 0.566504V1.2665C2.9512 1.2665 3.31683 1.63214 3.31683 2.08317H4.01683ZM2.50016 0.566504C1.66253 0.566504 0.983496 1.24554 0.983496 2.08317H1.6835C1.6835 1.63214 2.04913 1.2665 2.50016 1.2665V0.566504ZM11.0168 7.91651C11.0168 7.07887 10.3378 6.39984 9.50016 6.39984L9.50016 7.09984C9.95119 7.09984 10.3168 7.46547 10.3168 7.9165L11.0168 7.91651ZM9.50016 6.39984C8.66253 6.39984 7.9835 7.07887 7.9835 7.9165L8.6835 7.91651C8.6835 7.46547 9.04913 7.09984 9.50016 7.09984L9.50016 6.39984ZM7.9835 7.9165C7.9835 8.75414 8.66253 9.43317 9.50016 9.43317L9.50016 8.73317C9.04913 8.73317 8.6835 8.36754 8.6835 7.91651L7.9835 7.9165ZM9.50016 9.43317C10.3378 9.43317 11.0168 8.75414 11.0168 7.91651L10.3168 7.9165C10.3168 8.36754 9.95119 8.73317 9.50016 8.73317L9.50016 9.43317Z" fill="#2D264B"/>
                            </svg>
                            <span>
                                Фільтр / сортування                           
                            </span> 
                        </div>
                        <div>
                            <div class="form-modal_close" id="form-modal_close" type="close"  data-toggle="collapse" data-target="#filters__modal" aria-expanded="false" aria-controls="filters__modal">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.5L13.5 13.5M1.5 13.5L13.5 1.5" stroke="#07090C"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="cost-filter-modal__container">
                        <div class="price-input__title"  data-toggle="collapse" data-target="#cost-filter__modal" aria-expanded="true" aria-controls="cost-filter__modal">
                            
                                Ціна
                            
                            <div>
                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                        </svg>
                            </div>
                        </div>
                        <div class=" collapse show" id="cost-filter__modal">
                            <div class="cost-filter__container">
                                <div class="price-input">
                                    <div class="field">
                                
                                    <input type="number" class="input-min" autocomplete="off" name="min-price" value="1800"  id="input-min">
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                
                                    <input type="number" class="input-max" autocomplete="off" name="max-price" value="5000" id="input-max">
                                    </div>
                                    <button class="price-input-sumbit__button">OK</button>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input id="range-min"id="input-min" type="range" class="range-min" min="0" max="7000" value="1800" step="100">
                                    <input id="range-max"id="input-max" type="range" class="range-max" min="0" max="7000" value="5000" step="100">
                                </div>
                            </div>
                        </div>
                    </div>

                
        
                    <div class="ram-filter__title"  data-toggle="collapse" data-target="#ram-filter__modal" aria-expanded="true" aria-controls="ram-filter__modal">
                       
                            Оперативна память
                      
                        <div>
                           <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                    </svg>
                        </div>
                    </div>
                    <div class=" collapse show" id="ram-filter__modal">
                        <div class="ram-filter__container">
                            <label class="checkbox__container"> 4.1" - 4.5"
                                <input type="checkbox" checked="checked" value="4.1-4.5"name="checkboxGroup1"id="checkboxRam1">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox__container">4.6" - 5" 
                                <input type="checkbox" value="4.6-5"name="checkboxGroup1"id="checkboxRam2">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox__container">5.1" - 5.5"
                                <input type="checkbox" value="5.1-5.5"name="checkboxGroup1"id="checkboxRam3">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox__container">5.55" - 6"
                                <input type="checkbox" value="5.55-6"name="checkboxGroup1"id="checkboxRam4">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="checkbox__container">6" - 6.49"
                                <input type="checkbox" value="6-6.49"name="checkboxGroup1"id="checkboxRam5">
                                <span class="checkmark"></span>
                            </label> 
                            <label class="checkbox__container">6.5" і більше
                                <input type="checkbox" value="6.5+"name="checkboxGroup1"id="checkboxRam6">
                                <span class="checkmark"></span>
                            </label> 
                        </div>
                       
                    </div>
     
             
                    <div class="ram-filter__title"  data-toggle="collapse" data-target="#offer-filter__modal" aria-expanded="true" aria-controls="offer-filter__modal">
                        
                        Тип пропозиції
                        
                        <div>
                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                    </svg>
                        </div>
                    </div>
                    <div class=" collapse show" id="offer-filter__modal">
                        <div class="ram-filter__container">
                            <label class="checkbox__container" >  Kупити зараз
                                <input type="checkbox" checked="checked"value="buy-now"name="checkboxGroup2"id="checkboxType1">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox__container" >Aукціони
                                <input type="checkbox"value="auctions"name="checkboxGroup2"id="checkboxType2">
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox__container" >Oголошення
                                <input type="checkbox"value="ads"name="checkboxGroup2"id="checkboxType3">
                                <span class="checkmark"></span>
                            </label>

                          
                        </div>
                       
                    </div>
                    <div class="filter-buttons__container">
                        <button  class="filter__button " id="clearButton" data-toggle="collapse" data-target="#filters__modal" aria-expanded="false" aria-controls="filters__modal" data-href="#">
                        Скинути фільтр
                        </button>
                        <button type="submit"  id="form-modal_close" class="filter__button">
                        Застосувати фільтр
                        </button>
                    </div>
                </form>
                
            </div>
            <div class="col-xl-9 col-lg-9 container__padding">
                <div class="category__container">
                    <div class="category__title col-xl-4 col-lg-4 col-12">
                      <h2>
                      Телефони та аксесуари
                      </h2>
                        
                       
                    
                    </div>
                    <div class="col-4 line"></div>
                    <div class="dropdown col-4">
                        <button class="dropdown-toggle rating__dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="rating-dropdown__text">
                                <span id="selected-text">
                                    По рейтингу
                                </span>
                                
                                <div  class="rating-dropdown__icon">
                                    <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                    </svg>
                                </div>
                            </div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-item" data-sort="low-to-high"> Від дешевих до дорогих</li>
                            <li class="dropdown-item" data-sort="high-to-low">Від дорогих до дешевих</li>
                            <li class="dropdown-item" data-sort="new-first">Спочатку нові</li>
                            <li class="dropdown-item" data-sort="used-first">Спочатку б/у</li>
                            <li class="dropdown-item" data-sort="by-rate">По рейтингу</li>
                            <li class="dropdown-item" data-sort="popular-only">Популярні</li>
                           
                        
                        </ul>
                    </div>
                </div>
                <div class="products__container">
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388.png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                Мобильный телефон Samsung Galaxy M12 4/64GB
                                </span>
                            
                            </a>                           
                        </div>
                        <div>
                            <div class="product__code">
                            <span>
                                    Код товара: <b> 5457578144</b>
                            </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <span>
                                <b>4 299 </b> грн.
                                </span>
                             
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(1).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                Мобильный телефон Huawei P Smart 2021 NFC 128GB
                                </span>
                           
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                <span>
                                Код товара: <b> 5457578144</b>
                                </span>
                         
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <span>
                                <b>8 299 </b> грн.
                                </span>
                               
                            </div>
                                
                                <button class="to-cart__btn">
                                    <img src="./img/catalog/header/cart copy.svg" alt="">
                                   
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(2).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                Мобильный телефон ZTE Blade V30 Vita 4/128GB
                                </span>
                         
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                <span>
                                Код товара: <b> 5457578144</b>
                                </span>
                          
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <span>
                                <b>3 899 </b> грн.
                                </span>
                               
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(3).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                    Телефон Samsung UE55AU8000UXUA
                                </span>
                            
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                           
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                              <span><b>3 399 </b> грн.</span>
                                    
                          
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(4).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>

                       Часы Samsung Galaxy A32 
                            
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                            <span>
                                  Код товара: <b> 5457578144</b>
                            </span>
                                  
                                
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <span>
                                    <b>2 999 </b> грн.
                                </span>
                                    
                             
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388.png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span> Мобильный телефон Samsung Galaxy M12 4/64GB</span>
                           
                            </a>                           
                        </div>
                        <div>
                            <div class="product__code">
                                <span>Код товара: <b> 5457578144</b></span>
                         
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                               <span>
                                 <b>4 299 </b> грн.
                               </span>
                                   
                            
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(1).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                     Мобильный телефон Huawei P Smart 2021 NFC 128GB
                                </span>
                           
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                <span>Код товара: <b> 5457578144</b></span>
                            
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                
                                    <span>
                                        <b>8 299 </b> грн.
                                    </span>
                                    
                               
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(2).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>Мобильный телефон ZTE Blade V30 Vita 4/128GB</span>
                            
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                          
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <span>
                                    <b>3 899 </b> грн.
                                </span>
                               
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(3).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                      Телефон Samsung UE55AU8000UXUA
                                </span>
                          
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                             <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                              <span>
                                  <b>3 399 </b> грн.
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(4).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>

                       Часы Samsung Galaxy A32 
                            
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                             <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                 <span>

                      <b>2 999 </b> грн.
                            
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388.png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>
                                  Мобильный телефон Samsung Galaxy M12 4/64GB
                                </span></a>                           
                        </div>
                        <div>
                            <div class="product__code">
                                 <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <p>
                                    <b>4 299 </b> грн.
                                </p>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(1).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>
    Мобильный телефон Huawei P Smart 2021 NFC 128GB
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                 <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                 <span>

                      <b>3 899 </b> грн.
                            
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(2).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>

                            Мобильный телефон ZTE Blade V30 Vita 4/128GB
                            
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                 <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                 <span>

                      <b>3 899 </b> грн.
                            
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(3).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                      Телефон Samsung UE55AU8000UXUA
                                </span>
                          
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                            <span>
                                    Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <span>
                                    <b>3 399 </b> грн.
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(4).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>

                       Часы Samsung Galaxy A32 
                            
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                             <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                 <span>

                      <b>2 999 </b> грн.
                            
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388.png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>
                                  Мобильный телефон Samsung Galaxy M12 4/64GB
                                </span></a>                           
                        </div>
                        <div>
                            <div class="product__code">
                             <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                <p>
                                    <b>4 299 </b> грн.
                                </p>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(1).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>
                                Мобильный телефон Huawei P Smart 2021 NFC 128GB
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                             <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                 <span>

                      <b>3 899 </b> грн.
                            
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(2).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>

                            Мобильный телефон ZTE Blade V30 Vita 4/128GB
                            
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                             <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                 <span>

                      <b>3 899 </b> грн.
                            
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(3).png" alt="">
                            </div>
                            <a href="#" class="product__title">
                                <span>
                                      Телефон Samsung UE55AU8000UXUA
                                </span>
                          
                            </a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                                 <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                                   
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                              <span>
                                  <b>3 399 </b> грн.
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="product__container  col-lg-3 col-sm-4 col-6">
                        <div>
                            <div class="product__img">
                            <img src="./img/catalog/products/Rectangle 1388(4).png" alt="">
                            </div>
                            <a href="#" class="product__title"> <span>

                       Часы Samsung Galaxy A32 
                            
                                </span></a>
                            
                        </div>
                        <div>
                            <div class="product__code">
                             <span>
                                     Код товара: <b> 5457578144</b>
                                </span>
                            </div>
                            <div class="product__cost">
                            <div class="product-cost__text">
                                <s>
                                4 800 грн.
                                </s>
                                 <span>

                      <b>2 999 </b> грн.
                            
                                </span>
                            </div>
                                
                                <button class="to-cart__btn">
                                <img src="./img/catalog/header/cart copy.svg" alt="">
                                </button>
                            </div>
                        </div>                      
                    </div>
                    <div class="pagination__container col-12">
                        <div class="catalog-download-btn__container col-xl-4">
                            <button class="catalog-download__btn ">
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.25 12C0.25 12.4142 0.585786 12.75 1 12.75C1.41421 12.75 1.75 12.4142 1.75 12H0.25ZM21.75 12C21.75 11.5858 21.4142 11.25 21 11.25C20.5858 11.25 20.25 11.5858 20.25 12H21.75ZM3.97015 18.0122C3.70077 17.6976 3.22731 17.6609 2.91266 17.9303C2.598 18.1996 2.5613 18.6731 2.83068 18.9878L3.97015 18.0122ZM18.0299 5.98776C18.2992 6.30241 18.7727 6.33911 19.0873 6.06973C19.402 5.80035 19.4387 5.3269 19.1693 5.01224L18.0299 5.98776ZM20.406 0.996654C20.4042 0.582444 20.0669 0.248159 19.6527 0.250007C19.2385 0.251856 18.9042 0.589137 18.906 1.00335L20.406 0.996654ZM19.6649 2.98571L20.4149 2.98237V2.98237L19.6649 2.98571ZM15.9849 6.66571L15.9815 7.41571L15.9849 6.66571ZM14.0025 5.90686C13.5883 5.90501 13.251 6.2393 13.2492 6.65351C13.2473 7.06772 13.5816 7.405 13.9958 7.40685L14.0025 5.90686ZM19.2563 5.90267L18.6632 5.44365L19.2563 5.90267ZM18.9018 6.25717L19.3608 6.85029L18.9018 6.25717ZM1.51185 22.9229C1.5137 23.3371 1.85098 23.6714 2.26519 23.6696C2.6794 23.6677 3.01368 23.3305 3.01184 22.9162L1.51185 22.9229ZM2.25298 20.9339L1.50299 20.9372L2.25298 20.9339ZM5.93298 17.2539L5.93633 16.5039H5.93298V17.2539ZM7.91535 18.0127C8.32956 18.0146 8.66684 17.6803 8.66869 17.2661C8.67054 16.8519 8.33625 16.5146 7.92204 16.5127L7.91535 18.0127ZM2.66153 18.0169L3.25466 18.4759H3.25466L2.66153 18.0169ZM5.93296 17.2539L5.92962 18.0039H5.93296V17.2539ZM3.01603 17.6624L2.55701 17.0693H2.55701L3.01603 17.6624ZM11 1.25C5.06294 1.25 0.25 6.06294 0.25 12H1.75C1.75 6.89137 5.89137 2.75 11 2.75V1.25ZM11 22.75C16.9371 22.75 21.75 17.9371 21.75 12H20.25C20.25 17.1086 16.1086 21.25 11 21.25V22.75ZM2.83068 18.9878C4.80117 21.2894 7.73042 22.75 11 22.75V21.25C8.18698 21.25 5.66782 19.9952 3.97015 18.0122L2.83068 18.9878ZM19.1693 5.01224C17.1988 2.71058 14.2696 1.25 11 1.25V2.75C13.813 2.75 16.3322 4.00476 18.0299 5.98776L19.1693 5.01224ZM18.906 1.00335L18.9149 2.98906L20.4149 2.98237L20.406 0.996654L18.906 1.00335ZM15.9882 5.91572L14.0025 5.90686L13.9958 7.40685L15.9815 7.41571L15.9882 5.91572ZM18.9149 2.98906C18.9185 3.79848 18.9198 4.34217 18.8749 4.75351C18.8316 5.14976 18.7534 5.32713 18.6632 5.44365L19.8494 6.36169C20.1784 5.93661 20.308 5.44728 20.366 4.91635C20.4223 4.4005 20.4183 3.75651 20.4149 2.98237L18.9149 2.98906ZM15.9815 7.41571C16.7557 7.41916 17.3997 7.42317 17.9155 7.36684C18.4464 7.30886 18.9358 7.17926 19.3608 6.85029L18.4428 5.66404C18.3263 5.75421 18.1489 5.83243 17.7527 5.8757C17.3413 5.92062 16.7976 5.91933 15.9882 5.91572L15.9815 7.41571ZM18.6632 5.44365C18.5993 5.52615 18.5253 5.60019 18.4428 5.66404L19.3608 6.85029C19.5437 6.70875 19.7079 6.54459 19.8494 6.36169L18.6632 5.44365ZM3.01184 22.9162L3.00298 20.9305L1.50299 20.9372L1.51185 22.9229L3.01184 22.9162ZM5.92964 18.0039L7.91535 18.0127L7.92204 16.5127L5.93633 16.5039L5.92964 18.0039ZM3.00298 20.9305C2.99937 20.1211 2.99808 19.5774 3.043 19.1661C3.08627 18.7698 3.16448 18.5925 3.25466 18.4759L2.0684 17.5579C1.73944 17.983 1.60984 18.4723 1.55186 19.0032C1.49553 19.5191 1.49954 20.1631 1.50299 20.9372L3.00298 20.9305ZM5.93298 16.5039H5.93296V18.0039H5.93298V16.5039ZM5.93631 16.5039C5.16217 16.5004 4.51819 16.4964 4.00235 16.5528C3.47142 16.6107 2.98209 16.7403 2.55701 17.0693L3.47505 18.2555C3.59157 18.1654 3.76893 18.0872 4.16519 18.0439C4.57652 17.999 5.12021 18.0003 5.92962 18.0039L5.93631 16.5039ZM3.25466 18.4759C3.31851 18.3934 3.39255 18.3194 3.47505 18.2555L2.55701 17.0693C2.37411 17.2108 2.20995 17.375 2.0684 17.5579L3.25466 18.4759Z" fill="#E96315"/>
                            </svg>
                                Показати ще товари
                            </button>
                        </div>
                        <div class="catalog__pagination col-xl-4">
                                <nav >
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                            </svg>
  
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                            <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.57139 1.71442L5.25711 4.47871C5.61266 4.74538 6.10155 4.74538 6.45711 4.47871L10.1428 1.71442" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="0.2 0.2"/>
                                            </svg>
  
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                        </div>
                    

                    </div>
                    
                </div>
                
            </div>
           
        </div>
        <div class="container">
            <div class="text-container ">
                <h2>Телефони та аксесуари в інтepнeт-мaгaзині MaxStar</h2>
                <div class="text expand-button">
                    <p>
                    Побутова техніка є тим видом товару, до вибору якого слід поставитися з усією відповідальністю, саме тому потрібно обрати спеціалізовану точку продажу такої електроніки, якою є Інтернет-магазин у м. Луцьк «MaxStar». <br><br>
                Сьогодні наш Інтернет-магазин побутової техніки є одним з найбільших у місті Луцьк, який постачає свої товари у інші міста та регіони України, наприклад, Чернівці, Івано-Франківськ, Луцьк та ін. Наша команда постійно аналізує динамічний український ринок, тому, обираючи категорії товарів для нашого онлайн-магазину, ми опираємося на результати оцінки попиту. <br><br>
                Завдяки цьому до каталогу пропозицій нашого Інтернет-магазину побутової техніки постійно додаються нові позиції, а також проводяться акції та знижуються ціни на найбільш популярну електроніку. Крім цього, ми активно співпрацюємо з виробниками та постачальниками з усього світу для того, щоб забезпечити своїм клієнтам насправді широкий вибір найменувань товарів. <br><br>
                Серед безперечних переваг Інтернет-магазину побутової техніки та електроніки у Львові «MaxStar» слід особливо відзначити наступні:
                <br><br>
                <span class="expand-button">
                Дизайн сайту розроблений таким чином, щоб кожен відвідувач зміг інтуїтивно зорієнтуватися та легко знайти саме ту побутову техніку, яка його цікавить (зручний каталог та функція швидкого пошуку);<br><br>
                Наш Луцькський Інтернет-магазин побутової техніки пропонує вам позиції, які коштують дешевше, ніж в офф-лайнових точках продажу у м. Луцьк;<br><br>
                У нас ви можете недорого купити побутову техніку з доставкою кур’єрською службою у будь-який населений пункт України, наприклад, Ужгород чи Тернопіль, або забрати замовлену позицію у найближчому до вас магазині нашої мережі у місті Луцьк;
                Дизайн сайту розроблений таким чином, щоб кожен відвідувач зміг інтуїтивно зорієнтуватися та легко знайти саме ту побутову техніку, яка його цікавить (зручний каталог та функція швидкого пошуку);<br><br>
                Наш Луцькський Інтернет-магазин побутової техніки пропонує вам позиції, які коштують дешевше, ніж в офф-лайнових точках продажу у м. Луцьк;<br><br>
                У нас ви можете недорого купити побутову техніку з доставкою кур’єрською службою у будь-який населений пункт України, наприклад, Ужгород чи Тернопіль, або забрати замовлену позицію у найближчому до вас магазині нашої мережі у місті Луцьк;

                </span>

                    </p>
                    
                </div>
            
            </div>
            <img src="./img/catalog/header/arrow.svg" alt="" class="text-container-arrow">
        </div>
     



</main>

<footer class="footer__container">
    <div class="container">
        <div class="col-xl-3 col-lg-3  col-sm-3 col-12 footer-logo">
            <img  src="./img/catalog/footer-logo.svg" alt="">
            <div class="social__container">
                <a href="#"> <img src="./img/catalog/footer/Facebook.svg" alt=""></a>
                <a href="#"><img src="./img/catalog/footer/Instagram.svg" alt=""></a>
                <a href="#"><img src="./img/catalog/footer/Telegram.svg" alt=""></a>
                <a href="#"><img src="./img/catalog/footer/Youtube.svg" alt=""></a>
                
            </div>
        </div>
        <div class="col-xl-3 col-lg-3  col-sm-3 col-12">
               <h6>Наші контакти</h6>
               <div class="footer-number__list">
                    <div class=" phone-footer-item">
                        <span href="#" class="phone-footer-item__number">+38 086 787 00 12 </span>
                        <div class="target-phones__btn">
                            <img src="./img/catalog/header/circle=viber.svg" alt="">
                        </div>  
                    </div>
                    <div class=" phone-footer-item">
                        <span href="#" class="phone-footer-item__number ">+38 086 787 00 12 </span>
                        <div class="target-phones__btn">
                            <img src="./img/catalog/header/circle=whatsapp.svg" alt="">
                        </div>  
                        
                    </div>
                    <div class=" phone-footer-item">
                        <span href="#" class="phone-footer-item__number ">+38 086 787 00 12</span>
                        <div class="target-phones__btn">
                            <img src="./img/catalog/header/circle=telegram.svg" alt="">
                        </div>  
                    </div>
                    
                </div>
        </div>
     
        <div class="col-xl-3 col-lg-3  col-sm-3 col-12">
            <h6>Графік роботи</h6>
               <div class="footer-number__list">
                    <div class=" phone-footer-item">
                        <span  class="phone-footer-item__number"> Пн-Пт: <b>9:00–18:30</b> </span>
                       
                    </div>
                    <div class=" phone-footer-item">
                        <span  class="phone-footer-item__number ">Сб:<b>9:00–16:00</b> </span>
                        
                        
                    </div>
                    <div class=" phone-footer-item">
                        <span  class="phone-footer-item__number ">Нд —<b>вихідний</b></span>
                       
                    </div>
                    
                </div>

        </div>
        <div class="col-xl-3 col-lg-3  col-sm-3 col-12 ">
                <h6>Адреса</h6>
               <div class="footer-number__list">
                    <div class=" phone-footer-item">
                        <span  class="phone-footer-item__number"> Головний офіс: <br><b>м.Луцьк, вул. Лесі Українки, 40</b> </span>
                       
                    </div>
                  
                    
                </div>
            </div>
        </div>
        <div class="social-mobile">
            <div class="social__container">
                    <a href="#"> <img src="./img/catalog/footer/Facebook.svg" alt=""></a>
                    <a href="#"><img src="./img/catalog/footer/Instagram.svg" alt=""></a>
                    <a href="#"><img src="./img/catalog/footer/Telegram.svg" alt=""></a>
                    <a href="#"><img src="./img/catalog/footer/Youtube.svg" alt=""></a>
                    
                </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="col-xl-2 col-lg-2 col-sm-4  col-12 footer-item__bottom">
                    <span>© «MaxStar»  2023</span>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-4  col-12 footer-item__bottom">
                    <span><img src="./img/catalog/footer/webmaestro.svg" alt=""></span>
                </div>
            </div>
        </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@vite(['resources/js/catalog/index.js'])
</body>
</html>